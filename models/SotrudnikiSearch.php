<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Sotrudniki;

/**
 * SotrudnikiSearch represents the model behind the search form of `app\models\Sotrudniki`.
 */
class SotrudnikiSearch extends Sotrudniki
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['Имя', 'Фамилия', 'Должность', 'Дата_ПриемаНаРаб', 'Зарплата', 'График_Работы', 'Номер', 'Примечание'], 'safe'],
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
        $query = Sotrudniki::find();

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

        $query->andFilterWhere(['like', 'Имя', $this->Имя])
            ->andFilterWhere(['like', 'Фамилия', $this->Фамилия])
            ->andFilterWhere(['like', 'Должность', $this->Должность])
            ->andFilterWhere(['like', 'Дата_ПриемаНаРаб', $this->Дата_ПриемаНаРаб])
            ->andFilterWhere(['like', 'Зарплата', $this->Зарплата])
            ->andFilterWhere(['like', 'График_Работы', $this->График_Работы])
            ->andFilterWhere(['like', 'Номер', $this->Номер])
            ->andFilterWhere(['like', 'Примечание', $this->Примечание]);

        return $dataProvider;
    }
}
