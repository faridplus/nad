<?php

namespace modules\nad\maker\common\models;

use yii\db\ActiveRecord;

class Job extends ActiveRecord
{
    public static function tableName()
    {
        return 'nad_maker_phonebook_jobs';
    }
}