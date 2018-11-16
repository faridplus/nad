<?php

namespace nad\extensions\comment\widgets\commentList;

use yii\base\InvalidConfigException;

class CommentList extends \yii\base\Widget
{
    public $model;
    public $moduleId;
    public $showEditDeleteButton = true;
    public $showCreateButton = true;
    public $sort = SORT_DESC;

    public function init()
    {
        if (empty($this->model)) {
            throw new InvalidConfigException('model property must be set.');
        }
        if (empty($this->moduleId)) {
            throw new InvalidConfigException('moduleId property must be set.');
        }
        parent::init();
    }

    public function run()
    {
        return $this->render('view');
    }
}
