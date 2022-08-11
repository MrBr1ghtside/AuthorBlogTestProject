<?php
use yii\bootstrap4\Html;
/** @var yii\web\View $this */

$this->title = 'About me';
?>

<!-- Top banner -->
<section class="fh5co-top-banner">
		<div class="top-banner__inner site-container">
		<img src="./images/top-banner-author.jpg" alt="author image">
			<div class="top-banner__text">
				<div class="top-banner__text-up">
				<?php foreach ($varInView as $item): ?>
 				<p class="align-top"><?php echo $item->text ?></p>
 				<?php endforeach ?>
				</div>
			</div>
		</div>
	</section>
	<!-- Top banner end -->

