<?php

$this->title = 'لیست داده گاه منشا';
$this->params['breadcrumbs'] = [
    'فرایند',
    'آزمایشگاه',
    ['label' => 'آزمایش های بهره برداری', 'url' => ['/process/laboratory/unit1/manage/index']],
    ['label' => 'فعالیت بررسی', 'url' => ['/process/laboratory/unit1/manage/investigation1']],
    'داده گاه منشا',
    $this->title
];
$this->params['horizontalMenuItems'] = [
    [
        'label' => 'برنامه منشا',
        'url' => ['/process/laboratory/unit1/investigation1/source/manage/index']
    ],
    [
        'label' => 'داده گاه منشا',
        'url' => ['/process/laboratory/unit1/investigation1/source/manage/archived-index']
    ],
    [
        'label' => 'داده گاه روند منشا',
        'url' => ['/process/laboratory/unit1/investigation1/source/manage/index-history']
    ],
    [
        'label' => 'داده گاه منابع',
        'url' => ['/process/laboratory/unit1/investigation1/reference/manage/index']
    ]
];

?>

<?= $this->render('@nad/common/modules/investigation/source/views/source/index_archived', [
    'dataProvider' => $dataProvider,
    'searchModel' => $searchModel
]);
