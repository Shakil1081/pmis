<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin'], function () {
    // Divisions
    Route::apiResource('divisions', 'DivisionsApiController');

    // District
    Route::apiResource('districts', 'DistrictApiController');

    // Designation
    Route::apiResource('designations', 'DesignationApiController');

    // // Employee List
    // Route::post('employee-lists/media', 'EmployeeListApiController@storeMedia')->name('employee-lists.storeMedia');
    Route::apiResource('employee-lists', 'EmployeeListApiController');

    // Grade
    Route::apiResource('grades', 'GradeApiController');

    // Upazila
    Route::apiResource('upazilas', 'UpazilaApiController');

    // Joininginfo
    Route::apiResource('joininginfos', 'JoininginfoApiController');

    // Project Revenuelone
    Route::apiResource('project-revenuelones', 'ProjectRevenueloneApiController');

    // Project Revenue Exam
    // Route::post('project-revenue-exams/media', 'ProjectRevenueExamApiController@storeMedia')->name('project-revenue-exams.storeMedia');
    Route::apiResource('project-revenue-exams', 'ProjectRevenueExamApiController', ['except' => ['destroy']]);

    // Achievementschools Universities
    Route::apiResource('achievementschools-universities', 'AchievementschoolsUniversitiesApiController');

    // Project
    Route::apiResource('projects', 'ProjectApiController');

    // Forest States
    Route::apiResource('forest-states', 'ForestStatesApiController');

    // Forest Ranges
    Route::apiResource('forest-ranges', 'ForestRangesApiController');

    // Forest Beats
    Route::apiResource('forest-beats', 'ForestBeatsApiController');
});
