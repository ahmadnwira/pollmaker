<?php

Auth::routes();

Route::get('/','PollController@index');
Route::get('/polls/create','PollController@create');
Route::post('/polls/store','PollController@store');
Route::get('/polls/{poll}','PollController@show');

Route::get('voting/{poll}/polls','VotingControlelr@vote');
Route::post('/voting/store','VotingControlelr@store');
Route::get('/voting/result','VotingControlelr@result');