<?php

use yii\helpers\Html;
use theme\widgets\Panel;
use theme\widgets\ActionButtons;
use nad\research\lab\assetbundles\TreeAssetBundle;

TreeAssetBundle::register($this);

$this->title = 'نمایش درختی';
$this->params['breadcrumbs'] = [
    'پژوهش',
    ['label' => 'تجهیزات آزمایشگاه', 'url' => ['index']],
    $this->title
];
?>
<div class="tree-list">
<?= ActionButtons::widget([
    'buttons' => [
        'materials' => [
            'label' => 'تجهیزات آزمایشگاه',
            'url' => ['index'],
            'type' => 'info',
            'icon' => 'list'
        ]
    ],
]); ?>

<div class="sliding-form-wrapper"></div>
<div class="row">
    <div class="col-md-6">
        <?php Panel::begin([
            'title' => 'درخت تجهیزات آزمایشگاهی',
            'tools' => Html::a(
                '<span class="glyphicon glyphicon-refresh"></span>',
                null,
                [
                    'class' => 'refresh-tree',
                    'data-rootid' => 0
                ]
            )
        ]) ?>
            <div id="loading">
                <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
                <span class="sr-only">Loading...</span>
            </div>
            <div id="cats-tree"></div>
        <?php Panel::end() ?>
    </div>
</div>

