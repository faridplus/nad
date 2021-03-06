<?php

use yii\helpers\Html;
use theme\widgets\Panel;
use theme\widgets\Button;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use core\widgets\select2\Select2;
use nad\office\modules\expert\models\Expert;

Yii::$app->assetManager->bundles['yii\bootstrap\BootstrapAsset'] = false;

?>


<div class="row">
    <div class="col-md-6">
        <?php Panel::begin([
            'title' => 'تعیین کارشناسان',
            'showCloseButton' => true
        ]) ?>
            <div class="set-experts-form">
                <?php $form = ActiveForm::begin([
                    'options' => [
                        'class' => 'sliding-form'
                    ]
                ]) ?>
                    <?= $form->field($model, 'experts')->widget(
                        Select2::class,
                        [
                            'data' => ArrayHelper::map(
                                Expert::getExpertsByPermission(
                                    $permission
                                ),
                                'id',
                                'user.fullName'
                            ),
                            'options' => [
                                'placeholder' => 'کارشناس را انتخاب کنید ...',
                                'multiple' => true,
                                'value' => $model->getExpertsAsArray()
                            ],
                            'pluginOptions' => [
                                'allowClear' => true
                            ]
                        ]
                    ) ?>
                    <br>
                    <?= Html::submitButton(
                        '<i class="fa fa-save"></i> ذخیره',
                        [
                            'class' => 'btn btn-xs btn-warning'
                        ]
                    ) ?>
                    <?= Button::widget([
                        'label' => 'انصراف',
                        'options' => [
                            'class' => 'btn-lg close-sliding-form-button'
                        ],
                        'type' => 'warning',
                        'icon' => 'undo'
                    ]) ?>
                <?php ActiveForm::end() ?>
            </div>
        <?php Panel::end() ?>
    </div>
</div>
