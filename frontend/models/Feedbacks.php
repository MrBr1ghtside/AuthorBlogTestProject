<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;


class Feedbacks extends ActiveRecord
{
    public static function tableName()
    {
    return 'feedback';
    }   

    public static function getAll()
    {
        $data = self::find()->all();
        return $data;
    }

}