<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

//use yii\bootstrap\ActiveForm;
//use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\hosp\models\Transplantperformance */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="performance-form">

    <?php
    $form = ActiveForm::begin();
    ?>
    <div class="row bg-info">
        <div class="col-lg-3 col-md-3 col-sm-3">
            <?= $form->field($model, 'regis_id')->textInput() ?>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2">
            <?= $form->field($model, 'hn')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2">
            <?= $form->field($model, 'an')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3">
            <?= $form->field($model, 'hcode')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <br />
    <!-- Potential Donor -->
    <div class="row">
        <div class="panel panel-wrprimary">
            <div class="panel-heading"><?= Html::label('Potential Donor') ?></div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2" style="text-align: right">
                        <?= Html::label('ประเมิน ณ หอผู้ป่วย') ?>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10">
                        <?= $form->field($model, 'potential_ward')->textInput(['maxlength' => true])->label(FALSE) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-7" style="text-align: right">
                        <?= Html::label('ผู้ป่วยมี GCS = 2T นานครบ 6 ชั่วโมง เมื่อ วันที่ ') ?>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2">
                        <?= $form->field($model, 'potential_date')->textInput()->label(FALSE) ?>
                    </div>
                    <div class="col-lg-1 col-md-1 col-sm-1" style="text-align: right"><?= Html::label('เวลา') ?></div>
                    <div class="col-lg-2 col-md-2 col-sm-2">
                        <?= $form->field($model, 'potential_time')->textInput(['maxlength' => true])->label(FALSE) ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <?= $form->field($model, 'potential')->radio(['label' => 'ไม่มีข้อห้ามในการบริจาคอวัยวะ', 'value' => 0]) ?>
                        <?= $form->field($model, 'potential')->radio(['label' => 'มีข้อห้ามในการบริจาคอวัยวะ คือ', 'value' => 1]) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-1 col-md-1 col-sm-1">&nbsp;</div>
                    <div class="col-lg-11 col-md-11 col-sm-11"><?= $form->field($model, 'potential_age')->checkbox() ?></div>
                </div>
                <div class="row">
                    <div class="col-lg-1 col-md-1 col-sm-1">&nbsp;</div>
                    <div class="col-lg-11 col-md-11 col-sm-11"><?= $form->field($model, 'potential_hiv')->checkbox() ?></div>
                </div>
                <div class="row">
                    <div class="col-lg-1 col-md-1 col-sm-1">&nbsp;</div>
                    <div class="col-lg-11 col-md-11 col-sm-11"><?= $form->field($model, 'potential_infect')->checkbox() ?></div>
                </div>
                <div class="row">
                    <div class="col-lg-1 col-md-1 col-sm-1">&nbsp;</div>
                    <div class="col-lg-11 col-md-11 col-sm-11"><?= $form->field($model, 'potential_ca')->checkbox() ?></div>
                </div>
                <?=
                $form->field($model, 'potential_reason')->textarea([
                    'rows' => 2,
                ])->label('ในกรณี potential donor ที่ไม่มีข้อห้ามในการบริจาคอวัยวะ ซึ่งไม่ได้รับการวินิจฉัย Brain Death หรือวินิจฉัยไม่สำเร็จ เนื่องจาก ')
                ?>
            </div>
        </div>
    </div>
    <!-- Eligible Donor -->
    <div class="row">
        <div class="panel panel-wrinfo">
            <div class="panel-heading"><?= Html::label('Eligible Donor') ?></div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2" style="text-align: right">
                        <?= Html::label('ประเมิน ณ หอผู้ป่วย') ?>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10">
                        <?= $form->field($model, 'eligible_ward')->textInput(['maxlength' => true])->label(FALSE) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-7" style="text-align: right">
                        <?= Html::label('ผู้ป่วยได้รับการวินิจฉัยแล้วว่ามีภาวะ Brain Death ครบ 2 ครั้่ง และทำ Apnea test  เมื่อวันที่ ') ?>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2">
                        <?= $form->field($model, 'eligible_date')->textInput()->label(FALSE) ?>
                    </div>
                    <div class="col-lg-1 col-md-1 col-sm-1" style="text-align: right"><?= Html::label('เวลา') ?></div>
                    <div class="col-lg-2 col-md-2 col-sm-2">
                        <?= $form->field($model, 'eligible_time')->textInput(['maxlength' => true])->label(FALSE) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <?= $form->field($model, 'eligible')->radio(['label' => 'มีการขอรับบริจาคอวัยะและญาติเซ็นยินยอม', 'value' => 2]) ?>
                        <?= $form->field($model, 'eligible')->radio(['label' => 'มีการขอรับบริจาคอวัยะ แต่ญาติไม่เซ็นยินยอม  เนื่องจาก (โปรดระบุ ...)', 'value' => 1]) ?>
                        <?= $form->field($model, 'eligible')->radio(['label' => 'ไม่มีการขอรับบริจาคอวัยะ เนื่องจาก (โปรดระบุ ...)', 'value' => 0]) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <?= $form->field($model, 'eligible_reason')->textarea(['rows' => 6]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Actual Donor 1 -->
    <div class="row">
        <div class="panel panel-wrwarning">
            <div class="panel-heading"><?= Html::label('Actual Donor 1') ?></div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2" style="text-align: right">
                        <?= Html::label('ประเมิน ณ หอผู้ป่วย') ?>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10">
                        <?= $form->field($model, 'actual1_ward')->textInput(['maxlength' => true])->label(FALSE) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-7" style="text-align: right">
                        <?= Html::label('ญาติเซ็นยินยอมบริจาคอวัยวะ  เมื่อวันที่ ') ?>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2">
                        <?= $form->field($model, 'actual1_date')->textInput()->label(FALSE) ?>
                    </div>
                    <div class="col-lg-1 col-md-1 col-sm-1" style="text-align: right"><?= Html::label('เวลา') ?></div>
                    <div class="col-lg-2 col-md-2 col-sm-2">
                        <?= $form->field($model, 'actual1_time')->textInput(['maxlength' => true])->label(FALSE) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <?= $form->field($model, 'actual1')->radio(['label' => 'มีการนำผู้ป่วยสมองตายที่บริจาคอวัยวะไปผ่าตัดเพื่อนำอวัยวะออก', 'value' => 1]) ?>
                        <?= $form->field($model, 'actual1')->radio(['label' => 'ไม่มีการนำผู้ป่วยไปผ่าตัดเพื่อนำอวัยวะออก เนื่องจาก (โปรดระบุ ...)', 'value' => 0]) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <?= $form->field($model, 'actual1_reason')->textarea(['rows' => 4]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Actual Donor 2 -->
    <div class="row">
        <div class="panel panel-wrsuccess">
            <div class="panel-heading"><?= Html::label('Actual Donor 2') ?></div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2" style="text-align: right">
                        <?= Html::label('ประเมิน ณ หอผู้ป่วย') ?>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10">
                        <?= $form->field($model, 'actual2_ward')->textInput(['maxlength' => true])->label(FALSE) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-7" style="text-align: right">
                        <?= Html::label('ผู้ป่วยถูกลงมีดเพื่อผ่าตัดนำอวัยวะออก  เมื่อวันที่ ') ?>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2">
                        <?= $form->field($model, 'actual2_date')->textInput()->label(FALSE) ?>
                    </div>
                    <div class="col-lg-1 col-md-1 col-sm-1" style="text-align: right"><?= Html::label('เวลา') ?></div>
                    <div class="col-lg-2 col-md-2 col-sm-2">
                        <?= $form->field($model, 'actual2_time')->textInput(['maxlength' => true])->label(FALSE) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <?= $form->field($model, 'actual2')->radio(['label' => 'ผ่าตัดเพื่อนำอวัยวะออกจนสำเร็จ คือ', 'value' => 1]) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-1 col-md-1 col-sm-1">&nbsp;</div>
                    <div class="col-lg-2 col-md-2 col-sm-2"><?= $form->field($model, 'actual2_renal')->radio(['label' => 'ไต 1 ข้าง', 'value' => 1]) ?></div>
                    <div class="col-lg-2 col-md-2 col-sm-2"><?= $form->field($model, 'actual2_renal')->radio(['label' => 'ไต 2 ข้าง', 'value' => 2]) ?></div>
                    <div class="col-lg-2 col-md-2 col-sm-2"><?= $form->field($model, 'actual2_liver')->checkbox() ?></div>
                    <div class="col-lg-2 col-md-2 col-sm-2"><?= $form->field($model, 'actual2_heart')->checkbox() ?></div>
                    <div class="col-lg-2 col-md-2 col-sm-2"><?= $form->field($model, 'actual2_lung')->checkbox() ?></div>
                    <div class="col-lg-1 col-md-1 col-sm-1"><?= $form->field($model, 'actual2_pancreas')->checkbox() ?></div>        
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <?= $form->field($model, 'actual2')->radio(['label' => 'ผ่าตัดเพื่อนำอวัยวะออกจนสำเร็จ เนื่องจาก (โปรดระบุ ...)', 'value' => 0]) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <?= $form->field($model, 'actual2_reason')->textarea(['rows' => 4]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--
        <div class="row">
        <div class="col-lg-1 col-md-1 col-sm-1">
        <div class="col-lg-2 col-md-2 col-sm-2">
        <div class="col-lg-3 col-md-3 col-sm-3">
        <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="col-lg-5 col-md-5 col-sm-5">
        <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="col-lg-7 col-md-7 col-sm-7">
        <div class="col-lg-10 col-md-10 col-sm-10">
        <div class="col-lg-11 col-md-11 col-sm-11">
        <div class="col-lg-12 col-md-12 col-sm-12">
    -->
    <?= $form->field($model, 'utilized')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'utilized_renal')->dropDownList([2 => '2', 1 => '1', 0 => '0',], ['prompt' => '']) ?>

    <?= $form->field($model, 'utilized_liver')->dropDownList([1 => '1', 0 => '0',], ['prompt' => '']) ?>

    <?= $form->field($model, 'utilized_heart')->dropDownList([1 => '1', 0 => '0',], ['prompt' => '']) ?>

    <?= $form->field($model, 'utilized_lung')->dropDownList([1 => '1', 0 => '0',], ['prompt' => '']) ?>

    <?= $form->field($model, 'utilized_pancreas')->dropDownList([1 => '1', 0 => '0',], ['prompt' => '']) ?>

    <?= $form->field($model, 'remark')->dropDownList([1 => '1', 0 => '0',], ['prompt' => '']) ?>

    <?= $form->field($model, 'reporter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dateregister')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
