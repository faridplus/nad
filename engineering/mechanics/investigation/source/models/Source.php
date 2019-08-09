<?php

namespace nad\engineering\mechanics\investigation\source\models;

use nad\engineering\mechanics\investigation\proposal\models\Proposal;
use nad\engineering\mechanics\investigation\reference\models\Reference;
use nad\common\modules\investigation\source\models\Source as BaseSource;

class Source extends BaseSource
{
    const CONSUMER_CODE = 'nad\engineering\mechanics';

    public $moduleId = 'mechanics';
    public $referenceClassName = Reference::class;

    public function getProposals()
    {
        return $this->hasMany(Proposal::class, ['sourceId' => 'id']);
    }

    public function getBaseViewRoute()
    {
        return '/mechanics/investigation/source/manage/view';
    }

    public static function find()
    {
        return parent::find()->andWhere(['consumer' => self::CONSUMER_CODE]);
    }
}
