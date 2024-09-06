<?php

Route::prefix('search')->name('search.')->namespace('Search')->group(function () {

    /*
     * Search Specific Functionality
     */
    Route::get('/', 'SearchController@index')->name('index');
});
