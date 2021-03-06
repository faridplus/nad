<?php

$this->title = 'شناسنامه ' . $source->title;
$this->params['breadcrumbs'] = [
    'موقت',
    'آی تی',
    ['label' => 'واحد 2', 'url' => ['/temporary/informationtech/unit2/manage/index']],
    ['label' => 'فعالیت ب', 'url' => ['/temporary/informationtech/unit2/manage/investigation2']],
    'داده گاه منشا',
    ['label' => 'لیست داده گاه منشا', 'url' => ['archived-index']],
    $this->title
];
$this->params['horizontalMenuItems'] = [
    [
        'label' => 'برنامه منشا',
        'url' => ['/temporary/informationtech/unit2/investigation2/source/manage/index']
    ],
    [
        'label' => 'داده گاه منشا',
        'url' => ['/temporary/informationtech/unit2/investigation2/source/manage/archived-index']
    ],
    [
        'label' => 'داده گاه روند منشا',
        'url' => ['/temporary/informationtech/unit2/investigation2/source/manage/index-history']
    ],
    [
        'label' => 'داده گاه منابع',
        'url' => ['/temporary/informationtech/unit2/investigation2/reference/manage/index']
    ]
];

?>

<?= $this->render('@nad/common/modules/investigation/source/views/source/certificate_archived', [
    'source' => $source,
    'moduleId' => 'unit2',
    'baseRoute' => '/unit2/investigation2'
]);
