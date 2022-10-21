<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\Contact;

/** @var yii\web\View $this */
/** @var common\models\Contact $model */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Заявки', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="contact-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы действительно хотите удалить данную запись?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'name',
            'email:email',
            'phone',
            'created',
            [
            'attribute' => 'active',
            'value' => function ($model) {
                if ($model->active) {
                    $translate = Contact::getStatusOptions();
                    return $translate[$model->active];
                }
            }
            ],
        ],
    ]) ?>

</div>
