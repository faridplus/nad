<?php

$this->title = 'لیست گزارش';
$this->params['breadcrumbs'] = [
    'احداث',
    'تجهیزات',
    ['label' => 'واحد 3', 'url' => ['/build/equipment/unit3/manage/index']],
    ['label' => 'فعالیت ه', 'url' => ['/build/equipment/unit3/manage/investigation5']],
    $this->title
];

?>

<?= $this->render('@nad/common/modules/investigation/report/views/report/index', [
    'dataProvider' => $dataProvider,
    'searchModel' => $searchModel
]);
