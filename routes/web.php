<?php

Route::middleware(['auth'])->group(function()
{
    Route::get('/', 'ProjectsController@index');
    Route::get('projects/{project}', 'ProjectsController@show');
    Route::get('projects/{project}/links', 'LinksController@index');
    Route::post('projects/{project}/links', 'LinksController@store');
    Route::delete('links{link}', 'LinksController@destroy');
    Route::get('projects/{project}/stakeholders', 'StakeholdersController@index');
    Route::post('projects/{project}/stakeholders', 'StakeholdersController@store');
    Route::delete('projects/{project}/stakeholders/{stakeholder}', 'StakeholdersController@destroy');

});

Auth::routes();

