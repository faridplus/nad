<?php

namespace nad\process\materials\disinfectant\investigationDesign\subject\controllers;

use yii\helpers\ArrayHelper;
use yii\filters\AccessControl;
use nad\process\materials\disinfectant\investigationDesign\subject\models\Subject;
use nad\process\materials\disinfectant\investigationDesign\subject\models\SubjectArchived;
use nad\process\materials\disinfectant\investigationDesign\subject\models\SubjectSearch;
use nad\process\materials\disinfectant\investigationDesign\subject\models\SubjectArchivedSearch;
use nad\common\modules\investigation\subject\controllers\SubjectController;

class ManageController extends SubjectController
{
    public function init()
    {
        $this->archivedClassName = SubjectArchived::class;
        $this->archivedSearchClassName = SubjectArchivedSearch::class;
        $this->modelClass = Subject::class;
        $this->searchClass = SubjectSearch::class;
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
                                'certificate',
                                'view-history',
                                'index-history'
                            ],
                            'roles' => ['disinfectant.investigationDesign']
                        ]
                    ]
                ]
            ]
        );
    }
}