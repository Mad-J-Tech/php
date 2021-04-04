@extends('layouts.app')

@section('content')
<form action="/boards/{{$item->id}}" method="POST">
    @method("put")
    @csrf
    <input type="text" name="title" value="{{$item->title}}">
    <textarea name="message" id="" cols="30" rows="10">{{$item->message}}</textarea>
    <button type="submit">編集完了</button>
</form>

@endsection