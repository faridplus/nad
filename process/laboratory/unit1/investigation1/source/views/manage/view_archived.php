<?php

$this->title = 'مدرک ' . $model->title;
$this->params['breadcrumbs'] = [
    'فرایند',
    'آزمایشگاه',
    ['label' => 'آزمایش های بهره برداری', 'url' => ['/process/laboratory/unit1/manage/index']],
    ['label' => 'فعالیت بررسی', 'url' => ['/process/laboratory/unit1/manage/investigation1']],
    'داده گاه منشا',
    ['label' => 'لیست داده گاه منشا', 'url' => ['archived-index']],
    $this->title
];
$this->params['horizontalMenuItems'] = [
    [
        'label' => 'برنامه منشا',
        'url' => ['/process/laboratory/unit1/investigation1/source/manage/index']
    ],
    [
        'label' => 'داده گاه منشا',
        'url' => ['/process/laboratory/unit1/investigation1/source/manage/archived-index']
    ],
    [
        'label' => 'داده گاه روند منشا',
        'url' => ['/process/laboratory/unit1/investigation1/source/manage/index-history']
    ],
    [
        'label' => 'داده گاه منابع',
        'url' => ['/process/laboratory/unit1/investigation1/reference/manage/index']
    ]
];

?>

<div class="source-view">
    <?= $this->render('@nad/common/modules/investigation/source/views/source/view_archived', [
        'model' => $model,
        'moduleId' => 'unit1'
    ]) ?>
</div>
