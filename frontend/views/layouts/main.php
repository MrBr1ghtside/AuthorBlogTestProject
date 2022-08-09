<?php 
use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\helpers\Url;

AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<!--
	Author by FreeHTML5.co
	Twitter: https://twitter.com/fh5co
	Facebook: https://fb.com/fh5co
	URL: https://freehtml5.co
-->
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head> 
<body>
	<?php $this->beginBody() ?>

	<!-- Navigation -->
	<nav class="site-navigation">
    <div class="site-navigation-inner site-container">
			<img src="./images/site-logo.png" alt="site logo">
			<div class="main-navigation">
				<ul class="main-navigation__ul">
					<li><?= Html::a('Homepage', ['/site/index']) ?></li>
					<li><?= Html::a('Sign in', ['/user/registration/register']) ?></li>
					<li><?= Html::a('Login', ['/user/security/login']) ?></li>
					<li><?= Html::a('Contact', ['/site/contact']) ?></li>
					<li><?= Html::a('Feedback', ['/site/feedback']) ?></li>
				</ul>
			</div>
			<div id="myBtn" class="burger-container" onclick="myFunction(this)">
				<div class="bar1"></div>
				<div class="bar2"></div>
				<div class="bar3"></div>
			</div>
			<script>
				function myFunction(x) {
					x.classList.toggle("change");
				}
			</script>

		</div>
	</nav>
	<!-- Navigation end -->
			<?= Breadcrumbs::widget([
            	'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        	]) ?>
        	<?= Alert::widget() ?>
       		<?= $content ?>
	
	<!-- Footer -->
	<footer class="site-footer">
		<div class="site-container">
			<div class="footer-inner">
				<div class="footer-info">
					<div class="footer-info__left">
						<img src="./images/footer-img.jpg" alt="about me image">
						<p>Read more about me</p>
					</div>
					<div class="footer-info__right">
						<h5>Get In Touch</h5>
						<p class="footer-phone">Phone: +958734902847</p>
						<p>Email : Jhone@Example.com</p>
						<div class="social-icons">
							<a href="#" target="_blank"><img src="./images/social-twitter.png" alt="social icon"></a>
							<a href="#" target="_blank"><img src="./images/social-pinterest.png" alt="social icon"></a>
							<a href="#" target="_blank"><img src="./images/social-youtube.png" alt="social icon"></a>
							<a href="#" target="_blank"><img src="./images/social-twitter.png" alt="social icon"></a>
						</div>
					</div>
				</div>
				<div class="footer-contact-form">
					<h5>Contact Form</h5>
					<form class="contact-form">
						<div class="contact-form__input">
							<input type="text" name="name" placeholder="Name">
							<input type="email" name="email" placeholder="Email">
						</div>
						<textarea></textarea>
						<input type="submit" name="submit" value="Submit" class="submit-button">
					</form>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer end -->

	<!-- Scripts -->


	<?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>
