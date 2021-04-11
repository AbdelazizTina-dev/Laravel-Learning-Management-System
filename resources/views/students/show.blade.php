@extends('layouts.base')
@section('content')
    <div class="container">
        <div class="jumbotron">
            <div class="d-flex ">
              <h1 class="display-4 mr-auto">Subject details:</h1>
            </div>
            <hr class="my-2">
            <table class="table-borderless">
                <tr>
                    <td style="width: 30%;"><h3>Name:</h3></td> <td><h3 class="ml-3">{{$subject->name}}</h3></td>
                </tr>
                <tr>
                    <td valign="top" style="width: 30%;"><h3>Description:</h3></td>
                    <td valign="top">
                        <div>
                            <p class="lead text-justify ml-3" style="font-size: 24px;">
                            {{$subject->description}}
                            </p>
                        </div>
                    </td>
                </tr>
                <tr>
                     <td style="width: 30%;"><h3>Code:</h3></td> <td><h3 class="ml-3">{{$subject->code}}</h3></td>
                </tr>
                <tr>
                     <td><h3>Credit value:</h3></td> <td><h3 class="ml-3">{{$subject->credit_value}}</h3></td>
                </tr>
                <tr>
                     <td><h3>Date of creation:</h3></td> <td><h3 class="ml-3">{{$subject->created_at}}</h3></td>
                </tr>
                <tr>
                     <td><h3>Last Modified:</h3></td> <td><h3 class="ml-3">{{$subject->updated_at}}</h3></td>
                </tr>
                <tr>
                     <td style="width: 40%;"><h3>Number of assigned students:</h3></td> <td><h3 class="ml-3">{{$subject->users()->count()}}</h3></td>
                </tr>
                <tr>
                     <td><h3>Teacher Name:</h3></td> <td><h3 class="ml-3">{{$subject->user->name}}</h3></td>
                </tr>
                <tr>
                     <td><h3>Teacher E-mail:</h3></td> <td><h3 class="ml-3">{{$subject->user->email}}</h3></td>
                </tr>
            </table>
            <hr class="my-2">
            <div class="d-flex">
                <h3 class="mr-auto" style="font-weight: bold;">Tasks List:</h3>
            </div>
            <table class="table table-xl table-hover" style="width: 100%;">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">Name</th>
                    <th scope="col">Points</th>
                    <th scope="col">Submitted</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($subject->tasks as $task)
                        <tr>
                            <th scope="row">{{$task->id}}</th>
                            <td>
                                <a href="{{route('tasks.solutions.create',['task'=>$task])}}">
                                    {{$task->name}}
                                </a>
                            </td>
                            <td>{{$task->points}}</td>
                            @if ($task->solutions->contains('student_name',Auth::user()->name))
                                <td>Yes</td>
                            @else
                                <td>No</td>
                            @endif
                        </tr>
                  @endforeach
                </tbody>
              </table>
            <hr class="my-2">
            <h3 style="font-weight: bold;">Students List:</h3>
            <table class="table table-xl table-hover" style="width: 100%;">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">Name</th>
                    <th scope="col">E-mail</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($subject->users as $student)
                        <tr>
                            <th scope="row">{{$student->id}}</th>
                            <td>{{$student->name}}</td>
                            <td>{{$student->email}}</td>
                        </tr>
                  @endforeach
                </tbody>
              </table>

        </div>
    </div>
@endsection
