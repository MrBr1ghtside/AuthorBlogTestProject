<?php

use common\models\Settings;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\search\SettingsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Settings';
?>
<div class="settings-index">

    <h1>Настройка информации</h1>

    <p>
        <?= Html::a('Изменить информацию', ['update', 'id' => '1'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'site_name',
            'email:email',
            'cord_x',
            'cord_y',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Settings $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
