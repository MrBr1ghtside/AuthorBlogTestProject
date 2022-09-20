<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var \frontend\models\ContactForm $model */

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;
use yii\captcha\Captcha;
use yii\grid\GridView;

$this->title = 'Форма обратной связи';
?>

<div class="site-container">
    <h2 class="universal-h2">&#160;</h2>
        <div class="row">
            <div class="col-md-8 offset-md-2">

                <h1><?= Html::encode($this->title) ?></h1>
                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'email') ?>

                    <?= $form->field($model, 'subject') ?>

                    <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                    ]) ?>
                    <div class="form-group">
                        <?= Html::submitButton('Подтвердить', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>
                <?php ActiveForm::end(); ?>
            </div>
            <div id="map" style="width: 500px; height: 370px;" class="col-md-8 offset-md-2"></div>
            <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU"></script>
        </div>
</div>

<?php foreach ($varInView as $item): ?>

<script>
    function init () {

    start = '<?php echo $item->cord_x ?>,<?php echo $item->cord_y ?>'; // start coordinates
    zoom = 16;                      // start zoom
    id = 'map';

    start = start.split(',');       // split coordinates to array

    lat = start[0];
    long = start[1];
    coords = [lat, long];
    Map = new ymaps.Map(id, {    // initialize map
        center: coords,
        zoom: zoom,
        controls: ['zoomControl']
    });

    var search = new ymaps.control.SearchControl({
        options: {
            float: 'left',
            floatIndex: 100,
            noPlacemark: true
        }
    });
    Map.controls.add(search);

    /* Addung mark on map*/
    mark = new ymaps.Placemark([lat, long],{}, {preset: "islands#redIcon", draggable: true});
    Map.geoObjects.add(mark);

    }

    ymaps.ready(init);
</script>

<?php endforeach ?>