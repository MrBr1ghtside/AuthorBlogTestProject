<?php

namespace common\models;

use Yii;
use Yii\db\ActiveRecord;
use yii\db\Expression;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\SluggableBehavior;

/**
 * This is the model class for table "posts".
 *
 * @property int $id
 * @property string $title
 * @property int|null $created_at
 * @property string|null $text
 */
class Posts extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'created_at',
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at'],
                ],
                 'value' => new Expression('NOW()'),
            ],
            [
                    'class' => SluggableBehavior::className(),
                    'attribute' => 'title',
                    'slugAttribute' => 'slug',
            ],
            'seo' => [
                'class' => 'dvizh\seo\behaviors\SeoFields',
            ],
        ];
    }

    public static function tableName()
    {
        return 'posts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['created_at'], 'safe'],
            [['title'], 'string', 'max' => 50],
            [['text', 'slug'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'created_at' => 'Дата создания',
            'text' => 'Текст',
            'slug' => 'slug url',
        ];
    }

    public static function getAll()
    {
        $data = self::find()->all();
        return $data;
    }
}
