<?php

use nad\process\materials\acidicWasher\investigationDesign\report\models\Category;
use nad\process\materials\acidicWasher\investigationDesign\reference\models\Reference;
use nad\process\materials\acidicWasher\investigationDesign\proposal\models\Proposal;

$this->title = 'افزودن گزارش';
$this->params['breadcrumbs'] = [
    'فرایند',
    'فرایندها',
    ['label' => 'شوینده اسیدی', 'url' => ['/process/materials/acidicWasher/manage/index']],
    ['label' => 'بررسی', 'url' => ['/process/materials/acidicWasher/manage/investigation-design']],
    $this->title
];

?>

<div class="report-create">
    <?= $this->render('@nad/common/modules/investigation/report/views/report/_form', [
        'model' => $model,
        'categoryConsumerCode' => Category::CONSUMER_CODE,
        'referenceConsumerCode' => Reference::CONSUMER_CODE,
        'proposalConsumerCode' => Proposal::CONSUMER_CODE,
    ]) ?>
</div>
