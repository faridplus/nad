<?php

use nad\process\ird\hydraulic\investigation\instruction\models\Category;
use nad\process\ird\hydraulic\investigation\reference\models\Reference;
use nad\process\ird\hydraulic\investigation\proposal\models\Proposal;
use nad\process\ird\hydraulic\investigation\report\models\Report;
use nad\process\ird\hydraulic\investigation\method\models\Method;

$this->title = 'ویرایش';
$this->params['breadcrumbs'] = [
    'فرایند',
    'فرایندها',
    ['label' => 'هیدرولیک', 'url' => ['/process/ird/hydraulic/manage/index']],
    ['label' => 'بررسی فرایندی', 'url' => ['/process/ird/hydraulic/manage/investigation']],
    ['label' => 'لیست دستورالعمل', 'url' => ['index']],
    ['label' => $model->title, 'url' => ['view', 'id' => $model->id]],
    $this->title
];

?>

<div class="instruction-update">
    <?= $this->render('@nad/common/modules/investigation/instruction/views/instruction/_form', [
        'model' => $model,
        'categoryConsumerCode' => Category::CONSUMER_CODE,
        'referenceConsumerCode' => Reference::CONSUMER_CODE,
        'proposalConsumerCode' => Proposal::CONSUMER_CODE,
        'reportConsumerCode' => Report::CONSUMER_CODE,
        'methodConsumerCode' => Method::CONSUMER_CODE,
    ]) ?>
</div>
