<?php

namespace modules\nad\maker\backend\models;

use modules\nad\equipment\modules\type\details\models\Part;
use modules\nad\equipment\modules\type\models\Type as EquipmentType;
use modules\nad\maker\backend\modules\phonebook\models\Phonebook;

class Maker extends \modules\nad\maker\common\models\maker
{
    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors[] = 'core\behaviors\TimestampBehavior';
        return $behaviors;
    }

    public function rules()
    {
        return [
            [
                [
                    'title',
                    'phone',
                    'isLegal',
                    'shopAddress',
                    'paymentType',
                    'isActive',
                ],
                'required',
            ],
            [
                [
                    'title',
                    'fame',
                    'email',
                    'website',
                    'satisfaction'
                ],
                'trim'
            ],

            [['title', 'email', 'website'], 'unique'],
            ['title', 'string', 'max' => 255],
            ['email', 'email'],
            ['website', 'url'],
            [['phone', 'mobile', 'fax'], 'integer'],
            [
                [
                    'fame',
                    'description',
                    'website',
                    'email',
                    'fax',
                    'factoryAddress',
                    'mobile',
                    'satisfaction'
                ],
                'default',
                'value' => null
            ],
            [['description','equipments','parts','works'], 'safe']
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'شناسه',
            'title' => 'نام سازنده',
            'fame' => 'شهرت',
            'isLegal' => 'حقیقی / حقوقی',
            'shopAddress' => 'آدرس مغازه / دفتر',
            'factoryAddress' => 'آدرس کارخانه',
            'phone' => 'تلفن دفتر سازنده',
            'fax' => 'فکس',
            'mobile' => 'شماره همراه',
            'email' => 'پست الکترونیکی',
            'website' => 'ادرس وبسایت',
            'paymentType' => 'نحوه پرداخت',
            'description' => 'توضیحات پرداخت',
            'satisfaction' => 'میزان رضایت',
            'isActive' => 'سازنده فعال است',
            'createdAt' => 'تاریخ ثبت',
            'works' => 'نوع کار و حرفه',
            'equipments' => 'تجهیزات',
            'parts' => 'قطعات',
            'phoneCount' => 'تعداد شماره تماس'
        ];
    }

    public function getPaymentType()
    {
        $paymentType = self::getPaymentTypeList();
        return isset($paymentType[$this->paymentType]) ? $paymentType[$this->paymentType] : null;
    }

    public static function getPaymentTypeList()
    {
        return [
            0 => 'نقدی',
            1 => 'شرایطی',
            2 => 'هردو',
        ];
    }

    public function getPhones()
    {
        return $this->hasMany(Phonebook::class, ['makerId' => 'id']);
    }

    public function getPhonesAsArray()
    {
        $values = [];
        $index = 0;

        $phones = Phonebook::find()
            ->andWhere(['makerId' => $this->id])
            ->orderBy('id')
            ->all();

        foreach ($phones as $phone) {
            $values[$index]['phone'] = $phone->phone;
            $values[$index]['job'] = $phone->job->title;
            $values[$index]['name'] = $phone->name;
            $index++;
        }

        return $values;
    }

    public function getWorks()
    {
        return $this->hasMany(WorkType::class,
            ['id' => 'workId'])->viaTable('nad_maker_work_type_relation',
            ['makerId' => 'id']);
    }

    public function getWorksAsString()
    {
        $result = '';
        foreach ($this->works as $work)
        {
            $result .= $work->title.' - ';
        }
        return rtrim($result,'- ');
    }

    public function getEquipTypes()
    {
        return $this->hasMany(
            EquipmentType::class,
            ['id' => 'equipmentId']
        )->viaTable('nad_maker_equipment_relation', ['makerId' => 'id']);
    }

    public function getPartsRelation()
    {
        return $this->hasMany(
            Part::class,
            ['id' => 'partId']
        )->viaTable('nad_maker_part_relation', ['makerId' => 'id']);
    }
}