<?php

$this->title = 'روند مدرک';
$this->params['breadcrumbs'] = [
    'فنی',
    'ساختمان',
    ['label' => 'لیست مکان ها', 'url' => ['/engineering/construction/site/site/index']],
    $this->title
];

?>

<div class="document-view">
    <?= $this->render('@nad/common/modules/site/views/document/view', [
        'model' => $model
    ]) ?>
</div>
