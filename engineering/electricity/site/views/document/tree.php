<?php

$this->title = 'لیست مدارک';
$this->params['breadcrumbs'] = [
    'فنی',
    'برق',
    ['label' => 'لیست مکان ها', 'url' => ['/engineering/electricity/site/site/index']],
    $this->title
];

?>

<?= $this->render('@nad/common/modules/site/views/document/tree');