<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Feedbacks';

?>

<section class="fh5co-quotes">
		<div class="site-container">
			<div class="about-me-slider">
				<?php foreach ($varInView as $item): ?>
					<div>
						<h2 class="universal-h2 universal-h2-bckg"><?php echo $item->title ?></h2>
						<p>
							<?php echo $item->text ?>
						</p>
						<img src="./images/quotes.svg" alt="quotes svg">
						<h4><?php echo $item->name ?></h4>
					</div>
				<?php endforeach ?>
			</div>
		</div>
</section>
