<?php

namespace nad\seaport\wayside\unit1\investigation3\subject\models;

use nad\seaport\wayside\unit1\investigation3\subject\models\Subject;
use nad\seaport\wayside\unit1\investigation3\reference\models\Reference;
use nad\common\modules\investigation\subject\models\Subject as BaseSubject;

class Subject extends BaseSubject
{
    const CONSUMER_CODE = Subject::class;

    public $moduleId = 'unit1';
    public $referenceClassName = Reference::class;

    // public function getProposal()
    // {
    //     return $this->hasOne(Proposal::class, ['id' => 'proposalId']);
    // }

    public function getBaseViewRoute()
    {
        return '/unit1/investigation3/subject/manage/view';
    }

    public static function find()
    {
        return parent::find()->andWhere(['nad_investigation_subject.consumer' => self::CONSUMER_CODE]);
    }
}
