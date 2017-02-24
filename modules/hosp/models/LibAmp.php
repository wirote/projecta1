<?php

namespace app\modules\hosp\models;

use Yii;

/**
 * This is the model class for table "lib_amp".
 *
 * @property string $amppart
 * @property string $ampname
 * @property string $chwpart
 */
class LibAmp extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lib_amp';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['amppart'], 'required'],
            [['amppart'], 'string', 'max' => 4],
            [['ampname'], 'string', 'max' => 50],
            [['chwpart'], 'string', 'max' => 2],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'amppart' => 'Amppart',
            'ampname' => 'Ampname',
            'chwpart' => 'Chwpart',
        ];
    }
}
