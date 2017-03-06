<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\hosp\models\TransplantperformanceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Transplantperformances');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transplantperformance-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Transplantperformance'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'regis_id',
            'hcode',
            'hn',
            'an',
            // 'potential',
            // 'potential_ward',
            // 'potential_date',
            // 'potential_time',
            // 'potential_age',
            // 'potential_hiv',
            // 'potential_infect',
            // 'potential_ca',
            // 'potential_reason:ntext',
            // 'eligible',
            // 'eligible_reason:ntext',
            // 'eligible_ward',
            // 'eligible_date',
            // 'eligible_time',
            // 'actual1',
            // 'actual1_ward',
            // 'actual1_date',
            // 'actual1_time',
            // 'actual2',
            // 'actual2_ward',
            // 'actual2_date',
            // 'actual2_time',
            // 'actual2_renal',
            // 'actual2_liver',
            // 'actual2_heart',
            // 'actual2_lung',
            // 'actual2_pancreas',
            // 'utilized',
            // 'utilized_renal',
            // 'utilized_liver',
            // 'utilized_heart',
            // 'utilized_lung',
            // 'utilized_pancreas',
            // 'remark',
            // 'reporter',
            // 'dateregister',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
