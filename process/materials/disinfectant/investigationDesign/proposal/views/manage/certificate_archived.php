<?php

$this->title = 'شناسنامه ' . $proposal->title;
$this->params['breadcrumbs'] = [
    'فرایند',
    'فرایندها',
    ['label' => 'گندزدا', 'url' => ['/disinfectant/manage/index']],
    ['label' => 'بررسی طراحی', 'url' => ['/disinfectant/manage/investigation-design']],
    'داده گاه پروپوزال',
    ['label' => 'لیست داده گاه پروپوزال', 'url' => ['archived-index']],
    $this->title
];
$this->params['horizontalMenuItems'] = [
    [
        'label' => 'برنامه پروپوزال',
        'url' => ['/disinfectant/investigationDesign/proposal/manage/index']
    ],
    [
        'label' => 'داده گاه پروپوزال',
        'url' => ['/disinfectant/investigationDesign/proposal/manage/archived-index']
    ],
    [
        'label' => 'داده گاه روند پروپوزال',
        'url' => ['/disinfectant/investigationDesign/proposal/manage/index-history']
    ],
    [
        'label' => 'داده گاه منابع',
        'url' => ['/disinfectant/investigationDesign/reference/manage/index']
    ]
];

?>

<?= $this->render('@nad/common/modules/investigation/proposal/views/proposal/certificate_archived', [
   'source' => $source,
   'proposal' => $proposal,
   'report' => $report,
    'moduleId' => 'disinfectant',
    'baseRoute' => '/disinfectant/investigation-design'
]);
