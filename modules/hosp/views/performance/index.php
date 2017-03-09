<?php
$this->title = 'แบบฟอร์มข้อมูลประสิทธิภาพการขอรรับบริจาคอวัยวะ';
$this->params['breadcrumbs'][] = ['label' => 'เมนูระบบทะเบียน', 'url' => ['/hosp/default/index']];
$this->params['breadcrumbs'][] = $this->title;

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$donor = isset($_POST['donor']) ? $_POST['donor'] : '';
?>
<div class="panel panel-wr-yellow">
    <div class="panel-heading">ค้นหาผู้บริจาค</div>
    <div class="panel-body">
        <?php $form = ActiveForm::begin(); ?>
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2">
                <?= Html::label('เลขที่บัตรประชาชน') ?>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8">
                <?= Html::textInput('donor', $donor, ['class'=>'form-control']); ?>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2">
                <?= Html::submitButton('ค้นหา', ['class'=>'btn btn-success']) ?>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
    <div class="panel-footer">
        <?= $id ?> <br />
        <?= $xx ?> <br />
    </div>
</div>