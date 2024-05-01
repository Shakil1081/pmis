<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
    // Employee List
    Route::post('employee-lists/media', 'EmployeeListApiController@storeMedia')->name('employee-lists.storeMedia');
    Route::apiResource('employee-lists', 'EmployeeListApiController');
});
