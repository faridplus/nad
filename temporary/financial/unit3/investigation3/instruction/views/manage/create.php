<?php

use nad\temporary\financial\unit3\investigation3\instruction\models\Category;
use nad\temporary\financial\unit3\investigation3\reference\models\Reference;
use nad\temporary\financial\unit3\investigation3\proposal\models\Proposal;
use nad\temporary\financial\unit3\investigation3\report\models\Report;
use nad\temporary\financial\unit3\investigation3\method\models\Method;

$this->title = 'افزودن دستورالعمل';
$this->params['breadcrumbs'] = [
    'موقت',
    'مالی',
    ['label' => 'واحد 3', 'url' => ['/temporary/financial/unit3/manage/index']],
    ['label' => 'فعالیت ج', 'url' => ['/temporary/financial/unit3/manage/investigation3']],
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
