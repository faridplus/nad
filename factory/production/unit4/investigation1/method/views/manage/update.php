<?php

use nad\factory\production\unit4\investigation1\method\models\Category;
use nad\factory\production\unit4\investigation1\reference\models\Reference;
use nad\factory\production\unit4\investigation1\proposal\models\Proposal;
use nad\factory\production\unit4\investigation1\report\models\Report;

$this->title = 'ویرایش';
$this->params['breadcrumbs'] = [
    'کارخانه',
    'تولید',
    ['label' => 'تعمیرات و نگهداری', 'url' => ['/factory/production/unit4/manage/index']],
    ['label' => 'فعالیت الف', 'url' => ['/factory/production/unit4/manage/investigation1']],
    ['label' => 'لیست روش', 'url' => ['index']],
    ['label' => $model->title, 'url' => ['view', 'id' => $model->id]],
    $this->title
];

?>

<div class="method-update">
    <?= $this->render('@nad/common/modules/investigation/method/views/method/_form', [
        'model' => $model,
        'categoryConsumerCode' => Category::CONSUMER_CODE,
        'referenceConsumerCode' => Reference::CONSUMER_CODE,
        'proposalConsumerCode' => Proposal::CONSUMER_CODE,
        'reportConsumerCode' => Report::CONSUMER_CODE,
    ]) ?>
</div>
