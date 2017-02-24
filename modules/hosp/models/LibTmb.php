<?php

namespace app\modules\hosp\models;

use Yii;

/**
 * This is the model class for table "lib_tmb".
 *
 * @property string $tmbpart
 * @property string $tmbname
 * @property string $amppart
 */
class LibTmb extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lib_tmb';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tmbpart'], 'required'],
            [['tmbpart'], 'string', 'max' => 6],
            [['tmbname'], 'string', 'max' => 50],
            [['amppart'], 'string', 'max' => 4],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tmbpart' => 'Tmbpart',
            'tmbname' => 'Tmbname',
            'amppart' => 'Amppart',
        ];
    }
}
