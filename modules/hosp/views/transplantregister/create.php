<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\hosp\models\Transplantregister */

$this->title = 'Create Transplantregister';
$this->params['breadcrumbs'][] = ['label' => 'Transplantregisters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transplantregister-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
