<?php

namespace nad\process\ird\hydraulic\investigationMonitor\report\models;

use nad\process\ird\hydraulic\investigationMonitor\report\models\Report;
use nad\process\ird\hydraulic\investigationMonitor\reference\models\Reference;
use nad\common\modules\investigation\report\models\ReportArchived as BaseReportArchived;

class ReportArchived extends BaseReportArchived
{
    const CONSUMER_CODE = Report::CONSUMER_CODE;

    public $moduleId = 'hydraulic';
    public $referenceClassName = Reference::class;


    public function getBaseViewRoute()
    {
        return '/hydraulic/investigationMonitor/report/manage/view';
    }

    public static function find()
    {
        return parent::find()->andWhere(['nad_investigation_report.consumer' => self::CONSUMER_CODE]);
    }
}
