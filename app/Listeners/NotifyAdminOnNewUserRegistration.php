<?php

namespace App\Listeners;
use App\Events\NewUserRegistered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;
use App\Notifications\NewUserRegisteredNotification;


class NotifyAdminOnNewUserRegistration implements ShouldQueue
{
    public function handle(NewUserRegistered $event)
    {

        Notification::route('mail', config('mail.admin_email'))->notify(new NewUserRegisteredNotification($event->user));
    }
}
