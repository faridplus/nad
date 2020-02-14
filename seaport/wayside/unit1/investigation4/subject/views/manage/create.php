<?php

use nad\seaport\wayside\unit1\investigation4\reference\models\Reference;
use nad\seaport\wayside\unit1\investigation4\proposal\models\Proposal;
use nad\seaport\wayside\unit1\investigation4\report\models\Report;
use nad\seaport\wayside\unit1\investigation4\method\models\Method;

$this->title = 'افزودن موضوع';
$this->params['breadcrumbs'] = [
    'بندر',
    'واحد بندر',
    ['label' => 'واحد 1', 'url' => ['/seaport/wayside/unit1/manage/index']],
    ['label' => 'فعالیت د', 'url' => ['/seaport/wayside/unit1/manage/investigation4']],
    $this->title
];

?>

<div class="subject-create">
    <?= $this->render('@nad/common/modules/investigation/subject/views/subject/_form', [
        'model' => $model,
        'referenceConsumerCode' => Reference::CONSUMER_CODE,
        'proposalConsumerCode' => Proposal::CONSUMER_CODE,
        'reportConsumerCode' => Report::CONSUMER_CODE,
        'methodConsumerCode' => Method::CONSUMER_CODE,
    ]) ?>
</div>
