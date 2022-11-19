<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CreateJudicial extends Notification
{
    use Queueable;


    private $judicial_id;
    private $user_create;
    private $name;


    public function __construct($judicial_id,$user_create,$name)
    {
        $this->judicial_id = $judicial_id;
        $this->user_create = $user_create;
        $this->name = $name;
    }


    public function via($notifiable)
    {
        return ['database'];
    }


    public function toArray($notifiable)
    {
        return [
            'judicial_id' => $this->judicial_id,
            'user_create' => $this->user_create,
            'name' => $this->name,
        ];
    }
}
