<?php

use nad\temporary\supply\unit2\investigation5\method\models\Category;
use nad\temporary\supply\unit2\investigation5\reference\models\Reference;
use nad\temporary\supply\unit2\investigation5\proposal\models\Proposal;
use nad\temporary\supply\unit2\investigation5\report\models\Report;

$this->title = 'افزودن روش';
$this->params['breadcrumbs'] = [
    'موقت',
    'تامین',
    ['label' => 'واحد 2', 'url' => ['/temporary/supply/unit2/manage/index']],
    ['label' => 'فعالیت ه', 'url' => ['/temporary/supply/unit2/manage/investigation5']],
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
