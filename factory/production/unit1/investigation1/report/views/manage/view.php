<?php

$this->title = 'روند ' . $model->title;
$this->params['breadcrumbs'] = [
    'کارخانه',
    'تولید',
    ['label' => 'واحد 1', 'url' => ['/factory/production/unit1/manage/index']],
    ['label' => 'فعالیت الف', 'url' => ['/factory/production/unit1/manage/investigation1']],
    ['label' => 'لیست گزارش', 'url' => ['index']],
    $this->title
];

?>

<div class="report-view">
    <?= $this->render('@nad/common/modules/investigation/report/views/report/view', [
        'model' => $model,
        'moduleId' => 'unit1'
    ]) ?>
</div>
