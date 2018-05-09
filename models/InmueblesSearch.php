<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Inmuebles;

/**
 * InmueblesSearch represents the model behind the search form of `app\models\Inmuebles`.
 */
class InmueblesSearch extends Inmuebles
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'propietario_id', 'n_habitaciones', 'n_wc'], 'integer'],
            [['precio'], 'number'],
            [['has_lavavajillas', 'has_garage', 'has_trastero'], 'boolean'],
            [['detalles'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Inmuebles::find();

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
            'propietario_id' => $this->propietario_id,
            'n_habitaciones' => $this->n_habitaciones,
            'n_wc' => $this->n_wc,
            'precio' => $this->precio,
            'has_lavavajillas' => $this->has_lavavajillas,
            'has_garage' => $this->has_garage,
            'has_trastero' => $this->has_trastero,
        ]);

        $query->andFilterWhere(['ilike', 'detalles', $this->detalles]);

        return $dataProvider;
    }
}
