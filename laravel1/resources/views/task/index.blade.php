@extends("layouts.task")
@section("title", "To Do")

@section("content")

<div class="card mt-3 mb-4">
    <div class="card-header">
        新規タスクの追加
    </div>
    <div class="card-body">
        <form action="/task" method="POST">
            @csrf
            <div class="input-group">
                <input type="text" name="comment">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-plus-circle"></i> 追加</button>
                </div>
            </div>
        </form>
    </div>
</div>


<div class="card">
    <div class="card-header">
        <form>
            <input type="radio" name="status" onclick="taskRadio();" value="all">すべて
            <input type="radio" name="status" onclick="taskRadio();" value="current">作業中
            <input type="radio" name="status" onclick="taskRadio();" value="done">完了
        </form>
    </div>

    <div class="card-body">
        <table class="table">

            <tr>
                <th>ID</th>
                <th>コメント</th>
                <th>状態</th>
            </tr>

            @foreach($items as $item)
            <tr class="{{$item->status}}">
                <td>{{$loop->iteration}}</td>
                <td>{{$item->comment}}</td>
                <td>
                    <form action="/task/{{$item->id}}" method="POST">
                        @method("put")
                        @csrf
                        @php
                        if($item->status === "false"){
                        echo '<button type="submit" class="btn btn-warning">作業中</button>';
                        }else{
                        echo '<button type="submit" class="btn btn-success">完了</button>';
                        }
                        @endphp

                    </form>
                </td>
                <td>
                    <form action="/task/{{$item->id}}" method="POST">
                        @method("delete")
                        @csrf
                        <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i> 削除</button>
                    </form>
                </td>
            </tr>
            @endforeach

        </table>
    </div>
</div>

@endsection