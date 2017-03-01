<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\wirote\models\SysMenu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sys-menu-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'namemenu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'linkmenu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descmenu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'grpmenu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'orderby')->textInput() ?>

    <?= $form->field($model, 'used')->dropDownList([ 'Y' => 'Y', 'N' => 'N', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'datecreate')->textInput() ?>

    <?= $form->field($model, 'regisdate')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
