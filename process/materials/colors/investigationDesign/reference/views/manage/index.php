<?php

$this->title = 'لیست منابع';
$this->params['breadcrumbs'] = [
    'فرایند',
    'فرایندها',
    ['label' => 'رنگ ها', 'url' => ['/colors/manage/index']],
    ['label' => 'بررسی طراحی', 'url' => ['/colors/manage/investigation-design']],
    'داده گاه منابع',
    $this->title
];

?>

<?= $this->render('@nad/common/modules/investigation/reference/views/reference/index', [
    'dataProvider' => $dataProvider,
    'searchModel' => $searchModel
]);
