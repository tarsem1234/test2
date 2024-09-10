<?php

use App\Http\Controllers\Access;
use App\Http\Controllers\Backend\Access\Role\RoleController;
use App\Http\Controllers\Backend\Access\Role\RoleTableController;
use App\Http\Controllers\Backend\Access\User\UserController;
use App\Http\Controllers\Backend\Access\User\UserTableController;
use Illuminate\Support\Facades\Route;

/**
 * All route names are prefixed with 'admin.access'.
 */
Route::prefix('access')->name('access.')->group(function () {

    /*
     * User Management
     */
    Route::middleware('access.routeNeedsRole:1')->group(function () {
        /*
         * For DataTables
         */
        Route::post('user/get', UserTableController::class)->name('user.get');

        /*
         * User Status'
         */
        Route::get('user/deactivated', [Access\User\UserStatusController::class, 'getDeactivated'])->name('user.deactivated');
        Route::get('user/deleted', [Access\User\UserStatusController::class, 'getDeleted'])->name('user.deleted');

        /*
         * User CRUD
         */
        Route::resource('user', UserController::class);

        Route::get('business', [Access\User\BusinessController::class, 'index'])->name('business.index');
        Route::get('business/create', [Access\User\BusinessController::class, 'create'])->name('business.create');
        Route::post('business/store', [Access\User\BusinessController::class, 'store'])->name('business.store');
        Route::get('business/show/{user}', [Access\User\UserController::class, 'show'])->name('business.show');
        Route::get('business/{user}/edit', [Access\User\UserController::class, 'edit'])->name('business.edit');
        Route::post('business/update', [Access\User\BusinessController::class, 'update'])->name('business.update');
        Route::get('business/deactivated', [Access\User\BusinessController::class, 'deactivated'])->name('business.deactivated');
        Route::get('business/deleted', [Access\User\BusinessController::class, 'deleted'])->name('business.deleted');

        Route::get('admin/show/{user}', [Access\User\UserController::class, 'show'])->name('admin.show');
        Route::get('admin/{user}/edit', [Access\User\UserController::class, 'edit'])->name('admin.edit');
        Route::get('admin', [Access\User\AdminController::class, 'index'])->name('admin.index');
        Route::get('admin/create', [Access\User\AdminController::class, 'create'])->name('admin.create');
        Route::get('admin/deactivated', [Access\User\AdminController::class, 'deactivated'])->name('admin.deactivated');
        Route::get('admin/deleted', [Access\User\AdminController::class, 'deleted'])->name('admin.deleted');

        Route::get('support/show/{user}', [Access\User\UserController::class, 'show'])->name('support.show');
        Route::get('support/{user}/edit', [Access\User\UserController::class, 'edit'])->name('support.edit');
        Route::get('support', [Access\User\SupportController::class, 'index'])->name('support.index');
        Route::get('support/create', [Access\User\SupportController::class, 'create'])->name('support.create');
        Route::get('support/deactivated', [Access\User\SupportController::class, 'deactivated'])->name('support.deactivated');
        Route::get('support/deleted', [Access\User\SupportController::class, 'deleted'])->name('support.deleted');

        /*
         * Specific User
         */
        Route::prefix('user/{user}')->group(function () {
            // Account
            Route::get('account/confirm/resend', [Access\User\UserConfirmationController::class, 'sendConfirmationEmail'])->name('user.account.confirm.resend');

            // Status
            Route::get('mark/{status}', [Access\User\UserStatusController::class, 'mark'])->name('user.mark')->where(['status' => '[0,1]']);

            // Social
            Route::delete('social/{social}/unlink', [Access\User\UserSocialController::class, 'unlink'])->name('user.social.unlink');

            // Confirmation
            Route::get('confirm', [Access\User\UserConfirmationController::class, 'confirm'])->name('user.confirm');
            Route::get('unconfirm', [Access\User\UserConfirmationController::class, 'unconfirm'])->name('user.unconfirm');

            // Password
            Route::get('password/change', [Access\User\UserPasswordController::class, 'edit'])->name('user.change-password');
            Route::patch('password/change', [Access\User\UserPasswordController::class, 'update'])->name('user.change-password.post');

            // Access
            Route::get('login-as', [Access\User\UserAccessController::class, 'loginAs'])->name('user.login-as');

            // Session
            Route::get('clear-session', [Access\User\UserSessionController::class, 'clearSession'])->name('user.clear-session');
        });

        /*
         * Deleted User
         */
        Route::prefix('user/{deletedUser}')->group(function () {
            Route::get('delete', [Access\User\UserStatusController::class, 'delete'])->name('user.delete-permanently');
            Route::get('restore', [Access\User\UserStatusController::class, 'restore'])->name('user.restore');
        });

        /*
        * Role Management
        */
        Route::resource('role', RoleController::class)->except('show');

        //For DataTables
        Route::post('role/get', RoleTableController::class)->name('role.get');
    });
});
