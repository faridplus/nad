<?php

namespace modules\nad\supplier\backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;

class SupplierSearch extends Supplier
{
    public function rules()
    {
        return [
            [['name', 'isForeign', 'type', 'isActive'], 'safe'],
        ];
    }

    public function scenarios()
    {
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Supplier::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => [
                'defaultOrder' => [
                    'createdAt' => SORT_DESC,
                ],
            ],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'isForeign' => $this->isForeign,
            'isActive' => $this->isActive,
            'type' => $this->type,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name]);

        if (!empty($params['SupplierSearch']['equipments'])) {
            $query->joinWith('equips as equipment');
            $query->andFilterWhere(['like', 'equipment.title', $params['SupplierSearch']['equipments']]);
        }
        if (!empty($params['SupplierSearch']['materials'])) {
            $query->joinWith('mats as material');
            $query->andFilterWhere(['like', 'material.title', $params['SupplierSearch']['materials']]);
        }


        return $dataProvider;
    }
}
