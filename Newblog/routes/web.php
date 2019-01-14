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
//Route::get('/', function (){
//
//    $tasks = DB::table('posts')->get();
//
//    return view('welcome',compact('tasks'));
//});
//
//Route::get('/tasks/{id}', function ($id) {
//
//
//    $task = DB::table('posts')->find($id);
//
//    return view('posts.index',compact('task'));
////    $tasks=[
////        'Go to bed early',
////        'Stay cool',
////        'meet a friend'];
////    return view('welcome',compact('tasks'));
////    return view('welcome')->with('name','world');
////    return view('welcome',[
////        'name'=>'World']);
//});
//Route::get('/tasks', function () {
//
//
//    $tasks = DB::table('posts')->get();
//
//    return view('posts.show',compact('tasks'));
//
//});
Route::get('/','PostController@index');
