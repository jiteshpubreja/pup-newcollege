@extends('templates.main',['title' => '404 Not Found']))

@section('heading')
Page not found

@endsection

@section('content')

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

@endsection