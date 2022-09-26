<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use common\models\Posts;

class PostsController extends Controller
{

    public function actionPosts()
    {
        //$array = Posts::find()->all();
        $query = Posts::find();
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 4 ]);
        $posts = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        return $this->render('index',['posts' => $posts, 'pages' => $pages]);
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