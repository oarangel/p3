<?php

#Route::get('/check-input', 'SplitController@checkInput');

Route::get('/', 'SplitController@index'); # Display the form
Route::get('/split', 'SplitController@split'); # Process the bill splitter form

Route::get('/contact', 'SplitController@contact');
#Left in place for learning Purposes
Route::get('/index', 'CalcSplitter@index');

Route::get('/tipAmt/{tip}', 'CalcSplitter@show');

Route::any('/practice/{n?}', 'PracticeController@index');


