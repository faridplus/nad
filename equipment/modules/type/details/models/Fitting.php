<?php
namespace modules\nad\equipment\modules\type\details\models;

use modules\nad\equipment\modules\type\models\Type;
use extensions\i18n\validators\FarsiCharactersValidator;

class Fitting extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'nad_equipment_type_fitting';
    }

    public function rules()
    {
        return [
            [['code'], 'required'],
            [['title', 'code'], 'trim'],
            [['typeId'], 'integer'],
            ['title', 'string', 'max' => 255],
            ['code', 'string', 'min' => 3, 'max' => 3],
            ['code', 'match', 'pattern' => '/^[0-9]{3}$/'],
            [['title'], FarsiCharactersValidator::className()],
            [
                'code',
                'unique',
                'targetAttribute' => ['code', 'typeId'],
                'message' => 'این شماره قطعه پیش تر ثبت شده است.'
            ],
        ];
    }

    public function attributeLabels()
    {
        return [
            'title' => 'عنوان',
            'code' => 'شماره قطعه',
            'compositeCode' => 'شناسه اتصال',
        ];
    }

    public function getType()
    {
        return $this->hasOne(Type::className(), ['id' => 'typeId']);
    }

    public function getCompositeCode()
    {
        return $this->type->getCompositeCode() . '. F. ' . $this->code;
    }
}
