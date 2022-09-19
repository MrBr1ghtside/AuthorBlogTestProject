<?php

/** @var yii\web\View $this */
/** @var string $name */
/** @var string $message */
/** @var Exception $exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class='site-container'>
    <div class="error-page">
        <img src="./images/book-error.png" alt="error image">
        <p>
        Страница, на которую вы пытались попасть, не существует или была удалена.<br> 
        Пожалуйста, свяжитесь с нами, если вы считаете, что это ошибка сервера. 
        </p>
    </div>
</div>
