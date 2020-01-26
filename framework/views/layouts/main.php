<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
		'options' => [
			'id' => 'top-navbar',
            'class' => 'navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Главная', 'url' => ['/products/index']],
            ['label' => 'О нас', 'url' => ['/site/about']],
            ['label' => 'Контакты', 'url' => ['/site/contact']],
			//['label' => 'Вход', 'url' => ['/site/login'], 'visible' => Yii::$app->user->isGuest],
			//['label' => 'Мой кабинет', 'url' => ['/orders/index'], 'visible' => !Yii::$app->user->isGuest],
			//['label' => 'Выход(' . Yii::$app->user->identity->username . ')', 'url' => ['/site/logout'], 'visible' => !Yii::$app->user->isGuest],
            Yii::$app->user->isGuest ? (
                ['label' => 'Вход', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/orders/index'], 'post')
                . Html::submitButton(
                    'Мой кабинет',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li><li>'
				. Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Выход (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
			)  
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Евромарт <?= date('Y') ?></p>

       <!-- <p class="pull-right"><?= Yii::powered() ?></p> -->
    </div>
</footer>
<div id="brand-img"><?= Html::img('@web/uploads/BannerAppL.png')?></div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
