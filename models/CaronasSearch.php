<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Caronas;

/**
 * CaronasSearch represents the model behind the search form of `app\models\Caronas`.
 */
class CaronasSearch extends Caronas
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'contato', 'user_fk'], 'integer'],
            [['local_saida', 'local_destino', 'data_saida'], 'safe'],
            [['preco'], 'number'],
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
        $query = Caronas::find();

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
            'preco' => $this->preco,
            'contato' => $this->contato,
            'data_saida' => $this->data_saida,
            'user_fk' => $this->user_fk,
        ]);

        $query->andFilterWhere(['like', 'local_saida', $this->local_saida])
            ->andFilterWhere(['like', 'local_destino', $this->local_destino]);

        return $dataProvider;
    }
}
