<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;


class Feedbacks extends ActiveRecord
{   

    const STATUS_READER = 0; //Константа статуса для читателя
    const STATUS_WRITER = 10;  //Константа статуса для писателя

    public static function tableName()
    {
    return 'feedbacks';
    }  
    
    public function rules()
    {
        return [
            ['status', 'default', 'value' => self::STATUS_READER],
            ['status', 'in', 'range' => [self::STATUS_WRITER, self::STATUS_READER]],
        ];
    }

    public static function getAll()
    {
        $data = self::find()->all();
        return $data;
    }

    public function getBooks()
    {
        return $this->hasOne(Books::className(), ['id' => 'books_id']);
    }

    public function getBooksName() {
        return $this->books->book_name;
    }

}