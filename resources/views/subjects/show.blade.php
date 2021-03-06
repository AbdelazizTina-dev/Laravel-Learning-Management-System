@extends('layouts.base')
@section('content')
    <div class="container">
        <div class="jumbotron">
            <div class="d-flex ">
              <h1 class="display-4 mr-auto">Subject details:</h1>
              <a href="{{route('subjects.edit',['subject'=>$subject])}}" class="pt-1">
                <i class="fas fa-edit fa-4x mr-3" style="color: orange;" data-toggle="tooltip" data-placement="top" title="Edit Subject"></i>
              </a>
              <form action="{{route('subjects.destroy',['subject'=>$subject])}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn" style="background-color:transparent">
                <i class="fas fa-trash-alt fa-4x" style="color: red;" data-toggle="tooltip" data-placement="top" title="Delete Subject"></i>
                </button>
              </form>
            </div>
            <hr class="my-2">
            <table class="table-borderless">
                <tr>
                    <td style="width: 30%;"><h3>Name:</h3></td> <td><h3>{{$subject->name}}</h3></td>
                </tr>
                <tr>
                    <td valign="top" style="width: 30%;"><h3>Description:</h3></td>
                    <td valign="top" style="width: 70%;">
                        <div>
                            <p class="lead text-justify" style="font-size: 24px;">
                            {{$subject->description}}
                            </p>
                        </div>
                    </td>
                </tr>
                <tr>
                     <td style="width: 30%;"><h3>Code:</h3></td> <td><h3>{{$subject->code}}</h3></td>
                </tr>
                <tr>
                     <td style="width: 30%;"><h3>Credit value:</h3></td> <td><h3>{{$subject->credit_value}}</h3></td>
                </tr>
                <tr>
                     <td style="width: 30%;"><h3 class="pr-5">Date of creation:</h3></td> <td><h3>{{$subject->created_at}}</h3></td>
                </tr>
                <tr>
                     <td style="width: 30%;"><h3>Last Modified:</h3></td> <td><h3>{{$subject->updated_at}}</h3></td>
                </tr>
            </table>
            <hr class="my-2">
            <div class="d-flex">
                <h3 class="mr-auto" style="font-weight: bold;">Tasks List:</h3>
                <a href="{{route('subjects.tasks.create',['subject'=>$subject])}}">
                    <i class="far fa-plus-square fa-2x" style="color: green;" data-toggle="tooltip" data-placement="top" title="Add new task"></i>
                </a>
            </div>
            <table class="table table-xl table-hover" style="width: 100%;">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">Name</th>
                    <th scope="col">Points</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($subject->tasks as $task)
                    <tr>
                        <th scope="row">{{$task->id}}</th>
                        <td><a href="{{route('tasks.show',['task'=>$task])}}">{{$task->name}}</a></td>
                        <td>{{$task->points}}</td>
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
