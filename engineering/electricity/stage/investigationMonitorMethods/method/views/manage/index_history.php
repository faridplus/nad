<?php

$this->title = 'لیست داده گاه روندهای روش';
$this->params['breadcrumbs'] = [
    'فنی',
    'برق',
    ['label' => 'مراحل', 'url' => ['/engineering/electricity/stage/manage/index']],
    ['label' => 'بررسی روشهای پایش', 'url' => ['/engineering/electricity/stage/manage/investigation-monitor-methods']],
    'داده گاه روندهای روش',
    $this->title
];

$this->params['horizontalMenuItems'] = [
    [
        'label' => 'برنامه روش',
        'url' => ['/engineering/electricity/stage/investigationMonitorMethods/method/manage/index']
    ],
    [
        'label' => 'داده گاه روش',
        'url' => ['/engineering/electricity/stage/investigationMonitorMethods/method/manage/archived-index']
    ],
    [
        'label' => 'داده گاه روند روش',
        'url' => ['/engineering/electricity/stage/investigationMonitorMethods/method/manage/index-history']
    ],
    [
        'label' => 'داده گاه منابع',
        'url' => ['/engineering/electricity/stage/investigationMonitorMethods/reference/manage/index']
    ]
];
?>

<?= $this->render('@nad/common/modules/investigation/method/views/method/index_history', [
    'dataProvider' => $dataProvider,
    'searchModel' => $searchModel
]);
