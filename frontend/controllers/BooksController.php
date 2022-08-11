<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;

use frontend\models\Books;

class BooksController extends Controller
{

    public function actionBooks()
    {
        $array = Books::getAll();
        return $this->render('index',['varInView' => $array]);
        return $this->render('index');
    }

}