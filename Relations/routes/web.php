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

use App\Address;
use App\Post;
use App\User;

Route::get('/','PostsController@index');




///*
//|--------------------------------------------------------------------------
//| ONE TO ONE RELATIONSHIPS
//|--------------------------------------------------------------------------
//*/
//Route::get('/adduser', function () {//inserting a record to db
//    $user=DB::insert('insert into users (name,email,password) values(?,?,?)',['Adrian','adriankamau@blog.com','1232431']);
//    return "Well Done ! You are now set";
//});
//Route::get('/insertaddress',function (){//insert a new record to a table in a db by ref another table
//    $user= User::find(1);//start by finding the user
//    $address= new Address(['name'=>'0100 Nairobi Kenya']);
//    $user->address()->save($address);
//    return "Well Done ! You are now set";});
//
//Route::get('/update', function (){//updating the db
//    $address=Address::whereUserId(1)->first();
//    $address->name="updated address";
//    $address->save();
//    return "Well Done ! You are now set";
//});
//
//Route::get('/read',function (){//reading data from data records
//    $address=User::find(1)->address;
//     return $address->name;
//});
//Route::get('/delete',function (){//deleting db records
//    $address=User::find(1)->address;
//    $address->delete();
//    return "Well Done ! You are now set";
//});
//
//
//
///*
//|--------------------------------------------------------------------------
//| ONE TO MANY RELATIONSHIPS
//|--------------------------------------------------------------------------
//*/
//Route::get('/create',function (){
//$user=User::findOrFail(3);
//$post = new Post(['title'=>'my first post','body'=>'laravel is so cool']);
//
//$user->posts()->save($post);
//
//});

