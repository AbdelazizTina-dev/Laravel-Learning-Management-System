@extends('layouts.base')
@section('content')
    <div class="container mt-5">
        <h1 class="mb-5">
            Add new task:
        </h1>

        <form action="{{route('subjects.tasks.store',['subject'=>$subject])}}" method="POST">
            @csrf
            <div class="form-group row">
                <label for="task_name" class="col-sm-2 col-form-label col-form-label-lg">Name:</label>
                <div class="col-sm-10">
                    <input name="name" type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" id="task_name" placeholder="" value="{{ old('name', '') }}">
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
                    <textarea name="description" class="form-control form-control-lg @error('description') is-invalid @enderror" id="task_desc" placeholder="" value="{{ old('description', '') }}" rows="6"></textarea>
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
                    <input name="points" type="text" class="form-control form-control-lg @error('points') is-invalid @enderror" id="task_points" placeholder="" value="{{ old('points', '') }}">
                    @error('points')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row float-right">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary">Add new task</button>
                </div>
            </div>
        </form>
    </div>
@endsection
