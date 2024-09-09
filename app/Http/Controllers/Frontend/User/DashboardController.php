<?php

namespace App\Http\Controllers\Frontend\User;

use Illuminate\View\View;
use App\Http\Controllers\Controller;
use App\Models\Access\User\User;
use App\Models\Backend\UserLearningPoint;
use Auth;

/**
 * Class DashboardController.
 */
class DashboardController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(): View
    {
        if (Auth::check()) {
            $user = User::where('id', Auth::id())->with(['user_profile', 'business_profile' => function ($query) {
                $query->with('industry');
            }, 'subscribeServices'])->first();

            //            $categorySessions = UserLearningPoint::where('user_id', Auth::id())->get();
            //            $points           = 0;
            //            foreach ($categorySessions as $points) {
            //                $points = (int)$points->points + $points;
            //                dd($points);
            //            }
        }

        return view('frontend.user.dashboard')->with(compact('user', 'points'));
    }
}
