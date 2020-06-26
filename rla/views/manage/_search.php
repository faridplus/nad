<?php

use theme\widgets\Panel;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use core\widgets\select2\Select2;
use nad\rla\models\RowLevelAccess;
use yii\web\View;
use nad\rla\models\RowLevelAccessPreview;
use yii\helpers\ArrayHelper;
use extensions\jstree\widgets\JsTree;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

$widget = JsTree::widget([
    'clientOptions' => [
        'plugins' => ["state"]
    ],
    'dataArray' => $allowedItemTypes
]);

$this->registerJS("$(function(){
    $('#jstree_container').on('select_node.jstree', function (e, data) {
        if(!data.node.id.startsWith('j')){
            let myUrl = '" . Url::to([$route]) . "' + '?searchModel=' + data.node.id;
            console.log(myUrl);
            // this if is a dirty fix for unusual behaviour of jstree's `state` plugin
            if(window.location.href.indexOf(myUrl) <= 0 && window.location.href.indexOf('&page=') <= 0){
                window.location = myUrl;
                notify('لطفا تا بارگذاری صفحه صبر کنید...', 'info', true);
            }
        }else{
            notify('گزینه انتخاب شده از نوع داده گاه نیست!', 'error');
        }
    });
});", View::POS_END, "jstree-select-node-handler");
?>

<br>
<?php Panel::begin([
            'title' => 'انتخاب داده گاه',
            'showCollapseButton' => true
        ]) ?>
<div class="rla-search">
    <?php $form = ActiveForm::begin([
        'layout' => 'horizontal',
        'action' => [$route],
        'method' => 'get',
        'class' => 'form-horizontal',
        'fieldConfig' => [
            'template' => '<div class="col-md-offset-2 col-md-3">{label}</div><div class="col-md-7">{input}{error}</div>',
        ]
    ]); ?>

    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="searchModel">داده گاه مورد نظر خود را انتخاب کنید:</label>
                <br>
                <br>
                <div id="jstree_container"></div>
            </div>
        </div>
    </div>



    <?php ActiveForm::end(); ?>
</div>
<?php Panel::end() ?>