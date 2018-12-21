<?php

use yii\widgets\Pjax;
use yii\grid\GridView;
use theme\widgets\Panel;
use yii\helpers\ArrayHelper;
use theme\widgets\ActionButtons;
use core\widgets\select2\Select2;
use nad\research\modules\expert\models\Expert;
use nad\research\modules\project\models\Project;

$this->title = 'گزارش ها';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="project-index">
    <?= ActionButtons::widget([
        'buttons' => [
            'categoriesIndex' => [
                'label' => 'رده های گزارش ها',
                'icon' => 'sitemap',
                'visibleFor' => ['research.manage']
            ]
        ]
    ]) ?>
    <?php Panel::begin(['title' => $this->title]) ?>
        <?php Pjax::begin(['id' => 'project-index-gridviewpjax']) ?>
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'core\grid\TitleColumn'],
                    [
                        'class' => 'nad\common\code\CodeGridColumn',
                        'isAjaxGrid' => false
                    ],
                    [
                        'attribute' => 'category.title',
                        'header' => 'زیر شاخه',
                        'value' => function ($model) {
                            return $model->category->familyTreeTitle;
                        }
                    ],
                    [
                        'attribute' => 'createdBy',
                        'headerOptions' => ['style' => 'width:300px'],
                        'filter' => Select2::widget([
                            'model' => $searchModel,
                            'attribute' => 'createdBy',
                            'data' => ArrayHelper::map(
                                Expert::find()->all(),
                                'userId',
                                'email'
                            ),
                            'options' => [
                                'placeholder' => 'ایمیل کارشناس را انتخاب کنید'
                            ],
                            'pluginOptions' => [
                                'allowClear' => true
                            ]
                        ]),
                        'value' => function ($model) {
                            return $model->researcher->email;
                        }
                    ],
                    'createdAt:date',
                    [
                        'attribute' => 'status',
                        'filter' => Project::getStatusLables(),
                        'value' => function ($model) {
                            return Project::getStatusLables()[$model->status];
                        }
                    ],
                    [
                        'class' => 'yii\grid\ActionColumn',
                        'visibleButtons' => [
                            'view' => Yii::$app->user->canAccessAny([
                                'expert',
                                'research.manage'
                            ]),
                            'update' => function ($model, $key, $index) {
                                return $model->canUserUpdateOrDelete();
                            },
                            'delete' => function ($model, $key, $index) {
                                return $model->canUserUpdateOrDelete();
                            }
                        ]
                    ]
                ]
            ]) ?>
        <?php Pjax::end() ?>
    <?php Panel::end() ?>
</div>
