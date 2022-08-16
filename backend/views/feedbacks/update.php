<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Feedbacks */

$this->title = 'Изменить отзыв: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Отзывы', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="feedbacks-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
