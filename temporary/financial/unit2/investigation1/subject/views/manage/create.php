<?php

use nad\temporary\financial\unit2\investigation1\reference\models\Reference;
use nad\temporary\financial\unit2\investigation1\proposal\models\Proposal;
use nad\temporary\financial\unit2\investigation1\report\models\Report;
use nad\temporary\financial\unit2\investigation1\method\models\Method;

$this->title = 'افزودن موضوع';
$this->params['breadcrumbs'] = [
    'موقت',
    'مالی',
    ['label' => 'واحد 2', 'url' => ['/temporary/financial/unit2/manage/index']],
    ['label' => 'فعالیت الف', 'url' => ['/temporary/financial/unit2/manage/investigation1']],
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
