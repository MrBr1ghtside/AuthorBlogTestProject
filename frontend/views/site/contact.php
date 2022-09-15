<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var \frontend\models\ContactForm $model */

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;
use yii\captcha\Captcha;
use yii\grid\GridView;
use mirocow\yandexmaps\Map;
use mirocow\yandexmaps\Canvas;

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
                <?php foreach ($varInView as $item): ?>
                    <div style="universal-h2-bckg">
                    <a href="https://yandex.ru/maps/53/kurgan/house/ulitsa_koli_myagotina_153/YkwYdQNhS0AEQFtvfXh1dXxlbA==/?ll=<?php echo $item->cord_y ?>%2C<?php echo $item->cord_x ?>&utm_medium=mapframe&utm_source=maps&z=18.8">
                    </a>
                    <iframe src="https://yandex.ru/map-widget/v1/-/CCUVJKxYwA" width="1200" height="400" style="position:relative;">
                    </iframe>
                    </div>
                <?php endforeach ?>
        </div>
</div>
