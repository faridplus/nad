<?php

$this->title = 'روند ' . $model->title;
$this->params['breadcrumbs'] = [
    'فرایند',
    'فرایندها',
    ['label' => 'انتقال حرارت', 'url' => ['/process/ird/heattransfer/manage/index']],
    ['label' => 'بررسی فرایندی', 'url' => ['/process/ird/heattransfer/manage/investigation']],
    ['label' => 'لیست پروپوزال', 'url' => ['index']],
    $this->title
];

?>

<div class="proposal-view">
    <?= $this->render('@nad/common/modules/investigation/proposal/views/proposal/view', [
        'model' => $model,
        'moduleId' => 'heattransfer',
        'creatReportRoute' => '/heattransfer/investigation/report/manage/create'
    ]) ?>
</div>
