<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\wirote\models\SysMenu */

$this->title = Yii::t('app', 'Create Sys Menu');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Sys Menus'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sys-menu-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
