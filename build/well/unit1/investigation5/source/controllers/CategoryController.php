<?php

namespace nad\build\well\unit1\investigation5\source\controllers;

use yii\helpers\ArrayHelper;
use yii\filters\AccessControl;
use nad\build\well\unit1\investigation5\source\models\Category;
use nad\build\well\unit1\investigation5\source\models\CategorySearch;
use nad\common\modules\investigation\source\controllers\SourceCategoryController;

class CategoryController extends SourceCategoryController
{
    public function init()
    {
        $this->modelClass = Category::class;
        $this->searchClass = CategorySearch::class;
    }

    public function behaviors()
    {
        return ArrayHelper::merge(
            parent::behaviors(),
            [
                'access' => [
                    'class' => AccessControl::class,
                    'rules' => [
                        [
                            'allow' => true,
                            'roles' => ['@']
                        ]
                    ]
                ]
            ]
        );
    }
}
