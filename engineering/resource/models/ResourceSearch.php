<?php
namespace nad\engineering\resource\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;

class ResourceSearch extends Resource
{
    public function attributes()
    {
        return array_merge(parent::attributes(), ['category.title']);
    }

    public function rules()
    {
        return [
            [['title', 'category.title', 'uniqueCode'], 'safe'],
        ];
    }

    public function search($params)
    {
        $query = Resource::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        $this->load($params);
        if (!$this->validate()) {
            $query->where('0=1');
            return $dataProvider;
        }
        $query->joinWith('category AS category');
        $query->andFilterWhere(['like', 'nad_eng_resource.title', $this->title]);
        $query->andFilterWhere(['like', 'uniqueCode', $this->uniqueCode]);
        $query->andFilterWhere(
            ['like', 'category.title', $this->getAttribute('category.title')]
        );
        return $dataProvider;
    }
}
