<?php

$this->title = 'شناسنامه ' . $subject->title;
$this->params['breadcrumbs'] = [
    'احداث',
    'چاه',
    ['label' => 'واحد 3', 'url' => ['/build/well/unit3/manage/index']],
    ['label' => 'فعالیت ب', 'url' => ['/build/well/unit3/manage/investigation2']],
    ['label' => 'لیست موضوع های فعال', 'url' => ['index']],
    $this->title
];

?>

<?= $this->render('@nad/common/modules/investigation/subject/views/subject/certificate', [
    'subject' => $subject,
    'moduleId' => 'unit3',
    'baseRoute' => '/build/well/unit3/investigation2'
]);
