<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;

use common\models\Books;

class BooksController extends Controller
{

    public function actionBooks()
    {
        $array = Books::getAll();
        return $this->render('index',['varInView' => $array]);
    }

    public function actionView($slug)
    {
        $books = Books::find()->where(['slug' => $slug])->one();

      if ($books) {
        return $this->render('view', ['model' => $books]);
      }
      throw new \yii\web\NotFoundHttpException("Книга не найдена");
    }

}