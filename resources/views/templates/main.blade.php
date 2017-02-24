
<!DOCTYPE html>

<html lang="{{ config('app.locale') }}">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>@yield('heading') - {{ config('app.name', '') }}</title>

<link href="{{ asset('favicon.ico') }}" rel="shortcut icon" type="image/x-icon" />

<link href="{{ asset('css/font-awesome.min.css') }}" media="all" rel="stylesheet" type="text/css" />
<link href="{{ asset('css/Site.css') }}" media="all" rel="stylesheet" type="text/css" />
<link href="{{ asset('css/bootstrap.css') }}" media="all" rel="stylesheet" type="text/css" />
<link href="{{ asset('css/bootstrap-select.css') }}" media="all" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="{{ asset('js/jquery-1.10.2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/respond.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/WebFormsJs.JS') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap-select.min.js') }}"></script>



</head>
<body>

@include('templates.header')
        

    <h3 class="alert alert-info text-center text-capitalize timestext"><strong>Welcome to Punjabi University Patiala New college Registration Year 2017-18</strong>  </h3>
    <div class="row text-center">
        <div class="row text-justify">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <strong>
                           @yield('heading')
                        </strong>
                    </div>
                    <div class="panel-body text-info">
                        <div class="container">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <hr class="hidden-print"/>
        <footer class="hidden-print">
            <p>&copy; 2017 - Punjabi University, Patiala</p>
        </footer>
    </div>
   
</body>
</html>
