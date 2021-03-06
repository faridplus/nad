<?php

namespace nad\process\ird\sedimentation;

class Module extends \yii\base\Module
{
    public $title = 'ته نشینی';
    public $defaultRoute = 'manage/index';
    public $controllerNamespace = 'nad\process\ird\sedimentation';

    public function init()
    {
        $this->modules = [
            'investigation' => 'nad\process\ird\sedimentation\investigation\Module',
            'investigationMonitor' => 'nad\process\ird\sedimentation\investigationMonitor\Module',
            'payesh' => 'nad\process\ird\sedimentation\payesh\Module',
        ];
        parent::init();
    }
}
