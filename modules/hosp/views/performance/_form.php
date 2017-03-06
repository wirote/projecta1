<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\hosp\models\Transplantregister */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="transplantregister-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birthdate')->textInput() ?>

    <?= $form->field($model, 'cid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'occupation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'houseid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'moo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'building')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'soi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'road')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tambon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ampur')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'changwat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'postcode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telhome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telmobile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'heart')->dropDownList([ 1 => '1', 0 => '0', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'liver')->dropDownList([ 1 => '1', 0 => '0', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'renal')->dropDownList([ 1 => '1', 0 => '0', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'lung')->dropDownList([ 1 => '1', 0 => '0', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'eye')->dropDownList([ 1 => '1', 0 => '0', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'allorgan')->dropDownList([ 1 => '1', 0 => '0', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'donor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'requester')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telrequest')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'man1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telman1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'man2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telman2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dateregister')->textInput() ?>

    <?= $form->field($model, 'userregister')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'upd')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
