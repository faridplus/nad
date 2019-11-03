<?php

namespace nad\common\modules\investigation\instruction\notifications;

use extensions\notification\Notification;

class InstructionDeliverdToExpertNotification extends Notification
{
    public $instruction;
    public $moduleId = 'instruction';
    public $category = 'دستورالعمل نیازمند اصلاح';
    public $baseViewRoute;

    public function getChannels()
    {
        return ['screen'];
    }

    public function getTitle()
    {
        return "دستورالعمل «{$this->instruction->title}» جهت اصلاح مجددا به شما ارسال شده است.";
    }

    public function getRoute()
    {
        return [
            $this->baseViewRoute,
            'id' => $this->instruction->id
        ];
    }
}
