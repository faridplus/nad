<?php

namespace nad\engineering\electricity\device\device\controllers;

use yii\helpers\ArrayHelper;
use yii\filters\AccessControl;
use nad\engineering\electricity\device\device\models\PartInstance;
use nad\engineering\electricity\device\device\models\PartInstanceSearch;
use nad\common\modules\device\controllers\PartInstanceController as ParentController;

class PartInstanceController extends ParentController
{
    public function init()
    {
        $this->modelClass = PartInstance::class;
        $this->searchClass = PartInstanceSearch::class;
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
                            'actions' => [
                                'index',
                                'view',
                                'create',
                                'update'
                            ],
                            // 'roles' => ['nad.engineering.electricity.device.device']
                            'roles' => ['@']
                        ]
                    ]
                ]
            ]
        );
    }
}
