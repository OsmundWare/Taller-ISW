<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Veterinario;

/**
 * VeterinarioSearch represents the model behind the search form about `app\models\Veterinario`.
 */
class VeterinarioSearch extends Veterinario
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['VET_ID'], 'integer'],
            [['VET_NOMBRE', 'VET_APELLIDO', 'VET_RUT','username'], 'safe'],

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
        $query = Veterinario::find();

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
            'VET_ID' => $this->VET_ID,
        ]);

        $query->andFilterWhere(['like', 'VET_NOMBRE', $this->VET_NOMBRE])
            ->andFilterWhere(['like', 'VET_APELLIDO', $this->VET_APELLIDO])
            ->andFilterWhere(['like', 'VET_RUT', $this->VET_RUT]);

        return $dataProvider;
    }
}
