<?php

$this->title = 'رده‌بندی گزارش‌ها';
$this->params['breadcrumbs'] = [
    'احداث',
    'چاه',
    ['label' => 'واحد 1', 'url' => ['/build/well/unit1/manage/index']],
    ['label' => 'فعالیت ه', 'url' => ['/build/well/unit1/manage/investigation5']],
    $this->title
];

?>

<?= $this->render('@nad/common/modules/investigation/report/views/category/index', [
    'dataProvider' => $dataProvider,
    'searchModel' => $searchModel
]);
