<?php

$this->title = 'روند ' . $model->title;
$this->params['breadcrumbs'] = [
    'فنی',
    'بررسی، پایش و طراحی',
    ['label' => 'لوله کشی', 'url' => ['/engineering/piping/stage/manage/index']],
    ['label' => 'بررسی', 'url' => ['/engineering/piping/stage/manage/investigation']],
    ['label' => 'لیست پروپوزال', 'url' => ['index']],
    $this->title
];

?>

<div class="proposal-view">
    <?= $this->render('@nad/common/modules/investigation/proposal/views/proposal/view', [
        'model' => $model,
        'moduleId' => 'piping',
        'creatReportRoute' => '/piping/investigation/report/manage/create'
    ]) ?>
</div>
