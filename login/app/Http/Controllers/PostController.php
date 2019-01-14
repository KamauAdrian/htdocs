<?php

namespace App\Http\Controllers;

use App\Post;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
//        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         return $request->all();
//         return $request->get('title');
//         return $request->title;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
//    public function contact(){
//        return view('contact');
//    }
//
//    public function insert(){
//        $post= new Post();
//        $post->title='Post number 1';
//        $post->content='This is the very first post';
//        $post->save();
//        return "WOW ! You made it with your first go";
//    }
//
//    public function basicinsert(){
//        DB::insert('insert into posts (title,content) values(?,?)',['Post number 2','This is a verification post']);
//        return "WOW ! You made it with your first go";
//    }
//    public function createnew(){
//        Post::create(['title'=>'Another php insert','content'=>'Wow im now able to do all the insert methods']);
//        return "WOW ! You made it with your first go";
//    }
//
//    public function softdeletes(){
//
//        return "WOW ! You made it with your first go";
//    }
//public function getpost(){
//
//    $posts= User::find(1)->posts;
//    foreach ($posts as $post){
//        echo $post->title;
//        echo $post->content."<br />";
//
//    }
//
//}

//public function getuser($id){
//
//    $name= Post::find($id)->user;
//
//    return $name->name."<br />";
//}
//
//public function getrole($id){
//    $user= User::find($id)->roles;
//    foreach ($user as $role){
//        echo $role->name."<br />";
//    }
//}
//    public function getuser2(){
//
//    $users=Role::find(1)->users;
//    foreach ($users as $user){
//        echo $user->name."<br />";
//    }
//
//    }
}
