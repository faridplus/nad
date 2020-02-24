<?php

$this->title = 'لیست داده گاه پروپوزال';
$this->params['breadcrumbs'] = [
    'کارخانه',
    'تولید',
    ['label' => 'انبار', 'url' => ['/factory/production/unit5/manage/index']],
    ['label' => 'فعالیت ج', 'url' => ['/factory/production/unit5/manage/investigation3']],
    'داده گاه پروپوزال',
    $this->title
];
$this->params['horizontalMenuItems'] = [
    [
        'label' => 'برنامه پروپوزال',
        'url' => ['/factory/production/unit5/investigation3/proposal/manage/index']
    ],
    [
        'label' => 'داده گاه پروپوزال',
        'url' => ['/factory/production/unit5/investigation3/proposal/manage/archived-index']
    ],
    [
        'label' => 'داده گاه روند پروپوزال',
        'url' => ['/factory/production/unit5/investigation3/proposal/manage/index-history']
    ],
    [
        'label' => 'داده گاه منابع',
        'url' => ['/factory/production/unit5/investigation3/reference/manage/index']
    ]
];

?>

<?= $this->render('@nad/common/modules/investigation/proposal/views/proposal/index_archived', [
    'dataProvider' => $dataProvider,
    'searchModel' => $searchModel
]);
