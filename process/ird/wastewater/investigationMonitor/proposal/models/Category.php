<?php

namespace nad\process\ird\wastewater\investigationMonitor\proposal\models;

use nad\common\modules\investigation\proposal\models\Category as BaseCategory;

class Category extends BaseCategory
{
    const CONSUMER_CODE = Category::class;

    public static function find()
    {
        return parent::find()->andWhere(['consumer' => self::CONSUMER_CODE]);
    }
}
