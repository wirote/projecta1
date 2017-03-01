<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\hosp\models\Transplantregister */

$this->title = 'ปรับปรุง ข้อมูลผู้บริจาค (Donor): '  ;//. $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Transplantregisters', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="transplantregister-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'hcode' => $hcode,
        'chwcode' => $chwcode,
    ]) ?>

</div>
