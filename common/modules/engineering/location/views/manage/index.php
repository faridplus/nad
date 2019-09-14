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
<div class="resource-index">
    <?= ActionButtons::widget([
        'buttons' => [
            'create' => [
                'label' => 'افزودن گروه های مدارک',
                'options' => [
                    'class' => 'ajaxcreate',
                    'data-gridpjaxid' => 'resource-gridviewpjax',
                    'data-params' => 
                        'Location[categoryId]=' . Yii::$app->request->queryParams['LocationSearch']['categoryId']
                    
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
                'label' => 'لیست رده بندی مراحل و بسته مدارک',
                'icon' => 'sitemap',
                'url' => $this->params['stageCategoriesIndex'],
                'type' => 'success'
            ]
        ],
    ]); ?>

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
                        'attribute' => 'code',
                    ],
                    [
                        'class' => 'core\grid\TitleColumn',
                        'isAjaxGrid' => true
                    ], 
                    // [
                    //     'attribute' => 'category.title',
                    //     'value' => function ($model) { 
                    //         if(isset($model->category))                           
                    //             return $model->category->familyTreeTitle;
                    //         else
                    //             return null;
                    //     }
                    // ],
                    // [
                    //     'class' => 'nad\common\code\CodeGridColumn',
                    //     'isAjaxGrid' => true,                        
                    // ],                
                    'createdAt:datetime',
                    [
                        'label' => 'لیست مدارک گروه',
                        'format' => 'raw',
                        'value' => function ($model) {
                            return Html::a(
                                    '<i class="fa fa-external-link-square fa-2x" style="color:#46459f"></i>',
                                    [
                                        '/engineering/piping/document/manage/index',
                                    'DocumentSearch[groupId]' => $model->id
                                    ],                                    
                                    [
                                        'title' => 'لیست مدارک گروه مدارک',
                                        //'target' => '_blank',
                                        'data-pjax' => 0
                                    ]
                                );
                        }
                    ],    
                    [
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
