<?php

$this->title = 'نمایش درختی';
$this->params['breadcrumbs'] = [
    'بندر',
    'واحد بندر',
    ['label' => 'واحد 2', 'url' => ['/seaport/wayside/unit2/manage/index']],
    ['label' => 'فعالیت ه', 'url' => ['/seaport/wayside/unit2/manage/investigation5']],
    ['label' => 'رده های گزارشات', 'url' => ['/seaport/wayside/unit2/investigation5/report/category/index']],
    $this->title
];

?>

<h4 class="nad-page-title">نمایش درختی</h4>
<br>
<div class="tree-view">
    <?= $this->render('@nad/common/modules/investigation/report/views/category/tree', [
        'moduleId' => 'wayside'
    ]) ?>
</div>
