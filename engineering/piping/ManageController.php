<?php

namespace nad\engineering\piping;

class ManageController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('@nad/engineering/piping/index');
    }

    public function actionInvestigation()
    {
        return $this->render('@nad/engineering/piping/investigation');
    }
}
