<?php

namespace App\Notifications\Backend\Access;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

/**
 * Class UserAccountActive.
 */
class UserAccountActive extends Notification
{
    use Queueable;

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     */
    public function via($notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     */
    public function toMail($notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject(app_name())
            ->line(trans('strings.emails.auth.account_confirmed'))
            ->action(trans('labels.frontend.auth.login_button'), route('frontend.auth.login'))
            ->line(trans('strings.emails.auth.thank_you_for_using_app'));
    }
}
