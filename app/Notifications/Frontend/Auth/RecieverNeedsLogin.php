<?php

namespace App\Notifications\Frontend\Auth;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Notifiable;
use Illuminate\Notifications\Messages\MailMessage;

/**
 * Class UserNeedsConfirmation.
 */
class RecieverNeedsLogin extends Notification
{

    use Queueable,
        Notifiable;
    /**
     * @var
     */
    protected $confirmation_code;

    /**
     * UserNeedsConfirmation constructor.
     *
     * @param $confirmation_code
     */
    public function __construct($confirmation_code,$username)
    {
        $this->confirmation_code = $confirmation_code;
        $this->username = $username;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     *
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     *
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
            return (new MailMessage())
                    ->subject(app_name().': '.trans('exceptions.frontend.auth.confirmation.login'))
                    ->line(trans('strings.emails.auth.click_to_login'))
                    ->action(trans('buttons.emails.auth.confirm_login'),
                        route('frontend.auth.login',$this->confirmation_code))
                    ->line(trans('strings.emails.auth.thank_you_for_using_app'));
    }
}