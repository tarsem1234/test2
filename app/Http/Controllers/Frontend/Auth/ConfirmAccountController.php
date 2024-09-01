<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Models\Access\User\User;
use App\Http\Controllers\Controller;
use App\Repositories\Frontend\Access\User\UserRepository;
use App\Notifications\Frontend\Auth\UserNeedsConfirmation;

/**
 * Class ConfirmAccountController.
 */
class ConfirmAccountController extends Controller
{

    /**
     * @var UserRepository
     */
    protected $user;

    /**
     * ConfirmAccountController constructor.
     *
     * @param UserRepository $user
     */
    public function __construct(UserRepository $user)
    {
        $this->user = $user;
    }

    /**
     * @param $token
     *
     * @return mixed
     */
    public function confirm($token)
    {
        $this->user->confirmAccount($token);

        return redirect()->route('frontend.auth.login')->withFlashSuccess(trans('exceptions.frontend.auth.confirmation.success'));
    }

    /**
     * @param $user
     *
     * @return mixed
     */
    public function sendConfirmationEmail(User $user)
    {
        $username = '';
        if ($user->user_profile()->exists()) {
            //firstname and last name not getting directly
            $userProfile = \App\Models\UserProfile::where('user_id',$user->id)->first();
           
            $username = $userProfile->first_name . ' ' .$userProfile->last_name;
        } else if ($user->business_profile()->exists()) {
            $businessProfile = \App\Models\BusinessProfile::where('user_id',$user->id)->first();
            $username = $businessProfile->company_name;
        }
        $user->notify(new UserNeedsConfirmation($user->confirmation_code, $username));

        return redirect()->route('frontend.auth.login')->withFlashSuccess(trans('exceptions.frontend.auth.confirmation.resent'));
    }

}
