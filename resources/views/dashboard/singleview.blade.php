<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <title></title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Profile id {{$cv->id}}</h4>
                </div>
                <div class="panel-body">
                    <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8">
                        <div class="container text-right">
                            <h2>{{$cv->name}}</h2>
                        </div>
                        <hr>
                        <ul class="container details text-right" style="list-style-type: none;">
                            <li>
                                <p>{{$cv->address}}<span class="glyphicon glyphicon-map-marker one" style="width:50px;"></span></p>
                            </li>
                            <li>
                                <p>{{$cv->email}}<span class="glyphicon glyphicon-envelope one" style="width:50px;"></span></p>
                            </li>
                            <li>
                                <p>{{$cv->phoneNumber}}<span class="glyphicon glyphicon-earphone one" style="width:50px;"></span></p>
                            </li>
                            <li>
                                <p>{{$cv->birthday}}<span class="glyphicon glyphicon-calendar one" style="width:50px;"></span></p>
                            </li>
                        </ul>
                        <hr>
                        <div class="container text-right">
                            <p>{{$cv->talent}}</p>
                        </div>
                        <hr>
                        <hr>
                        <div class="container text-right">
                            <p>{{$cv->accounts}}</p>
                        </div>
                        <hr>
                        <div class="col-sm-5 col-xs-6 tital ">{{$cv->created_at->toDateString()}} : تاريخ التقديم</div>
                    </div>
                    <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                        <img alt="User Pic" src="{{ url($cv->image) }}" id="profile-image1" class="img-responsive" style=" max-width:100%; height:auto;">
                    </div>
                </div>
            </div>
          </div>
</body>
</html>
