<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use kartik\date\DatePicker;
use yii\data\ActiveDataProvider;

$this->title = 'Посты';
?>

<div class="posts-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить пост', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php //echo $this->render('_search', ['model' => $searchModel]); ?>

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
                    'name' => 'created_at',
                    'model' => $searchModel,
                    'attribute' => 'created_at',
                    'type' => DatePicker::TYPE_BUTTON,
                    'pluginOptions' => [
                        'autoclose'=> true,
                        'convertFormat' => true,
                        'format' => 'd.m.yyyy',
                        'todayHighlight' => true,
                    ],
                ]),
            ],
        ],
    ]); ?>


</div>
