<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Feedbacks;

/**
 * FeedbacksSearch represents the model behind the search form of `app\models\Feedbacks`.
 */
class FeedbacksSearch extends Feedbacks
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'books_id', 'status'], 'integer'],
            [['title', 'text', 'name'], 'safe'],
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
        $query = Feedbacks::find();

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
            'books_id' => $this->books_id,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'text', $this->text])
            ->andFilterWhere(['like', 'name', $this->name]);

        return $dataProvider;
    }
}
