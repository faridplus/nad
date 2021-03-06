<?php

namespace nad\engineering\geotechnics\device\device\models;

use nad\common\modules\device\models\DeviceDocument as ParentDocument;

class DeviceDocument extends ParentDocument
{
    const CONSUMER_CODE = DeviceDocument::class;

    public $moduleId = 'geotechnics';

    public function getBaseViewRoute()
    {
        return '/geotechnics/device/device/device-document/view';
    }

    public static function find()
    {
        return parent::find()->andWhere([self::tableName() . '.consumer' => self::CONSUMER_CODE]);
    }
}
