<?php

$this->title = 'لیست روش';
$this->params['breadcrumbs'] = [
    'فرایند',
    'فرایندها',
    ['label' => 'شوینده قلیایی', 'url' => ['/alkalineWasher/manage/index']],
    ['label' => 'مطالعات کلی و دستورالعمل ها', 'url' => ['/alkalineWasher/manage/investigation-design']],
    $this->title
];

?>

<?= $this->render('@nad/common/modules/investigation/method/views/method/index', [
    'dataProvider' => $dataProvider,
    'searchModel' => $searchModel
]);
