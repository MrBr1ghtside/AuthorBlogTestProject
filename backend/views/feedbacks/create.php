<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Feedbacks */

$this->title = 'Добавить отзыв';
$this->params['breadcrumbs'][] = ['label' => 'Отзывы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="feedbacks-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
