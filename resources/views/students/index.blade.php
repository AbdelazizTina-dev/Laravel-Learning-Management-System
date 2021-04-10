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
                <th scope="row" style="width: 2%">{{$subject->id}}</th>
                <td style="width: 20%"><a href="#">{{$subject->name}}</a></td>
                <td style="width: 30%">{{$subject->description}}</td>
                <td style="width: 15%">{{$subject->code}}</td>
                <td style="width: 13%">{{$subject->credit_value}}</td>
                <td style="width: 15%">{{$subject->user->name}}</td>
                <td style="width: 5%">
                    <a href="{{route('students.leave',['subject'=>$subject])}}">
                        <button class="btn btn-warning btn-sm">Leave</button>
                    </a>
                </td>
              </tr>
              @endforeach
                <td></td>
                <td>
                    <a href="{{route('students.take')}}">
                    <button class="btn btn-primary">Take new subject</button>
                    </a>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>
    </div>
@endsection
