<?php

$this->title = 'لیست داده گاه روندهای گزارش';
$this->params['breadcrumbs'] = [
    'موقت',
    'آی تی',
    ['label' => 'واحد 3', 'url' => ['/temporary/informationtech/unit3/manage/index']],
    ['label' => 'فعالیت ه', 'url' => ['/temporary/informationtech/unit3/manage/investigation5']],
    'داده گاه روندهای گزارش',
    $this->title
];

$this->params['horizontalMenuItems'] = [
    [
        'label' => 'برنامه گزارش',
        'url' => ['/temporary/informationtech/unit3/investigation5/report/manage/index']
    ],
    [
        'label' => 'داده گاه گزارش',
        'url' => ['/temporary/informationtech/unit3/investigation5/report/manage/archived-index']
    ],
    [
        'label' => 'داده گاه روند گزارش',
        'url' => ['/temporary/informationtech/unit3/investigation5/report/manage/index-history']
    ],
    [
        'label' => 'داده گاه منابع',
        'url' => ['/temporary/informationtech/unit3/investigation5/reference/manage/index']
    ]
];
?>

<?= $this->render('@nad/common/modules/investigation/report/views/report/index_history', [
    'dataProvider' => $dataProvider,
    'searchModel' => $searchModel
]);
