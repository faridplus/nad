<?php

$this->title = 'لیست تجهیزات';
// $this->params['stageCategoriesIndex'] = ['/engineering/control/stage/category/index'];
$this->params['breadcrumbs'] = [
    'فنی',
    'کنترل',
    ['label' => 'لیست تجهیزات', 'url' => ['/engineering/control/device/device/manage/index']],
    $this->title
];

?>

<?= $this->render('@nad/common/modules/device/views/device-instance/tree');