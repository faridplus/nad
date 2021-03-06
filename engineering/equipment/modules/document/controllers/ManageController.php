<?php

namespace nad\engineering\equipment\modules\document\controllers;

use Yii;
use yii\filters\AccessControl;
use core\controllers\AjaxAdminController;
use nad\engineering\equipment\modules\document\models\Document;
use nad\engineering\equipment\modules\document\models\DocumentSearch;

class ManageController extends AjaxAdminController
{
    public function init()
    {
        $this->modelClass = Document::class;
        $this->searchClass = DocumentSearch::class;
        parent::init();
    }

    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'access' => [
                    'class' => AccessControl::class,
                    'rules' => [
                        [
                            'allow' => true,
                            'roles' => ['@']
                            //'roles' => ['equipment.document']
                        ]
                    ]
                ]
            ]
        );
    }

    public function actionIndex()
    {
        $searchModel = new DocumentSearch();
        $params = Yii::$app->request->queryParams;
        $params[$searchModel->formName()]['equipmentTypeId'] =
            Yii::$app->request->get('equipmentTypeId');
        $dataProvider = $searchModel->search($params);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider
        ]);
    }
}
