<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

$this->title = 'Blog';
$this->params['breadcrumbs'][] = $this->title;


?>

<div class="site-container">
			<div class="about-me-slider">
				<div>
					<h2 class="universal-h2 universal-h2-bckg">
						<?= $model->title ?>
					</h2>
					<p><?= $model->text ?></p>
					<img src="./images/quotes.svg" alt="quotes svg">
					<h4>David Dixon</h4>
					<p>Reader</p>
				</div>
			</div>
</div>