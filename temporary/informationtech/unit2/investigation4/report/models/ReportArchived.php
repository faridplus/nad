<?php

namespace nad\temporary\informationtech\unit2\investigation4\report\models;

use nad\temporary\informationtech\unit2\investigation4\report\models\Report;
use nad\temporary\informationtech\unit2\investigation4\reference\models\Reference;
use nad\common\modules\investigation\report\models\ReportArchived as BaseReportArchived;

class ReportArchived extends BaseReportArchived
{
    const CONSUMER_CODE = Report::CONSUMER_CODE;

    public $moduleId = 'unit2';
    public $referenceClassName = Reference::class;


    public function getBaseViewRoute()
    {
        return '/unit2/investigation4/report/manage/view';
    }

    public static function find()
    {
        return parent::find()->andWhere(['nad_investigation_report.consumer' => self::CONSUMER_CODE]);
    }
}
