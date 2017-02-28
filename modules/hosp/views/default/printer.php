<?php
use app\components\Udf;
use yii\helpers\Url;

?>
<h3 class="bg-success" style="text-align: center">ใบแสดงความจำนงบริจาคอวัยวะ</h3>
<table style="width: 100%; font-size: 18">
    <tr>
        <td colspan="3">&nbsp;</td>
        <td colspan="2" style="text-align: center">วันที่ <?= Udf::thailongdate($model[0]['upd']) ?></td>
        <td style="width: 17%">&nbsp;</td>
    </tr>
    <tr>
        <td colspan="3">ข้าพเจ้า <?= $model[0]['pname'].$model[0]['fname'].' '.$model[0]['lname'] ?></td>
        <td colspan="3">วันเดือนปีเกิด <?= Udf::thailongdate($model[0]['birthdate']) ?></td>
    </tr>
    <tr>
        <td colspan="3">หมายเลขบัตรประชาชน <?= $model[0]['cid'] ?></td>
        <td colspan="3">อาชีพ <?= $model[0]['occupation'] ?></td>
    </tr>
    <tr>
        <td>ที่อยู่ เลขที่ <?= $model[0]['houseid'] ?> หมู่ <?= $model[0]['moo'] ?> </td>
        <td colspan="2">หมู่บ้าน/อาคาร <?= $model[0]['building'] ?></td>
        <td>ซอย <?= $model[0]['soi'] ?></td>
        <td colspan="2">ถนน <?= $model[0]['road'] ?></td>
    </tr>
    <tr>
        <td colspan="2"> ตำบล/ แขวง <?= $model[0]['tambon'] ?> </td>
        <td colspan="2"> อำเภอ/ เขต <?= $model[0]['ampur'] ?></td>
        <td colspan="2"> จังหวัด <?= $model[0]['changwat'] ?></td>
    </tr>
</table>
<table style="width: 100%; font-size: 18">
    <tr>
        <td style="width: 25%"> รหัสไปรษณีย์ <?= $model[0]['postcode'] ?></td>
        <td style="width: 25%"> โทร <?= $model[0]['telhome'] ?> </td>
        <td style="width: 25%"> โทรศัพท์เคลื่อนที่ <?= $model[0]['telmobile'] ?></td>
        <td style="width: 25%">E-mail <?= $model[0]['email'] ?></td>
    </tr>
</table>
<table style="width: 100%; font-size: 18">
    <tr>
        <td colspan="6">
            ขออุทิศอวัยวะของข้าพเจ้าเมื่อถึงแก่กรรมแล้ว ได้แก่ 
            (โปรดทำเครื่องหมาย "ถูก" ลงในช่องสี่เหลื่ยม ตามอวัยวะที่บริจาค) 
        </td>
    </tr>
    <tr>
        <td><?php if ($model[0]['heart'] != 0) { ?>
            <img src="<?= Url::base() ?>/img/checkbox-checked.png" width="25" height="25">
        <?php } else { ?>
            <img src="<?= Url::base() ?>/img/checkbox-unchecked.png" width="25" height="25">
        <?php  } ?> หัวใจ</td>
        <td><?php if ($model[0]['liver'] != 0) { ?>
            <img src="<?= Url::base() ?>/img/checkbox-checked.png" width="25" height="25">
        <?php } else { ?>
            <img src="<?= Url::base() ?>/img/checkbox-unchecked.png" width="25" height="25">
        <?php  } ?> ตับ</td>
        <td><?php if ($model[0]['renal'] != 0) { ?>
            <img src="<?= Url::base() ?>/img/checkbox-checked.png" width="25" height="25">
        <?php } else { ?>
            <img src="<?= Url::base() ?>/img/checkbox-unchecked.png" width="25" height="25">
        <?php  } ?> ไต</td>
        <td><?php if ($model[0]['lung'] != 0) { ?>
            <img src="<?= Url::base() ?>/img/checkbox-checked.png" width="25" height="25">
        <?php } else { ?>
            <img src="<?= Url::base() ?>/img/checkbox-unchecked.png" width="25" height="25">
        <?php  } ?> ปอด</td>
        <td><?php if ($model[0]['eye'] != 0) { ?>
            <img src="<?= Url::base() ?>/img/checkbox-checked.png" width="25" height="25">
        <?php } else { ?>
            <img src="<?= Url::base() ?>/img/checkbox-unchecked.png" width="25" height="25">
        <?php  } ?> ตา</td>
        <td><?php if ($model[0]['allorgan'] != 0) { ?>
            <img src="<?= Url::base() ?>/img/checkbox-checked.png" width="25" height="25">
        <?php } else { ?>
            <img src="<?= Url::base() ?>/img/checkbox-unchecked.png" width="25" height="25">
        <?php  } ?> ทุกอวัยวะ</td>
    </tr>
    <tr>
        <td colspan="6">
            เพื่อมอบให้แพทย์นำไปรักษาช่วยชีวิตผู้ป่วย ด้วยการปลูกถ่ายอวัยวะ ด้วยความเต็มใจ 
            โดยที่ข้าพเจ้าได้ปรึกษาหารือกับครอบครัวก่อน 
            และแสดงความจำนงบริจาคอวัยวะแล้ว และได้รับทราบและเข้าใจเป็นอย่างดีว่า แพทย์จะทำการตกแต่ง
            ร่างกายให้เป็นที่เรียบร้อย โดยมิทำให้เกิดความล่าช้าในการประกอบพิธีทางศาสนา
        </td>
    </tr>
    <tr>
        <td colspan="3">&nbsp;</td>
        <td colspan="3" style="text-align: center">ลงชื่อ ............................................................. ผู้บริจาค </td>
    </tr>
    <tr>
        <td colspan="3">&nbsp;</td>
        <td colspan="3" style="text-align: center">( <?= $model[0]['pname'].$model[0]['fname'].' '.$model[0]['lname'] ?> )</td>
    </tr>
    <tr>
        <td colspan="3" style="text-align: center">ลงชื่อ ............................................................. พยาน </td>
        <td colspan="3" style="text-align: center">ลงชื่อ ............................................................. พยาน </td>
    </tr>
    <tr>
        <td colspan="3" style="text-align: center">( <?= $model[0]['man1'] ?> )</td>
        <td colspan="3" style="text-align: center">( <?= $model[0]['man2'] ?> )</td>
    </tr>
</table>


