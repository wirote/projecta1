<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\hosp\models\TransplantregisterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Transplantregisters';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transplantregister-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Transplantregister', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'pname',
            'fname',
            'lname',
            'birthdate',
            // 'cid',
            // 'occupation',
            // 'houseid',
            // 'moo',
            // 'building',
            // 'soi',
            // 'road',
            // 'tambon',
            // 'ampur',
            // 'changwat',
            // 'postcode',
            // 'telhome',
            // 'telmobile',
            // 'email:email',
            // 'heart',
            // 'liver',
            // 'renal',
            // 'lung',
            // 'eye',
            // 'allorgan',
            // 'donor',
            // 'requester',
            // 'telrequest',
            // 'man1',
            // 'telman1',
            // 'man2',
            // 'telman2',
            // 'dateregister',
            // 'userregister',
            // 'upd',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
