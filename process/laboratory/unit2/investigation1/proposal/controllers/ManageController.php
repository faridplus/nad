<?php

namespace nad\process\laboratory\unit2\investigation1\proposal\controllers;

use yii\helpers\ArrayHelper;
use yii\filters\AccessControl;
use nad\process\laboratory\unit2\investigation1\proposal\models\Proposal;
use nad\process\laboratory\unit2\investigation1\proposal\models\ProposalArchived;
use nad\process\laboratory\unit2\investigation1\proposal\models\ProposalSearch;
use nad\process\laboratory\unit2\investigation1\proposal\models\ProposalArchivedSearch;
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
