<?php

$this->title = 'نمایش درختی';
$this->params['breadcrumbs'] = [
    'احداث',
    'ساختمان',
    ['label' => 'واحد 3', 'url' => ['/build/construction/unit3/manage/index']],
    ['label' => 'فعالیت ب', 'url' => ['/build/construction/unit3/manage/investigation2']],
    ['label' => 'رده های منشاها', 'url' => ['/build/construction/unit3/investigation2/source/category/index']],
    $this->title
];

?>

<h4 class="nad-page-title">نمایش درختی</h4>
<br>
<div class="tree-view">
    <?= $this->render('@nad/common/modules/investigation/source/views/category/tree', [
        'moduleId' => 'construction'
    ]) ?>
</div>
