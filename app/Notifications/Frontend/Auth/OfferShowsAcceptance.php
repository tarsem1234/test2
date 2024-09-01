<?php

namespace App\Notifications\Frontend\Auth;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Notifiable;
use Illuminate\Notifications\Messages\MailMessage;

/**
 * Class UserNeedsConfirmation.
 */
class OfferShowsAcceptance extends Notification
{

    use Queueable,
        Notifiable;

    protected $confirmation_code;

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
            return (new MailMessage())
                    ->subject(app_name().': '."Reply For Your Sent Offer")
                    ->line($notifiable->email.",")
                    ->line("Your offer has been accepted.")
                    ->line(trans('strings.emails.auth.thank_you_for_using_app'));
    }
}