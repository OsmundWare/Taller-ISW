<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\FICHAMASCOTA;

/**
 * FICHAMASCOTASearch represents the model behind the search form about `app\models\FICHAMASCOTA`.
 */
class FICHAMASCOTASearch extends FICHAMASCOTA
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['FIC_ID', 'FIC_PRESION_MAS', 'FIC_PESO_MAS'], 'integer'],
            [['FIC_FEC_NAC', 'FIC_OBSERVACION', 'FIC_NOMBRE_MAS', 'FIC_COLOR', 'FIC_RAZA', 'FIC_ESPECIE', 'FIC_GENERO'], 'safe'],
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
        $query = FICHAMASCOTA::find();

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
            'FIC_ID' => $this->FIC_ID,
            'FIC_FEC_NAC' => $this->FIC_FEC_NAC,
            'FIC_PRESION_MAS' => $this->FIC_PRESION_MAS,
            'FIC_PESO_MAS' => $this->FIC_PESO_MAS,
        ]);

        $query->andFilterWhere(['like', 'FIC_OBSERVACION', $this->FIC_OBSERVACION])
            ->andFilterWhere(['like', 'FIC_NOMBRE_MAS', $this->FIC_NOMBRE_MAS])
            ->andFilterWhere(['like', 'FIC_COLOR', $this->FIC_COLOR])
            ->andFilterWhere(['like', 'FIC_RAZA', $this->FIC_RAZA])
            ->andFilterWhere(['like', 'FIC_ESPECIE', $this->FIC_ESPECIE])
            ->andFilterWhere(['like', 'FIC_GENERO', $this->FIC_GENERO]);

        return $dataProvider;
    }
}
