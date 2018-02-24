<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Rule;

/**
 * RuleSearch represents the model behind the search form of `app\models\Rule`.
 */
class RuleSearch extends Rule
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'created_at', 'updated_at'], 'integer'],
            [['rule_name', 'forward_path', 'source_address', 'before_behaviors', 'after_behaviors'], 'safe'],
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
        $query = Rule::find();

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
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'rule_name', $this->rule_name])
            ->andFilterWhere(['like', 'forward_path', $this->forward_path])
            ->andFilterWhere(['like', 'source_address', $this->source_address])
            ->andFilterWhere(['like', 'before_behaviors', $this->before_behaviors])
            ->andFilterWhere(['like', 'after_behaviors', $this->after_behaviors]);

        return $dataProvider;
    }
}
