<?php

use nad\process\materials\grs\investigationDesign\reference\models\Reference;
use nad\process\materials\grs\investigationDesign\proposal\models\Proposal;
use nad\process\materials\grs\investigationDesign\report\models\Report;
use nad\process\materials\grs\investigationDesign\method\models\Method;

$this->title = 'افزودن موضوع';
$this->params['breadcrumbs'] = [
    'فرایند',
    'مواد',
    ['label' => 'جی آر اس', 'url' => ['/process/materials/grs/manage/index']],
    ['label' => 'مطالعات کلی و دستورالعمل ها', 'url' => ['/process/materials/grs/manage/investigation-design']],
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
