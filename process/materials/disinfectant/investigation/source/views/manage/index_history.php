<?php

$this->title = 'لیست داده گاه روندهای منشا';
$this->params['breadcrumbs'] = [
    'فرایند',
    'مواد',
    ['label' => 'گندزدا', 'url' => ['/process/materials/disinfectant/manage/index']],
    ['label' => 'بررسی فرایندی', 'url' => ['/process/materials/disinfectant/manage/investigation']],
    'داده گاه روندهای منشا',
    $this->title
];

$this->params['horizontalMenuItems'] = [
    [
        'label' => 'برنامه منشا',
        'url' => ['/process/materials/disinfectant/investigation/source/manage/index']
    ],
    [
        'label' => 'داده گاه منشا',
        'url' => ['/process/materials/disinfectant/investigation/source/manage/archived-index']
    ],
    [
        'label' => 'داده گاه روندهای منشا',
        'url' => ['/process/materials/disinfectant/investigation/source/manage/index-history']
    ],
    [
        'label' => 'داده گاه منابع',
        'url' => ['/process/materials/disinfectant/investigation/reference/manage/index']
    ]
];
?>

<?= $this->render('@nad/common/modules/investigation/source/views/source/index_history', [
    'dataProvider' => $dataProvider,
    'searchModel' => $searchModel
]);
