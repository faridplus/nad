<?php

$this->title = 'روند ' . $model->title;
$this->params['breadcrumbs'] = [
    'فرایند',
    'فرایندها',
    ['label' => 'پساب', 'url' => ['/process/ird/wastewater/manage/index']],
    ['label' => 'بررسی پایش', 'url' => ['/process/ird/wastewater/manage/investigation-monitor']],
    'داده گاه روندهای منشا',
    ['label' => 'لیست داده گاه روندهای منشا', 'url' => ['index-history']],
    $this->title
];

$this->params['horizontalMenuItems'] = [
    [
        'label' => 'برنامه منشا',
        'url' => ['/process/ird/wastewater/investigationMonitor/source/manage/index']
    ],
    [
        'label' => 'داده گاه منشا',
        'url' => ['/process/ird/wastewater/investigationMonitor/source/manage/archived-index']
    ],
    [
        'label' => 'داده گاه روند منشا',
        'url' => ['/process/ird/wastewater/investigationMonitor/source/manage/index-history']
    ],
    [
        'label' => 'داده گاه منابع',
        'url' => ['/process/ird/wastewater/investigationMonitor/reference/manage/index']
    ]
];

?>

<div class="source-view">
    <?= $this->render('@nad/common/modules/investigation/source/views/source/view_history', [
        'model' => $model,
        'logs' => $logs,
        'logCounter' => $logCounter,
        'allComments' =>$allComments,
        'moduleId' => 'wastewater'
    ]) ?>
</div>
