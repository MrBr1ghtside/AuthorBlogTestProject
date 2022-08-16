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
    }

    public function actionView($id)
    {
        $books = Books::find()->where(['id' => $id])->one();

      if ($books) {
        return $this->render('view', ['model' => $books]);
      }
      throw new \yii\web\NotFoundHttpException("Пост не найден");
    }
}