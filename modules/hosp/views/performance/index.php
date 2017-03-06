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
        <div class="row-fluid">
            <div class="col-lg-12 col-md-12 col-sm-12"><?= Html::encode('เลขที่บัตรประชาชน') ?> <?= Html::textInput('donor', $donor, ['class'=>'form-control']); ?></div>
        </div>
        <div class="row-fluid">
            <div class="col-lg-12 col-md-12 col-sm-12"><?= Html::submitButton('ค้นหา', ['class'=>'btn btn-success']) ?></div>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
    <div class="panel-footer">
        <?= $id ?>
    </div>
</div>