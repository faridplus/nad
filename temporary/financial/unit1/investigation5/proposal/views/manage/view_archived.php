<?php

$this->title = 'مدرک ' . $model->title;
$this->params['breadcrumbs'] = [
    'موقت',
    'مالی',
    ['label' => 'واحد 1', 'url' => ['/temporary/financial/unit1/manage/index']],
    ['label' => 'فعالیت ه', 'url' => ['/temporary/financial/unit1/manage/investigation5']],
    'داده گاه پروپوزال',
    ['label' => 'لیست داده گاه پروپوزال', 'url' => ['archived-index']],
    $this->title
];
$this->params['horizontalMenuItems'] = [
    [
        'label' => 'برنامه پروپوزال',
        'url' => ['/temporary/financial/unit1/investigation5/proposal/manage/index']
    ],
    [
        'label' => 'داده گاه پروپوزال',
        'url' => ['/temporary/financial/unit1/investigation5/proposal/manage/archived-index']
    ],
    [
        'label' => 'داده گاه روند پروپوزال',
        'url' => ['/temporary/financial/unit1/investigation5/proposal/manage/index-history']
    ],
    [
        'label' => 'داده گاه منابع',
        'url' => ['/temporary/financial/unit1/investigation5/reference/manage/index']
    ]
];

?>

<div class="proposal-view">
    <?= $this->render('@nad/common/modules/investigation/proposal/views/proposal/view_archived', [
        'model' => $model,
        'moduleId' => 'unit1'
    ]) ?>
</div>
