<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use kartik\date\DatePicker;
use yii\data\ActiveDataProvider;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PostsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title = 'Посты';
?>

<div class="posts-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить пост', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'text',
            'slug',        
            [
                'attribute' => 'created_at',
                'value' => function($model) {
                    return date('d.m.Y', $model->created_at);
                },
                'filter' => DatePicker::widget([
                    'name' => 'date-picker-employment',
                    'type' => DatePicker::TYPE_INPUT,
                    'pluginOptions' => [
                        'format' => 'dd.mm.yyyy',
                        'autoclose' => true,
                        'todayHighlight' => true,
                    ],
                ]),
            ],
        ],
    ]); ?>


</div>
