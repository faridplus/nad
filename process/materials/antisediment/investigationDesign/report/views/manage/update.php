<?php

use nad\process\materials\antisediment\investigationDesign\report\models\Category;
use nad\process\materials\antisediment\investigationDesign\reference\models\Reference;
use nad\process\materials\antisediment\investigationDesign\proposal\models\Proposal;

$this->title = 'ویرایش';
$this->params['breadcrumbs'] = [
    'فرایند',
    'فرایندها',
    ['label' => 'ضدرسوب', 'url' => ['/process/materials/antisediment/manage/index']],
    ['label' => 'بررسی', 'url' => ['/process/materials/antisediment/manage/investigation-design']],
    ['label' => 'لیست گزارش', 'url' => ['index']],
    ['label' => $model->title, 'url' => ['view', 'id' => $model->id]],
    $this->title
];

?>

<div class="report-update">
    <?= $this->render('@nad/common/modules/investigation/report/views/report/_form', [
        'model' => $model,
        'categoryConsumerCode' => Category::CONSUMER_CODE,
        'referenceConsumerCode' => Reference::CONSUMER_CODE,
        'proposalConsumerCode' => Proposal::CONSUMER_CODE,
    ]) ?>
</div>
