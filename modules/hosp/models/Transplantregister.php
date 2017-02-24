<?php

namespace app\modules\hosp\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "transplantregister".
 */
class Transplantregister extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'transplantregister';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['birthdate', 'dateregister', 'upd'], 'safe'],
            [['heart', 'liver', 'renal', 'lung', 'eye', 'allorgan'], 'string'],
            [['pname', 'telhome'], 'string', 'max' => 50],
            [['fname', 'lname', 'occupation', 'houseid', 'building', 'soi', 'road', 'email', 'donor', 'man1', 'man2', 'userregister'], 'string', 'max' => 100],
            [['cid'], 'string', 'max' => 13],
            [['moo'], 'string', 'max' => 10],
            [['tambon'], 'string', 'max' => 6],
            [['ampur'], 'string', 'max' => 4],
            [['changwat'], 'string', 'max' => 2],
            [['postcode'], 'string', 'max' => 5],
            [['telmobile'], 'string', 'max' => 20],
            [['cid'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'pname' => 'คำนำหน้าชื่อ',
            'fname' => 'ชื่อ',
            'lname' => 'นามสกุล',
            'birthdate' => 'วันเกิด',
            'cid' => 'เลขบัตรประชาชน',
            'occupation' => 'อาชีพ',
            'houseid' => 'บ้านเลขที่',
            'moo' => 'หมู่',
            'building' => 'หมู่บ้าน/อาคาร',
            'soi' => 'ซอย',
            'road' => 'ถนน',
            'tambon' => 'ตำบล',
            'ampur' => 'อำเภอ',
            'changwat' => 'จังหวัด',
            'postcode' => 'รหัสไปรษณีย์',
            'telhome' => 'โทร.(บ้าน)',
            'telmobile' => 'โทร.(มือถือ)',
            'email' => 'E-mail',
            'heart' => 'หัวใจ',
            'liver' => 'ตับ',
            'renal' => 'ไต',
            'lung' => 'ปอด',
            'eye' => 'ตา',
            'allorgan' => 'ทุกอวัยวะ',
            'donor' => 'ผู้บริจาค',
            'man1' => 'พยานคนที่ 1',
            'man2' => 'พยานคนที่ 2',
            'dateregister' => 'วันที่บันทึก',
            'userregister' => 'ผู้บันทึก',
            'upd' => 'วันที่ปรับปรุง',
        ];
    }

    public function getChwlist() {
        $list = LibChw::find()
                        ->where('chwname is not null')
                        ->orderBy('chwname')->all();
        return ArrayHelper::map($list, 'chwpart', 'chwname');
    }

    public function getChw() {
        return $this->hasOne(LibChw::className(), ['chwpart' => 'changwat']);
    }

    public function getChwName() {
        return $this->chw ? $this->chw->chwname : 'ไม่พบจังหวัด';
    }

    public function getAmp() {
        return $this->hasOne(LibAmp::className(), ['amppart' => 'ampur']);
    }

    public function getAmpName() {
        return $this->amp ? $this->amp->ampname : 'ไม่พบอำเภอ';
    }

    public function getTmb() {
        return $this->hasOne(LibTmb::className(), ['tmbpart' => 'tambon']);
    }

    public function getTmbName() {
        return $this->tmb ? $this->tmb->tmbname : 'ไม่พบตำบล';
    }

}
