<?php

namespace nad\temporary\financial\unit3\investigation3\subject\models;

use nad\temporary\financial\unit3\investigation3\subject\models\Subject;
use nad\temporary\financial\unit3\investigation3\reference\models\Reference;
use nad\common\modules\investigation\subject\models\SubjectArchived as BaseSubjectArchived;

class SubjectArchived extends BaseSubjectArchived
{
    const CONSUMER_CODE = Subject::CONSUMER_CODE;

    public $moduleId = 'unit3';
    public $referenceClassName = Reference::class;


    public function getBaseViewRoute()
    {
        return '/unit3/investigation3/subject/manage/view';
    }

    public static function find()
    {
        return parent::find()->andWhere(['nad_investigation_subject.consumer' => self::CONSUMER_CODE]);
    }
}
