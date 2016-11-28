<?php

//Route::get('/','WelcomeController@index');

Route::get('home','HomeController@index');

Route::controllers([
   'auth'=>'Auth\AuthController',
    'password'=>'Auth\PasswordController',
]);

get('/', ['as' => 'posts', 'user' => 'PostController@index']);

