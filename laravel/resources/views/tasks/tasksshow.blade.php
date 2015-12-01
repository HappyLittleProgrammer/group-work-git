@extends('other.mainhome')


@section('main')
        @foreach($users AS $user)
            @foreach($user->tasks AS $task)
            <div class="container">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h2>{{ $user->fname }}  {{ $user->lname }} writed: </h2> 
                            <br/>
                            <p>{{ $task->status_name }}</p><br/>
                            <p>{{ $task->status_desc }}</p>
                            <br/>
                            <p style="text-align: right; font-size: 10px; font-weight: bold;">Created at {{ $task->created_at }}</p>
                        </div>
                    </div>
                </div>
            </div>     
            @endforeach
        @endforeach
@endsection