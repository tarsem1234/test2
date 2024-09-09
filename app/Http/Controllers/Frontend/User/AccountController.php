<?php

namespace App\Http\Controllers\Frontend\User;

use Illuminate\View\View;
use App\Http\Controllers\Controller;

/**
 * Class AccountController.
 */
class AccountController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(): View
    {
        return view('frontend.user.account');
    }
}
