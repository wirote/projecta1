<?php

namespace app\modules\hosp\controllers;

use yii\web\Controller;
/* Yii Extension */
use Yii;
use yii\helpers\Html;
use yii\data\ArrayDataProvider;
use yii\data\ActiveDataProvider;
use kartik\mpdf\Pdf;
/* Model */
use app\modules\wirote\models\SysMenu;
use app\modules\hosp\models\Transplantregister;
use app\modules\hosp\models\TransplantregisterSearch;
use app\modules\hosp\models\LibAmp;
use app\modules\hosp\models\LibTmb;
use dektrium\user\models\Profile;

class DefaultController extends Controller {

    public function actionIndex() {
        $menu = SysMenu::find()
                ->where('used=:used and grpmenu=:grp', [':used' => 1, ':grp' => 'TP']);
        $dataProvider = new ActiveDataProvider([
            'query' => $menu,
            'pagination' => FALSE
        ]);
        return $this->render('index', [
                    'dataProvider' => $dataProvider
        ]);
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
        /*********/
        $id = Yii::$app->user->id;
        $profdata = Profile::find()->where('user_id =:id', [':id'=> $id])->one();
        /*********/
        $model = new Transplantregister();
        
        if ($model->load(Yii::$app->request->post())) {
             $birth = $model->birthdate ;
            $regis = $model->dateregister ;
            $birthdate = substr($birth, 6, 4) - 543 .'-'. substr($birth, 3, 2) .'-'. substr($birth, 0, 2) ;
            $regisdate = substr($regis, 6, 4) - 543 .'-'. substr($regis, 3, 2) .'-'. substr($regis, 0, 2) ;
            $model->birthdate = $birthdate;
            $model->dateregister = $regisdate;
            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            return $this->render('newcase', [
                'model' => $model,
                'hcode' =>$profdata->hcode,
                'chwcode' =>$profdata->chwcode,
            ]);
        }
    }

    public function actionUpdate($id) {
        /* login ถูกต้อง 
        $birth = isset($_REQUEST['birthdate']) ? $_REQUEST['birthdate'] : date('d-m-Y');
        $birthdate = substr($birth, 6, 4) .'-'. substr($birth, 3, 2) .'-'. substr($birth, 0, 2) ;
        */
        $id = Yii::$app->user->id;
        $profdata = Profile::find()->where('user_id =:id', [':id'=> $id])->one();
        
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
                'hcode' =>$profdata->hcode,
                'chwcode' =>$profdata->chwcode,
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

    public function actionPrinter() {
        $id = isset($_GET['id']) ? $_GET['id'] : 0 ;
        $sql = " 
SELECT a.id, a.pname, a.fname, a.lname, a.birthdate, a.cid, a.occupation
, a.houseid, a.moo, a.building, a.soi, a.road
, t.tmbname as tambon, d.ampname as ampur, c.chwname as changwat
, a.postcode, a.telhome, a.telmobile, a.email
, a.heart, a.liver, a.renal, a.lung, a.eye, a.allorgan, a.donor
, a.requester, a.telrequest, a.man1, a.telman1, a.man2, a.telman2, a.userregister, a.upd
FROM transplantregister a join lib_chw c on a.changwat = c.chwpart
join lib_amp d on a.ampur = d.amppart
join lib_tmb t on a.tambon = t.tmbpart
WHERE a.id = $id
";
      $model = Yii::$app->db->createCommand($sql)->queryAll();
      if (isset($model) && !empty($model[0])) {
         $pdf = new Pdf([
             'mode' => Pdf::MODE_CORE, // leaner size using standard fonts
             'content' => $this->renderPartial('printer',[
                 'model'=>$model,
             ]),
             'options' => [
                 'title' => 'RbInfo Report to PDF',
                 //'subject' => 'Generating PDF files via yii2-mpdf extension has never been easy'
               ],
             'methods' => [
                 'SetHeader' => [' '],
                 //'SetHeader' => ['Generated By: งานสารสนเทศ โรงพยาบาลราชบุรี|| พิมพ์เมื่อ: ' . date("r")],
                 //'SetFooter' => ['|Page {PAGENO}|'],
                 'SetFooter' => [' '],
               ]
         ]);
         return $pdf->render();
      } else {
         return $this->redirect(['/hosp/default/invoiceregis', 'regisid' => $regisid]);
      }
    }
}
