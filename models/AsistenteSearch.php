<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Asistente;

/**
 * AsistenteSearch represents the model behind the search form about `app\models\Asistente`.
 */
class AsistenteSearch extends Asistente
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ASI_ID'], 'integer'],
            [['ASI_NOMBRE', 'ASI_APELLIDO', 'ASI_RUT', 'ASI_CARGO','ASI_EMAIL'], 'safe'],
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
        $query = Asistente::find();

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
            'ASI_ID' => $this->ASI_ID,
        ]);

        $query->andFilterWhere(['like', 'ASI_NOMBRE', $this->ASI_NOMBRE])
            ->andFilterWhere(['like', 'ASI_APELLIDO', $this->ASI_APELLIDO])
            ->andFilterWhere(['like', 'ASI_RUT', $this->ASI_RUT])
            ->andFilterWhere(['like', 'ASI_CARGO', $this->ASI_CARGO]);

        return $dataProvider;
    }
}
