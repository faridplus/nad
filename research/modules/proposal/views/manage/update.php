<?php

use theme\widgets\ActionButtons;

$this->title = 'ویرایش پروپوزال';
$this->params['breadcrumbs'][] = ['label' => 'لیست پروپوزال ها', 'url' => ['index']];
$this->params['breadcrumbs'][] = [
    'label' => $model->title,
    'url' => ['view', 'id' => $model->id]
];
$this->params['breadcrumbs'][] = 'ویرایش';

?>

<div class="proposal-update">
	<?= ActionButtons::widget([
        'modelID' => $model->id,
        'buttons' => [
            'index' => ['label' => 'لیست پروپوزال ها']
        ]
    ]) ?>
    <?= $this->render('_form', [
        'model' => $model
    ]) ?>
</div>
