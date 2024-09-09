<?php

use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Route;

/**
 * Frontend Access Controllers
 * All route names are prefixed with 'frontend.auth'.
 */
Route::name('auth.')->group(function () {

    /*
     * These routes require the user to be logged in
     */
    Route::middleware('auth')->group(function () {
        Route::get('logout', [Auth\LoginController::class, 'logout'])->name('logout');

        //For when admin is logged in as user from backend
        Route::get('logout-as', [Auth\LoginController::class, 'logoutAs'])->name('logout-as');

        // Change Password Routes
        Route::patch('password/change', [Auth\ChangePasswordController::class, 'changePassword'])->name('password.change');
    });

    /*
     * These routes require no user to be logged in
     */
    Route::middleware('guest')->group(function () {
        // Authentication Routes
        Route::get('login', [Auth\LoginController::class, 'showLoginForm'])->name('login');
        Route::post('login', [Auth\LoginController::class, 'login'])->name('login.post');

        // Socialite Routes
        Route::get('login/{provider}', [Auth\SocialLoginController::class, 'login'])->name('social.login');

        // Registration Routes
        if (config('access.users.registration')) {
            Route::get('register', [Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
            Route::post('register', [Auth\RegisterController::class, 'register'])->name('register.post');
        }

        // Confirm Account Routes
        Route::get('account/confirm/{token}', [Auth\ConfirmAccountController::class, 'confirm'])->name('account.confirm');
        Route::get('account/confirm/resend/{user}', [Auth\ConfirmAccountController::class, 'sendConfirmationEmail'])->name('account.confirm.resend');

        // Password Reset Routes
        Route::get('password/reset', [Auth\ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.email');
        Route::post('password/email', [Auth\ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email.post');

        Route::get('password/reset/{token}', [Auth\ResetPasswordController::class, 'showResetForm'])->name('password.reset.form');
        Route::post('password/reset', [Auth\ResetPasswordController::class, 'reset'])->name('password.reset');
    });
});
