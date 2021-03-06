<?php

use yii\helpers\Html;
use theme\widgets\Panel;
use theme\widgets\Button;
use yii\widgets\ActiveForm;
use nad\engineering\equipment\modules\type\details\models\Part;

Yii::$app->assetManager->bundles['yii\bootstrap\BootstrapAsset'] = false;

?>

<div class="parts-form">
    <?php $form = ActiveForm::begin([
        'options' => [
            'class' => 'sliding-form'
        ]
    ]) ?>
        <?= Html::activeHiddenInput($model, 'typeId', ['id' => 'hidden-typeid']) ?>
        <?php Panel::begin([
            'title' => 'اطلاعات قطعه',
            'showCloseButton' => true
        ]) ?>
            <div class="row">
                <div class="col-md-9">
                    <?php Panel::begin() ?>
                        <div class="row">
                            <div class="col-md-3">
                                <?= $form->field($model, 'code')->textInput(
                                    ['style' => 'direction:ltr', 'maxlength' => 3]
                                )->hint('۳ عدد لاتین به فرمت 000') ?>
                            </div>
                            <div class="col-md-6">
                                <?= $form->field($model, 'title')->textInput() ?>
                            </div>
                            <div class="col-md-3">
                                <?= $form->field($model, 'kind')->dropDownList(
                                    Part::getKindsList()
                                ) ?>
                            </div>
                        </div>
                    <?php Panel::end() ?>
                </div>
                <div class="col-md-3">
                    <?php Panel::begin() ?>
                        <?= Html::submitButton(
                            '<i class="fa fa-save"></i> ذخیره',
                            [
                                'class' => 'btn btn-lg btn-success'
                            ]
                        ) ?>
                        <?= Button::widget([
                            'label' => 'انصراف',
                            'options' => ['class' => 'btn-lg close-sliding-form-button'],
                            'type' => 'warning',
                            'icon' => 'undo'
                        ]) ?>
                    <?php Panel::end() ?>
                </div>
            </div>
        <?php Panel::end() ?>
    <?php ActiveForm::end() ?>
</div>

<?php $this->registerJs('
    $("#hidden-typeid").val($(".ajaxcreate").attr("data-typeId"));
');
