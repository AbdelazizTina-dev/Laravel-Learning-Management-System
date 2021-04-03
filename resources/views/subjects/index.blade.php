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
              </tr>
            </thead>
            <tbody>
              @foreach ($subjects as $subject)
                    <tr>
                        <th scope="row" style="width: 5%">{{$subject->id}}</th>
                        <td style="width: 20%"><a href="{{route('subjects.show',['subject'=>$subject->id])}}">{{$subject->name}}</a></td>
                        <td style="width: 40%">{{$subject->description}}</td>
                        <td style="width: 20%">{{$subject->code}}</td>
                        <td style="width: 15%">{{$subject->credit_value}}</td>
                    </tr>
              @endforeach

              <tr>
                <td></td>
                <td><button class="btn btn-primary" href="#">Add new subject</button></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>
    </div>
@endsection
