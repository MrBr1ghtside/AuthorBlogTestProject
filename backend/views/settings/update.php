<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Settings $model */

$this->title = 'Изменить настройки сайта';
$this->params['breadcrumbs'][] = ['label' => 'Настройка', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Изменение настроек';
?>
<div class="settings-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
