<?php

$this->title = 'مدرک ' . $model->title;
$this->params['breadcrumbs'] = [
    'احداث',
    'تجهیزات',
    ['label' => 'واحد 1', 'url' => ['/build/equipment/unit1/manage/index']],
    ['label' => 'فعالیت الف', 'url' => ['/build/equipment/unit1/manage/investigation1']],
    'داده گاه گزارش',
    ['label' => 'لیست داده گاه گزارش', 'url' => ['archived-index']],
    $this->title
];
$this->params['horizontalMenuItems'] = [
    [
        'label' => 'برنامه گزارش',
        'url' => ['/build/equipment/unit1/investigation1/report/manage/index']
    ],
    [
        'label' => 'داده گاه گزارش',
        'url' => ['/build/equipment/unit1/investigation1/report/manage/archived-index']
    ],
    [
        'label' => 'داده گاه روند گزارش',
        'url' => ['/build/equipment/unit1/investigation1/report/manage/index-history']
    ],
    [
        'label' => 'داده گاه منابع',
        'url' => ['/build/equipment/unit1/investigation1/reference/manage/index']
    ]
];

?>

<div class="report-view">
    <?= $this->render('@nad/common/modules/investigation/report/views/report/view_archived', [
        'model' => $model,
        'moduleId' => 'unit1'
    ]) ?>
</div>
