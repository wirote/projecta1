<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

$this->title = Yii::t('app', 'Sys Menus');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sys-menu-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Sys Menu'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'ดู',
                'template'=>'{view}'
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'แก้ไข',
                'template'=>'{update}'
            ],

            //'id',
            'namemenu',
            'linkmenu',
            //'descmenu',
            'grpmenu',
            // 'orderby',
            'used',
            //'datecreate',
            'regisdate',
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
