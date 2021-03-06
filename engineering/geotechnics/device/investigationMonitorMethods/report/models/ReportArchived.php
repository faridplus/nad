<?php

namespace nad\engineering\geotechnics\device\investigationMonitorMethods\report\models;

use nad\engineering\geotechnics\device\investigationMonitorMethods\report\models\Report;
use nad\engineering\geotechnics\device\investigationMonitorMethods\reference\models\Reference;
use nad\common\modules\investigation\report\models\ReportArchived as BaseReportArchived;

class ReportArchived extends BaseReportArchived
{
    const CONSUMER_CODE = Report::CONSUMER_CODE;

    public $moduleId = 'device';
    public $referenceClassName = Reference::class;


    public function getBaseViewRoute()
    {
        return '/device/investigationMonitorMethods/report/manage/view';
    }

    public static function find()
    {
        return parent::find()->andWhere(['nad_investigation_report.consumer' => self::CONSUMER_CODE]);
    }
}
