<?php

namespace app\modules\hosp\controllers;

use yii\web\Controller;
use Yii;
use yii\helpers\Html;
use app\modules\hosp\models\Transplantregister;
use app\modules\hosp\models\TransplantregisterSearch;
use app\modules\hosp\models\LibAmp;
use app\modules\hosp\models\LibTmb;

class DefaultController extends Controller {

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionShowcase() {
        $searchModel = new TransplantregisterSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('showcase', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    public function actionNewcase() {
        $model = new Transplantregister();
        
        if ($model->load(Yii::$app->request->post())) {
             $birthdate = substr($_POST['birthdate'], 7,4).substr($_POST['birthdate'], 4,2).substr($_POST['birthdate'], 1,2) ;
             $model->birthdate = $birthdate;
            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            return $this->render('newcase', [
                        'model' => $model,
            ]);
        }
    }

    public function actionUpdate($id) {
        /* login ถูกต้อง 
        $birth = isset($_REQUEST['birthdate']) ? $_REQUEST['birthdate'] : date('d-m-Y');
        $birthdate = substr($birth, 6, 4) .'-'. substr($birth, 3, 2) .'-'. substr($birth, 0, 2) ;
        */
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $birth = $model->birthdate ;
            $regis = $model->dateregister ;
            $birthdate = substr($birth, 6, 4) - 543 .'-'. substr($birth, 3, 2) .'-'. substr($birth, 0, 2) ;
            $regisdate = substr($regis, 6, 4) - 543 .'-'. substr($regis, 3, 2) .'-'. substr($regis, 0, 2) ;
            $model->birthdate = $birthdate;
            $model->dateregister = $regisdate;
            if ($model->save()) {
                return $this->redirect([
                    'view', 
                    'id' => $model->id,
                    'birthdate' => $birthdate
                ]);
            }
        } else {
            return $this->render('update', [
                        'model' => $model,
            ]);
        }
    }

    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    protected function findModel($id) {
        if (($model = Transplantregister::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionAmplist($chwpart) {
        $countAmp = LibAmp::find()->where(['chwpart' => $chwpart])->count();
        $amps = LibAmp::find()->where(['chwpart' => $chwpart])->all();
        if ($countAmp > 0) {
            echo "<option value=''> -- โปรดเลือกอำเภอ -- </option>";
            foreach ($amps as $amp) {
                echo "<option value='" . $amp->amppart . "'>" .
                $amp->ampname . "</option>";
            }
        } else {
            echo "<option> - </option>";
        }
        return;
    }

    public function actionTmblist($amppart) {
        $countTmb = LibTmb::find()->where(['amppart' => $amppart])->count();
        $tmbs = LibTmb::find()->where(['amppart' => $amppart])->all();
        if ($countTmb > 0) {
            echo "<option value=''> -- โปรดเลือกตำบล -- </option>";
            foreach ($tmbs as $tmb) {
                echo "<option value='" . $tmb->tmbpart . "'>" .
                $tmb->tmbname . "</option>";
            }
        } else {
            echo "<option> - </option>";
        }
        return;
    }

}
