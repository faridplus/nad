<?php

namespace nad\engineering\instrument\device\investigationMonitorMethods\proposal\models;

use nad\engineering\instrument\device\investigationMonitorMethods\proposal\models\Proposal;
use nad\engineering\instrument\device\investigationMonitorMethods\reference\models\Reference;
use nad\common\modules\investigation\proposal\models\ProposalArchived as BaseProposalArchived;

class ProposalArchived extends BaseProposalArchived
{
    const CONSUMER_CODE = Proposal::CONSUMER_CODE;

    public $moduleId = 'device';
    public $referenceClassName = Reference::class;


    public function getBaseViewRoute()
    {
        return '/device/investigationMonitorMethods/proposal/manage/view';
    }

    public static function find()
    {
        return parent::find()->andWhere(['nad_investigation_proposal.consumer' => self::CONSUMER_CODE]);
    }
}
