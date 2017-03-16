@extends('templates.main',['title' => 'About'])


@section('heading')
 About Punjabi University: @yield('aboutheading')	
@endsection

@section('content')


  <div class="row">
  <div class="col-md-3">
      @include('abouttabs')
    </div>
    <div class="col-md-9">
     @yield('aboutcontent')
    </div>
   <div class="clearfix visible-lg"></div>
  </div>

@endsection
