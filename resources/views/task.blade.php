@extends('base')
@section('content')
    <div>
        <div class="section-heading mt-4">
            <h1>List Out Your Daily Task</h1>
        </div>
            <form class="task-form" method="post" action="{{url('task')}}">
            <label class="form-label my-3">Task Title</label>
            <input type="text" class="form-control" name="title">
             <label class="form-label my-3">Describe</label>
            <textarea name="description" row="20" class="daily-planner">
        </textarea >
            <button class="btn btn-primary">Save</button>
        </form>
    </div>
    <div class="daily-task">
        @if(!empty($tasks))
            @foreach($tasks as $task)
                <div class="card">
                    <div class="card-header">
                        {{$task->title}}
                    </div>
                    <div class="card-body">
                        <p class="card-text">{{$task->description}}</p>
                        <b>Done</b><input type="checkbox" name="check">
                    </div>
                </div>
            @endforeach
                @endif
    </div>
@endsection
