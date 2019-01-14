<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //

    public function index(){

        return view('posts.create');
    }
    public function create(){

return view('welcome');
    }

    public function store(Request $request){

        return $request->all();
    }
}
