<?php

$this->title = 'لیست داده گاه روندهای روش';
$this->params['breadcrumbs'] = [
    'فرایند',
    'فرایندها',
    ['label' => 'فیلترشنی', 'url' => ['/process/ird/filter/manage/index']],
    ['label' => 'بررسی فرایندی', 'url' => ['/process/ird/filter/manage/investigation']],
    'داده گاه روندهای روش',
    $this->title
];

$this->params['horizontalMenuItems'] = [
    [
        'label' => 'برنامه روش',
        'url' => ['/process/ird/filter/investigation/method/manage/index']
    ],
    [
        'label' => 'داده گاه روش',
        'url' => ['/process/ird/filter/investigation/method/manage/archived-index']
    ],
    [
        'label' => 'داده گاه روند روش',
        'url' => ['/process/ird/filter/investigation/method/manage/index-history']
    ],
    [
        'label' => 'داده گاه منابع',
        'url' => ['/process/ird/filter/investigation/reference/manage/index']
    ]
];
?>

<?= $this->render('@nad/common/modules/investigation/method/views/method/index_history', [
    'dataProvider' => $dataProvider,
    'searchModel' => $searchModel
]);
