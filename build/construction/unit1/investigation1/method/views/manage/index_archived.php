<?php

$this->title = 'لیست داده گاه روش';
$this->params['breadcrumbs'] = [
    'احداث',
    'ساختمان',
    ['label' => 'واحد 1', 'url' => ['/build/construction/unit1/manage/index']],
    ['label' => 'فعالیت الف', 'url' => ['/build/construction/unit1/manage/investigation1']],
    'داده گاه روش',
    $this->title
];
$this->params['horizontalMenuItems'] = [
    [
        'label' => 'برنامه روش',
        'url' => ['/build/construction/unit1/investigation1/method/manage/index']
    ],
    [
        'label' => 'داده گاه روش',
        'url' => ['/build/construction/unit1/investigation1/method/manage/archived-index']
    ],
    [
        'label' => 'داده گاه روند روش',
        'url' => ['/build/construction/unit1/investigation1/method/manage/index-history']
    ],
    [
        'label' => 'داده گاه منابع',
        'url' => ['/build/construction/unit1/investigation1/reference/manage/index']
    ]
];

?>

<?= $this->render('@nad/common/modules/investigation/method/views/method/index_archived', [
    'dataProvider' => $dataProvider,
    'searchModel' => $searchModel
]);
