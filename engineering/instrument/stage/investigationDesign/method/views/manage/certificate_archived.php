<?php

$this->title = 'شناسنامه ' . $method->title;
$this->params['breadcrumbs'] = [
    'فنی',
    'ابزار دقیق',
    ['label' => 'مراحل', 'url' => ['/engineering/instrument/stage/manage/index']],
    ['label' => 'بررسی طراحی', 'url' => ['/engineering/instrument/stage/manage/investigation-design']],
    'داده گاه روش',
    ['label' => 'لیست داده گاه روش', 'url' => ['archived-index']],
    $this->title
];
$this->params['horizontalMenuItems'] = [
    [
        'label' => 'برنامه روش',
        'url' => ['/engineering/instrument/stage/investigationDesign/method/manage/index']
    ],
    [
        'label' => 'داده گاه روش',
        'url' => ['/engineering/instrument/stage/investigationDesign/method/manage/archived-index']
    ],
    [
        'label' => 'داده گاه روند روش',
        'url' => ['/engineering/instrument/stage/investigationDesign/method/manage/index-history']
    ],
    [
        'label' => 'داده گاه منابع',
        'url' => ['/engineering/instrument/stage/investigationDesign/reference/manage/index']
    ]
];

?>

<?= $this->render('@nad/common/modules/investigation/method/views/method/certificate_archived', [
   'source' => $source,
   'proposal' => $proposal,
   'report' => $report,
   'method' => $method,
    'moduleId' => 'stage',
    'baseRoute' => '/stage/investigationDesign-monitor'
]);
