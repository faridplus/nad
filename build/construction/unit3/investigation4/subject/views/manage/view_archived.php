<?php

$this->title = 'مدرک ' . $model->title;
$this->params['breadcrumbs'] = [
    'احداث',
    'ساختمان',
    ['label' => 'واحد 3', 'url' => ['/build/construction/unit3/manage/index']],
    ['label' => 'فعالیت د', 'url' => ['/build/construction/unit3/manage/investigation4']],
    'داده گاه موضوع',
    ['label' => 'لیست داده گاه موضوع', 'url' => ['archived-index']],
    $this->title
];
$this->params['horizontalMenuItems'] = [
    [
        'label' => 'برنامه موضوع',
        'url' => ['/build/construction/unit3/investigation4/subject/manage/index']
    ],
    [
        'label' => 'داده گاه موضوع',
        'url' => ['/build/construction/unit3/investigation4/subject/manage/archived-index']
    ],
    [
        'label' => 'داده گاه روند موضوع',
        'url' => ['/build/construction/unit3/investigation4/subject/manage/index-history']
    ],
    [
        'label' => 'داده گاه منابع',
        'url' => ['/build/construction/unit3/investigation4/reference/manage/index']
    ]
];

?>

<div class="subject-view">
    <?= $this->render('@nad/common/modules/investigation/subject/views/subject/view_archived', [
        'model' => $model,
        'moduleId' => 'unit3'
    ]) ?>
</div>
