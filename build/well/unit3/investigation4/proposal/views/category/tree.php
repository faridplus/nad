<?php

$this->title = 'نمایش درختی';
$this->params['breadcrumbs'] = [
    'احداث',
    'چاه',
    ['label' => 'واحد 3', 'url' => ['/build/well/unit3/manage/index']],
    ['label' => 'فعالیت د', 'url' => ['/build/well/unit3/manage/investigation4']],
    ['label' => 'رده های پروپوزالها', 'url' => ['/build/well/unit3/investigation4/proposal/category/index']],
    $this->title
];

?>

<h4 class="nad-page-title">نمایش درختی</h4>
<br>
<div class="tree-view">
    <?= $this->render('@nad/common/modules/investigation/proposal/views/category/tree', [
        'moduleId' => 'well'
    ]) ?>
</div>
