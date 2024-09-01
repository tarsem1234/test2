<?php

/**
 * All route names are prefixed with 'admin.access'.
 */
Route::group([
    'prefix'     => 'access',
    'as'         => 'access.',
    'namespace'  => 'Access',
], function () {

    /*
     * User Management
     */
    Route::group([
        'middleware' => 'access.routeNeedsRole:1',
    ], function () {
        Route::group(['namespace' => 'User'], function () {
            /*
             * For DataTables
             */
            Route::post('user/get', 'UserTableController')->name('user.get');
            
            /*
             * User Status'
             */
            Route::get('user/deactivated', 'UserStatusController@getDeactivated')->name('user.deactivated');
            Route::get('user/deleted', 'UserStatusController@getDeleted')->name('user.deleted');

            /*
             * User CRUD
             */
            Route::resource('user', 'UserController');
            
            Route::get('business', 'BusinessController@index')->name('business.index');
            Route::get('business/create', 'BusinessController@create')->name('business.create');
            Route::post('business/store', 'BusinessController@store')->name('business.store');
            Route::get('business/show/{user}', 'UserController@show')->name('business.show');
            Route::get('business/{user}/edit', 'UserController@edit')->name('business.edit');
            Route::post('business/update', 'BusinessController@update')->name('business.update');
            Route::get('business/deactivated', 'BusinessController@deactivated')->name('business.deactivated');
            Route::get('business/deleted', 'BusinessController@deleted')->name('business.deleted');

            Route::get('admin/show/{user}', 'UserController@show')->name('admin.show');
            Route::get('admin/{user}/edit', 'UserController@edit')->name('admin.edit');
            Route::get('admin', 'AdminController@index')->name('admin.index');
            Route::get('admin/create', 'AdminController@create')->name('admin.create');
            Route::get('admin/deactivated', 'AdminController@deactivated')->name('admin.deactivated');
            Route::get('admin/deleted', 'AdminController@deleted')->name('admin.deleted');

            Route::get('support/show/{user}', 'UserController@show')->name('support.show');
            Route::get('support/{user}/edit', 'UserController@edit')->name('support.edit');
            Route::get('support', 'SupportController@index')->name('support.index');
            Route::get('support/create', 'SupportController@create')->name('support.create');
            Route::get('support/deactivated', 'SupportController@deactivated')->name('support.deactivated');
            Route::get('support/deleted', 'SupportController@deleted')->name('support.deleted');

            /*
             * Specific User
             */
            Route::group(['prefix' => 'user/{user}'], function () {
                // Account
                Route::get('account/confirm/resend', 'UserConfirmationController@sendConfirmationEmail')->name('user.account.confirm.resend');

                // Status
                Route::get('mark/{status}', 'UserStatusController@mark')->name('user.mark')->where(['status' => '[0,1]']);

                // Social
                Route::delete('social/{social}/unlink', 'UserSocialController@unlink')->name('user.social.unlink');

                // Confirmation
                Route::get('confirm', 'UserConfirmationController@confirm')->name('user.confirm');
                Route::get('unconfirm', 'UserConfirmationController@unconfirm')->name('user.unconfirm');

                // Password
                Route::get('password/change', 'UserPasswordController@edit')->name('user.change-password');
                Route::patch('password/change', 'UserPasswordController@update')->name('user.change-password.post');

                // Access
                Route::get('login-as', 'UserAccessController@loginAs')->name('user.login-as');

                // Session
                Route::get('clear-session', 'UserSessionController@clearSession')->name('user.clear-session');
            });

            /*
             * Deleted User
             */
            Route::group(['prefix' => 'user/{deletedUser}'], function () {
                Route::get('delete', 'UserStatusController@delete')->name('user.delete-permanently');
                Route::get('restore', 'UserStatusController@restore')->name('user.restore');
            });
        });

        /*
        * Role Management
        */
        Route::group(['namespace' => 'Role'], function () {
            Route::resource('role', 'RoleController', ['except' => ['show']]);

            //For DataTables
            Route::post('role/get', 'RoleTableController')->name('role.get');
        });
    });
});
