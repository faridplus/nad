<?php

use yii\helpers\Html;
use yii\widgets\Pjax;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use theme\widgets\Panel;
use theme\widgets\ActionButtons;

$module = $this->context->module;
// $this->title = $module->department.' - '.$module->pluralLabel;
// $this->params['breadcrumbs'] = [
//     $module->department,
//     $module->pluralLabel
// ];
?>

<h4 class="nad-page-title">بسته مدارک مرحله <span class="nad-page-title-focus"><?= $categoryModel->title . ' (' . $categoryModel->code . ')' ?></span></h4>
<div class="resource-index">
    <?= ActionButtons::widget([
        'buttons' => [
            'create' => [
                'label' => 'افزودن گروه های مدارک',
                'options' => [
                    'class' => 'ajaxcreate',
                    'data-gridpjaxid' => 'resource-gridviewpjax',
                    'data-params' =>
                        'Location[categoryId]=' . $categoryModel->id

                ]
            ],
            // 'categoriesIndex' => [
            //     'label' => 'رده های بسته ' . $module->pluralLabel,
            //     'icon' => 'sitemap'
            // ],
            // 'tree' => [
            //     'label' => 'نمایش درختی رده های بسته مدارک',
            //     'icon' => 'tree',
            //     'url' => ['tree-list']
            // ],
            'stageCategoriesIndex' => [
                'label' => 'لیست مراحل',
                'icon' => 'sitemap',
                'url' => $this->params['stageCategoriesIndex'],
                'type' => 'success'
            ]
        ],
    ]); ?>

    <br>
    <!-- <?= $this->render('_search', [
        'model' => $searchModel,
        'categoryModel' => $categoryModel
        ]) ?> -->

    <div class="sliding-form-wrapper"></div>

    <?php Panel::begin([
        'title' => Html::encode($this->title)
    ]) ?>
        <?php Pjax::begin([
            'id' => 'resource-gridviewpjax',
            'enablePushState' => false,
        ]); ?>
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    [
                        'header' => 'شمارنده',
                        'class' => 'yii\grid\SerialColumn'
                    ],
                    [
                        'class' => 'nad\common\grid\TitleColumn',
                        'isAjaxGrid' => true
                    ],
                    [
                        'class' => 'nad\common\grid\Column',
                        'attribute' => 'uniqueCode',
                        'value' => function($model){
                            return $model->getUniqueCode();
                        }
                    ],
                    // 'createdAt:datetime',
                    [
                        'label' => 'مدارک گروه',
                        'format' => 'raw',
                        'value' => function ($model) {
                            return Html::a(
                                    '<i class="fa fa-external-link-square fa-2x" style="color:#398439"></i>',
                                    [
                                        '/engineering/piping/document/manage/index',
                                    'DocumentSearch[groupId]' => $model->id
                                    ],
                                    [
                                        'title' => 'لیست مدارک گروه مدارک',
                                        'data-pjax' => 0
                                    ]
                                );
                        }
                    ],
                    [
                        'header' => 'دسترسی',
                        'class' => 'core\grid\AjaxActionColumn',
                        'template' => '{view} {update} {delete} {download}',
                        'buttons' => [
                            'download' => function ($url, $model, $key) {
                                if (!$model->hasFile('file')) {
                                    return;
                                }
                                return Html::a(
                                    '<span class="fa fa-download"></span>',
                                    $model->getFile('file')->getUrl(),
                                    [
                                        'title' => 'دریافت سند',
                                        'data-pjax' => 0
                                    ]
                                );
                            },
                        ],
                    ]
                ],
            ]); ?>
        <?php Pjax::end(); ?>
    <?php Panel::end() ?>
</div>
