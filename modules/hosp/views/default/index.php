<?php
use yii\helpers\Html;

$name = isset($_GET['name']) ? $_GET['name'] : 'Hospital System';
$menuname = 'Hospital System';
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

$menu = [];
$menu[] = ['url' => '/hosp/transplantregister/index', 'name' => 'ทะเบียนผู้บริจาคอวัยวะ'];
$menu[] = ['url' => '/hosp/default/newcase', 'name' => 'ผู้บริจาคอวัยวะ (รายใหม่)'];
//$menu[] = ['url' => '/hosp/transplantregister/index', 'name' => 'ใบแสดงความจำนงบริจาคอวัยวะ'];
$menu[] = ['url' => '/hosp/transplantregister/index', 'name' => 'ทดสอบ'];
?>
<table class="table table-responsive table-striped table-hover">
    <thead><tr class="success">
            <th style="text-align: center">#</th><th>เมนู</th>
        </tr></thead>
    <tbody>
        <?php for ($i = 0; $i < count($menu); $i++) { ?>
            <tr>
                <td style="text-align: center; color: #009587"><i class="fa fa-hand-o-right" aria-hidden="true"></i></td>
                <td><?= Html::a($menu[$i]['name'], [$menu[$i]['url'], 'name' => $menu[$i]['name'], 'amenu' => 'SP']) ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
