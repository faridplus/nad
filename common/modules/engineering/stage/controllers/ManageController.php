<?php

namespace nad\common\modules\engineering\stage\controllers;

use Yii;
use yii\helpers\Json;
use yii\filters\AccessControl;
use nad\common\modules\engineering\stage\models\Stage;
use nad\common\modules\engineering\stage\models\Category;
use nad\common\modules\engineering\location\models\Location;
use nad\common\modules\engineering\stage\models\StageSearch;

class ManageController extends \core\controllers\AjaxAdminController
{
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'access' => [
                    'class' => AccessControl::className(),
                    'rules' => [
                        [
                            'allow' => true,
                            'actions' => [
                                'index',
                                'view',
                                'create',
                                'delete',
                                'tree-list',
                                'get-json-tree',
                                'report'
                            ],
                            'roles' => ['@']
                        ],
                        [
                            'allow' => true,
                            'actions' => ['update', 'report'],
                            'roles' => ['manager']
                        ]
                    ]
                ]
            ]
        );
    }

    public function init()
    {
        $this->modelClass = Stage::className();
        $this->searchClass = StageSearch::className();
        parent::init();
    }

    public function actionTreeList()
    {
        return $this->render('tree');
    }

    public function actionGetJsonTree($id)
    {
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $roots = Category::find()->roots()->all();
        $tree = [];
        foreach ($roots as $root) {
            $tree[] = $root->getFamilyTreeArrayForWidget();
        }
        return $tree;
    }

    public function actionReport()
    {
        return $this->render('report');
    }
}
