@extends('layouts.base')
@section('content')
    <div class="container mt-5">
        <h1 class="mb-5">
            Submit Solution:
        </h1>

        <form action="{{route('tasks.solutions.store',['task'=>$task])}}" method="POST">
            @csrf
            <div class="form-group row">
                <label for="task_desc" class="col-sm-2 col-form-label col-form-label-lg">Subject Name:</label>
                <div class="col-sm-10">
                    <p class="lead pt-2">
                        {{$task->name}}
                    </p>
                </div>
            </div>
            <div class="form-group row">
                <label for="task_desc" class="col-sm-2 col-form-label col-form-label-lg">Teacher Name:</label>
                <div class="col-sm-10">
                    <p class="lead pt-2">
                        {{$task->subject->user->name}}
                    </p>
                </div>
            </div>
            <div class="form-group row">
                <label for="task_desc" class="col-sm-2 col-form-label col-form-label-lg">Task Description:</label>
                <div class="col-sm-10">
                    <p class="lead pt-2">
                        {{$task->description}}
                    </p>
                </div>
            </div>
            <div class="form-group row">
                <label for="solution_desc" class="col-sm-2 col-form-label col-form-label-lg">Points:</label>
                <div class="col-sm-10">
                    <p class="lead pt-2">
                        {{$task->points}}
                    </p>
                </div>
            </div>
            <div class="form-group row">
                <label for="subject_desc" class="col-sm-2 col-form-label col-form-label-lg">Answer:</label>
                <div class="col-sm-10">
                    <textarea name="answer" class="form-control form-control-lg @error("answer") is-invalid @enderror" id="subject_desc" placeholder="" rows="6"></textarea>
                </div>
                @error("answer")
                    <div>
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-group row float-right">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
