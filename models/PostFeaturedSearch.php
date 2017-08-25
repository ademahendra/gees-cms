<?php

namespace gees\cms\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use gees\cms\models\PostFeatured;

/**
 * PostFeaturedSearch represents the model behind the search form about `gees\cms\models\PostFeatured`.
 */
class PostFeaturedSearch extends PostFeatured
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'product_id', 'created_by', 'update_by', 'status'], 'integer'],
            [['start_date', 'end_date', 'created_at', 'update_at'], 'safe'],
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
        $query = PostFeatured::find();

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
            'id' => $this->id,
            'product_id' => $this->product_id,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'created_at' => $this->created_at,
            'update_at' => $this->update_at,
            'created_by' => $this->created_by,
            'update_by' => $this->update_by,
            'status' => $this->status,
        ]);

        return $dataProvider;
    }
}
