<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;

use frontend\models\Authors;

class AuthorsController extends Controller
{

    public function actionAuthors()
    {
        $array = Authors::getAll();
        return $this->render('index',['varInView' => $array]);
        return $this->render('index');
    }

}