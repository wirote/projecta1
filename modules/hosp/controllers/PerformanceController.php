<?php

namespace app\modules\hosp\controllers;
use Yii;
use app\modules\hosp\models\Transplantperformance;
use app\modules\hosp\models\TransplantperformanceSearch;
use app\modules\hosp\models\Transplantregister;

class PerformanceController extends \yii\web\Controller {

    public function actionIndex() {
        $donor_cid = isset($_POST['donor']) ? $_POST['donor'] : 0;
        $donor_id = 0;
        if ($donor_cid != 0) {
            $rawData = Transplantregister::find()
                    ->select('id')
                    ->where('cid =:cid',[':cid'=>$donor_cid])->one();
            $donor_id = $rawData->id;
            /**/
            $model = $this->findModel($donor_id);
            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            } else {
                return $this->render('update', [
                    'model' => $model,
                ]);
            }
            /**/
        }
        return $this->render('index',[
            'id'=>$donor_id
        ]);
    }

}
