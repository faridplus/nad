<?php

namespace nad\engineering\piping\device;

use yii\helpers\ArrayHelper;
use yii\filters\AccessControl;

class ManageController extends \yii\web\Controller
{
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
                                'investigation-improvement'
                            ],
                            'roles' => ['@']
                        ],
                        [
                            'allow' => true,
                            'actions' => [
                                'index',
                                'investigation-monitor-methods'
                            ],
                            'roles' => ['@']
                            //'roles' => ['device.investigationMonitorMethods']
                        ],
                        [
                            'allow' => true,
                            'actions' => [
                                'index',
                                'investigation-design'
                            ],
                            'roles' => ['@']
                            //'roles' => ['device.investigationDesign']
                        ]
                    ]
                ]
            ]
        );
    }

    public function actionIndex()
    {
        return $this->render('@nad/engineering/piping/device/index');
    }

    public function actionInvestigationImprovement()
    {
        return $this->render('@nad/engineering/piping/device/investigationImprovement');
    }

    public function actionInvestigationMonitorMethods()
    {
        return $this->render('@nad/engineering/piping/device/investigationMonitorMethods');
    }

    public function actionInvestigationDesign()
    {
        return $this->render('@nad/engineering/piping/device/investigationDesign');
    }
}
