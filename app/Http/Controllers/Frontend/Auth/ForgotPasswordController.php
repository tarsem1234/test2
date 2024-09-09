<?php

namespace App\Http\Controllers\Frontend\Auth;

use Illuminate\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

/**
 * Class ForgotPasswordController.
 */
class ForgotPasswordController extends Controller
{
    use SendsPasswordResetEmails;

    /**
     * Display the form to request a password reset link.
     */
    public function showLinkRequestForm(): View
    {
        return view('frontend.auth.passwords.email');
    }
}
