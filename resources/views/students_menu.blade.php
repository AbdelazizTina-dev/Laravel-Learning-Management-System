@extends('layouts.base')
@section('content')
    <div class="container mt-5">
        <h1>
            Welcome Student!!
        </h1>
        <div class="d-flex justify-content-center mt-5">
        <div class="card ml-5" style="width: 18rem;">
            <img class="card-img-top" style="width: 100%; height: 40vh; object-fit: contain;" src="https://sas-production-uploads.s3.eu-west-2.amazonaws.com/article_main_img/tool/large_313101385.png" alt="Card image cap">
            <div class="card-body">
              <a href="{{route('students.index')}}" class="btn btn-primary">My Subjects</a>
            </div>
          </div>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" style="width: 100%; height: 40vh; object-fit: contain;" src="https://hackernoon.com/hn-images/1*sxezHl8zFZiZYTg9kc81JQ.png" alt="Card image cap">
            <div class="card-body">
                <a href="{{route('students.take')}}" class="btn btn-primary">Take New Subject</a>
           </div>
        </div>
        </div>
    </div>

@endsection
