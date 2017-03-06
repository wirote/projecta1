<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\hosp\models\Transplantperformance */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Transplantperformances'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transplantperformance-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'regis_id',
            'hcode',
            'hn',
            'an',
            'potential',
            'potential_ward',
            'potential_date',
            'potential_time',
            'potential_age',
            'potential_hiv',
            'potential_infect',
            'potential_ca',
            'potential_reason:ntext',
            'eligible',
            'eligible_reason:ntext',
            'eligible_ward',
            'eligible_date',
            'eligible_time',
            'actual1',
            'actual1_ward',
            'actual1_date',
            'actual1_time',
            'actual2',
            'actual2_ward',
            'actual2_date',
            'actual2_time',
            'actual2_renal',
            'actual2_liver',
            'actual2_heart',
            'actual2_lung',
            'actual2_pancreas',
            'utilized',
            'utilized_renal',
            'utilized_liver',
            'utilized_heart',
            'utilized_lung',
            'utilized_pancreas',
            'remark',
            'reporter',
            'dateregister',
        ],
    ]) ?>

</div>
