<?php

use nad\build\construction\unit2\investigation5\reference\models\Reference;
use nad\build\construction\unit2\investigation5\proposal\models\Proposal;
use nad\build\construction\unit2\investigation5\report\models\Report;
use nad\build\construction\unit2\investigation5\method\models\Method;

$this->title = 'افزودن موضوع';
$this->params['breadcrumbs'] = [
    'احداث',
    'ساختمان',
    ['label' => 'واحد 2', 'url' => ['/build/construction/unit2/manage/index']],
    ['label' => 'فعالیت ه', 'url' => ['/build/construction/unit2/manage/investigation5']],
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
