<?php

namespace App\Models\Access\User\Traits;

use App\Notifications\Frontend\Auth\UserNeedsPasswordReset;

/**
 * Class UserSendPasswordReset.
 */
trait UserSendPasswordReset
{
    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification(string $token): void
    {
        $this->notify(new UserNeedsPasswordReset($token));
    }
}
