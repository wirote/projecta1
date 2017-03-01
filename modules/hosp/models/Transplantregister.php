<?php

namespace app\modules\hosp\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "transplantregister".
 *
 * @property integer $id
 * @property string $pname
 * @property string $fname
 * @property string $lname
 * @property string $birthdate
 * @property string $cid
 * @property string $occupation
 * @property string $houseid
 * @property string $moo
 * @property string $building
 * @property string $soi
 * @property string $road
 * @property string $tambon
 * @property string $ampur
 * @property string $changwat
 * @property string $postcode
 * @property string $telhome
 * @property string $telmobile
 * @property string $email
 * @property string $heart
 * @property string $liver
 * @property string $renal
 * @property string $lung
 * @property string $eye
 * @property string $allorgan
 * @property string $donor
 * @property string $requester
 * @property string $telrequest
 * @property string $man1
 * @property string $telman1
 * @property string $man2
 * @property string $telman2
 * @property string $dateregister
 * @property string $userregister
 * @property string $upd
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
            [['cid'], 'required'],
            [['heart', 'liver', 'renal', 'lung', 'eye', 'allorgan'], 'string'],
            [['pname', 'telhome'], 'string', 'max' => 50],
            [['fname', 'lname', 'occupation', 'houseid', 'building', 'soi', 'road', 'email', 'donor', 'requester', 'man1', 'man2', 'userregister'], 'string', 'max' => 100],
            [['cid'], 'string', 'max' => 13],
            [['moo'], 'string', 'max' => 10],
            [['tambon'], 'string', 'max' => 6],
            [['ampur'], 'string', 'max' => 4],
            [['changwat', 'chwcoderegister'], 'string', 'max' => 2],
            [['postcode', 'hcoderegister'], 'string', 'max' => 5],
            [['telmobile', 'telrequest', 'telman1', 'telman2'], 'string', 'max' => 20],
            [['cid'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'รหัส',
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
            'requester' => 'ผู้แจ้งความประสงค์ (กรณีไม่ใช่ผู้บริจาค)',
            'telrequest' => 'โทร.',
            'man1' => 'พยานคนที่ 1',
            'telman1' => 'โทร.',
            'man2' => 'พยานคนที่ 2',
            'telman2' => 'โทร.',
            'dateregister' => 'วันที่บริจาค',
            'userregister' => 'ผู้บันทึก',
            'hcoderegister' => 'โรงพยาบาล',
            'chwcoderegister' => 'จังหวัด',
            'upd' => 'วันที่บันทึก',
        ];
    }

    public function getChwlist() {
        $list = LibChw::find()->where('chwname is not null')->orderBy('chwname')->all();
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
