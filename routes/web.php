<?php

Route::middleware(['auth'])->group(function()
{
    Route::get('/', 'ProjectsController@index');
    Route::get('projects/{project}', 'ProjectsController@show');

});

Auth::routes();

