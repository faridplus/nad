<?php

$this->title = 'روند ' . $model->title;
$this->params['breadcrumbs'] = [
    'فنی',
    'ساختمان',
    ['label' => 'دستگاه ها', 'url' => ['/engineering/construction/device/manage/index']],
    ['label' => 'بررسی طراحی', 'url' => ['/engineering/construction/device/manage/investigation-design']],
    ['label' => 'لیست گزارش', 'url' => ['index']],
    $this->title
];

?>

<div class="report-view">
    <?= $this->render('@nad/common/modules/investigation/report/views/report/view', [
        'model' => $model,
        'moduleId' => 'device'
    ]) ?>
</div>
