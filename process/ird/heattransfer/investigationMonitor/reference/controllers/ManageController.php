<?php

namespace nad\process\ird\heattransfer\investigationMonitor\reference\controllers;

use yii\helpers\ArrayHelper;
use yii\filters\AccessControl;
use nad\process\ird\heattransfer\investigationMonitor\reference\models\Reference;
use nad\process\ird\heattransfer\investigationMonitor\reference\models\ReferenceSearch;
use nad\common\modules\investigation\reference\controllers\ReferenceController;

class ManageController extends ReferenceController
{
    public function init()
    {
        $this->modelClass = Reference::class;
        $this->searchClass = ReferenceSearch::class;
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
                            //'roles' => ['heattransfer.investigation']
                        ]
                    ]
                ]
            ]
        );
    }
}
