<?php

$this->title = 'روند ' . $model->title;
$this->params['breadcrumbs'] = [
    'فنی', 
    'برق',
    ['label' => 'لیست مراحل', 'url' => ['/control/stage/manage/index']],        
    $this->title
];

?>

<div class="stage-view">
    <?= $this->render('@nad/common/modules/engineering/stage/views/manage/view', [
        'model' => $model,
        'moduleId' => 'stage'        
    ]) ?>
</div>
