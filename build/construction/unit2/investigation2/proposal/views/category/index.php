<?php

$this->title = 'رده‌بندی پروپوزال';
$this->params['breadcrumbs'] = [
    'احداث',
    'ساختمان',
    ['label' => 'واحد 2', 'url' => ['/build/construction/unit2/manage/index']],
    ['label' => 'فعالیت ب', 'url' => ['/build/construction/unit2/manage/investigation2']],
    $this->title
];

?>

<?= $this->render('@nad/common/modules/investigation/proposal/views/category/index', [
    'dataProvider' => $dataProvider,
    'searchModel' => $searchModel
]);
