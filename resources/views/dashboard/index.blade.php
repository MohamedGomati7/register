<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
    <meta charset="utf-8">
    <title>mawjaProduction</title>
</head>

<body>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

    <!-- navbar -->
    <nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Mawja Production</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/dashboard">
                        <i class="fa fa-home"></i>
                        Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa fa-bell">
                            <span class="badge badge-info">11</span>
                        </i>
                        new applications
                    </a>
                </li> -->
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0 mr-3" type="submit">Search</button>
            </form>
            <form id="logout-form" action="{{ route('adminlogout') }}" method="POST" class="form-inline my-2 my-lg-0">
              @csrf
                <button class="btn btn-outline-info my-2 my-sm-0" type="submit" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">log out</button>
            </form>
        </div>
    </nav>

    <!-- navbar ends -->

    <!-- list starts -->
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>all casting applications</h4>
                    </div>
                    <div class="gaadiex-list">
                      @foreach($cvs as $cv)
                        <div class="gaadiex-list-item"><img class="float-right gaadiex-list-item-img m-3" src="{{ url($cv->image) }}" alt="List user">
                            <div class="gaadiex-list-item-text text-right">
                                <h3><a href="/view/{{$cv->id}}">{{$cv->name}}</a></h3>
                                <h4>{{$cv->email}}</h4>
                                <p>{{$cv->talent}}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="block-27 mt-5 pagination justify-content-center">
      {{ $cvs-> links() }}
    </div>

    <!-- list ends -->
</body>

</html>
