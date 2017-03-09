<?php

namespace app\modules\hosp\controllers;
use Yii;
use app\modules\hosp\models\Transplantperformance;
use app\modules\hosp\models\TransplantperformanceSearch;
use app\modules\hosp\models\Transplantregister;

class PerformanceController extends \yii\web\Controller {

    public function actionIndex() {
        $donor_id = 0;
        $xx = 0;
        $donor_cid = isset($_POST['donor']) ? $_POST['donor'] : 0;
        if ($donor_cid != 0) {
            // search in register
            $rawData = Transplantregister::find()
                    ->select('id')
                    ->where('cid =:cid',[':cid'=>$donor_cid])->one();
            $donor_id = isset($rawData->id) ? $rawData->id : 0;
            if ($donor_id != 0) {
                // search in performance
                $rawData = Transplantperformance::find()->where('regis_id =:regid',[':regid'=>$donor_id])->one();
                $pf_id = isset($rawData->id) ? $rawData->id : 0;
                if ($pf_id != 0) {
                    // found
                    $xx = 1;
                } else {
                    // not found
                    $model = new Transplantperformance();
                    if ($model->load(Yii::$app->request->post()) && $model->save()) {
                        return $this->redirect(['view', 'id' => $model->id]);
                    } else {
                        return $this->render('create', [
                            'model' => $model,
                        ]);
                    }
                }
            }
        }
        return $this->render('index',[
            'id'=>$donor_id,
            'xx' => $xx
        ]);
    }

}
            /*
            $model = $this->findModel($donor_id);
            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            } else {
                return $this->render('update', [
                    'model' => $model,
                ]);
            }
            /**/
