<?php

$this->title = 'لیست پروپوزال';
$this->params['breadcrumbs'] = [
    'فرایند',
    'مواد',
    ['label' => 'رنگ ها', 'url' => ['/process/materials/colors/manage/index']],
    ['label' => 'بررسی', 'url' => ['/process/materials/colors/manage/investigation']],
    $this->title
];

?>

<?= $this->render('@nad/common/modules/investigation/proposal/views/proposal/index', [
    'dataProvider' => $dataProvider,
    'searchModel' => $searchModel
]);
