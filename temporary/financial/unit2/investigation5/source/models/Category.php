<?php

namespace nad\temporary\financial\unit2\investigation5\source\models;

use nad\common\modules\investigation\source\models\Category as BaseCategory;

class Category extends BaseCategory
{
    const CONSUMER_CODE = Category::class;

    public static function find()
    {
        return parent::find()->andWhere(['consumer' => self::CONSUMER_CODE]);
    }
}
