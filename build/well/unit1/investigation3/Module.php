<?php

namespace nad\build\well\unit1\investigation3;

class Module extends \yii\base\Module
{
    public $horizontalMenuItems;

    public function init()
    {
        $this->modules = [
            // 'source' => 'nad\build\well\unit1\investigation3\source\Module',
            // 'proposal' => 'nad\build\well\unit1\investigation3\proposal\Module',
            // 'report' => 'nad\build\well\unit1\investigation3\report\Module',
            'reference' => 'nad\build\well\unit1\investigation3\reference\Module',
            // 'method' => 'nad\build\well\unit1\investigation3\method\Module',
            // 'instruction' => 'nad\build\well\unit1\investigation3\instruction\Module',
            'subject' => 'nad\build\well\unit1\investigation3\subject\Module',
        ];
        $this->horizontalMenuItems = [
            // [
            //     'label' => 'منشا',
            //     'items' => [
            //         [
            //             'label' => 'برنامه',
            //             'items' => [
            //                 [
            //                     'label' => 'افزودن منشا',
            //                     'url' => ['/build/well/unit1/investigation3/source/manage/create']
            //                 ],
            //                 [
            //                     'label' => 'لیست‌ منشاهای برنامه',
            //                     'url' => ['/build/well/unit1/investigation3/source/manage/index']
            //                 ],
            //                 [
            //                     'label' => 'لیست رده های منشا',
            //                     'url' => ['/build/well/unit1/investigation3/source/category/index']
            //                 ],
            //             ]
            //         ],
            //         [
            //             'label' => 'داده گاه ها',
            //             'items' => [
            //                 [
            //                     'label' => 'منشاها',
            //                     'url' => ['/build/well/unit1/investigation3/source/manage/archived-index']
            //                 ],
            //                 [
            //                     'label' => 'روندهای منشا',
            //                     'url' => ['/build/well/unit1/investigation3/source/manage/index-history']
            //                 ],
            //             ]
            //         ]
            //     ]
            // ],
            // [
            //     'label' => 'پروپوزال',
            //     'items' => [
            //         [
            //             'label' => 'برنامه',
            //             'items' => [
            //                 [
            //                     'label' => 'افزودن پروپوزال',
            //                     'url' => ['/build/well/unit1/investigation3/proposal/manage/create']
            //                 ],
            //                 [
            //                     'label' => 'لیست‌ پروپوزالهای برنامه',
            //                     'url' => ['/build/well/unit1/investigation3/proposal/manage/index']
            //                 ],
            //                 [
            //                     'label' => 'لیست رده های پروپوزال',
            //                     'url' => ['/build/well/unit1/investigation3/proposal/category/index']
            //                 ],
            //             ]
            //         ],
            //         [
            //             'label' => 'داده گاه ها',
            //             'items' => [
            //                 [
            //                     'label' => 'پروپوزالها',
            //                     'url' => ['/build/well/unit1/investigation3/proposal/manage/archived-index']
            //                 ],
            //                 [
            //                     'label' => 'روندهای پروپوزال',
            //                     'url' => ['/build/well/unit1/investigation3/proposal/manage/index-history']
            //                 ],
            //             ]
            //         ]
            //     ]
            // ],
            // [
            //     'label' => 'گزارش',
            //     'items' => [
            //         [
            //             'label' => 'برنامه',
            //             'items' => [
            //                 [
            //                     'label' => 'افزودن گزارش',
            //                     'url' => ['/build/well/unit1/investigation3/report/manage/create']
            //                 ],
            //                 [
            //                     'label' => 'لیست‌ گزارشهای برنامه',
            //                     'url' => ['/build/well/unit1/investigation3/report/manage/index']
            //                 ],
            //                 [
            //                     'label' => 'لیست رده های گزارش',
            //                     'url' => ['/build/well/unit1/investigation3/report/category/index']
            //                 ],
            //                 [
            //                     'label' => 'گراف گزارشات',
            //                     'url' => ['/build/well/unit1/investigation3/report/manage/generate-graph']
            //                 ]
            //             ]
            //         ],
            //         [
            //             'label' => 'داده گاه ها',
            //             'items' => [
            //                 [
            //                     'label' => 'گزارشها',
            //                     'url' => ['/build/well/unit1/investigation3/report/manage/archived-index']
            //                 ],
            //                 [
            //                     'label' => 'روندهای گزارش',
            //                     'url' => ['/build/well/unit1/investigation3/report/manage/index-history']
            //                 ],
            //             ]
            //         ]
            //     ]
            // ],
            // [
            //     'label' => 'روش',
            //     'items' => [
            //         [
            //             'label' => 'برنامه',
            //             'items' => [
            //                 [
            //                     'label' => 'افزودن روش',
            //                     'url' => ['/build/well/unit1/investigation3/method/manage/create']
            //                 ],
            //                 [
            //                     'label' => 'لیست‌ روشهای برنامه',
            //                     'url' => ['/build/well/unit1/investigation3/method/manage/index']
            //                 ],
            //                 [
            //                     'label' => 'لیست رده های روش',
            //                     'url' => ['/build/well/unit1/investigation3/method/category/index']
            //                 ],
            //             ]
            //         ],
            //         [
            //             'label' => 'داده گاه ها',
            //             'items' => [
            //                 [
            //                     'label' => 'روشها',
            //                     'url' => ['/build/well/unit1/investigation3/method/manage/archived-index']
            //                 ],
            //                 [
            //                     'label' => 'روندهای روش',
            //                     'url' => ['/build/well/unit1/investigation3/method/manage/index-history']
            //                 ],
            //             ]
            //         ]
            //     ]
            // ],
            // [
            //     'label' => 'دستورالعمل',
            //     'items' => [
            //         [
            //             'label' => 'برنامه',
            //             'items' => [
            //                 [
            //                     'label' => 'افزودن دستورالعمل',
            //                     'url' => ['/build/well/unit1/investigation3/instruction/manage/create']
            //                 ],
            //                 [
            //                     'label' => 'لیست‌ دستورالعملهای برنامه',
            //                     'url' => ['/build/well/unit1/investigation3/instruction/manage/index']
            //                 ],
            //                 [
            //                     'label' => 'لیست رده های دستورالعمل',
            //                     'url' => ['/build/well/unit1/investigation3/instruction/category/index']
            //                 ],
            //             ]
            //         ],
            //         [
            //             'label' => 'داده گاه ها',
            //             'items' => [
            //                 [
            //                     'label' => 'دستورالعملها',
            //                     'url' => ['/build/well/unit1/investigation3/instruction/manage/archived-index']
            //                 ],
            //                 [
            //                     'label' => 'روندهای دستورالعمل',
            //                     'url' => ['/build/well/unit1/investigation3/instruction/manage/index-history']
            //                 ],
            //             ]
            //         ]
            //     ]
            // ],
            [
                'label' => 'سایرگزارشها',
                'items' => [
                    [
                        'label' => 'برنامه',
                        'items' => [
                            [
                                'label' => 'افزودن موضوع',
                                'url' => ['/build/well/unit1/investigation3/subject/manage/create']
                            ],
                            [
                                'label' => 'لیست‌ موضوعهای فعال',
                                'url' => ['/build/well/unit1/investigation3/subject/manage/index']
                            ]
                        ]
                    ],
                    [
                        'label' => 'داده گاه',
                        'url' => ['/build/well/unit1/investigation3/subject/manage/archived-index']
                    ]
                ]
            ],
            [
                'label' => 'داده گاه منابع',
                'items' => [
                    [
                        'label' => 'لیست منابع',
                        'url' => ['/build/well/unit1/investigation3/reference/manage/index']
                    ],
                    [
                        'label' => 'افزودن منبع',
                        'url' => ['/build/well/unit1/investigation3/reference/manage/index#class_ajaxcreate']
                    ]
                ]
            ]
        ];
        parent::init();
    }
}
