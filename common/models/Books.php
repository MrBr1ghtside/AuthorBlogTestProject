<?php

namespace common\models;

use Yii;
use Yii\db\ActiveRecord;
use yii\behaviors\SluggableBehavior;


/**
 * This is the model class for table "books".
 *
 * @property int $id
 * @property string $book_name
 * @property float|null $price
 * @property string|null $description
 * @property string $slug
 *
 * @property Feedbacks[] $feedbacks
 */
class Books extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'books';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['book_name', 'slug'], 'required'],
            [['price'], 'number'],
            [['description'], 'string'],
            [['book_name'], 'string', 'max' => 50],
            [['slug'], 'string', 'max' => 255],
        ];
    }

    public function behaviors(){
        return [
            [
                'class' => SluggableBehavior::className(),
                'attribute' => 'book_name',
                'slugAttribute' => 'slug',
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'book_name' => 'Название книги',
            'price' => 'Цена',
            'description' => 'Описание',
            'slug' => 'slug url',
        ];
    }

    public static function getAll()
    {
        $data = self::find()->all();
        return $data;
    }
    /**
     * Gets query for [[Feedbacks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFeedbacks()
    {
        return $this->hasMany(Feedbacks::className(), ['books_id' => 'id']);
    }
}
