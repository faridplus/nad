<?php

$this->title = 'روند ' . $model->title;
$this->params['breadcrumbs'] = [
    'احداث',
    'ساختمان',
    ['label' => 'واحد 1', 'url' => ['/build/equipment/unit1/manage/index']],
    ['label' => 'فعالیت ج', 'url' => ['/build/equipment/unit1/manage/investigation3']],
    'داده گاه روندهای روش',
    ['label' => 'لیست داده گاه روندهای روش', 'url' => ['index-history']],
    $this->title
];

$this->params['horizontalMenuItems'] = [
    [
        'label' => 'برنامه روش',
        'url' => ['/build/equipment/unit1/investigation3/method/manage/index']
    ],
    [
        'label' => 'داده گاه روش',
        'url' => ['/build/equipment/unit1/investigation3/method/manage/archived-index']
    ],
    [
        'label' => 'داده گاه روند روش',
        'url' => ['/build/equipment/unit1/investigation3/method/manage/index-history']
    ],
    [
        'label' => 'داده گاه منابع',
        'url' => ['/build/equipment/unit1/investigation3/reference/manage/index']
    ]
];

?>

<div class="method-view">
    <?= $this->render('@nad/common/modules/investigation/method/views/method/view_history', [
        'model' => $model,
        'logs' => $logs,
        'logCounter' => $logCounter,
        'allComments' =>$allComments,
        'moduleId' => 'unit1'
    ]) ?>
</div>
