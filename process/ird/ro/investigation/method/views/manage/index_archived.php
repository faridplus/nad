<?php

$this->title = 'لیست داده گاه روش';
$this->params['breadcrumbs'] = [
    'فرایند',
    'فرایندها',
    ['label' => 'آر او', 'url' => ['/process/ird/ro/manage/index']],
    ['label' => 'بررسی فرایندی', 'url' => ['/process/ird/ro/manage/investigation']],
    'داده گاه روش',
    $this->title
];
$this->params['horizontalMenuItems'] = [
    [
        'label' => 'برنامه روش',
        'url' => ['/process/ird/ro/investigation/method/manage/index']
    ],
    [
        'label' => 'داده گاه روش',
        'url' => ['/process/ird/ro/investigation/method/manage/archived-index']
    ],
    [
        'label' => 'داده گاه روند روش',
        'url' => ['/process/ird/ro/investigation/method/manage/index-history']
    ],
    [
        'label' => 'داده گاه منابع',
        'url' => ['/process/ird/ro/investigation/reference/manage/index']
    ]
];

?>

<?= $this->render('@nad/common/modules/investigation/method/views/method/index_archived', [
    'dataProvider' => $dataProvider,
    'searchModel' => $searchModel
]);
