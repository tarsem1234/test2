<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


Route::get('cron-back-to-market', 'CronController@checkBackToMarket')->name('checkBackToMarket');
Route::middleware('auth')->group(function() {
    Route::group(['middleware' => 'OnlyUsers'], function () {
        /* Learning Center */
        Route::get('learning-center', 'LearningCenterController@index')->name('learning.center');
        Route::get('learning-center/learning_topic/{id}', 'LearningCenterController@learningTopic')->name('learning.topic');
        Route::get('learning-center/learning_session/{id}', 'LearningCenterController@learningSession')->name('learning.session');
        Route::get('learning-center/session/{id}/bonus', 'LearningCenterController@learningSession')->name('learning.bonus_session');
        Route::post('learning-center/learning_session/submit_answer', 'LearningCenterController@submitAnswer')->name('submit.answer');
        Route::get('property/{id}/manage-availablity/', 'PropertyController@manageAvailabilty')->name('manageAvailablity');
        Route::get('get-availability/{id}', 'PropertyController@getVacationAvailability')->name('getVacationAvailability');
    });
    /* Listing Availability */
    Route::post('property/add_availability', 'PropertyController@addAvailability')->name('property.add_availability');
    Route::post('property/get_availability', 'PropertyController@getAvailability')->name('property.getAvailabilities');
    Route::get('property/delete_availability/{id}', 'PropertyController@destroyAvailability')->name('property.destroyAvailability');
    Route::get('property/{id}/manage-vacation-availablity/', 'PropertyController@manageVacationAvailabilty')->name('manageVacationAvailabilty');
    Route::post('property/{id}/updateVacationDates/', 'PropertyController@updateVacationDates')->name('updateVacationDates');
    Route::get('property/confirm_availability/{id}', 'PropertyController@confirmAvailability')->name('confirmAvailability');

    /* Messages */
    Route::get('messages', 'MessageController@index')->name('messages.index');
    Route::match(['post', 'get'], 'messages/new', 'MessageController@composeNew')->name('messages.new');
    Route::match(['post', 'get'], 'conversation/{id}', 'MessageController@conversation')->name('messages.conversation');
    Route::get('delete/{id}', 'MessageController@delete')->name('messages.delete');

    /* Rating */
    Route::post('business/rate_user', 'MessageController@rateUser')->name('rateUser');
    Route::get('business/reviews/{id}', 'MessageController@userReviews')->name('userReviews');
    /* Recommendation */
    Route::get('business/recommend/{id}', 'NetworkController@recommendBusiness')->name('recommendBusiness');
});

Route::match(['get', 'post'], 'xmlfeed', "XmlFeedController@index")->name('xmlfeed');
