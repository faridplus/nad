<?php

$this->title = 'روند ' . $model->title;
$this->params['breadcrumbs'] = [
    'فرایند',
    'فرایندها',
    ['label' => 'انتقال حرارت', 'url' => ['/process/ird/heattransfer/manage/index']],
    ['label' => 'بررسی پایش', 'url' => ['/process/ird/heattransfer/manage/investigation-monitor']],
    'داده گاه روندهای پروپوزال',
    ['label' => 'لیست داده گاه روندهای پروپوزال', 'url' => ['index-history']],
    $this->title
];

$this->params['horizontalMenuItems'] = [
    [
        'label' => 'برنامه پروپوزال',
        'url' => ['/process/ird/heattransfer/investigationMonitor/proposal/manage/index']
    ],
    [
        'label' => 'داده گاه پروپوزال',
        'url' => ['/process/ird/heattransfer/investigationMonitor/proposal/manage/archived-index']
    ],
    [
        'label' => 'داده گاه روند پروپوزال',
        'url' => ['/process/ird/heattransfer/investigationMonitor/proposal/manage/index-history']
    ],
    [
        'label' => 'داده گاه منابع',
        'url' => ['/process/ird/heattransfer/investigationMonitor/reference/manage/index']
    ]
];

?>

<div class="proposal-view">
    <?= $this->render('@nad/common/modules/investigation/proposal/views/proposal/view_history', [
        'model' => $model,
        'logs' => $logs,
        'logCounter' => $logCounter,
        'allComments' =>$allComments,
        'moduleId' => 'heattransfer'
    ]) ?>
</div>
