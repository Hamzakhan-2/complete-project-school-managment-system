<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;


class NewUserNotification extends Notification
{
  public function toDatabase($notifiable)
{
    return [
        'message' => 'A new user has registered!',
        'link' => route('user.profile', $this->user),
    ];
}
public function databaseType(object $notifiable): string
{
    return 'invoice-paid';
}
}
