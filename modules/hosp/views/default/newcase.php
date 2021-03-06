<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\hosp\models\Transplantregister */

$this->title = 'ลงทะเบียนผู้บริจาคอวัยวะรายใหม่';
$this->params['breadcrumbs'][] = ['label' => 'เมนูระบบทะเบียน', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transplantregister-create">
    <div class="row">
        <h3 class="alert alert-info" style="text-align: center"><?= Html::encode($this->title) ?></h3>
    </div>

    <?=
    $this->render('_form', [
        'model' => $model,
        'hcode' => $hcode,
        'chwcode' => $chwcode,
    ])
    ?>

</div>
<script>
    function demo() {
        $('.datepicker').datepicker();
    }
</script>