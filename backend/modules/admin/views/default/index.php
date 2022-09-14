<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use mirocow\yandexmaps\Map;
use mirocow\yandexmaps\Canvas;
use \msvdev\widgets\mappicker\MapInput;
use \msvdev\widgets\mappicker\MapYandexAset;
?>

<div class="admin-default-index">
<div id="map" style="width: 500px; height: 370px;"></div>
<input id="coordinates">

<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
</div>
