<?php

$this->title = 'روند ' . $model->title;
$this->params['breadcrumbs'] = [
    'کارخانه',
    'تولید',
    ['label' => 'فنی', 'url' => ['/factory/production/unit1/manage/index']],
    ['label' => 'فعالیت ه', 'url' => ['/factory/production/unit1/manage/investigation5']],
    ['label' => 'لیست دستورالعمل', 'url' => ['index']],
    $this->title
];

?>

<div class="instruction-view">
    <?= $this->render('@nad/common/modules/investigation/instruction/views/instruction/view', [
        'model' => $model,
        'moduleId' => 'unit1'
    ]) ?>
</div>
