<?php

namespace nad\process\ird\sedimentation\investigation\instruction\models;

use nad\process\ird\sedimentation\investigation\instruction\models\Instruction;
use nad\process\ird\sedimentation\investigation\reference\models\Reference;
use nad\common\modules\investigation\instruction\models\InstructionArchived as BaseInstructionArchived;

class InstructionArchived extends BaseInstructionArchived
{
    const CONSUMER_CODE = Instruction::CONSUMER_CODE;

    public $moduleId = 'sedimentation';
    public $referenceClassName = Reference::class;


    public function getBaseViewRoute()
    {
        return '/sedimentation/investigation/instruction/manage/view';
    }

    public static function find()
    {
        return parent::find()->andWhere(['nad_investigation_instruction.consumer' => self::CONSUMER_CODE]);
    }
}
