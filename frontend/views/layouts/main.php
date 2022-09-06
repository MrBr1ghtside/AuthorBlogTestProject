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
<body class="d-flex flex-column h-100">
	<?php $this->beginBody() ?>
<headler class="site-headler">
	<!-- Navigation -->
	<?php
    NavBar::begin([
        'brandLabel' => Html::img('./images/site-logo.png'),
        'options' => [
            'class' => 'navbar navbar-expand-md navbar-dark',
			'style' => 'background-color: #595959',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav'],
        'items' => [
			['label' => 'Home', 'url' => ['/site/index']],
			['label' => 'Sign in', 'url' => ['/user/registration/register']],
			Yii::$app->user->isGuest ? // Если пользователь гость, показыаем ссылку "Вход", если он авторизовался "Выход"
				['label' => 'Login', 'url' => ['/user/security/login']] :
				[
					'label' => 'Log out (' . Yii::$app->user->identity->username . ')',
					'url' => ['/site/logout'],
					'linkOptions' => ['data-method' => 'post']
			],
			['label' => 'Contact', 'url' => ['/site/contact']],
			['label' => 'Feedbacks', 'url' => ['/feedbacks/feedbacks']],
			['label' => 'Posts', 'url' => ['/posts/posts']],
		],
    ]);
    NavBar::end();
    ?>
	<!-- Navigation end -->
	<main role="main" class="flex-shrink-0">
    	<div>
			<?= Breadcrumbs::widget([
            	'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        	]) ?>
        	<?= Alert::widget() ?>
       		<?= $content ?>
		</div>
	</main>

</headler>
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
			</div>
		</div>
	</footer>
	<!-- Footer end -->

	<?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>
