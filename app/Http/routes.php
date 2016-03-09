<?php

Route::group(['middleware' => ['web']], function () {

  Route::get('/', function () {
      return view('welcome');
  });

  Route::get('/books', 'BookController@getIndex');
  Route::get('/book/create', 'BookController@getCreate');
  Route::post('/book/create', 'BookController@postCreate');
  Route::get('/book/{id}', 'BookController@getShow');

  Route::get('/practice', function(){
    echo config('app.env');
    echo config('app.url');
  });
});
