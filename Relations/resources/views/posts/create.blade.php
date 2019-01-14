@extends('layouts.master')
@section('content')
    <form action="{{url('save')}}" method="post">
        @csrf
        <input type="text" name="title" placeholder="Name"><br /><br />
        <input type="submit" name="submit">
    </form>
@endsection