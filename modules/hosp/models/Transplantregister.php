<?php

namespace app\modules\hosp\models;

use Yii;

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
 * @property string $man1
 * @property string $man2
 * @property string $dateregister
 * @property string $userregister
 * @property string $upd
 */
class Transplantregister extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'transplantregister';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['birthdate', 'dateregister', 'upd'], 'safe'],
            [['heart', 'liver', 'renal', 'lung', 'eye', 'allorgan'], 'string'],
            [['pname', 'telhome'], 'string', 'max' => 50],
            [['fname', 'lname', 'occupation', 'houseid', 'building', 'soi', 'road', 'email', 'donor', 'man1', 'man2', 'userregister'], 'string', 'max' => 100],
            [['cid'], 'string', 'max' => 13],
            [['moo'], 'string', 'max' => 10],
            [['tambon', 'ampur', 'changwat'], 'string', 'max' => 2],
            [['postcode'], 'string', 'max' => 5],
            [['telmobile'], 'string', 'max' => 20],
            [['cid'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
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
}
