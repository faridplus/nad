<?php

namespace nad\engineering\instrument\device\investigationDesign\instruction\controllers;

use yii\helpers\ArrayHelper;
use yii\filters\AccessControl;
use nad\engineering\instrument\device\investigationDesign\instruction\models\Category;
use nad\engineering\instrument\device\investigationDesign\instruction\models\CategorySearch;
use nad\common\modules\investigation\instruction\controllers\InstructionCategoryController;

class CategoryController extends InstructionCategoryController
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
                            //'roles' => ['device.investigationDesign']
                        ]
                    ]
                ]
            ]
        );
    }
}
