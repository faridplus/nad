<?php

use nad\process\laboratory\unit1\investigation1\reference\models\Reference;
use nad\process\laboratory\unit1\investigation1\proposal\models\Proposal;
use nad\process\laboratory\unit1\investigation1\report\models\Report;
use nad\process\laboratory\unit1\investigation1\method\models\Method;

$this->title = 'افزودن موضوع';
$this->params['breadcrumbs'] = [
    'فرایند',
    'آزمایشگاه',
    ['label' => 'واحد 1', 'url' => ['/process/laboratory/unit1/manage/index']],
    ['label' => 'فعالیت بررسی', 'url' => ['/process/laboratory/unit1/manage/investigation1']],
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
