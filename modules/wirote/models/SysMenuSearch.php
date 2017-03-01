<?php

namespace app\modules\wirote\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\wirote\models\SysMenu;

/**
 * SysMenuSearch represents the model behind the search form about `app\modules\wirote\models\SysMenu`.
 */
class SysMenuSearch extends SysMenu
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'orderby'], 'integer'],
            [['namemenu', 'linkmenu', 'descmenu', 'grpmenu', 'used', 'datecreate', 'regisdate'], 'safe'],
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
        $query = SysMenu::find();

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
            'orderby' => $this->orderby,
            'datecreate' => $this->datecreate,
            'regisdate' => $this->regisdate,
        ]);

        $query->andFilterWhere(['like', 'namemenu', $this->namemenu])
            ->andFilterWhere(['like', 'linkmenu', $this->linkmenu])
            ->andFilterWhere(['like', 'descmenu', $this->descmenu])
            ->andFilterWhere(['like', 'grpmenu', $this->grpmenu])
            ->andFilterWhere(['like', 'used', $this->used]);

        return $dataProvider;
    }
}
