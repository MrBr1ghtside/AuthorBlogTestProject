<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use mirocow\yandexmaps\Map;
use mirocow\yandexmaps\Canvas;
use \msvdev\widgets\mappicker\MapInput;
use \msvdev\widgets\mappicker\MapYandexAset;
?>

<div class="admin-default-index">
    <h1><?= $this->context->action->uniqueId ?></h1>
    <p>
        This is the view content for action "<?= $this->context->action->id ?>".
        The action belongs to the controller "<?= get_class($this->context) ?>"
        in the "<?= $this->context->module->id ?>" module.
    </p>

</div>
