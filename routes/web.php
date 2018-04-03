<?php


#Route::get('/check-input', 'SplitController@checkInput');

Route::get('/contact', 'SplitController@contact');

Route::get('/index', 'CalcSplitter@index');

Route::get('/tipAmt/{tip}', 'CalcSplitter@show');

Route::any('/practice/{n?}', 'PracticeController@index');

Route::get('/', 'SplitController@index'); # Display the form
Route::get('/split', 'SplitController@split'); # Process the bill splitter form

