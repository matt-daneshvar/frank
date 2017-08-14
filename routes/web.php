<?php

Route::middleware(['auth'])->group(function()
{
    Route::get('/', 'ProjectsController@index');
    Route::get('projects/{project}', 'ProjectsController@show');

    Route::get('users', 'UsersController@index');
    Route::get('users/{user}', 'UsersController@show');
    Route::post('users', 'UsersController@store');
    Route::delete('users/{user}', 'UsersController@destroy');

    Route::get('projects/{project}/links', 'LinksController@index');
    Route::post('projects/{project}/links', 'LinksController@store');
    Route::delete('links{link}', 'LinksController@destroy');

    Route::get('projects/{project}/stakeholders', 'StakeholdersController@index');
    Route::post('projects/{project}/stakeholders', 'StakeholdersController@store');
    Route::delete('projects/{project}/stakeholders/{stakeholder}', 'StakeholdersController@destroy');

    Route::get('projects/{project}/timeline', 'TimelinesController@show');
    Route::post('projects/{project}/timeline/activities/', 'ActivitiesController@store');
    Route::delete('activities/{activity}', 'ActivitiesController@destroy');

});

Auth::routes();

