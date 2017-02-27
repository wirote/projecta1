<?php

namespace app\components;

use Yii;
use yii\base\Component;
use yii\base\InvalidConfigException;

class Udf extends Component {

    public static function thaidate($date) {
        $strYear = date("Y", strtotime($date)) + 543;
        $strMonth = date("n", strtotime($date));
        $strDay = date("j", strtotime($date));
        $strMonthCut = ["", "ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค."];
        $strMonthThai = $strMonthCut[$strMonth];

        return $strDay . ' ' . $strMonthThai . ' ' . $strYear;
    }

    public static function buddist($date) {
        $strYear = date("Y", strtotime($date)) + 543;
        $strMonth = date("n", strtotime($date));
        $strDay = date("j", strtotime($date));
        $strMpad = str_pad($strMonth,2,"0",STR_PAD_LEFT);
        $strDpad = str_pad($strDay,2,"0",STR_PAD_LEFT);
        //$strMonthCut = ["", "ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค."];
        //$strMonthThai = $strMonthCut[$strMonth];

        return $strDpad . '/' . $strMpad . '/' . $strYear;
    }

    public static function monthToChar($mm) {
        $arr_month = [
            "", "ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค."
        ];
        return $arr_month[$mm];
    }

}
