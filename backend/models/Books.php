<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "books".
 *
 * @property int $id
 * @property string $book_name
 * @property float|null $price
 * @property string|null $description
 *
 * @property Feedbacks[] $feedbacks
 */
class Books extends \yii\db\ActiveRecord
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
            [['book_name'], 'required'],
            [['price'], 'number'],
            [['description'], 'string'],
            [['book_name'], 'string', 'max' => 50],
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
        ];
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
