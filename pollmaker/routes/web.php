<?php

Auth::routes();


Route::get('/','PollController@index');
Route::get('/polls/create','PollController@create');
Route::post('/polls/store','PollController@store');
Route::get('/polls/{poll}','PollController@show');

Route::get('voting/{poll}/polls','VotingController@vote');
Route::post('/voting/store','VotingController@store');
Route::get('voting/{poll}','VotingController@result')->name('voting');