<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;

use common\models\Feedbacks;

class FeedbacksController extends Controller
{

    public function actionFeedbacks()
    {
        $array = Feedbacks::getAll();
        return $this->render('index',['varInView' => $array]);
    }

}