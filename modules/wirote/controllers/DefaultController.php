<?php

namespace app\modules\wirote\controllers;

use yii\web\Controller;
use Yii;
use yii\data\ActiveDataProvider;
use app\modules\wirote\models\SysMenu;

class DefaultController extends Controller {

    public function actionIndex() {
        $menu = SysMenu::find()
                ->where('used=:used and grpmenu=:grp', [':used' => 1, ':grp' => 'ADM']);
        $dataProvider = new ActiveDataProvider([
            'query' => $menu,
            'pagination' => FALSE
        ]);
        return $this->render('index', [
                    'dataProvider' => $dataProvider
        ]);
    }

}
