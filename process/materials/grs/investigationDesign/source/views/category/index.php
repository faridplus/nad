<?php

$this->title = 'رده‌بندی منشا';
$this->params['breadcrumbs'] = [
    'فرایند',
    'فرایندها',
    ['label' => 'جی آر اس', 'url' => ['/grs/manage/index']],
    ['label' => 'مطالعات کلی و دستورالعمل ها', 'url' => ['/grs/manage/investigation-design']],
    $this->title
];

?>

<?= $this->render('@nad/common/modules/investigation/source/views/category/index', [
    'dataProvider' => $dataProvider,
    'searchModel' => $searchModel
]);
