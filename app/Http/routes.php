<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('pages.accueil');
});


Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@logout');

// Registration routes...
Route::get('register', 'Auth\AuthController@getRegister');
Route::post('register', 'Auth\AuthController@postRegister');




Route::get('/offres/creation',[
    'uses'=>'OffresController@index',
    'as'=>'AfficheroffresCreation'
]);

Route::post('/offres/creation',[
    'uses'=>'OffresController@creation',
    'as'=>'offresCreation'
]);
Route::get('/{codepostal}/{rue}', 'OffresController@voir');

Route::post('{codepostal}/{rue}/photos', ['as' => 'ajout_photos', 'uses' => 'OffresController@ajoutPhoto']);



