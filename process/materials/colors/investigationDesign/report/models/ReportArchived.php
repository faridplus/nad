<?php

namespace nad\process\materials\colors\investigationDesign\report\models;

use nad\process\materials\colors\investigationDesign\report\models\Report;
use nad\process\materials\colors\investigationDesign\reference\models\Reference;
use nad\common\modules\investigation\report\models\ReportArchived as BaseReportArchived;

class ReportArchived extends BaseReportArchived
{
    const CONSUMER_CODE = Report::CONSUMER_CODE;

    public $moduleId = 'colors';
    public $referenceClassName = Reference::class;


    public function getBaseViewRoute()
    {
        return '/colors/investigationDesign/report/manage/view';
    }

    public static function find()
    {
        return parent::find()->andWhere(['nad_investigation_report.consumer' => self::CONSUMER_CODE]);
    }
}
