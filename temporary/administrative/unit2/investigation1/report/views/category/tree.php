<?php

$this->title = 'نمایش درختی';
$this->params['breadcrumbs'] = [
    'موقت',
    'اداری',
    ['label' => 'واحد 2', 'url' => ['/temporary/administrative/unit2/manage/index']],
    ['label' => 'فعالیت الف', 'url' => ['/temporary/administrative/unit2/manage/investigation1']],
    ['label' => 'رده های گزارشات', 'url' => ['/temporary/administrative/unit2/investigation1/report/category/index']],
    $this->title
];

?>

<h4 class="nad-page-title">نمایش درختی</h4>
<br>
<div class="tree-view">
    <?= $this->render('@nad/common/modules/investigation/report/views/category/tree', [
        'moduleId' => 'administrative'
    ]) ?>
</div>
