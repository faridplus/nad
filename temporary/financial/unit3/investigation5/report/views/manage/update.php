<?php

use nad\temporary\financial\unit3\investigation5\report\models\Category;
use nad\temporary\financial\unit3\investigation5\reference\models\Reference;
use nad\temporary\financial\unit3\investigation5\proposal\models\Proposal;

$this->title = 'ویرایش';
$this->params['breadcrumbs'] = [
    'موقت',
    'مالی',
    ['label' => 'واحد 3', 'url' => ['/temporary/financial/unit3/manage/index']],
    ['label' => 'فعالیت ه', 'url' => ['/temporary/financial/unit3/manage/investigation5']],
    ['label' => 'لیست گزارش', 'url' => ['index']],
    ['label' => $model->title, 'url' => ['view', 'id' => $model->id]],
    $this->title
];

?>

<div class="report-update">
    <?= $this->render('@nad/common/modules/investigation/report/views/report/_form', [
        'model' => $model,
        'categoryConsumerCode' => Category::CONSUMER_CODE,
        'referenceConsumerCode' => Reference::CONSUMER_CODE,
        'proposalConsumerCode' => Proposal::CONSUMER_CODE,
    ]) ?>
</div>
