<?php
namespace nad\process\laboratory\unit2;

class Module extends \yii\base\Module
{
    public $horizontalMenuItems;

    public $title = 'فرایند - آزمایشگاه - واحد 2';
    public $department = 'فرایند';
    public $pluralLabel = 'واحد 2';
    public $singularLabel = 'واحد 2';

    public $defaultRoute = 'manage/index';
    public $controllerNamespace = 'nad\process\laboratory\unit2';

    public function init()
    {
        $this->modules = [
            'investigation1' => 'nad\process\laboratory\unit2\investigation1\Module',
            'investigation2' => 'nad\process\laboratory\unit2\investigation2\Module',
            'investigation3' => 'nad\process\laboratory\unit2\investigation3\Module',
            'investigation4' => 'nad\process\laboratory\unit2\investigation4\Module',
            'investigation5' => 'nad\process\laboratory\unit2\investigation5\Module',
        ];

        // $this->horizontalMenuItems = [
        //     []
        // ];

        parent::init();
    }
}
