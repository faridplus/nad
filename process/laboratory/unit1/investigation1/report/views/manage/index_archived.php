<?php

$this->title = 'لیست داده گاه گزارش';
$this->params['breadcrumbs'] = [
    'فرایند',
    'آزمایشگاه',
    ['label' => 'آزمایش های بهره برداری', 'url' => ['/process/laboratory/unit1/manage/index']],
    ['label' => 'فعالیت بررسی', 'url' => ['/process/laboratory/unit1/manage/investigation1']],
    'داده گاه گزارش',
    $this->title
];
$this->params['horizontalMenuItems'] = [
    [
        'label' => 'برنامه گزارش',
        'url' => ['/process/laboratory/unit1/investigation1/report/manage/index']
    ],
    [
        'label' => 'داده گاه گزارش',
        'url' => ['/process/laboratory/unit1/investigation1/report/manage/archived-index']
    ],
    [
        'label' => 'داده گاه روند گزارش',
        'url' => ['/process/laboratory/unit1/investigation1/report/manage/index-history']
    ],
    [
        'label' => 'داده گاه منابع',
        'url' => ['/process/laboratory/unit1/investigation1/reference/manage/index']
    ]
];

?>

<?= $this->render('@nad/common/modules/investigation/report/views/report/index_archived', [
    'dataProvider' => $dataProvider,
    'searchModel' => $searchModel
]);
