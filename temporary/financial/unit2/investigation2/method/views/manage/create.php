<?php

use nad\temporary\financial\unit2\investigation2\method\models\Category;
use nad\temporary\financial\unit2\investigation2\reference\models\Reference;
use nad\temporary\financial\unit2\investigation2\proposal\models\Proposal;
use nad\temporary\financial\unit2\investigation2\report\models\Report;

$this->title = 'افزودن روش';
$this->params['breadcrumbs'] = [
    'موقت',
    'مالی',
    ['label' => 'واحد 2', 'url' => ['/temporary/financial/unit2/manage/index']],
    ['label' => 'فعالیت ب', 'url' => ['/temporary/financial/unit2/manage/investigation2']],
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
