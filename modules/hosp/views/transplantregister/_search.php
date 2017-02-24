<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\hosp\models\TransplantregisterSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="transplantregister-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'pname') ?>

    <?= $form->field($model, 'fname') ?>

    <?= $form->field($model, 'lname') ?>

    <?= $form->field($model, 'birthdate') ?>

    <?php // echo $form->field($model, 'cid') ?>

    <?php // echo $form->field($model, 'occupation') ?>

    <?php // echo $form->field($model, 'houseid') ?>

    <?php // echo $form->field($model, 'moo') ?>

    <?php // echo $form->field($model, 'building') ?>

    <?php // echo $form->field($model, 'soi') ?>

    <?php // echo $form->field($model, 'road') ?>

    <?php // echo $form->field($model, 'tambon') ?>

    <?php // echo $form->field($model, 'ampur') ?>

    <?php // echo $form->field($model, 'changwat') ?>

    <?php // echo $form->field($model, 'postcode') ?>

    <?php // echo $form->field($model, 'telhome') ?>

    <?php // echo $form->field($model, 'telmobile') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'heart') ?>

    <?php // echo $form->field($model, 'liver') ?>

    <?php // echo $form->field($model, 'renal') ?>

    <?php // echo $form->field($model, 'lung') ?>

    <?php // echo $form->field($model, 'eye') ?>

    <?php // echo $form->field($model, 'allorgan') ?>

    <?php // echo $form->field($model, 'donor') ?>

    <?php // echo $form->field($model, 'man1') ?>

    <?php // echo $form->field($model, 'man2') ?>

    <?php // echo $form->field($model, 'dateregister') ?>

    <?php // echo $form->field($model, 'userregister') ?>

    <?php // echo $form->field($model, 'upd') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
