<?php

$this->title = 'نمایش درختی';
$this->params['breadcrumbs'] = [
    'فرایند',
    'فرایندها',
    ['label' => 'شوینده قلیایی', 'url' => ['/process/materials/alkalineWasher/manage/index']],
    ['label' => 'مطالعات کلی و دستورالعمل ها', 'url' => ['/process/materials/alkalineWasher/manage/investigation-design']],
    ['label' => 'رده های روشها', 'url' => ['/process/materials/alkalineWasher/investigationDesign/method/category/index']],
    $this->title
];

?>

<h4 class="nad-page-title">نمایش درختی</h4>
<br>
<div class="tree-view">
    <?= $this->render('@nad/common/modules/investigation/method/views/category/tree', [
        'moduleId' => 'piping'
    ]) ?>
</div>
