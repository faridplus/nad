<?php

use nad\build\construction\unit1\investigation5\reference\models\Reference;
use nad\build\construction\unit1\investigation5\proposal\models\Proposal;
use nad\build\construction\unit1\investigation5\report\models\Report;
use nad\build\construction\unit1\investigation5\method\models\Method;

$this->title = 'ویرایش';
$this->params['breadcrumbs'] = [
    'احداث',
    'ساختمان',
    ['label' => 'واحد 1', 'url' => ['/build/construction/unit1/manage/index']],
    ['label' => 'فعالیت ه', 'url' => ['/build/construction/unit1/manage/investigation5']],
    ['label' => 'لیست موضوع های فعال', 'url' => ['index']],
    ['label' => $model->title, 'url' => ['view', 'id' => $model->id]],
    $this->title
];

?>

<div class="subject-update">
    <?= $this->render('@nad/common/modules/investigation/subject/views/subject/_form', [
        'model' => $model,
        'referenceConsumerCode' => Reference::CONSUMER_CODE,
        'proposalConsumerCode' => Proposal::CONSUMER_CODE,
        'reportConsumerCode' => Report::CONSUMER_CODE,
        'methodConsumerCode' => Method::CONSUMER_CODE,
    ]) ?>
</div>
