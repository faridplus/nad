<?php

use nad\factory\support\unit1\investigation4\reference\models\Reference;
use nad\factory\support\unit1\investigation4\proposal\models\Proposal;
use nad\factory\support\unit1\investigation4\report\models\Report;
use nad\factory\support\unit1\investigation4\method\models\Method;

$this->title = 'افزودن موضوع';
$this->params['breadcrumbs'] = [
    'کارخانه',
    'پشتیبانی',
    ['label' => 'واحد 1', 'url' => ['/factory/support/unit1/manage/index']],
    ['label' => 'فعالیت د', 'url' => ['/factory/support/unit1/manage/investigation4']],
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
