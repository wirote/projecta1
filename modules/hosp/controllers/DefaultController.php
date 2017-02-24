<?php

namespace app\modules\hosp\controllers;

use yii\web\Controller;
use Yii;
use app\modules\hosp\models\Transplantregister;

class DefaultController extends Controller {

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionShowcase() {
        return $this->render('showcase') ;
    }


    public function actionNewcase() {
        $model = new Transplantregister();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('newcase', [
                     'model' => $model,
            ]);
        }
    }

}
