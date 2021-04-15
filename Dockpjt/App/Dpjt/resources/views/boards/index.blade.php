@extends('layouts.app')

@section('content')
@foreach($items as $item)
<div class="container">
    <div class="card text-center bg-light mb-2">
        <div class="card-body">
            <h2 class="card-title">{{$item->title}}</h2>
            <p class="card-text display-5">{{$item->message}}</p>
            <div class="d-flex justify-content-center">
                <div class="mr-2 align-self-center">
                    <p class="my-auto">投稿者：{{$item->user->name}}</p>
                </div>
                @if($item->user->id === Auth::id())
                <div class="mr-2 align-self-center">
                    <form action="{{route('boards.edit', $item->id)}}" method="GET">
                        @csrf
                        <button class="btn btn-primary" type="submit">編集</button>
                    </form>
                </div>
                <div class="mr-2 align-self-center">
                    <form action="{{route('boards.destroy', $item->id)}}" method="POST">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger" type="submit">削除</button>
                    </form>
                </div>

                @elseif($item->favorite_users()->where('user_id', Auth::id())->exists())
                <div class="mr-2 align-self-center">
                    <form action="{{route('unfavorite', $item->id)}}" method="POST">
                        @method('delete')
                        @csrf
                        <button class="btn" type="submit">
                            <i class="fas fa-heart"></i>
                        </button>
                    </form>
                    <p class="p-auto">{{$item->favorite_users()->count()}}</p>
                </div>
                @else
                <div class="mr-2 align-self-center">
                    <form action="{{route('favorite', $item->id)}}" method="POST">
                        @csrf
                        <button class="btn" type="submit">
                            <i class="far fa-heart"></i>
                        </button>
                    </form>
                    <p class="p-auto">{{$item->favorite_users()->count()}}</p>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endforeach


@endsection