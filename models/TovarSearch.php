<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tovar;

/**
 * TovarSearch represents the model behind the search form of `app\models\Tovar`.
 */
class TovarSearch extends Tovar
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['Название', 'Размер', 'Ингридиенты', 'Цена', 'Вес', 'Категория', 'Наличие', 'Описание'], 'safe'],
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
        $query = Tovar::find();

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
        ]);

        $query->andFilterWhere(['like', 'Название', $this->Название])
            ->andFilterWhere(['like', 'Размер', $this->Размер])
            ->andFilterWhere(['like', 'Ингридиенты', $this->Ингридиенты])
            ->andFilterWhere(['like', 'Цена', $this->Цена])
            ->andFilterWhere(['like', 'Вес', $this->Вес])
            ->andFilterWhere(['like', 'Категория', $this->Категория])
            ->andFilterWhere(['like', 'Наличие', $this->Наличие])
            ->andFilterWhere(['like', 'Описание', $this->Описание]);

        return $dataProvider;
    }
}
