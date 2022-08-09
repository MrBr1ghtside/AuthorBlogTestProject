<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

use frontend\models\Feedback;

class FeedbackController extends Controller
{

    public function actionFeedback()
    {
        $rows = Feedback::find()->all();
        return $this->render('feedback', ['rows'  => $rows]);

    }

}