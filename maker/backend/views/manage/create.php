<?php

use themes\admin360\widgets\ActionButtons;

$this->title = 'سازنده جدید';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="maker-create">
    <?= ActionButtons::widget([
        'buttons' => [
            'index' => [
                'label' => 'لیست سازندگان',
                'visibleFor' => ['supplier.create']
            ]
        ],
    ]); ?>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
