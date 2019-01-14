@extends('layout.app')
@section('content')
    <form action="posts" method="post">
        <input type="text" name="title" placeholder="Enter Title">
        <input type="submit" name="submit">
    </form>
@endsection('content')






