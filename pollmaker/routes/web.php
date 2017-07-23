<?php

Auth::routes();

Route::get('/','PollController@index');
Route::get('/polls/create','PollController@create');
Route::post('/polls/store','PollController@store');

Route::get('/polls/{poll}','PollController@show');