<?php

namespace nad\engineering\instrument\device\investigationMonitorMethods\proposal\models;

use nad\engineering\instrument\device\investigationMonitorMethods\reference\models\Reference;
use nad\common\modules\investigation\proposal\models\Proposal as BaseProposal;

class Proposal extends BaseProposal
{
    const CONSUMER_CODE = Proposal::class;

    public $moduleId= 'device';
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
