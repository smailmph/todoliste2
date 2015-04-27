<?php


Route::get('/', ['as' => 'home', 'uses' => 'TasksController@index']);
Route::resource('tasks', 'TasksController');
Route::get('/login', array('as' => 'login' , 'uses' => 'ConnexController@getLogin'));
Route::post('login',array('uses' => 'ConnexController@postLogin'));