@extends('layouts.boards')

@section('content')
@foreach($items as $item)
<div class="card text-center">
    <div class="card-body">
        <h2 class="card-title">{{$item->title}}</h2>
        <p class="card-text">{{$item->message}}</p>
        <h3>{{$item->getName()}}</h3>
        <div class="container">
            <div class="row">
                @if($item->user_id === $myid)
                <div class="col">
                    <form action="/boards/{{$item->id}}/edit" method="GET">
                        @csrf
                        <button class="btn btn-primary" type="submit">編集</button>
                    </form>
                </div>
                <div class="col">
                    <form action="/boards/{{$item->id}}" method="POST">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger" type="submit">削除</button>
                    </form>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endforeach


@endsection