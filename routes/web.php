<?php

use Illuminate\Support\Facades\Route;


Route::get('/surveys', 'SurveyController@all');
Route::get('/survey/{id}', 'SurveyController@survey')->name('survey');

Route::post('/input', 'WebhookController@input')->name('input');