<?php

namespace App\Http\Controllers\Backend\Access\User;

use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Access\User\ManageUserRequest;
use App\Models\Access\User\SocialLogin;
use App\Models\Access\User\User;
use App\Repositories\Backend\Access\User\UserSocialRepository;

/**
 * Class UserSocialController.
 */
class UserSocialController extends Controller
{
    /**
     * @return mixed
     */
    public function unlink(User $user, SocialLogin $social, ManageUserRequest $request, UserSocialRepository $userSocialRepository): RedirectResponse
    {
        $userSocialRepository->delete($user, $social);

        return redirect()->back()->withFlashSuccess(trans('alerts.backend.users.social_deleted'));
    }
}
