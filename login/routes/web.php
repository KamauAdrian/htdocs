<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/create', function () {
//    $names=['Kamau','Adrian','Kubai'];
//    return view('contact', compact('names'));
//});
//Route::get('/insert','PostController@insert');
//Route::get('/create','PostController@create');
//Route::get('/','PostController@index');
//Route::get('/basicinsert','PostController@basicinsert');
//Route::get('/createnew','PostController@createnew');
//Route::get('/getpost','PostController@getpost');
//Route::get('/getuser/{id}/user','PostController@getuser');
//Route::get('/getrole/{id}/role','PostController@getrole');
//Route::get('/getuser','PostController@getuser2');
Route::resource('/posts','PostController');
