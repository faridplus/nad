<?php

namespace nad\engineering\piping\stage\investigationDesign\proposal\controllers;

use yii\helpers\ArrayHelper;
use yii\filters\AccessControl;
use nad\engineering\piping\stage\investigationDesign\proposal\models\Category;
use nad\engineering\piping\stage\investigationDesign\proposal\models\CategorySearch;
use nad\common\modules\investigation\proposal\controllers\ProposalCategoryController;

class CategoryController extends ProposalCategoryController
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
                            //'roles' => ['stage.investigationDesign']
                        ]
                    ]
                ]
            ]
        );
    }
}
