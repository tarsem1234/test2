<?php

namespace App\Notifications\Frontend\Auth;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Notifiable;
use Illuminate\Notifications\Messages\MailMessage;

/**
 * Class UserNeedsConfirmation.
 */
class SenderNeedsRegistration extends Notification
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
     public function __construct($confirmation_code,$username=null,$property_id=null)
    {
         
        $this->confirmation_code = $confirmation_code;
        $this->username = $username;
        $this->property_id = $property_id;

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
//        dump($this->property_id);
//        dd($this->username);
            return (new MailMessage())
                    ->subject(app_name().': '.trans('exceptions.frontend.auth.confirmation.registraion'))
                    ->greeting('Hello! '.$this->username)
//                    ->line($this->property_id?trans('strings.emails.auth.click_to_register'):'test')
                    ->line(trans('strings.emails.auth.click_to_register'))
                    ->action(trans('buttons.emails.auth.Register'),
                        route('frontend.userCreate').'?code='.$notifiable->confirmation_code.'&time='.$notifiable->created_at)
                    ->line(trans('strings.emails.auth.thank_you_for_using_app'))
                    ->markdown('frontend.mail.registration', ['actionView' => [
                        'url' => route('frontend.propertyDetails',$this->property_id),
                        'name' => trans('buttons.emails.auth.View'),
                        'property_id'=> !empty($this->property_id)?$this->property_id:''
                    ]]);
    }
}