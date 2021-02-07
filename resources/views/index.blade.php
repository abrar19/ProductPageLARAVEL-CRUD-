@extends('layout')

@section('card-content')
<div>
    <div class="float-start">
        <h4 class="pb-3">Product Lists</h4>
    </div>
    <div class="float-end">
        <a href="{{ route('task.create') }}" class="btn btn-info">
            Add Product
        </a>
    </div>
    <div class="clearfix"></div>
</div>
    @foreach($tasks as $task)
        <div class="card">
            <div class="card-header">
                {{$task->name}}
                <span class="badge rounded-pill bg-info text-dark">
                    {{$task->created_at->diffForHumans()}}
                </span>
            </div>
            <div class="card-body">
                <div class="card-text">
                    <div class="float-start">
                    <img src="{{$task->imgsrc}}" height="100px" width="100px"/>
                    {{$task->description}}
                        <br>
                        <span class="badge rounded-pill bg-info text-dark">
                        {{$task->category}}
                        </span>
                        <small>{{$task->updated_at->diffForHumans()}}</small>
                    </div>
                    <div class="float-end">
                        <a href="{{ route('task.edit', 1) }}" class="btn btn-success">
                            Edit
                        </a>
                        <form action="{{ route('task.destroy', $task->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            Delete
                        </button>
                    </div>
                    <div class="clearfix"></div>
                    
                </div>
            </div>
        </div>
    @endforeach
@endsection