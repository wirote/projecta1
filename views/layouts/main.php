<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
/*
use app\assets\AppAsset;
AppAsset::register($this);
*/
use app\assets\MaterialAsset;
MaterialAsset::register($this);
use kartik\icons\Icon;
Icon::map($this);

$this->title = Yii::$app->name;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Prompt:300" rel="stylesheet"> 
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    /**** Menu Section ****/
    $menubar = [];
    $menubar[] = ['label' => 'Home', 'url' => ['/site/index']] ;
    $menubar[] = ['label' => 'Report', 'url' => ['/site/about']] ;
    $menubar[] = ['label' => 'Registration', 'url' => ['/hosp/default/index']] ;
    $menubar[] = Yii::$app->user->isGuest ?
            ['label' => Icon::show('sign-in').'Sign In', 'url' => ['/user/security/login']] :
            ['label'=>Icon::show('cogs').'System',
                'items'=> [
                    ['label'=>Icon::show('cog').'System Menu','url'=>['/wirote/default/index','menu'=>'ADMIN','name'=>'Administrator System']],
                    ['label'=>Icon::show('database').'Data Manipulation','url'=>['/data/default/index','menu'=>'DAT','name'=>'Data Manipulation']],
                    ['label'=>Icon::show('male').'Profile Settings','url'=>['/user/settings/profile']],
                    ['label' => Icon::show('sign-out').'Sign Out (' . Yii::$app->user->identity->username . ')',
                        'url' => ['/user/security/logout'],
                        'linkOptions' => ['data-method' => 'post']
                    ],
                ],
            ];
    /**** Menu Section ****/
    NavBar::begin([
        'brandLabel' => $this->title,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-default navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menubar,
        'encodeLabels' => false,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
