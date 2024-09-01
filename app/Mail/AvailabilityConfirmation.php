<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Access\User\User;
use App\Models\PropertyAvailability;

class AvailabilityConfirmation extends Mailable {

    use Queueable,
        SerializesModels;

    public $availability, $user;

    public function __construct(PropertyAvailability $availability, User $user) {
        $this->availability = $availability;
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {
        return $this->markdown('frontend.mail.availabilty_confirmation'); 
    }

}
