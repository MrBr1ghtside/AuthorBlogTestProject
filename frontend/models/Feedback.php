<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;


class Feedback extends ActiveRecord
{
    
    public static function getFeedback()
    {
        return self::FEEDBACK;
    }

}