<?php
namespace nad\factory\production\unit1;

class Module extends \yii\base\Module
{
    public $horizontalMenuItems;

    public $title = 'کارخانه - تولید - فنی';
    public $department = 'کارخانه';
    public $pluralLabel = 'فنی';
    public $singularLabel = 'فنی';

    public $defaultRoute = 'manage/index';
    public $controllerNamespace = 'nad\factory\production\unit1';

    public function init()
    {
        $this->modules = [
            'investigation1' => 'nad\factory\production\unit1\investigation1\Module',
            'investigation2' => 'nad\factory\production\unit1\investigation2\Module',
            'investigation3' => 'nad\factory\production\unit1\investigation3\Module',
            'investigation4' => 'nad\factory\production\unit1\investigation4\Module',
            'investigation5' => 'nad\factory\production\unit1\investigation5\Module',
        ];

        // $this->horizontalMenuItems = [
        //     []
        // ];

        parent::init();
    }
}
