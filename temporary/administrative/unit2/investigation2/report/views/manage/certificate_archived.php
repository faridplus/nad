<?php

$this->title = 'شناسنامه ' . $report->title;
$this->params['breadcrumbs'] = [
    'موقت',
    'اداری',
    ['label' => 'واحد 2', 'url' => ['/temporary/administrative/unit2/manage/index']],
    ['label' => 'فعالیت ب', 'url' => ['/temporary/administrative/unit2/manage/investigation2']],
    'داده گاه گزارش',
    ['label' => 'لیست داده گاه گزارش', 'url' => ['archived-index']],
    $this->title
];
$this->params['horizontalMenuItems'] = [
    [
        'label' => 'برنامه گزارش',
        'url' => ['/temporary/administrative/unit2/investigation2/report/manage/index']
    ],
    [
        'label' => 'داده گاه گزارش',
        'url' => ['/temporary/administrative/unit2/investigation2/report/manage/archived-index']
    ],
    [
        'label' => 'داده گاه روند گزارش',
        'url' => ['/temporary/administrative/unit2/investigation2/report/manage/index-history']
    ],
    [
        'label' => 'داده گاه منابع',
        'url' => ['/temporary/administrative/unit2/investigation2/reference/manage/index']
    ]
];

?>

<?= $this->render('@nad/common/modules/investigation/report/views/report/certificate_archived', [
   'source' => $source,
   'proposal' => $proposal,
   'report' => $report,
    'moduleId' => 'unit2',
    'baseRoute' => '/unit2/investigation2'
]);
