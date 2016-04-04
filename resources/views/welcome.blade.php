<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
            <link rel="stylesheet" type="text/css" href="{{asset('steam.css')}}">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
            <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

            

     
    </head>
    <body>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            @if(Auth::check())
            <div class="card hovercard">
                <div class="cardheader">

                </div>
                <div class="avatar">
                    <img alt="" src="{{Auth::user()->avatar}}">
                </div>
                <div class="info">
                    <div class="title">
                        <a target="_blank" href="http://scripteden.com/">{{Auth::user()->username}}</a>
                    </div>
                    <div class="desc">{{Auth::user()->username}}</div>
                    <div class="desc">{{Auth::user()->steamid}}</div>
                    
                    <div class="bottom">
                    <a class="btn btn-danger" href="logout">
                     <i class="fa fa-trash-o fa-lg"></i>Logout
                     </a>
                     </div>
                    @else
                    </div>                    
                    <a href="steamlogin"><img src="http://steamcommunity-a.akamaihd.net/public/images/signinthroughsteam/sits_large_border.png"></a>
                     @endif
                </div>
                <div class="bottom">
                    <a class="btn btn-primary btn-twitter btn-sm" href="https://twitter.com/webmaniac">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a class="btn btn-danger btn-sm" rel="publisher"
                       href="https://plus.google.com/+ahmshahnuralam">
                        <i class="fa fa-google-plus"></i>
                    </a>
                    <a class="btn btn-primary btn-sm" rel="publisher"
                       href="https://plus.google.com/shahnuralam">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a class="btn btn-warning btn-sm" rel="publisher" href="https://plus.google.com/shahnuralam">
                        <i class="fa fa-behance"></i>
                    </a>
                </div>
            </div>

        </div>

    </div>
</div>

        <!-- <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>
                @if(Auth::check())
                <img src="{{Auth::user()->avatar}}">
                <p>{{Auth::user()->username}}</p>
                <p>{{Auth::user()->steamid}}</p>
                <p><a href="logout">logout</a></p>
                @else
                <p><a href="steamlogin">Login</a></p>
                @endif
            </div>
        </div> -->
    </body>
</html>
