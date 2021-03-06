<?php

$this->title = 'شناسنامه ' . $proposal->title;
$this->params['breadcrumbs'] = [
    'موقت',
    'مالی',
    ['label' => 'واحد 1', 'url' => ['/temporary/financial/unit1/manage/index']],
    ['label' => 'فعالیت ج', 'url' => ['/temporary/financial/unit1/manage/investigation3']],
    'داده گاه پروپوزال',
    ['label' => 'لیست داده گاه پروپوزال', 'url' => ['archived-index']],
    $this->title
];
$this->params['horizontalMenuItems'] = [
    [
        'label' => 'برنامه پروپوزال',
        'url' => ['/temporary/financial/unit1/investigation3/proposal/manage/index']
    ],
    [
        'label' => 'داده گاه پروپوزال',
        'url' => ['/temporary/financial/unit1/investigation3/proposal/manage/archived-index']
    ],
    [
        'label' => 'داده گاه روند پروپوزال',
        'url' => ['/temporary/financial/unit1/investigation3/proposal/manage/index-history']
    ],
    [
        'label' => 'داده گاه منابع',
        'url' => ['/temporary/financial/unit1/investigation3/reference/manage/index']
    ]
];

?>

<?= $this->render('@nad/common/modules/investigation/proposal/views/proposal/certificate_archived', [
   'source' => $source,
   'proposal' => $proposal,
   'report' => $report,
    'moduleId' => 'unit1',
    'baseRoute' => '/unit1/investigation3'
]);
