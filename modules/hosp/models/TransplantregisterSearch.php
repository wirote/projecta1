<?php

namespace app\modules\hosp\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\hosp\models\Transplantregister;

/**
 * TransplantregisterSearch represents the model behind the search form about `app\modules\hosp\models\Transplantregister`.
 */
class TransplantregisterSearch extends Transplantregister
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['pname', 'fname', 'lname', 'birthdate', 'cid', 'occupation', 'houseid', 'moo', 'building', 'soi', 'road', 'tambon', 'ampur', 'changwat', 'postcode', 'telhome', 'telmobile', 'email', 'heart', 'liver', 'renal', 'lung', 'eye', 'allorgan', 'donor', 'requester', 'telrequest', 'man1', 'telman1', 'man2', 'telman2', 'dateregister', 'userregister', 'upd'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Transplantregister::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'birthdate' => $this->birthdate,
            'dateregister' => $this->dateregister,
            'upd' => $this->upd,
        ]);

        $query->andFilterWhere(['like', 'pname', $this->pname])
            ->andFilterWhere(['like', 'fname', $this->fname])
            ->andFilterWhere(['like', 'lname', $this->lname])
            ->andFilterWhere(['like', 'cid', $this->cid])
            ->andFilterWhere(['like', 'occupation', $this->occupation])
            ->andFilterWhere(['like', 'houseid', $this->houseid])
            ->andFilterWhere(['like', 'moo', $this->moo])
            ->andFilterWhere(['like', 'building', $this->building])
            ->andFilterWhere(['like', 'soi', $this->soi])
            ->andFilterWhere(['like', 'road', $this->road])
            ->andFilterWhere(['like', 'tambon', $this->tambon])
            ->andFilterWhere(['like', 'ampur', $this->ampur])
            ->andFilterWhere(['like', 'changwat', $this->changwat])
            ->andFilterWhere(['like', 'postcode', $this->postcode])
            ->andFilterWhere(['like', 'telhome', $this->telhome])
            ->andFilterWhere(['like', 'telmobile', $this->telmobile])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'heart', $this->heart])
            ->andFilterWhere(['like', 'liver', $this->liver])
            ->andFilterWhere(['like', 'renal', $this->renal])
            ->andFilterWhere(['like', 'lung', $this->lung])
            ->andFilterWhere(['like', 'eye', $this->eye])
            ->andFilterWhere(['like', 'allorgan', $this->allorgan])
            ->andFilterWhere(['like', 'donor', $this->donor])
            ->andFilterWhere(['like', 'requester', $this->requester])
            ->andFilterWhere(['like', 'telrequest', $this->telrequest])
            ->andFilterWhere(['like', 'man1', $this->man1])
            ->andFilterWhere(['like', 'telman1', $this->telman1])
            ->andFilterWhere(['like', 'man2', $this->man2])
            ->andFilterWhere(['like', 'telman2', $this->telman2])
            ->andFilterWhere(['like', 'userregister', $this->userregister]);

        return $dataProvider;
    }
}
