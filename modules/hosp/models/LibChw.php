<?php

namespace app\modules\hosp\models;

use Yii;

/**
 * This is the model class for table "lib_chw".
 *
 * @property string $chwpart
 * @property string $chwname
 */
class LibChw extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lib_chw';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['chwpart'], 'required'],
            [['chwpart'], 'string', 'max' => 2],
            [['chwname'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'chwpart' => 'Chwpart',
            'chwname' => 'Chwname',
        ];
    }
}
