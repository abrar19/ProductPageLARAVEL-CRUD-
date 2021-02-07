@extends('layout')

@section('card-content')
<div>
    <div class="float-start">
        <h4 class="pb-3">Edit Product Details <span class="badge bg-info">{{$task->name}}</span></h4>
    </div>
    <div class="float-end">
        <a href="{{ route('index') }}" class="btn btn-info">
            All Product
        </a>
    </div>
    <div class="clearfix"></div>
</div>
        <div class="card card-body bg-light p-4">
            <form action="{{ route('task.update', $task->id) }}" method="POST">
            @csrf
            @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$task->name}}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea type="text" class="form-control" id="description" name="description" rows="5"> {{$task->description}} </textarea>
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">Category</label>
                    <input type="text" class="form-control" id="category" name="category" rows="5" value="{{$task->category}}">
                </div>
                <div class="mb-3">
                    <label for="imgsrc" class="form-label">Image Link</label>
                    <input type="text" class="form-control" id="imgsrc" name="imgsrc" value="{{$task->imgsrc}}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
@endsection