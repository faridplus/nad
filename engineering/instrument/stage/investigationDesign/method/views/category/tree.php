<?php

$this->title = 'نمایش درختی';
$this->params['breadcrumbs'] = [
    'فنی',
    'ابزار دقیق',
    ['label' => 'مراحل', 'url' => ['/engineering/instrument/stage/manage/index']],
    ['label' => 'بررسی طراحی', 'url' => ['/engineering/instrument/stage/manage/investigation-design']],
    ['label' => 'رده های روشها', 'url' => ['/engineering/instrument/stage/investigationDesign/method/category/index']],
    $this->title
];

?>

<h4 class="nad-page-title">نمایش درختی</h4>
<br>
<div class="tree-view">
    <?= $this->render('@nad/common/modules/investigation/method/views/category/tree', [
        'moduleId' => 'instrument'
    ]) ?>
</div>
