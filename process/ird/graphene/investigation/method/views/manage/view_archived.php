<?php

$this->title = 'مدرک ' . $model->title;
$this->params['breadcrumbs'] = [
    'فرایند',
    'فرایندها',
    ['label' => 'گرافن', 'url' => ['/process/ird/graphene/manage/index']],
    ['label' => 'بررسی فرایندی', 'url' => ['/process/ird/graphene/manage/investigation']],
    'داده گاه روش',
    ['label' => 'لیست داده گاه روش', 'url' => ['archived-index']],
    $this->title
];
$this->params['horizontalMenuItems'] = [
    [
        'label' => 'برنامه روش',
        'url' => ['/process/ird/graphene/investigation/method/manage/index']
    ],
    [
        'label' => 'داده گاه روش',
        'url' => ['/process/ird/graphene/investigation/method/manage/archived-index']
    ],
    [
        'label' => 'داده گاه روند روش',
        'url' => ['/process/ird/graphene/investigation/method/manage/index-history']
    ],
    [
        'label' => 'داده گاه منابع',
        'url' => ['/process/ird/graphene/investigation/reference/manage/index']
    ]
];

?>

<div class="method-view">
    <?= $this->render('@nad/common/modules/investigation/method/views/method/view_archived', [
        'model' => $model,
        'moduleId' => 'graphene'
    ]) ?>
</div>
