@extends('templates.main',['title' => 'Service Unavailable']))

@section('heading')
Service Unavailable

@endsection

@section('content')

<div class="row text-center">
        <div class="col-md-12">
            <div class="error-template">
                <h1>
                    Oops!</h1>
                <h2>
                    Website Down</h2>
                <div class="error-details">
                    Sorry, Website is currently in maintenance mode, Kindly Check Back Later!
                </div>
            </div>
        </div>
    </div>

@endsection