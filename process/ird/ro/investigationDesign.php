<?php

use yii\helpers\Url;
use theme\widgets\Panel;
use theme\widgets\infoBox\InfoBox;

$this->title = 'بررسی طراحی';
$this->params['breadcrumbs'] = [
    'فرایند',
    'مواد',
    ['label' => 'آر او', 'url' => ['/process/ird/ro/manage/index']],
    $this->title
];

?>

<h2 class="nad-page-title">بررسی طراحی</h2>
<?php Panel::begin([
                    'title' => 'برنامه ها',
                    'showCollapseButton' => true
                    ]) ?>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-3">
            <?= InfoBox::widget([
                'icon' => 'question-circle',
                'showCount' => false,
                'title' => 'منشا',
                'titleUrl' => Url::to(['/process/ird/ro/investigationDesign/source/manage/index'])
            ]) ?>
        </div>
        <div class="col-md-3">
            <?= InfoBox::widget([
                'icon' => 'graduation-cap',
                'showCount' => false,
                'title' => 'پروپوزال',
                'titleUrl' => Url::to(['/process/ird/ro/investigationDesign/proposal/manage/index'])
            ]) ?>
        </div>
        <div class="col-md-3"></div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-3">
             <?= InfoBox::widget([
                'icon' => 'file-text',
                'showCount' => false,
                'title' => 'گزارش',
                'titleUrl' => Url::to(['/process/ird/ro/investigationDesign/report/manage/index'])
            ]) ?>
        </div>
        <div class="col-md-3">
            <?= InfoBox::widget([
                'icon' => 'bell',
                'showCount' => false,
                'title' => 'روش',
                'titleUrl' => Url::to(['/process/ird/ro/investigationDesign/method/manage/index'])
            ]) ?>
        </div>
        <div class="col-md-3"></div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <?= InfoBox::widget([
                'icon' => 'book',
                'showCount' => false,
                'title' => 'دستورالعمل',
                'titleUrl' => Url::to(['/process/ird/ro/investigationDesign/instruction/manage/index'])
            ]) ?>
        </div>
    </div>
    <?php Panel::end() ?>
    <?php Panel::begin([
                    'title' => 'داده گاه ها',
                    'showCollapseButton' => true
                    ]) ?>
<div class="row" style="text-align: center">
    <div class="col-md-1"></div>
    <div class="col-md-5">
        <?= InfoBox::widget([
            'icon' => false,
            'showCount' => false,
            'title' => 'منشاها',
            'titleUrl' => Url::to(['/process/ird/ro/investigationDesign/source/manage/archived-index'])
        ]) ?>
    </div>
    <div class="col-md-5">
        <?= InfoBox::widget([
            'icon' => false,
            'showCount' => false,
            'title' => 'روندهای اجرا شده منشا',
            'titleUrl' => Url::to(['/process/ird/ro/investigationDesign/source/manage/index-history'])
        ]) ?>
    </div>
</div>
<br><br>
<div class="row" style="text-align: center">
    <div class="col-md-1"></div>
    <div class="col-md-5">
        <?= InfoBox::widget([
            'icon' => false,
            'showCount' => false,
            'title' => 'پروپوزال ها',
            'titleUrl' => Url::to(['/process/ird/ro/investigationDesign/proposal/manage/archived-index'])
        ]) ?>
    </div>
    <div class="col-md-5">
        <?= InfoBox::widget([
            'icon' => false,
            'showCount' => false,
            'title' => 'روندهای اجرا شده پروپوزال',
            'titleUrl' => Url::to(['/process/ird/ro/investigationDesign/proposal/manage/index-history'])
        ]) ?>
    </div>
</div>
<br><br>
<div class="row" style="text-align: center">
    <div class="col-md-1"></div>
    <div class="col-md-5">
        <?= InfoBox::widget([
            'icon' => false,
            'showCount' => false,
            'title' => 'گزارش ها',
            'titleUrl' => Url::to(['/process/ird/ro/investigationDesign/report/manage/archived-index'])
        ]) ?>
    </div>
    <div class="col-md-5">
        <?= InfoBox::widget([
            'icon' => false,
            'showCount' => false,
            'title' => 'روندهای اجرا شده گزارش',
            'titleUrl' => Url::to(['/process/ird/ro/investigationDesign/report/manage/index-history'])
        ]) ?>
    </div>
</div>
<br><br>
<div class="row" style="text-align: center">
    <div class="col-md-1"></div>
    <div class="col-md-5">
        <?= InfoBox::widget([
            'icon' => false,
            'showCount' => false,
            'title' => 'روش ها',
            'titleUrl' => Url::to(['/process/ird/ro/investigationDesign/method/manage/archived-index'])
        ]) ?>
    </div>
    <div class="col-md-5">
        <?= InfoBox::widget([
            'icon' => false,
            'showCount' => false,
            'title' => 'روندهای اجرا شده روش',
            'titleUrl' => Url::to(['/process/ird/ro/investigationDesign/method/manage/index-history'])
        ]) ?>
    </div>
</div>
<br><br>
<div class="row" style="text-align: center">
    <div class="col-md-1"></div>
    <div class="col-md-5">
        <?= InfoBox::widget([
            'icon' => false,
            'showCount' => false,
            'title' => 'دستورالعمل ها',
            'titleUrl' => Url::to(['/process/ird/ro/investigationDesign/method/manage/archived-index'])
        ]) ?>
    </div>
    <div class="col-md-5">
        <?= InfoBox::widget([
            'icon' => false,
            'showCount' => false,
            'title' => 'روندهای اجرا شده دستورالعمل',
            'titleUrl' => Url::to(['/process/ird/ro/investigationDesign/method/manage/index-history'])
        ]) ?>
    </div>
</div>
<br><br>
<div class="row" style="text-align: center">
    <div class="col-md-1"></div>
    <div class="col-md-5">
        <?= InfoBox::widget([
            'icon' => false,
            'showCount' => false,
            'title' => 'منابع',
            'titleUrl' => Url::to(['/process/ird/ro/investigationDesign/reference/manage/index'])
        ])
        ?>
    </div>
    <div class="col-md-5">
        <?= InfoBox::widget([
            'icon' => false,
            'showCount' => false,
            'title' => 'اقدامات بررسی',
            'titleUrl' => '#'
        ]) ?>
    </div>
</div>
<?php Panel::end() ?>
<br><br><br>