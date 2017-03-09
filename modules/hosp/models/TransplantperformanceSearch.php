<?php

namespace app\modules\hosp\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\hosp\models\Transplantperformance;

/**
 * TransplantperformanceSearch represents the model behind the search form about `app\modules\hosp\models\Transplantperformance`.
 */
class TransplantperformanceSearch extends Transplantperformance
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'regis_id'], 'integer'],
            [['hcode', 'hn', 'an', 'potential', 'potential_ward', 'potential_date', 'potential_time', 'potential_age', 'potential_hiv', 'potential_infect', 'potential_ca', 'potential_reason', 'eligible', 'eligible_reason', 'eligible_ward', 'eligible_date', 'eligible_time', 'actual1', 'actual1_ward', 'actual1_date', 'actual1_time', 'actual1_reason', 'actual2', 'actual2_ward', 'actual2_date', 'actual2_time', 'actual2_renal', 'actual2_liver', 'actual2_heart', 'actual2_lung', 'actual2_pancreas', 'actual2_reason', 'utilized', 'utilized_renal', 'utilized_liver', 'utilized_heart', 'utilized_lung', 'utilized_pancreas', 'remark', 'reporter', 'dateregister'], 'safe'],
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
        $query = Transplantperformance::find();

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
            'regis_id' => $this->regis_id,
            'potential_date' => $this->potential_date,
            'eligible_date' => $this->eligible_date,
            'actual1_date' => $this->actual1_date,
            'actual2_date' => $this->actual2_date,
            'dateregister' => $this->dateregister,
        ]);

        $query->andFilterWhere(['like', 'hcode', $this->hcode])
            ->andFilterWhere(['like', 'hn', $this->hn])
            ->andFilterWhere(['like', 'an', $this->an])
            ->andFilterWhere(['like', 'potential', $this->potential])
            ->andFilterWhere(['like', 'potential_ward', $this->potential_ward])
            ->andFilterWhere(['like', 'potential_time', $this->potential_time])
            ->andFilterWhere(['like', 'potential_age', $this->potential_age])
            ->andFilterWhere(['like', 'potential_hiv', $this->potential_hiv])
            ->andFilterWhere(['like', 'potential_infect', $this->potential_infect])
            ->andFilterWhere(['like', 'potential_ca', $this->potential_ca])
            ->andFilterWhere(['like', 'potential_reason', $this->potential_reason])
            ->andFilterWhere(['like', 'eligible', $this->eligible])
            ->andFilterWhere(['like', 'eligible_reason', $this->eligible_reason])
            ->andFilterWhere(['like', 'eligible_ward', $this->eligible_ward])
            ->andFilterWhere(['like', 'eligible_time', $this->eligible_time])
            ->andFilterWhere(['like', 'actual1', $this->actual1])
            ->andFilterWhere(['like', 'actual1_ward', $this->actual1_ward])
            ->andFilterWhere(['like', 'actual1_time', $this->actual1_time])
            ->andFilterWhere(['like', 'actual1_reason', $this->actual1_reason])
            ->andFilterWhere(['like', 'actual2', $this->actual2])
            ->andFilterWhere(['like', 'actual2_ward', $this->actual2_ward])
            ->andFilterWhere(['like', 'actual2_time', $this->actual2_time])
            ->andFilterWhere(['like', 'actual2_renal', $this->actual2_renal])
            ->andFilterWhere(['like', 'actual2_liver', $this->actual2_liver])
            ->andFilterWhere(['like', 'actual2_heart', $this->actual2_heart])
            ->andFilterWhere(['like', 'actual2_lung', $this->actual2_lung])
            ->andFilterWhere(['like', 'actual2_pancreas', $this->actual2_pancreas])
            ->andFilterWhere(['like', 'actual2_reason', $this->actual2_reason])
            ->andFilterWhere(['like', 'utilized', $this->utilized])
            ->andFilterWhere(['like', 'utilized_renal', $this->utilized_renal])
            ->andFilterWhere(['like', 'utilized_liver', $this->utilized_liver])
            ->andFilterWhere(['like', 'utilized_heart', $this->utilized_heart])
            ->andFilterWhere(['like', 'utilized_lung', $this->utilized_lung])
            ->andFilterWhere(['like', 'utilized_pancreas', $this->utilized_pancreas])
            ->andFilterWhere(['like', 'remark', $this->remark])
            ->andFilterWhere(['like', 'reporter', $this->reporter]);

        return $dataProvider;
    }
}
