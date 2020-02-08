<?php

namespace nad\engineering\control\stage\investigationImprovement\proposal\controllers;

use yii\helpers\ArrayHelper;
use yii\filters\AccessControl;
use nad\engineering\control\stage\investigationImprovement\proposal\models\Proposal;
use nad\engineering\control\stage\investigationImprovement\proposal\models\ProposalArchived;
use nad\engineering\control\stage\investigationImprovement\proposal\models\ProposalSearch;
use nad\engineering\control\stage\investigationImprovement\proposal\models\ProposalArchivedSearch;
use nad\common\modules\investigation\proposal\controllers\ProposalController;

class ManageController extends ProposalController
{
    public function init()
    {
        $this->archivedClassName = ProposalArchived::class;
        $this->archivedSearchClassName = ProposalArchivedSearch::class;
        $this->modelClass = Proposal::class;
        $this->searchClass = ProposalSearch::class;
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
                            'roles' => ['@']
                        ]
                    ]
                ]
            ]
        );
    }
}
