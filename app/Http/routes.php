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


Route::get('/',[
    'uses'=>'OffresController@accueil',
    'as'=>'Affichageroffres'
]);


Route::get('/login',[
    'uses'=>'Auth\AuthController@getLogin',
    'as'=>'login'
]);

Route::post('login', 'Auth\AuthController@postLogin');
Route::get('/logout',[
    'uses'=>'Auth\AuthController@logout',
    'as'=>'logout'
]);
// Registration routes...
Route::post('register', 'Auth\AuthController@postRegister');

Route::get('/register',[
    'uses'=>'Auth\AuthController@getRegister',
    'as'=>'register'
]);



Route::get('/offres/creation',[
    'uses'=>'OffresController@index',
    'as'=>'AfficheroffresCreation'
]);

Route::post('/offres/creation',[
    'uses'=>'OffresController@creation',
    'as'=>'offresCreation'
]);
Route::get('/{codepostal}/{rue}',[
    'uses'=>'OffresController@voir',
    'as'=>'voirOffre'
]);

Route::post('{codepostal}/{rue}/photos', ['as' => 'ajout_photos', 'uses' => 'OffresController@ajoutPhoto']);

Route::get('/responsejson',[
    'uses'=>'OffresController@accueil2',
    'as'=>'Affichageroffresjson'
]);

    
    Route::delete('photos/{id?}',[
        'uses'=>'OffresController@detruire',
        'as'=>'detruire'
    ]);