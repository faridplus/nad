<?php

$this->title = 'لیست مکان ها';
// $this->params['stageCategoriesIndex'] = ['/engineering/piping/stage/category/index'];
$this->params['breadcrumbs'] = [
    'فنی',
    'لوله کشی',
    ['label' => 'مکان ها', 'url' => ['/engineering/piping/site/site/index']],
    $this->title
];

?>

<?= $this->render('@nad/common/modules/site/views/site/index', [
    'dataProvider' => $dataProvider,
    'searchModel' => $searchModel,
]);
