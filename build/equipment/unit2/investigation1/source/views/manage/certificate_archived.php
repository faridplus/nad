<?php

$this->title = 'شناسنامه ' . $source->title;
$this->params['breadcrumbs'] = [
    'احداث',
    'تجهیزات',
    ['label' => 'واحد 2', 'url' => ['/build/equipment/unit2/manage/index']],
    ['label' => 'فعالیت الف', 'url' => ['/build/equipment/unit2/manage/investigation1']],
    'داده گاه منشا',
    ['label' => 'لیست داده گاه منشا', 'url' => ['archived-index']],
    $this->title
];
$this->params['horizontalMenuItems'] = [
    [
        'label' => 'برنامه منشا',
        'url' => ['/build/equipment/unit2/investigation1/source/manage/index']
    ],
    [
        'label' => 'داده گاه منشا',
        'url' => ['/build/equipment/unit2/investigation1/source/manage/archived-index']
    ],
    [
        'label' => 'داده گاه روند منشا',
        'url' => ['/build/equipment/unit2/investigation1/source/manage/index-history']
    ],
    [
        'label' => 'داده گاه منابع',
        'url' => ['/build/equipment/unit2/investigation1/reference/manage/index']
    ]
];

?>

<?= $this->render('@nad/common/modules/investigation/source/views/source/certificate_archived', [
    'source' => $source,
    'moduleId' => 'unit2',
    'baseRoute' => '/unit2/investigation1'
]);
