@extends('layouts.base')
@section('content')
    <div class="container mt-5">
        <h1 class="mb-5">
            Your Subjects:
        </h1>
        <table class="table table-xl table-hover" style="width: 100%;">
            <thead>
              <tr>
                <th scope="col"></th>
                <th scope="col">Subject Name</th>
                <th scope="col">Description</th>
                <th scope="col">Subject Code</th>
                <th scope="col">Credit Value</th>
                <th scope="col">Teacher's name</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($subjects as $subject)
              <tr>
                <th scope="row">{{$subject->id}}</th>
                <td><a href="#">{{$subject->name}}</a></td>
                <td>{{$subject->description}}</td>
                <td>{{$subject->code}}</td>
                <td>{{$subject->credit_value}}</td>
                <td>{{$subject->user->name}}</td>
                <td><button class="btn btn-warning btn-sm">Leave</button></td>
              </tr>
              @endforeach
                <td></td>
                <td><button class="btn btn-primary" href="#">Take new subject</button></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>
    </div>
@endsection
