<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="Content/Site.css" rel="stylesheet"/>
    <link href="http://pupadmissions.ac.in/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link href="Content/bootstrap.css" rel="stylesheet" />
    <link href="Content/font-awesome-4.6.3/css/font-awesome.min.css" rel="stylesheet" />
    
    <script src="Scripts/bootstrap.min.js"></script>
    <script src="Scripts/jquery-1.10.2.min.js"></script>
    <script src="Scripts/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="Scripts/bootstrap.js" type="text/javascript"></script>
    <script src="Scripts/respond.js" type="text/javascript"></script>
    <script src="bundles/WebFormsJs.JS" type="text/javascript"></script>
    <script src="Scripts/bootstrap-select.js" type="text/javascript"></script>
    <link href="Content/bootstrap-select.css" rel="stylesheet"/> -->
<link href="http://pupadmissions.ac.in/favicon.ico" rel="shortcut icon" type="image/x-icon" />

<link href="{{ asset('css/bootstrap.min.css') }}" media="all" rel="stylesheet" type="text/css" />
<link href="{{ asset('css/font-awesome.min.css') }}" media="all" rel="stylesheet" type="text/css" />
<link href="{{ asset('css/Site.css') }}" media="all" rel="stylesheet" type="text/css" />
<link href="{{ asset('css/bootstrap.css') }}" media="all" rel="stylesheet" type="text/css" />
<link href="{{ asset('css/bootstrap-select.css') }}" media="all" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-1.10.2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-1.10.2.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/respond.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/WebFormsJs.JS') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap-select.min.js') }}"></script>
</head>
<body>
    @include('layouts.header')
    <h3 class="alert alert-info text-center text-capitalize timestext">
        <strong>Welcome to Punjabi University Patiala New college RegistrationYear 2017-18</strong>
    </h3>
    <div class="row text-center">
        <div class="row text-justify">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        @yield('heading')
                    </div>
                    <div class="panel-body text-info">
                        @yield('body')
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-justify">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading text-uppercase">
                        <strong>Additional</strong>
                    </div>
                    <div class="panel-body text-info">
                    </div>
                </div>
            </div>
        </div>
        <script src="Scripts/backtotop.js"></script>
    </div>
    <hr class="hidden-print"/>
    <footer class="hidden-print">
        <p>&copy; 2017 - Punjabi University, Patiala</p>
    </footer>
    </body>
    </html>
