<?php

/**
 * All route names are prefixed with 'admin.'.
 */
Route::get('dashboard', 'DashboardController@index')->name('dashboard');

Route::resource('blogs', 'BlogController');
Route::get('blog/comments/{id}', 'BlogController@blogComment')->name('blog.comment');
Route::delete('blog/comment/delete/{id}', 'CommentController@deleteComment')->name('delete.comment');
Route::get('blog/comment/approval/{id}', 'CommentController@approvalComment')->name('approval.comment');
Route::resource('forums', 'ForumController');
Route::get('forums/details/{id}', 'ForumController@details')->name('forum.details');
Route::delete('forums/reply/delete/{id}', 'ForumController@deleteReply')->name('forum.reply.delete');

Route::resource('industries', 'IndustryController');
Route::resource('services', 'ServiceController');
Route::resource('pages', 'PageController');

Route::get('auto-email-logs', 'AutoEmailLogController@autoEmailLogs')->name('autoEmailLogs');
Route::match(['get', 'post'], 'export/{type?}', 'AutoEmailLogController@export')->name('exportAutoLogs');

Route::resource('learning-center/categories', 'CategoryController');
Route::get('learning-center/category/activation/{id}', 'CategoryController@deactivate')->name('category.deactivate');

Route::resource('learning-center/sessions', 'CategorySessionController');
Route::get('learning-center/session/activation/{id}', 'CategorySessionController@deactivate')->name('session.deactivate');
Route::get('learning-center/sessions/create/{id}', 'CategorySessionController@create')->name('sessionCreate');
Route::post('learning-center/saveSession', 'CategorySessionController@saveSession')->name('sessions.save');
Route::get('learning-center/catgegory/{id}/sessions/', 'CategorySessionController@index')->name('category.session');


Route::resource('document-listing', 'DocumentListingController');
Route::resource('advertise-images', 'AdvertiseImageController');
Route::resource('learning-centers', 'LearningCenterController');

//property index and delete
Route::get('rent', 'PropertyController@rentIndex')->name('rentIndex');
Route::get('rent/details/{id}', 'PropertyController@rentDetail')->name('rentDetail');
Route::get('rent/delete/{id}', 'PropertyController@destroyRent')->name('destroyRent');

Route::get('sale', 'PropertyController@saleIndex')->name('saleIndex');
Route::get('sale/details/{id}', 'PropertyController@saleDetail')->name('saleDetail');
Route::get('sale/delete/{id}', 'PropertyController@destroySale')->name('destroySale');

Route::get('vacation', 'PropertyController@vacationIndex')->name('vacationIndex');
Route::get('vacation/details/{id}', 'PropertyController@vacationDetail')->name('vacationDetail');
Route::get('vacation/delete/{id}', 'PropertyController@destroyVacation')->name('destroyVacation');

//xml feed
Route::get('xml-feed/create', 'XmlFeedController@create')->name('xmlFeedCreate');
Route::get('xml-feed/{id}/edit', 'XmlFeedController@edit')->name('xmlFeedEdit');
Route::post('xml-feed/store', 'XmlFeedController@store')->name('xmlFeedStore');
Route::post('xml-feed/update', 'XmlFeedController@update')->name('xmlFeedUpdate');
Route::get('xml-feed/users', 'XmlFeedController@index')->name('xmlFeedIndex');
Route::get('xml-feed/activation/{id}', 'XmlFeedController@activation')->name('xmlUserActivation');
Route::get('xmlfeed/delete/{id}', 'XmlFeedController@delete')->name('xmlFeedDelete');