<?php

use nad\factory\support\unit1\investigation2\instruction\models\Category;
use nad\factory\support\unit1\investigation2\reference\models\Reference;
use nad\factory\support\unit1\investigation2\proposal\models\Proposal;
use nad\factory\support\unit1\investigation2\report\models\Report;
use nad\factory\support\unit1\investigation2\method\models\Method;

$this->title = 'افزودن دستورالعمل';
$this->params['breadcrumbs'] = [
    'کارخانه',
    'پشتیبانی',
    ['label' => 'واحد 1', 'url' => ['/factory/support/unit1/manage/index']],
    ['label' => 'فعالیت ب', 'url' => ['/factory/support/unit1/manage/investigation2']],
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
