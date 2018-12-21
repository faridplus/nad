<?php

namespace nad\research\modules\resource\models;

use yii\data\ActiveDataProvider;

class ResourceSearch extends Resource
{
    public function rules()
    {
        return [
            [['title', 'uniqueCode'], 'string']
        ];
    }

    public function search($params)
    {
        $query = Resource::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => [
                'attributes' => [
                    'createdAt'
                ],
                'defaultOrder' => [
                    'createdAt' => SORT_DESC
                ]
            ]
        ]);

        $this->load($params);
        if (!$this->validate()) {
            return $dataProvider;
        }

        $query->andFilterWhere(['like', 'uniqueCode', $this->uniqueCode]);

        $query->andFilterWhere(['like', 'title', $this->title]);

        return $dataProvider;
    }
}
