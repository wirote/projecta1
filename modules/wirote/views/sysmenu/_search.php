<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\wirote\models\SysMenuSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sys-menu-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'namemenu') ?>

    <?= $form->field($model, 'linkmenu') ?>

    <?= $form->field($model, 'descmenu') ?>

    <?= $form->field($model, 'grpmenu') ?>

    <?php // echo $form->field($model, 'orderby') ?>

    <?php // echo $form->field($model, 'used') ?>

    <?php // echo $form->field($model, 'datecreate') ?>

    <?php // echo $form->field($model, 'regisdate') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
