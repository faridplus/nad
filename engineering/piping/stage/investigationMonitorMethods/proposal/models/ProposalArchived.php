<?php

namespace nad\engineering\piping\stage\investigationMonitorMethods\proposal\models;

use nad\engineering\piping\stage\investigationMonitorMethods\proposal\models\Proposal;
use nad\engineering\piping\stage\investigationMonitorMethods\reference\models\Reference;
use nad\common\modules\investigation\proposal\models\ProposalArchived as BaseProposalArchived;

class ProposalArchived extends BaseProposalArchived
{
    const CONSUMER_CODE = Proposal::CONSUMER_CODE;

    public $moduleId = 'stage';
    public $referenceClassName = Reference::class;


    public function getBaseViewRoute()
    {
        return '/stage/investigationMonitorMethods/proposal/manage/view';
    }

    public static function find()
    {
        return parent::find()->andWhere(['nad_investigation_proposal.consumer' => self::CONSUMER_CODE]);
    }
}
