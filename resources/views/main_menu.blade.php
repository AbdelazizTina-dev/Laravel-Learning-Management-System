<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/united/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/364016e95d.js" crossorigin="anonymous"></script>
    <title>Learning Management System</title>

    <style>
        .vl {
          border-left: 6px solid black;
          height: 300px;
          position: absolute;
          left: 50%;
          margin-left: -3px;
          margin-top: 300px;
          top: 0;
        }
        h1 {
            font-size: 48px;
            color:white;
            -webkit-text-stroke-width: 1px;
            -webkit-text-stroke-color: black;
        }
    </style>
  </head>
  <body background="https://wallpaperaccess.com/full/1912160.jpg" style="background-size: cover;">
      <nav class="navbar navbar-expand-sm navbar-dark" style="background-color:coral;">
          <a class="navbar-brand" href="{{route('main')}}">Learning Management System</a>
          <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
              aria-expanded="false" aria-label="Toggle navigation"></button>
          <div class="collapse navbar-collapse" id="collapsibleNavId">
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                  <li class="nav-item active">
                      <a class="nav-link" href="{{route('contact')}}">Contact</a>
                  </li>
              </ul>
          </div>

          @guest
                <a  href="{{ route('login') }}">
                    <button type="button" class="btn btn-info navbar-btn mx-1">Login</button>
                </a>
                <a  href="{{ route('register') }}">
                    <button type="button" class="btn btn-info navbar-btn mx-1">Register</button>
                </a>
          @else
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-info navbar-btn mx-1">Logout</button>
                </form>
          @endguest
    </nav>

    <div class="d-flex justify-content-center mt-5">
        <h1 class="display-4">Welcome to Abdelaziz's LMS!!</h1>
    </div>
    <div class="d-flex justify-content-center" style="margin-top: 50px;">
        <div class="container" style="margin-left: 250px">
            <h1>Teachers are able to:</h1>
            <h1>
            <ul>
                <li>Create,Edit and Delete Subjects</li>
                <li>Create new Tasks</li>
                <li>Observe and Evaluate Solutions</li>
                <li>and more ...</li>
            </ul>
            <h1>
        </div>

        <div class="container" style="margin-left: 150px" >
            <h1>Students are able to:</h1>
            <h1>
            <ul>
                <li>Take Subjects</li>
                <li>Leave Subjects</li>
                <li>Submit Tasks' solutions</li>
                <li>and more ...</li>
            </ul>
            <h1>
        </div>
    </div>

</body>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script>
  $(function () {
  $('[data-toggle="tooltip"]').tooltip()})
</script>
</html>
