<?php

$this->title = 'نمایش درختی';
$this->params['breadcrumbs'] = [
    'بندر',
    'واحد بندر',
    ['label' => 'واحد 3', 'url' => ['/seaport/wayside/unit3/manage/index']],
    ['label' => 'فعالیت د', 'url' => ['/seaport/wayside/unit3/manage/investigation4']],
    ['label' => 'رده های روشها', 'url' => ['/seaport/wayside/unit3/investigation4/method/category/index']],
    $this->title
];

?>

<h4 class="nad-page-title">نمایش درختی</h4>
<br>
<div class="tree-view">
    <?= $this->render('@nad/common/modules/investigation/method/views/category/tree', [
        'moduleId' => 'wayside'
    ]) ?>
</div>
