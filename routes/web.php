<?php

Route::get('/', 'PageController@welcome');

Route::get('/about', 'PageController@about');

Route::get('/contact', 'PageController@contact');

Route::get('/index', 'CalcSplitter@index');

Route::get('/tipAmt/{tip}', 'CalcSplitter@show');