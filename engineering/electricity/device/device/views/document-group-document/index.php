<?php
use nad\common\modules\device\models\DocumentGroup;

$groupModel = DocumentGroup::findOne(['id' => Yii::$app->request->queryParams['DocumentGroupDocumentSearch']['groupId']]);

$this->title = 'لیست مدارک';
$this->params['deviceIndex'] = ['/engineering/electricity/device/device/manage/index'];
$this->params['groupsIndex'] = [
    '/engineering/electricity/device/device/document-group/index',
    'DocumentGroupSearch[deviceId]' => $groupModel->device->id
];
$this->params['breadcrumbs'] = [
    'فنی',
    'برق',
    ['label' => 'دستگاه ها', 'url' => ['/engineering/electricity/device/manage/index']],
    ['label' => 'لیست تجهیزات', 'url' => ['/engineering/electricity/device/device/manage/index']],
    ['label' => 'بسته مدارک', 'url' => $this->params['groupsIndex']],
    $this->title
];

?>

<?= $this->render('@nad/common/modules/device/views/document-group-document/index', [
    'dataProvider' => $dataProvider,
    'searchModel' => $searchModel,
    'groupModel' => $groupModel
]);
