<?php

use nad\build\equipment\unit2\investigation5\instruction\models\Category;
use nad\build\equipment\unit2\investigation5\reference\models\Reference;
use nad\build\equipment\unit2\investigation5\proposal\models\Proposal;
use nad\build\equipment\unit2\investigation5\report\models\Report;
use nad\build\equipment\unit2\investigation5\method\models\Method;

$this->title = 'افزودن دستورالعمل';
$this->params['breadcrumbs'] = [
    'احداث',
    'تجهیزات',
    ['label' => 'واحد 2', 'url' => ['/build/equipment/unit2/manage/index']],
    ['label' => 'فعالیت ه', 'url' => ['/build/equipment/unit2/manage/investigation5']],
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
