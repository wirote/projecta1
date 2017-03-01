<?php

namespace app\modules\wirote\models;

use Yii;

/**
 * This is the model class for table "sys_menu".
 *
 * @property integer $id
 * @property string $namemenu
 * @property string $linkmenu
 * @property string $descmenu
 * @property string $grpmenu
 * @property integer $orderby
 * @property string $used
 * @property string $datecreate
 * @property string $regisdate
 */
class SysMenu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sys_menu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['namemenu', 'used'], 'required'],
            [['orderby'], 'integer'],
            [['used'], 'string'],
            [['datecreate', 'regisdate'], 'safe'],
            [['namemenu', 'linkmenu'], 'string', 'max' => 100],
            [['descmenu'], 'string', 'max' => 255],
            [['grpmenu'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'เลขประจำเมนู',
            'namemenu' => 'ชื่อเมนู',
            'linkmenu' => 'Route',
            'descmenu' => 'คำอธิบาย',
            'grpmenu' => 'กลุ่มเมนู',
            'orderby' => 'ลำดับเมนู',
            'used' => 'ใช้งาน',
            'datecreate' => 'วันที่สร้างรายงาน',
            'regisdate' => 'วันที่ปรับปรุง',
        ];
    }
}
