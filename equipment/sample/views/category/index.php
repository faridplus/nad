<?php

use yii\helpers\Html;
use yii\widgets\Pjax;
use yii\grid\GridView;
use theme\widgets\Panel;
use theme\widgets\ActionButtons;
use nad\common\widgets\treeView\TreeView;

$module = $this->context->module;
$this->title = $module->department . ' - ' . $module->pluralLabel . ' - لیست رده ها';
$this->params['breadcrumbs'] = [
    $module->department,
    ['label' => $module->pluralLabel, 'url' => ['manage/index']],
    'لیست رده ها'
];

?>

<div class="categories-index">
    <?= ActionButtons::widget([
        'buttons' => [
            'create' => [
                'label' => 'رده جدید',
                'options' => [
                    'class' => 'ajaxcreate',
                    'data-gridpjaxid' => 'categories-gridviewpjax'
                ]
            ],
            'materials' => [
                'label' => $module->pluralLabel,
                'url' => ['manage/index'],
                'type' => 'info',
                'icon' => 'list'
            ]
        ]
    ]) ?>
    <div class="sliding-form-wrapper"></div>
    <div class="row">
        <div class="col-md-7">
            <?php Panel::begin(['title' => 'لیست رده ها']) ?>
                <?php Pjax::begin([
                    'id' => 'categories-gridviewpjax',
                    'enablePushState' => false
                ]) ?>
                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            [
                                'class' => 'yii\grid\SerialColumn'
                            ],
                            [
                                'class' => 'nad\common\code\CodeGridColumn',
                                'options' => ['style' => 'width:30%'],
                                'isAjaxGrid' => true
                            ],
                            [
                                'class' => 'core\grid\TitleColumn',
                                'isAjaxGrid' => true
                            ],
                            [
                                'attribute' => 'depth',
                                'value' => function ($model) {
                                    return $model->getDepthTitle();
                                },
                                'filter' => $searchModel->getDepthList()
                            ],
                            [
                                'class' => 'core\grid\AjaxActionColumn',
                                'template' => '{view} {update} {delete} {tree}',
                                'options' => ['style' => 'width:20%'],
                                'buttons' => [
                                    'tree' => function ($url, $model, $key) {
                                        return Html::a(
                                            '<span class="fa fa-tree"></span>',
                                            '#',
                                            [
                                                'title' => 'نمایش درخت',
                                                'data-pjax' => 0,
                                                'data-rootid' => $model->id,
                                                'class' => 'reload-tree'
                                            ]
                                        );
                                    }
                                ]
                            ]
                        ]
                    ]) ?>
                <?php Pjax::end() ?>
            <?php Panel::end() ?>
        </div>
        <div class="col-md-5">
            <?= TreeView::widget() ?>
        </div>
    </div>
</div>

