<?php


Route::get('/',function () {
    if (Auth::check())
        return View('dashboard');
    else 
        return View('homepage');
});
        

Route::get('/language', ['as'=>'language','uses'=>"HomeController@language"]);
Route::get('/dash-board',['as'=>'dash-board','uses'=>"DashBoardController@index"]);
Route::get('profile/edit',['as'=>'getEdit','uses'=>"ProfileController@getEdit"]);
Route::post('profile/edit',['as'=>'postEdit','uses'=>"ProfileController@postEdit"]);
 
Route::controllers([
    'auth'=>'Auth\AuthController',
    'password'=>'Auth\PasswordController',               
    ]);

