<?php

use nad\build\equipment\unit3\investigation3\source\models\Source;
use nad\build\equipment\unit3\investigation3\proposal\models\Category;
use nad\build\equipment\unit3\investigation3\reference\models\Reference;

$this->title = 'افزودن پروپوزال';
$this->params['breadcrumbs'] = [
    'احداث',
    'تجهیزات',
    ['label' => 'واحد 3', 'url' => ['/build/equipment/unit3/manage/index']],
    ['label' => 'فعالیت ج', 'url' => ['/build/equipment/unit3/manage/investigation3']],
    $this->title
];

?>

<div class="proposal-create">
    <?= $this->render('@nad/common/modules/investigation/proposal/views/proposal/_form', [
        'model' => $model,
        'referenceConsumerCode' => Reference::CONSUMER_CODE,
        'categoryConsumerCode' => Category::CONSUMER_CODE,
        'sourceConsumerCode' => Source::CONSUMER_CODE
    ]) ?>
</div>
