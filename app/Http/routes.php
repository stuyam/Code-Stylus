<?php

Route::get('/', 'WelcomeController@index');

Route::get('login', 'GitHubController@login');
Route::get('verify', 'GitHubController@handleLogin');
Route::get('logout', 'GitHubController@logout');

Route::group(['middleware' => 'authGitHub'], function(){
  Route::get('done', function(){
    return 'saved user and logged in!';
  });
});
