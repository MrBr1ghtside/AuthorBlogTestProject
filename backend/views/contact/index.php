<?php

use common\models\Contact;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use kartik\date\DatePicker;
use kartik\select2\Select2;
use yii\data\ActiveDataProvider;


/** @var yii\web\View $this */
/** @var common\models\search\ContactSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Заявки';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contact-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            'email:email',
            'phone',
            [
                'attribute' => 'created',
                'value' => 'created',
                'filter' => DatePicker::widget([
                    'name' => 'created',
                    'model' => $searchModel,
                    'attribute' => 'created',
                    'type' => DatePicker::TYPE_INPUT,
                    'pluginOptions' => [
                        'autoclose'=> true,
                        'format' => 'yyyy-mm-dd',
                        'todayHighlight' => true,
                    ],
                ]),
            ],
            [
                'attribute' => 'active',
                'filter' => Html::activeDropDownList(
                    $searchModel,
                    'active',
                    Contact::getStatusOptions(),
                    ['prompt' => Contact::getStatusPrompt(), 'class' => 'form-control']
                ),
                'format' => 'raw',
                'value' => function ($model) {
                    if ($model->active) {
                        $translate = Contact::getStatusOptions();
                        return $translate[$model->active];
                    }
                }
            ],
            [
                'class' => ActionColumn::className(),
                'template' => '{update} {delete}',
                'urlCreator' => function ($action, Contact $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
