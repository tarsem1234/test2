<?php

namespace App\Http\Controllers\Backend\Access\User;

use App\Models\Access\User\User;
use App\Http\Controllers\Controller;
use App\Repositories\Backend\Access\User\UserRepository;
use App\Notifications\Frontend\Auth\UserNeedsConfirmation;
use App\Http\Requests\Backend\Access\User\ManageUserRequest;

/**
 * Class UserConfirmationController.
 */
class UserConfirmationController extends Controller
{

    /**
     * @var UserRepository
     */
    protected $users;

    /**
     * @param UserRepository $users
     */
    public function __construct(UserRepository $users)
    {
        $this->users = $users;
    }

    /**
     * @param User              $user
     * @param ManageUserRequest $request
     *
     * @return mixed
     */
    public function sendConfirmationEmail(User $user, ManageUserRequest $request)
    {
    
        // Shouldn't allow users to confirm their own accounts when the application is set to manual confirmation
        if (config('access.users.requires_approval')) {
            return redirect()->back()->withFlashDanger(trans('alerts.backend.users.cant_resend_confirmation'));
        }
        $username = '';
        if ($user->user_profile()->exists()) {
            $username = getFullName($user);
        } else if ($user->business_profile()->exists()) {
            $username = getFullName($user);
        }
        $user->notify(new UserNeedsConfirmation($user->confirmation_code, $username));

        return redirect()->back()->withFlashSuccess(trans('alerts.backend.users.confirmation_email'));
    }

    /**
     * @param User              $user
     * @param ManageUserRequest $request
     *
     * @return mixed
     */
    public function confirm(User $user, ManageUserRequest $request)
    {
        $this->users->confirm($user);

        return redirect()->back()->withFlashSuccess(trans('alerts.backend.users.confirmed'));
    }

    /**
     * @param User              $user
     * @param ManageUserRequest $request
     *
     * @return mixed
     */
    public function unconfirm(User $user, ManageUserRequest $request)
    {
        $this->users->unconfirm($user);

        return redirect()->back()->withFlashSuccess(trans('alerts.backend.users.unconfirmed'));
    }

}
