<?php

$this->title = 'شناسنامه ' . $report->title;
$this->params['breadcrumbs'] = [
    'احداث',
    'چاه',
    ['label' => 'واحد 2', 'url' => ['/build/well/unit2/manage/index']],
    ['label' => 'فعالیت ج', 'url' => ['/build/well/unit2/manage/investigation3']],
    'داده گاه گزارش',
    ['label' => 'لیست داده گاه گزارش', 'url' => ['archived-index']],
    $this->title
];
$this->params['horizontalMenuItems'] = [
    [
        'label' => 'برنامه گزارش',
        'url' => ['/build/well/unit2/investigation3/report/manage/index']
    ],
    [
        'label' => 'داده گاه گزارش',
        'url' => ['/build/well/unit2/investigation3/report/manage/archived-index']
    ],
    [
        'label' => 'داده گاه روند گزارش',
        'url' => ['/build/well/unit2/investigation3/report/manage/index-history']
    ],
    [
        'label' => 'داده گاه منابع',
        'url' => ['/build/well/unit2/investigation3/reference/manage/index']
    ]
];

?>

<?= $this->render('@nad/common/modules/investigation/report/views/report/certificate_archived', [
   'source' => $source,
   'proposal' => $proposal,
   'report' => $report,
    'moduleId' => 'unit2',
    'baseRoute' => '/unit2/investigation3'
]);
