@extends('layouts.base')
@section('content')
    <div class="container mt-5">
        <h1 class="mb-5">
            Add new diary entry:
        </h1>

        <form action="{{route('solutions.update',['solution'=>$solution])}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label for="task_desc" class="col-sm-2 col-form-label col-form-label-lg">Task Description:</label>
                <div class="col-sm-10">
                    <p class="lead pt-2" id="task_desc">
                        {{$solution->task->description}}
                    </p>
                </div>
            </div>
            <div class="form-group row">
                <label for="solution_desc" class="col-sm-2 col-form-label col-form-label-lg">Solution:</label>
                <div class="col-sm-10">
                    <p class="lead pt-2" id="solution_desc">
                        {{$solution->answer}}
                    </p>
                </div>
            </div>
            <div class="form-group row">
                <label for="earned_points" class="col-sm-2 col-form-label col-form-label-lg">Points:</label>
                <div class="col-sm-2">
                    <input name="earned_points" type="text" class="form-control form-control-lg @error('earned_points') is-invalid @enderror" id="earned_points" placeholder="">
                    @error('earned_points')
                        <div>
                            {{$message}}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row float-right">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary">Evaluate</button>
                </div>
            </div>
        </form>
    </div>
@endsection
