@extends('layouts.boards')

@section('content')
<form action="/boards" method="POST">
    @csrf
    <input type="text" name="title">
    <input type="text" name="message">
    <button type="submit">新規投稿</button>

</form>

@endsection