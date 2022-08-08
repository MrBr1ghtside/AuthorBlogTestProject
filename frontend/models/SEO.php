<?php
namespace frontend\models;

use Yii;
use yii\base\Model;

function behaviors()
    {
        return [
            'seo' => [
                'class' => 'dvizh\seo\behaviors\SeoFields',
            ],
        ];
    }