<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "contact".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property int|null $active
 * @property string|null $created
 */
class Contact extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contact';
    }

    const STATUS_NOT_ACTIVE = 1; //Константа статуса для не проверенной заявки
    const STATUS_ACTIVE = 10;  //Константа статуса для проверенной заявки

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['active', 'default', 'value' => static::STATUS_NOT_ACTIVE],
            [['created'], 'safe'],
            [['name', 'email'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 20],
            ['email', 'email'],
            [['email'], 'trim'],
            ['email', 'unique', 'targetClass' => '\common\models\Contact', 'message' => 'Сообщение с данным электронным адресом уже было отправлено.'],
            ['phone', 'unique', 'targetClass' => '\common\models\Contact', 'message' => 'Сообщение с данным номером телефона уже было отправлено.'],
        ];
    }

    public static function getStatusOptions(){
        return [
            static::STATUS_NOT_ACTIVE => Yii::t('app','Не прочитано'),
            static::STATUS_ACTIVE => Yii::t('app', 'Прочитано'),
        ];
    }
       
    public static function getStatusPrompt(){
        return Yii::t('app', 'Статус');
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'email' => 'Электронный адрес',
            'phone' => 'Номер телефона',
            'active' => 'Статус',
            'created' => 'Дата отправки',
        ];
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'created',
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created'],
                ],
                'value' => new Expression('NOW()'),
            ],
        ];
    }

    public function getId()
    {
        return $this->getPrimaryKey();
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPhone()
    {
        return $this->phone;
    }

}
