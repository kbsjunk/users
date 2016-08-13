<?php

namespace Inspheric\Users\Notifications;

use Illuminate\Auth\Notifications\ResetPassword as Notification;
use Inspheric\Notify\Messages\MailMessage;

class ResetPassword extends Notification
{

    /**
     * Get the notification's channels.
     *
     * @param  mixed  $notifiable
     * @return array|string
     */
    public function via($notifiable)
    {
        return ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
     public function toMail()
     {
         return (new MailMessage)
             ->subject(trans('users::auth.password_reset_email.subject'))
             ->line(trans('users::auth.password_reset_email.before'))
             ->action(trans('users::auth.password_reset_email.action'), url('password/reset', $this->token))
             ->line(trans('users::auth.password_reset_email.after'));
     }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'ip_address' => request()->ip()
        ];
    }
}
