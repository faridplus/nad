<?php

use nad\seaport\wayside\unit3\investigation4\instruction\models\Category;
use nad\seaport\wayside\unit3\investigation4\reference\models\Reference;
use nad\seaport\wayside\unit3\investigation4\proposal\models\Proposal;
use nad\seaport\wayside\unit3\investigation4\report\models\Report;
use nad\seaport\wayside\unit3\investigation4\method\models\Method;

$this->title = 'ویرایش';
$this->params['breadcrumbs'] = [
    'بندر',
    'واحد بندر',
    ['label' => 'واحد 3', 'url' => ['/seaport/wayside/unit3/manage/index']],
    ['label' => 'فعالیت د', 'url' => ['/seaport/wayside/unit3/manage/investigation4']],
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
