<?php

use nad\temporary\financial\unit2\investigation2\instruction\models\Category;
use nad\temporary\financial\unit2\investigation2\reference\models\Reference;
use nad\temporary\financial\unit2\investigation2\proposal\models\Proposal;
use nad\temporary\financial\unit2\investigation2\report\models\Report;
use nad\temporary\financial\unit2\investigation2\method\models\Method;

$this->title = 'ویرایش';
$this->params['breadcrumbs'] = [
    'موقت',
    'مالی',
    ['label' => 'واحد 2', 'url' => ['/temporary/financial/unit2/manage/index']],
    ['label' => 'فعالیت ب', 'url' => ['/temporary/financial/unit2/manage/investigation2']],
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
