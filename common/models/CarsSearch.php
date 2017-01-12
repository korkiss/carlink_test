<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Cars;

/**
 * CarsSearch represents the model behind the search form about `common\models\Cars`.
 */
class CarsSearch extends Cars
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'car_year'], 'integer'],
            [['photo', 'car_type', 'car_model', 'car_modification', 'car_mileage'], 'safe'],
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
        $query = Cars::find();

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
            'car_year' => $this->car_year,
        ]);

        $query->andFilterWhere(['like', 'photo', $this->photo])
            ->andFilterWhere(['like', 'car_type', $this->car_type])
            ->andFilterWhere(['like', 'car_model', $this->car_model])
            ->andFilterWhere(['like', 'car_modification', $this->car_modification])
            ->andFilterWhere(['like', 'car_mileage', $this->car_mileage]);

        return $dataProvider;
    }
}
