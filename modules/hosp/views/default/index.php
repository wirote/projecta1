<?php
$name = isset($_GET['name']) ? $_GET['name'] : 'Register System';
$menuname = 'Register System';
$this->title = $name ;
/*
$this->params['breadcrumbs'][] = [
    'label' => 'System Menu',
    'url' => [
        '/wirote/default/index',
        'name'=>$menuname
    ]
];
*/
$this->params['breadcrumbs'][] = $this->title;
use kartik\grid\GridView;
use yii\helpers\Html;

?>
<?php
$gridcolumns = [];
$gridcolumns[] = [
            'label' =>'#',
            'headerOptions' => ['class'=>'text-center'],
            'contentOptions' => ['class'=>'text-center', 'style'=>'color:#009587'],
            'format' => 'raw',
            'value' => function () {
                return '<i class="fa fa-hand-o-right" aria-hidden="true"></i>';
            }
        ];
$gridcolumns[] = [
            'label'=>'เมนู',
            'attribute'=>'name',
            'format'=>'raw',
            'value' => function ($model) {
                return Html::a(
                    $model['namemenu'],[
                        $model['linkmenu'],
                        'name'=>$model['namemenu']
                    ]
                );
            },
        ];

?>
<div class="default-index">
<?=GridView::widget([
    'dataProvider'=>$dataProvider,
    'summary'=>'',
    'bordered'=>FALSE,
    'striped'=>TRUE,
    'condensed'=>FALSE,
    'responsive'=>TRUE,
    'hover'=>TRUE,
    'floatHeader'=>true,
    'headerRowOptions'=>['class'=>'success'],
    'columns' => $gridcolumns,
]); ?>
</div>
