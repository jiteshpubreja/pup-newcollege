<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
@include('templates.head')
<body>
    @include('templates.header')
    <div class="panel panel-primary">
        <div class="col-sm-2">
         @include('templates.clerk.sidebar')
     </div>
     <div class="panel-heading col-sm-offset-2">
        <strong>
         @yield('heading')
     </strong>
 </div>
 <div class="col-sm-10">
    <div class="panel-body text-info">
        @yield('content')  
    </div>
</div>
</div>
@include('templates.footer')
</body>
</html>
