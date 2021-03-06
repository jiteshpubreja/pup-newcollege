<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
@include('templates.head')
<body leftmargin="0" onLoad="SLIDES.play();">
    @include('templates.header')
    <div class="panel panel-primary">
        <div class="panel-heading">
            <strong>
               @yield('heading')
           </strong>
       </div>
       <div class="panel-body text-info">
        @yield('content')
    </div>
</div>
@include('templates.footer')
</body>
</html>
