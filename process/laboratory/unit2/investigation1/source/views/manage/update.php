<?php

use nad\process\laboratory\unit2\investigation1\source\models\Category;
use nad\process\laboratory\unit2\investigation1\reference\models\Reference;

$this->title = 'ویرایش منشا';
$this->params['breadcrumbs'] = [
    'فرایند',
    'آزمایشگاه',
    ['label' => 'واحد 2', 'url' => ['/process/laboratory/unit2/manage/index']],
    ['label' => 'فعالیت بررسی', 'url' => ['/process/laboratory/unit2/manage/investigation1']],
    'برنامه منشا',
    ['label' => 'لیست منشاهای برنامه', 'url' => ['index']],
    ['label' => $model->title, 'url' => ['view', 'id' => $model->id]],
    $this->title
];

?>

<div class="source-update">
    <?= $this->render('@nad/common/modules/investigation/source/views/source/_form', [
        'model' => $model,
        'referenceConsumerCode' => Reference::CONSUMER_CODE,
        'categoryConsumerCode' => Category::CONSUMER_CODE,
    ]) ?>
</div>
