@extends('layouts.app')

@section('title', $title)

@section('content')
<form method="post" action="/post">
    @csrf
    <input type="text" name="test"/>
    <input type="submit">
</form>

<a href="{{route('post.show', ['id'=>1])}}">Post info</a>
@endsection
