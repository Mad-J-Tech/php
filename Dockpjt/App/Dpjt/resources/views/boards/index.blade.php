@extends('layouts.app')

@section('content')
@foreach($items as $item)
<h1>{{$item->title}}</h1>
<h2>{{$item->message}}</h2>
@if($item->user_id === $myid)
<form action="/boards/{{$item->id}}/edit" method="GET">
    @csrf
    <button type="submit">編集</button>
</form>
<form action="/boards/{{$item->id}}">
    @method('delete')
    @csrf
    <button type="submit">削除</button>
</form>
@endif
@endforeach

@endsection