@extends('layouts.base')
@section('content')
    <div class="container">
        <div class="jumbotron">
            <div class="d-flex ">
              <h1 class="display-4 mr-auto">Task details:</h1>
              <i class="fas fa-edit fa-4x mr-3" style="color: orange;" data-toggle="tooltip" data-placement="top" title="Edit Task"></i>
            </div>
            <hr class="my-2">
            <table class="table-borderless">
                <tr>
                    <td><h3>Name:</h3></td> <td><h3>{{$task->name}}</h3></td>
                </tr>
                <tr>
                    <td valign="top"><h3>Description:</h3></td>
                    <td valign="top">
                        <p class="lead text-justify" style="font-size: 24px;">
                            {{$task->description}}
                        </p>
                    </td>
                </tr>
                <tr>
                     <td style="width: 50%;"><h3>Points:</h3></td> <td><h3>{{$task->points}}</h3></td>
                </tr>
                <tr>
                     <td style="width: 50%;"><h3>Number of submitted solutions:</h3></td> <td><h3>static</h3></td>
                </tr>
                <tr>
                     <td style="width: 50%;"><h3>Number of evaluated solutions:</h3></td> <td><h3>static</h3></td>
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
                  <tr>
                    <th scope="row">1</th>
                    <td>02/03/2021</td>
                    <td>Tina Abdelaziz</td>
                    <td>tinaabdelaziz8@gmail.com</td>
                    <td>/</td>
                    <td>/</td>
                    <td><button class="btn btn-primary">Evaluate</button></td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>22/03/2021</td>
                    <td>Random Dude</td>
                    <td>darude@gmail.com</td>
                    <td>/</td>
                    <td>/</td>
                    <td><button class="btn btn-primary">Evaluate</button></td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>02/03/2021</td>
                    <td>Broskie Joe</td>
                    <td>joemama@gmail.com</td>
                    <td>/</td>
                    <td>/</td>
                    <td><button class="btn btn-primary">Evaluate</button></td>
                  </tr>
                </tbody>
              </table>
        </div>
    </div>

  </body>
@endsection
