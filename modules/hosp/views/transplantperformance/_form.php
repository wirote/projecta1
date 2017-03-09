<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\hosp\models\Transplantperformance */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="transplantperformance-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'regis_id')->textInput() ?>

    <?= $form->field($model, 'hcode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'an')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'potential')->dropDownList([ 1 => '1', 0 => '0', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'potential_ward')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'potential_date')->textInput() ?>

    <?= $form->field($model, 'potential_time')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'potential_age')->dropDownList([ 1 => '1', 0 => '0', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'potential_hiv')->dropDownList([ 1 => '1', 0 => '0', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'potential_infect')->dropDownList([ 1 => '1', 0 => '0', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'potential_ca')->dropDownList([ 1 => '1', 0 => '0', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'potential_reason')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'eligible')->dropDownList([ 2 => '2', 1 => '1', 0 => '0', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'eligible_reason')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'eligible_ward')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'eligible_date')->textInput() ?>

    <?= $form->field($model, 'eligible_time')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'actual1')->dropDownList([ 1 => '1', 0 => '0', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'actual1_ward')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'actual1_date')->textInput() ?>

    <?= $form->field($model, 'actual1_time')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'actual1_reason')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'actual2')->dropDownList([ 1 => '1', 0 => '0', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'actual2_ward')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'actual2_date')->textInput() ?>

    <?= $form->field($model, 'actual2_time')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'actual2_renal')->dropDownList([ 2 => '2', 1 => '1', 0 => '0', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'actual2_liver')->dropDownList([ 1 => '1', 0 => '0', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'actual2_heart')->dropDownList([ 1 => '1', 0 => '0', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'actual2_lung')->dropDownList([ 1 => '1', 0 => '0', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'actual2_pancreas')->dropDownList([ 1 => '1', 0 => '0', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'actual2_reason')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'utilized')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'utilized_renal')->dropDownList([ 2 => '2', 1 => '1', 0 => '0', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'utilized_liver')->dropDownList([ 1 => '1', 0 => '0', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'utilized_heart')->dropDownList([ 1 => '1', 0 => '0', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'utilized_lung')->dropDownList([ 1 => '1', 0 => '0', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'utilized_pancreas')->dropDownList([ 1 => '1', 0 => '0', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'remark')->dropDownList([ 1 => '1', 0 => '0', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'reporter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dateregister')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
