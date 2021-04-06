@extends('layouts.base')
@section('content')
    <div class="container mt-5">
        <h1 class="mb-5">
            Edit task:
        </h1>

        <form action="{{route('tasks.update',['task'=>$task])}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label for="task_name" class="col-sm-2 col-form-label col-form-label-lg">Name:</label>
                <div class="col-sm-10">
                    <input name="name" type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" id="task_name" placeholder="" value="{{ old('name',$task->name) }}">
                    @error('name')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="task_desc" class="col-sm-2 col-form-label col-form-label-lg">Description:</label>
                <div class="col-sm-10">
                    <textarea name="description" class="form-control form-control-lg @error('description') is-invalid @enderror" id="task_desc" placeholder="" rows="6">{{ old('description', $task->description) }}</textarea>
                    @error('description')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="task_points" class="col-sm-2 col-form-label col-form-label-lg">Points:</label>
                <div class="col-sm-1">
                    <input name="points" type="text" class="form-control form-control-lg @error('points') is-invalid @enderror" id="task_points" placeholder="" value="{{ old('points',$task->points) }}">
                    @error('points')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row float-right">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary">Edit task</button>
                </div>
            </div>
        </form>
    </div>
@endsection
