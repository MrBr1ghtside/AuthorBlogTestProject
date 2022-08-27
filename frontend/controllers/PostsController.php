<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;

use common\models\Posts;

class PostsController extends Controller
{

    public function actionPosts()
    {
        $array = Posts::getAll();
        return $this->render('index',['varInView' => $array]);
    }

    public function actionView($slug)
    {
        $posts = Posts::find()->where(['slug' => $slug])->one();

      if ($posts) {
        return $this->render('view', ['model' => $posts]);
      }
      throw new \yii\web\NotFoundHttpException("Пост не найден");
    }
}