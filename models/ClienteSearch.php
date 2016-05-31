<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cliente;

/**
 * ClienteSearch represents the model behind the search form about `app\models\Cliente`.
 */
class ClienteSearch extends Cliente
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CLI_ID', 'CLI_TELEFONO'], 'integer'],
            [['CLI_NOMBRE', 'CLI_APELLIDO', 'CLI_RUT', 'CLI_FECH_NAC', 'CLI_DIRECCION', 'CLI_GENERO', 'CLI_EMAIL'], 'safe'],
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
        $query = Cliente::find();

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
            'CLI_ID' => $this->CLI_ID,
            'CLI_FECH_NAC' => $this->CLI_FECH_NAC,
            'CLI_TELEFONO' => $this->CLI_TELEFONO,
        ]);

        $query->andFilterWhere(['like', 'CLI_NOMBRE', $this->CLI_NOMBRE])
            ->andFilterWhere(['like', 'CLI_APELLIDO', $this->CLI_APELLIDO])
            ->andFilterWhere(['like', 'CLI_RUT', $this->CLI_RUT])
            ->andFilterWhere(['like', 'CLI_DIRECCION', $this->CLI_DIRECCION])
            ->andFilterWhere(['like', 'CLI_GENERO', $this->CLI_GENERO])
            ->andFilterWhere(['like', 'CLI_EMAIL', $this->CLI_EMAIL]);

        return $dataProvider;
    }
}
