<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>404 Not Found - {{ config('app.name', '') }}</title>

<link href="{{ asset('favicon.ico') }}" rel="shortcut icon" type="image/x-icon" />

<link href="{{ asset('css/Site.css') }}" media="all" rel="stylesheet" type="text/css" />
<link href="{{ asset('css/font-awesome.min.css') }}" media="all" rel="stylesheet" type="text/css" />
<link href="{{ asset('css/bootstrap.css') }}" media="all" rel="stylesheet" type="text/css" />
<link href="{{ asset('css/bootstrap-select.css') }}" media="all" rel="stylesheet" type="text/css" />
<link href="{{ asset('css/sidebar.css') }}" media="all" rel="stylesheet" type="text/css" />
<link href="{{ asset('css/extra.css') }}" media="all" rel="stylesheet" type="text/css" />


<script type="text/javascript" src="{{ asset('js/jquery-1.10.2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/respond.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/WebFormsJs.JS') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap-select.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/slideshow.js') }}"></script>

<style type="text/css">
        div:empty {
            display: none;
        }
</style>

</head>
<body>



<div class="navbar navbar-inverse navbar-fixed-top hidden-print">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button> 
            <ul class="nav navbar-nav">
              <li>
                  <a href="/" class="navbar-brand">PUP New College</a>
              </li>
          </ul>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li><a href="{{ route('home') }}"><span class="glyphicon glyphicon-home"></span> Home</a></li>
            <li><a href="{{ route('applynewcollege') }}"><span class="glyphicon glyphicon-plus-sign"></span> Apply New College</a></li>
            <li><a href="{{ route('aboutus') }}" >About Us</a></li>
            <li><a href="{{ route('contactus') }}" >Contact Us</a></li>
        </ul>

</div>
</div>
</div>



<div class="container body-content hidden-print">

  <div class="row" style="background-color: #4b6c9e;">
    <div class="col-sm-6 text-left">
        <img src="{{ asset('images/logo.png') }}" alt="{{ config('app.name', '') }}" class="img-responsive">
    </div>
    <div class="col-sm-6 text-right top-right" style="color:white; padding-top:5px; padding-right:15px;" >Helpline (Mon to Sat - 09:30 AM to 06:00 PM)<br />
    </div>
</div>


</div>
<div class="container table-bordered .hidden-print" style="color: #317eac">

    <h3 class="alert alert-info text-center text-capitalize timestext"><strong>Welcome to Punjabi University Patiala New college Registration Year</strong>  </h3>
    <div class="row text-center">
        <div class="row text-justify">
            <div class="col-md-12">








    <div class="panel panel-primary">
        <div class="panel-heading">
            <strong>
               Page not found
           </strong>
       </div>
       <div class="panel-body text-info">
       <div class="row text-center">
    <div class="col-md-12">
        <div class="error-template">
            <h1>
                Oops!</h1>
                <h2>
                    404 Not Found</h2>
                    <div class="error-details">
                        Sorry, an error has occured, Requested page not found!
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<hr class="hidden-print"/>
<footer class="hidden-print">
    <p style="text-align: center;">&copy; 2017 - Punjabi University, Patiala</p>
</footer>
</div>

</body>
</html>