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
            [['CLI_id', 'CLI_telefono'], 'integer'],
            [['CLI_nombre', 'CLI_apellidop', 'CLI_apellidom', 'CLI_rut', 'CLI_fecha_nacimiento', 'CLI_genero', 'CLI_email', 'CLI_direccion'], 'safe'],
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
            'CLI_id' => $this->CLI_id,
            'CLI_fecha_nacimiento' => $this->CLI_fecha_nacimiento,
            'CLI_telefono' => $this->CLI_telefono,
        ]);

        $query->andFilterWhere(['like', 'CLI_nombre', $this->CLI_nombre])
            ->andFilterWhere(['like', 'CLI_apellidop', $this->CLI_apellidop])
            ->andFilterWhere(['like', 'CLI_apellidom', $this->CLI_apellidom])
            ->andFilterWhere(['like', 'CLI_rut', $this->CLI_rut])
            ->andFilterWhere(['like', 'CLI_genero', $this->CLI_genero])
            ->andFilterWhere(['like', 'CLI_email', $this->CLI_email])
            ->andFilterWhere(['like', 'CLI_direccion', $this->CLI_direccion]);

        return $dataProvider;
    }
}
