<?php

namespace nad\process\materials\alkalineWasher\investigationDesign\proposal\models;

use nad\process\materials\alkalineWasher\investigationDesign\reference\models\Reference;
use nad\common\modules\investigation\proposal\models\Proposal as BaseProposal;

class Proposal extends BaseProposal
{
    const CONSUMER_CODE = Proposal::class;

    public $moduleId= 'alkalineWasher';
    public $referenceClassName = Reference::class;

    public function getBaseViewRoute()
    {
        return '/alkalineWasher/investigationDesign/proposal/manage/view';
    }

    public static function find()
    {
        return parent::find()->andWhere(['nad_investigation_proposal.consumer' => self::CONSUMER_CODE]);
    }
}
