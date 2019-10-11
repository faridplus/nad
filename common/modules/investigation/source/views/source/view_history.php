<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Pjax;
use theme\widgets\Panel;
use yii\widgets\DetailView;
use yii\helpers\ArrayHelper;
use nad\common\helpers\Utility;
use theme\widgets\ActionButtons;
use nad\common\modules\investigation\source\models\Source;
use nad\extensions\comment\widgets\commentList\CommentList;

?>

<a class="ajaxcreate" data-gridpjaxid="source-view-detailview-pjax"></a>
<div class="source-view">
    <?php Pjax::begin(['id' => 'source-view-detailview-pjax']) ?>
        <h2 class="nad-page-title"><?= $this->title ?></h2>
        <div class="row">
            <div class="col-md-12">
                <?php Panel::begin([
                    'title' => 'مشخصات منشا',
                    'showCollapseButton' => true
                    ]) ?>
                    <div class="col-md-6">
                        <?= DetailView::widget([
                            'model' => $model,
                            'attributes' => [
                                'title',
                                'englishTitle',
                                'uniqueCode',
                                [
                                    'attribute' => 'createdBy',
                                    'value' => function ($model) {
                                        return $model->researcherTitle;
                                    }
                                ],
                                'createdAt:date',
                                [
                                    'attribute' => 'mainReasonId',
                                    'value' => function ($model) {
                                        return $model->mainReason->title;
                                    }
                                ],
                                // TODO remove 'reasons' asap
                                //'reasons',
                                [
                                    'attribute' => 'references',
                                    'format' => 'raw',
                                    'value' => function ($model) {
                                        return $model->getClickableReferencesAsString();
                                    }
                                ],
                                [
                                    'attribute' => 'tags',
                                    'value' => function ($model) {
                                        return $model->getTagsAsString();
                                    }
                                ]
                            ]
                        ]) ?>
                    </div>
                    <div class="col-md-6">
                        <?= DetailView::widget([
                            'model' => $model,
                            'attributes' => [
                                'deliverToManagerDate:date',
                                'sessionDate:dateTime',
                                'updatedAt:date',
                                [
                                    'attribute' => 'status',
                                    'value' => function ($model) {
                                        // TODO move it to a state in "Source::getUserHolderLables()"
                                        if($model->hasAnyExpert() && $model->status == Source::STATUS_ACCEPTED){
                                            return 'منتظر ارسال جهت نگارش پروپوزال';
                                        }
                                        return Source::getStatusLables()[$model->status];
                                    }
                                ],
                                [
                                    'attribute' => 'userHolder',
                                    'value' => function ($model) {
                                        return Source::getUserHolderLables()[$model->userHolder];
                                    },
                                    'visible' => function ($model){
                                        return !($model->userHolder == Source::USER_HOLDER_MANAGER && $model->status == Source::STATUS_IN_MANAGER_HAND);
                                    }
                                ],
                                [
                                    'attribute' => 'experts',
                                    'value' => function ($model) {
                                        return $model->getExpertFullNamesAsString();
                                    }
                                ]
                            ]
                        ]) ?>
                    </div>
                <?php Panel::end() ?>
            </div>
        </div>
        <?php if($logCounter == 0): ?>
            <div class="row">
                <?php if ($model->proceedings) : ?>
                    <div class="col-md-12">
                        <?php Panel::begin([
                            'title' => 'نتیجه جلسه',
                            'showCollapseButton' => true
                            ]) ?>
                            <div class="well">
                                <?= $model->proceedings ?>
                            </div>
                        <?php Panel::end() ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?php Panel::begin([
                        'title' => $model->getAttributeLabel('reasonForGenesis') . ' نسخه نهایی',
                        'showCollapseButton' => true
                        ]) ?>
                        <div class="well">
                            <?= $model->reasonForGenesis ?>
                        </div>
                    <?php Panel::end() ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?php Panel::begin([
                        'title' => $model->getAttributeLabel('necessity') . ' نسخه نهایی',
                        'showCollapseButton' => true
                        ]) ?>
                        <div class="well">
                            <?= $model->necessity ?>
                        </div>
                    <?php Panel::end() ?>
                </div>
            </div>
        <?php endif; ?>
    <?php Pjax::end() ?>
</div>

<div class="source-history-view">
    <div class="row">
        <div class="col-md-12">
            <?php
            foreach ($logs as $logUpdatedAt => $log) :
                $counterTitle = ' ' . (($logCounter == count($logs)) ? 'نسخه نهایی':'نسخه ' . Utility::convertNumberToPersianWords($logCounter));
            ?>
                <?php
                // inject comments into history
                $filteredComments = array_filter($allComments, function($comment) use ($logUpdatedAt){
                    return $comment->insertedAt >= $logUpdatedAt;
                });
                if(!Utility::IsNullOrEmpty($filteredComments)):
                ?>
                    <div class="row">
                        <div class="col-md-12">
                            <hr>
                            <?= CommentList::widget([
                                'model' => $model,
                                'moduleId' => $moduleId,
                                'comments' => $filteredComments,
                                'showCreateButton' => false,
                                'showEditDeleteButton' => false
                            ]) ?>
                        </div>
                    </div>
                <?php
                endif;
                // removes already displayed comments to avoid duplication
                foreach ($filteredComments as $key => $value) {
                    unset($allComments[$key]);
                }
                ?>

                <hr>
                <span class="label label-primary">
                    <?= 'تاریخ ویرایش: ' . Yii::$app->formatter->asDateTime($logUpdatedAt) ?>
                </span>

                <?php
                // TODO find a better solution than this dirty hack
                if(array_key_exists('sessionDate', $log) && !isset($log['sessionDate'])):
                ?>
                <div class="row">
                    <div class="col-md-12">
                        <?php Panel::begin([
                            'title' => 'نیازمند جلسه' . $counterTitle,
                            'showCollapseButton' => true
                            ]) ?>
                                <?= '<i class="fa fa-2x fa-users"></i> ' . 'مدیر دستور برگزاری جلسه را صادر کرد.' ?>
                        <?php Panel::end() ?>
                    </div>
                </div>
                <?php endif; // end of dirty hack ?>

                <?php if(isset($log['title'])): ?>
                    <div class="row">
                        <div class="col-md-12">
                            <?php Panel::begin([
                                'title' => $model->getAttributeLabel('title') . $counterTitle,
                                'showCollapseButton' => true
                                ]) ?>
                                    <?= $log['title'] ?>
                            <?php Panel::end() ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if(isset($log['englishTitle'])): ?>
                    <div class="row">
                        <div class="col-md-12">
                            <?php Panel::begin([
                                'title' => $model->getAttributeLabel('englishTitle') . $counterTitle,
                                'showCollapseButton' => true
                                ]) ?>
                                    <?= $log['englishTitle'] ?>
                            <?php Panel::end() ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if(isset($log['reasonForGenesis'])): ?>
                    <div class="row">
                        <div class="col-md-12">
                            <?php Panel::begin([
                                'title' => $model->getAttributeLabel('reasonForGenesis') . $counterTitle,
                                'showCollapseButton' => true
                                ]) ?>
                                    <?= $log['reasonForGenesis'] ?>
                            <?php Panel::end() ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if(isset($log['necessity'])): ?>
                    <div class="row">
                        <div class="col-md-12">
                            <?php Panel::begin([
                                'title' => $model->getAttributeLabel('necessity') . $counterTitle,
                                'showCollapseButton' => true
                                ]) ?>
                                    <?= $log['necessity'] ?>
                            <?php Panel::end() ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if(isset($log['proceedings'])): ?>
                    <div class="row">
                        <div class="col-md-12">
                            <?php Panel::begin([
                                'title' => $model->getAttributeLabel('proceedings') . $counterTitle,
                                'showCollapseButton' => true
                                ]) ?>
                                    <?= $log['proceedings'] ?>
                            <?php Panel::end() ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if(isset($log['sessionDate'])): ?>
                    <div class="row">
                        <div class="col-md-12">
                            <?php Panel::begin([
                                'title' => $model->getAttributeLabel('sessionDate') . $counterTitle,
                                'showCollapseButton' => true
                                ]) ?>
                                    <?= Yii::$app->formatter->asDateTime($log['sessionDate']) ?>
                            <?php Panel::end() ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if(isset($log['referencesAsString'])): ?>
                    <div class="row">
                        <div class="col-md-12">
                            <?php Panel::begin([
                                'title' => $model->getAttributeLabel('references') . $counterTitle,
                                'showCollapseButton' => true
                                ]) ?>
                                    <?= $log['referencesAsString'] ?>
                            <?php Panel::end() ?>
                        </div>
                    </div>
                <?php endif; ?>
            <?php
                $logCounter -= 1;
            endforeach;
            ?>
        </div>
    </div>
    <!-- remaining comments -->
    <?php if(!empty($allComments)): ?>
        <div class="row">
            <div class="col-md-12">
                <?= CommentList::widget([
                    'model' => $model,
                    'moduleId' => $moduleId,
                    'comments' =>  $allComments,
                    'showCreateButton' => false,
                    'showEditDeleteButton' => false
                ]) ?>
            </div>
        </div>
    <?php endif; ?>
</div>