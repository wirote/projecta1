<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

$this->title = 'ทะเบียนผู้บริจาคอวัยวะ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transplantregister-index">

    <h2><?= Html::encode($this->title) ?></h2>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Transplantregister', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'label' => 'พิมพ์',
                'format'=>'raw',
                'value'=> function ($model) {
                    return Html::a(Html::img( Url::base(). '/img/printer.png', ['width'=>25,'height'=>25]), ['printer','id'=>$model->id]);
                }
            ],
            [
                'label' => 'แก้ไข',
                'format'=>'raw',
                'value'=> function ($model) {
                    return Html::a(Html::img( Url::base(). '/img/edit.png', ['width'=>25,'height'=>25]), ['update','id'=>$model->id]);
                }
            ],
            //'id',
            'pname',
            'fname',
            'lname',
            'birthdate',
             'cid',
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
            // 'man1',
            // 'man2',
            // 'dateregister',
            // 'userregister',
            // 'upd',
            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
