<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "feedbacks".
 *
 * @property int $id
 * @property string $title
 * @property string|null $text
 * @property int $books_id
 * @property int $status
 *
 * @property Books $books
 */
class Feedbacks extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'feedbacks';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'books_id', 'status'], 'required'],
            [['books_id', 'status'], 'integer'],
            [['title'], 'string', 'max' => 50],
            [['text'], 'string', 'max' => 500],
            [['books_id'], 'exist', 'skipOnError' => true, 'targetClass' => Books::className(), 'targetAttribute' => ['books_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'text' => 'Text',
            'books_id' => 'Books ID',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[Books]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBooks()
    {
        return $this->hasOne(Books::className(), ['id' => 'books_id']);
    }
}
