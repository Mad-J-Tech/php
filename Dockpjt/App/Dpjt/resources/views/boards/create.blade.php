@extends('layouts.boards')

@section('content')
<div class="container">
    <form action="/boards" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">タイトル</label>
            <input class="form-control" type="text" name="title">
        </div>
        <div class="form-group">
            <label for="message">コンテンツ</label>
            <textarea class="form-control" name="message" cols="30" rows="10"></textarea>
        </div>
        <button class="btn btn-success" type="submit">新規投稿</button>

    </form>
</div>
@endsection