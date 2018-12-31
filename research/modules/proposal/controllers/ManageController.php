<?php

namespace nad\research\modules\proposal\controllers;

use Yii;
use yii\helpers\Json;
use yii\web\Response;
use yii\filters\AccessControl;
use yii\filters\ContentNegotiator;
use nad\research\modules\proposal\models\Proposal;
use nad\research\modules\proposal\models\ProposalSearch;
use nad\research\common\controllers\BaseResearchController;

class ManageController extends BaseResearchController
{
    public function init()
    {
        $this->modelClass = Proposal::class;
        $this->searchClass = ProposalSearch::class;
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
                            'actions' => [
                                'index',
                                'view',
                                'create'
                            ],
                            'roles' => ['research.expert']
                        ],
                        [
                            'allow' => true,
                            'actions' => [
                                'update',
                                'delete',
                                'deliver-to-manager'
                            ],
                            'roles' => ['research.manageOwnResearch'],
                            'roleParams' => function() {
                                return ['research' => Proposal::findOne([
                                    'id' => Yii::$app->request->get('id')]
                                )];
                            }
                        ],
                        [
                            'allow' => true,
                            'roles' => ['research.manage']
                        ],
                        [
                            'allow' => true,
                            'actions' => ['report'],
                            'roles' => ['manager']
                        ]
                    ]
                ],
                [
                    'class' => ContentNegotiator::class,
                    'only' => [
                        'set-expert'
                    ],
                    'formats' => [
                        'application/json' => Response::FORMAT_JSON
                    ]
                ]
            ]
        );
    }

    public function actionCreate()
    {
        $model = new Proposal([
            'sourceId' => Yii::$app->request->get('sourceId')
        ]);
        $model->loadDefaultValues();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->addFlash(
                'success',
                'داده مورد نظر با موفقیت در سیستم درج شد.'
            );
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', ['model' => $model]);
        }
    }

    public function actionSetExpert($id)
    {
        $model = $this->findModel($id);
        $model->scenario = Proposal::SCENARIO_SET_EXPERT;
        $model->deliveryToExpertTime = time();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            echo Json::encode([
                'status' => 'success',
                'message' => 'کارشناس با موفقیت در سیستم درج شد.'
            ]);
            exit;
        }
        echo Json::encode([
            'content' => $this->renderAjax('set-expert', ['model' => $model])
        ]);
        exit;
    }
}
