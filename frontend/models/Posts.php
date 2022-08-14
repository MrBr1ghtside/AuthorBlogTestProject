<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;


class Posts extends ActiveRecord
{
    public static function tableName()
    {
    return 'posts';
    }   

    public static function getAll()
    {
        $data = self::find()->all();
        return $data;
    }

}