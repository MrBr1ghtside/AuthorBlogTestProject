<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;

use common\models\Authors;

class AuthorsController extends Controller
{

    public function actionAuthors()
    {
        $array = Authors::getAll();
        return $this->render('index',['varInView' => $array]);
    }

}