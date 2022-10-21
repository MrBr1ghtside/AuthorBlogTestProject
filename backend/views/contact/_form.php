<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Contact;

/** @var yii\web\View $this */
/** @var common\models\Contact $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="contact-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true, 'style' => 'width: 850px']) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true, 'style' => 'width: 850px']) ?>

    <?= $form->field($model, 'phone')->widget(\yii\widgets\MaskedInput::className(), [
        'mask' => '+7 (999) 999 99 99'])->textInput(['maxlength' => true, 'style' => 'width: 850px']) ?>

    <?= $form->field($model, 'active')->dropDownList(Contact::getStatusOptions(), ['prompt' => Contact::getStatusPrompt(), 'style' => 'width: 850px']) ?>

    <?= $form->field($model, 'created')->textInput(['style' => 'width: 850px', 'disabled' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
