<?php

namespace nad\process\materials\colors\investigationDesign\proposal\models;

use nad\process\materials\colors\investigationDesign\proposal\models\Proposal;
use nad\process\materials\colors\investigationDesign\reference\models\Reference;
use nad\common\modules\investigation\proposal\models\ProposalArchived as BaseProposalArchived;

class ProposalArchived extends BaseProposalArchived
{
    const CONSUMER_CODE = Proposal::CONSUMER_CODE;

    public $moduleId = 'colors';
    public $referenceClassName = Reference::class;


    public function getBaseViewRoute()
    {
        return '/colors/investigationDesign/proposal/manage/view';
    }

    public static function find()
    {
        return parent::find()->andWhere(['nad_investigation_proposal.consumer' => self::CONSUMER_CODE]);
    }
}
