<?php

namespace nad\build\well\unit3\investigation2\proposal\models;

use nad\build\well\unit3\investigation2\proposal\models\Proposal;
use nad\build\well\unit3\investigation2\reference\models\Reference;
use nad\common\modules\investigation\proposal\models\ProposalArchived as BaseProposalArchived;

class ProposalArchived extends BaseProposalArchived
{
    const CONSUMER_CODE = Proposal::CONSUMER_CODE;

    public $moduleId = 'unit3';
    public $referenceClassName = Reference::class;


    public function getBaseViewRoute()
    {
        return '/unit3/investigation2/proposal/manage/view';
    }

    public static function find()
    {
        return parent::find()->andWhere(['nad_investigation_proposal.consumer' => self::CONSUMER_CODE]);
    }
}
