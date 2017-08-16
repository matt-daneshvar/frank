<?php

Route::middleware(['auth'])->group(function()
{
    Route::get('/', 'ProjectsController@index');

    Route::post('brands/{brand}/projects', 'ProjectsController@store');
    Route::resource('projects', 'ProjectsController', ['only' => ['show', 'destroy']]);

    Route::resource('brands', 'BrandsController', ['only' => ['index', 'show', 'store', 'destroy']]);

    Route::resource('roles', 'RolesController', ['only' => ['index', 'show', 'store', 'update', 'destroy']]);

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

