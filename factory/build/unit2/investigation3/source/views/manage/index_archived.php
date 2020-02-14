<?php

$this->title = 'لیست داده گاه منشا';
$this->params['breadcrumbs'] = [
    'کارخانه',
    'احداث',
    ['label' => 'واحد 2', 'url' => ['/factory/build/unit2/manage/index']],
    ['label' => 'فعالیت ج', 'url' => ['/factory/build/unit2/manage/investigation3']],
    'داده گاه منشا',
    $this->title
];
$this->params['horizontalMenuItems'] = [
    [
        'label' => 'برنامه منشا',
        'url' => ['/factory/build/unit2/investigation3/source/manage/index']
    ],
    [
        'label' => 'داده گاه منشا',
        'url' => ['/factory/build/unit2/investigation3/source/manage/archived-index']
    ],
    [
        'label' => 'داده گاه روند منشا',
        'url' => ['/factory/build/unit2/investigation3/source/manage/index-history']
    ],
    [
        'label' => 'داده گاه منابع',
        'url' => ['/factory/build/unit2/investigation3/reference/manage/index']
    ]
];

?>

<?= $this->render('@nad/common/modules/investigation/source/views/source/index_archived', [
    'dataProvider' => $dataProvider,
    'searchModel' => $searchModel
]);
