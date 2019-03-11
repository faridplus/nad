<?php

use yii\helpers\Html;
use theme\widgets\Panel;
use theme\widgets\Button;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use core\widgets\editor\Editor;
use core\widgets\select2\Select2;
use nad\office\modules\expert\models\Expert;
use extensions\tag\widgets\selectTag\SelectTag;
use theme\widgets\jalalidatepicker\JalaliDatePicker;
use nad\research\extensions\resource\models\Resource;
use extensions\file\widgets\singleupload\SingleFileUpload;
use nad\research\extensions\resource\widgets\selectResource\SelectResource;

$backLink = $model->isNewRecord ? ['index'] : ['view', 'id' => $model->id];

?>

<div class="proposal-form">
    <div class="fixed-action-buttons"></div>
    <?php $form = ActiveForm::begin([
        'options' => [
            'enctype' => 'multipart/form-data'
        ]
    ]) ?>
        <div class="row">
            <div class="col-md-8">
            <?php Panel::begin(['title' => 'مشخصات پروپوزال']) ?>
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
                    <?= $form->field($model, 'necessity')->widget(
                        Editor::class,
                        ['preset' => 'advanced']
                    ) ?>
                    <?= $form->field($model, 'mainPurpose')->widget(
                        Editor::class,
                        ['preset' => 'advanced']
                    ) ?>
                    <?= $form->field($model, 'secondaryPurpose')->widget(
                        Editor::class,
                        ['preset' => 'advanced']
                    ) ?>
                <?php Panel::end() ?>
            </div>
            <div class="col-md-4">
                <?php Panel::begin() ?>
                    <?= Html::submitButton(
                        'ذخیره',
                        [
                            'class' => 'btn btn-lg btn-success'
                        ]
                    ) ?>
                    <?= Button::widget([
                        'label' => 'انصراف',
                        'options' => ['class' => 'btn-lg'],
                        'type' => 'warning',
                        'icon' => false,
                        'url' => $backLink
                    ]) ?>
                <?php Panel::end() ?>
                <?php Panel::begin(['title' => 'سایر اطلاعات پروپوزال']) ?>
                    <?= $form->field($model, 'code')->textInput([
                        'maxlength' => 255,
                        'class' => 'form-control input-large'
                    ])->hint('۴ کاراکتر بزرگ لاتین') ?>
                    <?= $form->field($model, 'resources')->widget(
                        SelectResource::class,
                        [
                            'clientId' => Resource::CLIENT_INVESTIGATION
                        ]
                    ) ?>
                    <?= Html::label('مدارک') ?>
                    <?= SingleFileUpload::widget([
                        'model' => $model,
                        'group' => 'documents'
                    ]) ?>
                    <?= $form->field($model, 'partners')->widget(
                        Select2::class,
                        [
                            'data' => ArrayHelper::map(
                                Expert::getDepartmentExperts(
                                    Expert::DEPARTMENT_RESEARCH
                                ),
                                'id',
                                'fullName'
                            ),
                            'options' => [
                                'placeholder' => 'همکاران را انتخاب کنید ...',
                                'multiple' => true,
                                'value' => $model->getPartnersAsArray()
                            ],
                            'pluginOptions' => [
                                'allowClear' => true
                            ]
                        ]
                    ) ?>
                    <?= $form->field($model, 'tags')->widget(SelectTag::class) ?>
                <?php Panel::end() ?>
            </div>
        </div>
    <?php ActiveForm::end() ?>
</div>
