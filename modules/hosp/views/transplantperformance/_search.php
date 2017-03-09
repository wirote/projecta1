<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\hosp\models\TransplantperformanceSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="transplantperformance-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'regis_id') ?>

    <?= $form->field($model, 'hcode') ?>

    <?= $form->field($model, 'hn') ?>

    <?= $form->field($model, 'an') ?>

    <?php // echo $form->field($model, 'potential') ?>

    <?php // echo $form->field($model, 'potential_ward') ?>

    <?php // echo $form->field($model, 'potential_date') ?>

    <?php // echo $form->field($model, 'potential_time') ?>

    <?php // echo $form->field($model, 'potential_age') ?>

    <?php // echo $form->field($model, 'potential_hiv') ?>

    <?php // echo $form->field($model, 'potential_infect') ?>

    <?php // echo $form->field($model, 'potential_ca') ?>

    <?php // echo $form->field($model, 'potential_reason') ?>

    <?php // echo $form->field($model, 'eligible') ?>

    <?php // echo $form->field($model, 'eligible_reason') ?>

    <?php // echo $form->field($model, 'eligible_ward') ?>

    <?php // echo $form->field($model, 'eligible_date') ?>

    <?php // echo $form->field($model, 'eligible_time') ?>

    <?php // echo $form->field($model, 'actual1') ?>

    <?php // echo $form->field($model, 'actual1_ward') ?>

    <?php // echo $form->field($model, 'actual1_date') ?>

    <?php // echo $form->field($model, 'actual1_time') ?>

    <?php // echo $form->field($model, 'actual1_reason') ?>

    <?php // echo $form->field($model, 'actual2') ?>

    <?php // echo $form->field($model, 'actual2_ward') ?>

    <?php // echo $form->field($model, 'actual2_date') ?>

    <?php // echo $form->field($model, 'actual2_time') ?>

    <?php // echo $form->field($model, 'actual2_renal') ?>

    <?php // echo $form->field($model, 'actual2_liver') ?>

    <?php // echo $form->field($model, 'actual2_heart') ?>

    <?php // echo $form->field($model, 'actual2_lung') ?>

    <?php // echo $form->field($model, 'actual2_pancreas') ?>

    <?php // echo $form->field($model, 'actual2_reason') ?>

    <?php // echo $form->field($model, 'utilized') ?>

    <?php // echo $form->field($model, 'utilized_renal') ?>

    <?php // echo $form->field($model, 'utilized_liver') ?>

    <?php // echo $form->field($model, 'utilized_heart') ?>

    <?php // echo $form->field($model, 'utilized_lung') ?>

    <?php // echo $form->field($model, 'utilized_pancreas') ?>

    <?php // echo $form->field($model, 'remark') ?>

    <?php // echo $form->field($model, 'reporter') ?>

    <?php // echo $form->field($model, 'dateregister') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
