<?php

use yii\helpers\Html;
use theme\widgets\Panel;
use theme\widgets\Button;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use core\widgets\editor\Editor;
use theme\widgets\ActionButtons;
use core\widgets\select2\Select2;
use nad\office\modules\expert\models\Expert;
use extensions\tag\widgets\selectTag\SelectTag;
use theme\widgets\jalalidatepicker\JalaliDatePicker;
use extensions\file\widgets\singleupload\SingleFileUpload;
use nad\common\modules\investigation\instruction\models\Category;
use nad\common\modules\investigation\reference\widgets\selectReference\SelectReference;
use nad\common\modules\investigation\reference\models\ReferenceUses;

$backLink = $model->isNewRecord ? ['index'] : ['view', 'id' => $model->id];
$className = get_class($model);
$uploadedFiles = $model->getFiles('file');
?>

<h3 class="nad-page-title"><?= $this->title ?></h3>

<?= ActionButtons::widget([
    'buttons' => [
        'create-category' => [
            'label' => 'افزودن رده',
            'type' => 'info',
            'icon' => 'plus',
            'url' => [
                'category/index#id_createCategoryBtn'
            ],
            'options' => [
                'target' => '_blank'
            ]
        ]
    ]
]);
?>

<div class="instruction-form">
    <?php Panel::begin(['title' => 'مشخصات دستورالعمل']) ?>
        <?php $form = ActiveForm::begin([
            'options' => [
                'enctype' => 'multipart/form-data'
            ]
        ]) ?>
            <div class="row">
                <div class="col-md-8">
                    <?= $form->field($model, 'title')->textInput([
                        'maxlength' => 255,
                        'class' => 'form-control input-large'
                    ]) ?>
                    <?= $form->field($model, 'englishTitle')->textInput([
                        'maxlength' => 255,
                        'class' => 'form-control input-large'
                    ]) ?>
                    <?= $form->field($model, 'createdAt')->widget(
                        JalaliDatePicker::class,
                        [
                            'options' => [
                                'class' => 'form-control input-small',
                                'autocomplete' => 'off'
                            ]
                        ]
                    ) ?>
                    <div class="row">
                        <div class="col-md-8">
                            <?php Panel::begin(); ?>
                            <?= SingleFileUpload::widget([
                                'model' => $model,
                                'group' => 'instructionDoc',
                                'label' => 'فایل دستورالعمل'
                            ]) ?>
                            <?php Panel::end(); ?>
                        </div>
                        <div class="col-md-8">
                            <?php
                            if(isset($uploadedFiles) && !empty($uploadedFiles)){
                                Panel::begin();
                            ?>
                                    <label>فایل مستندات</label>
                                    <?= SingleFileUpload::widget([
                                        'model' => $model,
                                        'group' => 'file',
                                    ]) ?>
                            <?php
                                Panel::end();
                            }
                            ?>
                            <?php Panel::begin() ?>
                                <label>فایل مستندات</label>
                                <?= SingleFileUpload::widget([
                                    'model' => new $className,
                                    'group' => 'file',
                                ]) ?>
                            <?php Panel::end() ?>
                            <div class="alert alert-info" role="alert">توجه: آپلود فایل اجباری است</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="col-sm-12">
                        <?= Html::submitButton('ذخیره', [
                            'class' => 'btn btn-xs btn-warning action-button'
                        ]) ?>
                        <?= Button::widget([
                            'label' => 'انصراف',
                            'type' => 'warning',
                            'icon' => false,
                            'url' => $backLink
                        ]) ?>
                    </div>
                    <br><br>
                    <?= $form->field($model, 'proposalId')->widget(
                        Select2::class,
                        [
                            'data' => $model->getExpertProposalsForDropdown($proposalConsumerCode),
                            'options' => [
                                'placeholder' => 'انتخاب کنید...'
                            ],
                            'pluginOptions' => [
                                'allowClear' => true
                            ],
                        ]
                    ) ?>
                    <?= $form->field($model, 'reportId')->widget(
                        Select2::class,
                        [
                            'data' => $model->getExpertReportsForDropdown($reportConsumerCode),
                            'options' => [
                                'placeholder' => 'انتخاب کنید...'
                            ],
                            'pluginOptions' => [
                                'allowClear' => true
                            ],
                        ]
                    ) ?>
                    <?= $form->field($model, 'methodId')->widget(
                        Select2::class,
                        [
                            'data' => $model->getExpertMethodsForDropdown($methodConsumerCode),
                            'options' => [
                                'placeholder' => 'انتخاب کنید...'
                            ],
                            'pluginOptions' => [
                                'allowClear' => true
                            ],
                        ]
                    ) ?>
                    <?= $form->field($model, 'categoryId')->widget(
                        Select2::class,
                        [
                            'data' => ArrayHelper::map(
                                Category::find()->andWhere([
                                    'depth' => 3,
                                    'consumer' => $categoryConsumerCode
                                ])->all(),
                                'id',
                                'codedTitle'
                            )
                        ]
                    ) ?>
                    <?= $form->field($model, 'partners')->widget(
                        Select2::class,
                        [
                            'data' => ArrayHelper::map(
                                Expert::find()->all(),
                                'id',
                                'user.fullname'
                            ),
                            'options' => [
                                'multiple' => true,
                                'placeholder' => 'همکاران را انتخاب کنید ...',
                                'value' => $model->getPartnersAsArray()
                            ],
                            'pluginOptions' => [
                                'allowClear' => true
                            ]
                        ]
                    ) ?>
                    <?= $form->field($model, 'references')->widget(
                        SelectReference::class,
                        [
                            'consumer' => $referenceConsumerCode,
                            'code' => ReferenceUses::CODE_INSTRUCTION
                        ]
                    ) ?>
                    <?= $form->field($model, 'tags')->widget(SelectTag::class) ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?= $form->field($model, 'abstract')->widget(
                        Editor::class,
                        ['preset' => 'advanced']
                    ) ?>
                    <?= $form->field($model, 'description')->widget(
                        Editor::class,
                        ['preset' => 'advanced']
                    ) ?>
                </div>
            </div>
        <?php ActiveForm::end() ?>
    <?php Panel::end() ?>
</div>
