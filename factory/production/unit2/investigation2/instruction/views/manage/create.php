<?php

use nad\factory\production\unit2\investigation2\instruction\models\Category;
use nad\factory\production\unit2\investigation2\reference\models\Reference;
use nad\factory\production\unit2\investigation2\proposal\models\Proposal;
use nad\factory\production\unit2\investigation2\report\models\Report;
use nad\factory\production\unit2\investigation2\method\models\Method;

$this->title = 'افزودن دستورالعمل';
$this->params['breadcrumbs'] = [
    'کارخانه',
    'تولید',
    ['label' => 'آزمایشگاه', 'url' => ['/factory/production/unit2/manage/index']],
    ['label' => 'فعالیت ب', 'url' => ['/factory/production/unit2/manage/investigation2']],
    $this->title
];

?>

<div class="instruction-create">
    <?= $this->render('@nad/common/modules/investigation/instruction/views/instruction/_form', [
        'model' => $model,
        'categoryConsumerCode' => Category::CONSUMER_CODE,
        'referenceConsumerCode' => Reference::CONSUMER_CODE,
        'proposalConsumerCode' => Proposal::CONSUMER_CODE,
        'reportConsumerCode' => Report::CONSUMER_CODE,
        'methodConsumerCode' => Method::CONSUMER_CODE,
    ]) ?>
</div>
