<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

use app\modules\hosp\models\LibChw;
use app\modules\hosp\models\LibAmp;
use app\modules\hosp\models\LibTmb;
use app\components\Udf;

$dateregis = isset($model->dateregister) ? $model->dateregister : date('Y-m-d');
$dateregis = Udf::buddist($dateregis);
$datebirth = isset($model->birthdate) ? $model->birthdate : date('Y-m-d');
$datebirth = Udf::buddist($datebirth);
?>

<div class="transplantregister-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-2">
    <?=
    $form->field($model, 'dateregister')->textInput([
        'data-provide' => "datepicker",
        'data-date-language' => "th-th",
        'value'=>$dateregis
    ])
    ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'pname')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'fname')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'lname')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <?=
            $form->field($model, 'birthdate')->textInput([
                'data-provide' => "datepicker",
                'data-date-language' => "th-th",
                'value'=>$datebirth
            ])
            ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'cid')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
<?= $form->field($model, 'occupation')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'houseid')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'moo')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
<?= $form->field($model, 'building')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'soi')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
<?= $form->field($model, 'road')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <?=
                    $form->field($model, 'changwat')
        ->dropDownList($model->getChwlist(),[
            'prompt'=>' -- โปรดเลือกจังหวัด -- ',
            'onchange' => '$.post("amplist?chwpart='.'"+$(this).val(),
            function(data){$("select#transplantregister-ampur").html(data);
            });'
        ])
            ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'ampur')
                    ->dropDownList(ArrayHelper::map(LibAmp::find()
                                    ->where(['chwpart' => $model->changwat])
                                    ->all(), 'amppart', 'ampname'), [
                        'prompt' => '-- โปรดเลือกอำเภอ --',
                        'onchange' => '$.post("tmblist?amppart=' . '"+$(this).val(),
                            function(data){
                                $("select#transplantregister-tambon").html(data);
                            });'
                    ]) ?>
        </div>
        <div class="col-md-4">
<?= $form->field($model, 'tambon')
        ->dropDownList(ArrayHelper::map(LibTmb::find()
                ->where(['amppart'=>$model->ampur])
                ->all(),
            'tmbpart', 'tmbname'),[
            'prompt' => '-- โปรดเลือกตำบล --'
            ]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <?= $form->field($model, 'postcode')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'telhome')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'telmobile')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-3">
<?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h5> ขออุทิศอวัยวะเมื่อถึงแก่กรรมแล้ว ดังนี้ (ทำเครื่องหมาย "ถูก" ลงในช่องสี่เหลื่ยมที่ต้องการ) </h5>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            <?= $form->field($model, 'heart')->checkbox() ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'liver')->checkbox() ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'renal')->checkbox() ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'lung')->checkbox() ?>
        </div>
        <div class="col-md-2">
            <?= $form->field($model, 'eye')->checkbox() ?>
        </div>
        <div class="col-md-2">
<?= $form->field($model, 'allorgan')->checkbox() ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'donor')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'man1')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
    <?= $form->field($model, 'man2')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <?= $form->field($model, 'userregister')->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'upd')->hiddenInput()->label(false) ?>

    <div class="form-group">
<?= Html::submitButton($model->isNewRecord ? 'ลงทะเบียน' : 'ปรับปรุงข้อมูล', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>

</div>
<?php
$js = "
    $('#transplantregister-changwat').change(function(e){
        $('#transplantregister-tambon').empty().html('<option value=\"\">-- โปรดเลือกตำบล --</option>');
    });
"; 
$this->registerJs($js);
?>
