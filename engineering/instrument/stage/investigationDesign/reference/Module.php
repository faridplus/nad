<?php

namespace nad\engineering\instrument\stage\investigationDesign\reference;

use nad\engineering\instrument\stage\investigationDesign\Module as BaseModule;

class Module extends BaseModule
{
    public $defaultRoute = 'manage/index';

    public function init()
    {
        parent::init();


        $this->horizontalMenuItems = [
            [
                'label' => 'برنامه ها',
                'items' => [
                    [
                        'label' => 'منشا',
                        'url' => ['/engineering/instrument/stage/investigationDesign/source/manage/index']
                    ],
                    [
                        'label' => 'پروپوزال',
                        'url' => ['/engineering/instrument/stage/investigationDesign/proposal/manage/index']
                    ],
                    [
                        'label' => 'گزارش',
                        'url' => ['/engineering/instrument/stage/investigationDesign/report/manage/index']
                    ],
                    // [
                    //     'label' => 'روش',
                    //     'url' => ['/engineering/instrument/stage/investigationDesign/method/manage/index']
                    // ],
                    // [
                    //     'label' => 'دستورالعمل',
                    //     'url' => ['/engineering/instrument/stage/investigationDesign/instruction/manage/index']
                    // ],
                ]
            ],
            [
                'label' => 'داده گاه ها',
                'items' => [
                    [
                        'label' => 'منشا',
                        'url' => ['/engineering/instrument/stage/investigationDesign/source/manage/archived-index']
                    ],
                    [
                        'label' => 'پروپوزال',
                        'url' => ['/engineering/instrument/stage/investigationDesign/proposal/manage/archived-index']
                    ],
                    [
                        'label' => 'گزارش',
                        'url' => ['/engineering/instrument/stage/investigationDesign/report/manage/archived-index']
                    ],
                    // [
                    //     'label' => 'روش',
                    //     'url' => ['/engineering/instrument/stage/investigationDesign/method/manage/archived-index']
                    // ],
                    // [
                    //     'label' => 'دستورالعمل',
                    //     'url' => ['/engineering/instrument/stage/investigationDesign/instruction/manage/archived-index']
                    // ]
                ]
            ],
            [
                'label' => 'داده گاه های روندها',
                'items' => [
                    [
                        'label' => 'منشا',
                        'url' => ['/engineering/instrument/stage/investigationDesign/source/manage/index-history']
                    ],
                    [
                        'label' => 'پروپوزال',
                        'url' => ['/engineering/instrument/stage/investigationDesign/proposal/manage/index-history']
                    ],
                    [
                        'label' => 'گزارش',
                        'url' => ['/engineering/instrument/stage/investigationDesign/report/manage/index-history']
                    ],
                    // [
                    //     'label' => 'روش',
                    //     'url' => ['/engineering/instrument/stage/investigationDesign/method/manage/index-history']
                    // ],
                    // [
                    //     'label' => 'دستورالعمل',
                    //     'url' => ['/engineering/instrument/stage/investigationDesign/instruction/manage/index-history']
                    // ]
                ]
            ],
            [
                'label' => 'داده گاه منابع',
                'items' => [
                    [
                        'label' => 'لیست منابع',
                        'url' => ['/engineering/instrument/stage/investigationDesign/reference/manage/index']
                    ],
                    [
                        'label' => 'افزودن منبع',
                        'url' => ['/engineering/instrument/stage/investigationDesign/reference/manage/index#class_ajaxcreate']
                    ]
                ]
            ]
        ];
    }
}
