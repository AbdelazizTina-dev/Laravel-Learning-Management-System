@extends('layouts.base')
@section('content')
    <div class="container">
        <div class="jumbotron">
            <div class="d-flex ">
              <h1 class="display-4 mr-auto">Task details:</h1>
              <a href="{{route('tasks.edit',['task'=>$task])}}">
                <i class="fas fa-edit fa-4x mr-3" style="color: orange;" data-toggle="tooltip" data-placement="top" title="Edit Task"></i>
              </a>
            </div>
            <hr class="my-2">
            <table class="table-borderless">
                <tr>
                    <td class="mr-3"><h3>Name:</h3></td> <td><h3>{{$task->name}}</h3></td>
                </tr>
                <tr>
                    <td class="mr-3" valign="top" style="width: 50%;"><h3>Description:</h3></td>
                    <td style="width: 50%;" valign="top">
                        <p class="lead" style="font-size: 24px;">
                            {{$task->description}}
                        </p>
                    </td>
                </tr>
                <tr>
                     <td class="mr-3" style="width: 50%;"><h3>Points:</h3></td> <td><h3>{{$task->points}}</h3></td>
                </tr>
                <tr>
                     <td class="mr-3" style="width: 50%;"><h3>Number of submitted solutions:</h3></td> <td><h3>{{$task->solutions()->count()}}</h3></td>
                </tr>
                <tr>
                     <td class="mr-3" style="width: 50%;"><h3>Number of evaluated solutions:</h3></td> <td><h3>{{$task->solutions()->where('evaluated',true)->count()}}</h3></td>
                </tr>
            </table>
            <hr class="my-2">
            <div class="d-flex">
                <h3 class="mr-auto" style="font-weight: bold;">Solutions List:</h3>
            </div>
            <table class="table table-xl table-hover" style="width: 100%;">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">Date of Submission</th>
                    <th scope="col">Student's Name</th>
                    <th scope="col">Student's E-mail</th>
                    <th scope="col">Evaluated Points</th>
                    <th scope="col">Evaluation Time</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($task->solutions as $solution)
                        <tr>
                            <th scope="row">{{$solution->id}}</th>
                            <td>{{$solution->created_at}}</td>
                            <td>{{$solution->student_name}}</td>
                            <td>{{$solution->student_email}}</td>
                            @if ($solution->earned_points == null)
                                <td>/</td>
                                <td>/</td>
                            @else
                                <td>{{$solution->earned_points}}</td>
                                <td>{{$solution->updated_at}}</td>
                            @endif
                            <td>
                                <a href="{{route('solutions.edit',['solution'=>$solution])}}">
                                    <button class="btn btn-primary" @if ($solution->evaluated)
                                        disabled
                                    @endif>Evaluate</button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>

  </body>
@endsection
