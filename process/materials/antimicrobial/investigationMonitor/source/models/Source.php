<?php

namespace nad\process\materials\antimicrobial\investigationMonitor\source\models;

use nad\process\materials\antimicrobial\investigationMonitor\proposal\models\Proposal;
use nad\process\materials\antimicrobial\investigationMonitor\reference\models\Reference;
use nad\common\modules\investigation\source\models\Source as BaseSource;

class Source extends BaseSource
{
    const CONSUMER_CODE = Source::class;

    public $moduleId = 'antimicrobial';
    public $referenceClassName = Reference::class;

    public function getProposals()
    {
        return $this->hasMany(Proposal::class, ['sourceId' => 'id']);
    }

    public function getBaseViewRoute()
    {
        return '/antimicrobial/investigationMonitor/source/manage/view';
    }

    public static function find()
    {
        return parent::find()->andWhere(['nad_investigation_source.consumer' => self::CONSUMER_CODE]);
    }
}
