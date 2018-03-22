<?php

Route::get('/', 'SplitController@index');

Route::get('/check-input', 'SplitController@checkInput');

Route::get('/contact', 'SplitController@contact');

Route::get('/index', 'CalcSplitter@index');

Route::get('/tipAmt/{tip}', 'CalcSplitter@show');

Route::any('/practice/{n?}', 'PracticeController@index');

Route::any('/test', 'SplitController@welcome');
