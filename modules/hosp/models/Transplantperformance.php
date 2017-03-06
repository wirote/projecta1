<?php

namespace app\modules\hosp\models;

use Yii;

/**
 * This is the model class for table "transplantperformance".
 *
 * @property integer $id
 * @property integer $regis_id
 * @property string $hcode
 * @property string $hn
 * @property string $an
 * @property string $potential
 * @property string $potential_ward
 * @property string $potential_date
 * @property string $potential_time
 * @property string $potential_age
 * @property string $potential_hiv
 * @property string $potential_infect
 * @property string $potential_ca
 * @property string $potential_reason
 * @property string $eligible
 * @property string $eligible_reason
 * @property string $eligible_ward
 * @property string $eligible_date
 * @property string $eligible_time
 * @property string $actual1
 * @property string $actual1_ward
 * @property string $actual1_date
 * @property string $actual1_time
 * @property string $actual2
 * @property string $actual2_ward
 * @property string $actual2_date
 * @property string $actual2_time
 * @property string $actual2_renal
 * @property string $actual2_liver
 * @property string $actual2_heart
 * @property string $actual2_lung
 * @property string $actual2_pancreas
 * @property string $utilized
 * @property string $utilized_renal
 * @property string $utilized_liver
 * @property string $utilized_heart
 * @property string $utilized_lung
 * @property string $utilized_pancreas
 * @property string $remark
 * @property string $reporter
 * @property string $dateregister
 */
class Transplantperformance extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'transplantperformance';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['regis_id'], 'required'],
            [['regis_id'], 'integer'],
            [['potential', 'potential_age', 'potential_hiv', 'potential_infect', 'potential_ca', 'potential_reason', 'eligible_reason', 'actual2_renal', 'actual2_liver', 'actual2_heart', 'actual2_lung', 'actual2_pancreas', 'utilized_renal', 'utilized_liver', 'utilized_heart', 'utilized_lung', 'utilized_pancreas', 'remark'], 'string'],
            [['potential_date', 'eligible_date', 'actual1_date', 'actual2_date', 'dateregister'], 'safe'],
            [['hcode'], 'string', 'max' => 5],
            [['hn', 'an'], 'string', 'max' => 20],
            [['potential_ward', 'eligible_ward', 'actual1_ward', 'actual2_ward'], 'string', 'max' => 100],
            [['potential_time', 'eligible_time', 'actual1_time', 'actual2_time'], 'string', 'max' => 4],
            [['eligible', 'actual1', 'actual2', 'utilized', 'reporter'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'regis_id' => 'เลขที่ลงทะเบียน',
            'hcode' => 'Hcode',
            'hn' => 'HN',
            'an' => 'AN',
            'potential' => 'Potential Donor',
            'potential_ward' => 'หอผู้ป่วย',
            'potential_date' => 'วันที่',
            'potential_time' => 'เวลา',
            'potential_age' => 'อายุ > 70 ปี',
            'potential_hiv' => 'ติดเชื้อ  HIV',
            'potential_infect' => 'มีการติดเชื้อที่รุนแรง เช่น Sepsis',
            'potential_ca' => 'เป็นมะเร็ง (ยกเว้น Brain tumor ที่ไม่มี Metastasis',
            'potential_reason' => 'เหตุผล',
            'eligible' => 'Eligible Donor',
            'eligible_reason' => 'เนื่องจาก',
            'eligible_ward' => 'หอผุ้ป่วย',
            'eligible_date' => 'วันที่',
            'eligible_time' => 'เวลา',
            'actual1' => 'Actual Donor 1',
            'actual1_ward' => 'หอผุ้ป่วย',
            'actual1_date' => 'วันที่',
            'actual1_time' => 'เวลา',
            'actual2' => 'Actual Donor 2',
            'actual2_ward' => 'หอผุ้ป่วย',
            'actual2_date' => 'วันที่',
            'actual2_time' => 'เวลา',
            'actual2_renal' => 'ไต',
            'actual2_liver' => 'ตับ',
            'actual2_heart' => 'หัวใจ',
            'actual2_lung' => 'ปอด',
            'actual2_pancreas' => 'ตับอ่อน',
            'utilized' => 'Utilized Donor',
            'utilized_renal' => 'ไต',
            'utilized_liver' => 'ตับ',
            'utilized_heart' => 'หัวใจ',
            'utilized_lung' => 'ปอด',
            'utilized_pancreas' => 'ตับอ่อน',
            'remark' => 'ปัญหาและอุปสรรค',
            'reporter' => 'ผู้รายงาน',
            'dateregister' => 'วันที่บันทึกข้อมูล',
        ];
    }
}
