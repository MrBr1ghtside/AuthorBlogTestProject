<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;


class Books extends ActiveRecord
{
    public static function tableName()
    {
    return 'books';
    }   

    public static function getAll()
    {
        $data = self::find()->all();
        return $data;
    }

}