<?php

$this->title = 'شناسنامه ' . $report->title;
$this->params['breadcrumbs'] = [
    'فرایند',
    'مواد',
    ['label' => 'لاک بیرنگ', 'url' => ['/process/materials/lacquer/manage/index']],
    ['label' => 'بررسی', 'url' => ['/process/materials/lacquer/manage/investigation']],
    ['label' => 'لیست گزارش', 'url' => ['index']],
    $this->title
];

?>

<?= $this->render('@nad/common/modules/investigation/proposal/views/proposal/certificate', [
    'source' => $source,
    'proposal' => $proposal,
    'report' => $report,
    'moduleId' => 'lacquer',
    'baseRoute' => '/process/materials/lacquer/investigation'
]);
