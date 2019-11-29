<?php

namespace nad\engineering\piping\site\controllers;

use yii\helpers\ArrayHelper;
use yii\filters\AccessControl;
use nad\engineering\piping\site\models\Document;
use nad\engineering\piping\site\models\DocumentSearch;
use nad\common\modules\site\controllers\DocumentController as ParentController;

class DocumentController extends ParentController
{
    public function init()
    {
        $this->modelClass = Document::class;
        $this->searchClass = DocumentSearch::class;
    }

    public function behaviors()
    {
        return ArrayHelper::merge(
            parent::behaviors(),
            [
                'access' => [
                    'class' => AccessControl::class,
                    'rules' => [
                        [
                            'allow' => true,
                            'actions' => [
                                'index',
                                'view',
                                'create',
                                'update'
                            ],
                            // 'roles' => ['nad.engineering.piping.site']
                            'roles' => ['@']
                        ]
                    ]
                ]
            ]
        );
    }
}
