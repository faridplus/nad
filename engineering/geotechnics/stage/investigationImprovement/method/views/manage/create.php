<?php

use nad\engineering\geotechnics\stage\investigationImprovement\method\models\Category;
use nad\engineering\geotechnics\stage\investigationImprovement\reference\models\Reference;
use nad\engineering\geotechnics\stage\investigationImprovement\proposal\models\Proposal;
use nad\engineering\geotechnics\stage\investigationImprovement\report\models\Report;

$this->title = 'افزودن روش';
$this->params['breadcrumbs'] = [
    'فنی',
    'ژئوتکنیک',
    ['label' => 'مراحل', 'url' => ['/engineering/geotechnics/stage/manage/index']],
    ['label' => 'بررسی بهبود', 'url' => ['/engineering/geotechnics/stage/manage/investigation-improvement']],
    $this->title
];

?>

<div class="method-create">
    <?= $this->render('@nad/common/modules/investigation/method/views/method/_form', [
        'model' => $model,
        'categoryConsumerCode' => Category::CONSUMER_CODE,
        'referenceConsumerCode' => Reference::CONSUMER_CODE,
        'proposalConsumerCode' => Proposal::CONSUMER_CODE,
        'reportConsumerCode' => Report::CONSUMER_CODE,
    ]) ?>
</div>
