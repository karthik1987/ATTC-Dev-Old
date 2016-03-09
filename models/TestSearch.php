<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Test;

/**
 * TestSearch represents the model behind the search form about `app\models\Test`.
 */
class TestSearch extends Test
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TM_Test_Id', 'TRM_Trade_Id'], 'integer'],
            [['TM_Date', 'TM_Capacity', 'TM_Status'], 'safe'],
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
        $query = Test::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'TM_Test_Id' => $this->TM_Test_Id,
            'TRM_Trade_Id' => $this->TRM_Trade_Id,
            'TM_Date' => $this->TM_Date,
        ]);

        $query->andFilterWhere(['like', 'TM_Capacity', $this->TM_Capacity])
            ->andFilterWhere(['like', 'TM_Status', $this->TM_Status]);

        return $dataProvider;
    }
}
