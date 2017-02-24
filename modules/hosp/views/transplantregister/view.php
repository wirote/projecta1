<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\hosp\models\Transplantregister */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Transplantregisters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transplantregister-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'pname',
            'fname',
            'lname',
            'birthdate',
            'cid',
            'occupation',
            'houseid',
            'moo',
            'building',
            'soi',
            'road',
            'tambon',
            'ampur',
            'changwat',
            'postcode',
            'telhome',
            'telmobile',
            'email:email',
            'heart',
            'liver',
            'renal',
            'lung',
            'eye',
            'allorgan',
            'donor',
            'man1',
            'man2',
            'dateregister',
            'userregister',
            'upd',
        ],
    ]) ?>

</div>
