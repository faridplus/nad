<?php

$this->title = 'نمایش درختی';
$this->params['breadcrumbs'] = [
    'موقت',
    'اداری',
    ['label' => 'واحد 3', 'url' => ['/temporary/administrative/unit3/manage/index']],
    ['label' => 'فعالیت ب', 'url' => ['/temporary/administrative/unit3/manage/investigation2']],
    ['label' => 'رده های گزارشات', 'url' => ['/temporary/administrative/unit3/investigation2/report/category/index']],
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
