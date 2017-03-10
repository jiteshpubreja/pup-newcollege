<div class="navbar navbar-inverse navbar-fixed-top hidden-print">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button> 
            <ul class="nav navbar-nav"
        <li>     
      <div class="a" > <img src="{{ asset('images/mini-logo.png') }}" width="40px" height="40px" class="img-responsive"></div>
      </li>
      <li>
  <a href="/" class="navbar-brand">PUP New College</a>
  </li>
  </ul>
  
 
    <script type="text/javascript">


    $('div.a').hide();
$(window).scroll(function() {
    if ($(window).scrollTop() > 500) {
        $('div.a').show();
    }
    else if ($('div.a').is(':visible')) {
        $('div.a').hide();
    }
});
//         var $toTop.fadeOut() = $('div.a');
// $(window).scroll(function() {
 
    
     
//         if ($(window).scrollTop() > 50) {
//           $toTop.fadeIn();
//         } else if ($toTop.is(':visible')) {
//           $toTop.fadeOut();
//         }

   

// });



    </script>

        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{ route('home') }}"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                <li class="dropdown nav"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Application Form <b class="caret"></b></a>
                    <ul class="dropdown-menu" >
                        <li><a href="{{ route('inspectionform') }}"><span class="glyphicon glyphicon-plus-sign"></span> Inspection Request</a></li>
                        <li><a href="{{ route('5000') }}"><span class="glyphicon glyphicon-plus-sign"></span> New College</a></li>
                        <li><a href="{{ route('descrepencies') }}"><span class="glyphicon glyphicon-plus-sign"></span>Descrepencies</a></li>
                        <li><a href="{{ route('teamselection') }}"><span class="glyphicon glyphicon-plus-sign"></span>Team Selection</a></li>
                        <li><a href="{{ route('headselection') }}"><span class="glyphicon glyphicon-plus-sign"></span>Head Selection</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('aboutus') }}" >About Us</a></li>
                <li><a href="{{ route('contactus') }}" >Contact Us</a></li>
            </ul>
            <button class="btn btn-danger navbar-btn"><a href="{{ route('adminsignup') }}" style="color:#FFF; text-decoration:none;">Admin Signup</a></button>



            <ul class="nav navbar-nav navbar-right">
            @if (Auth::guest())    
                <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
                <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
            @else
                
                   <li><p class="navbar-text">Signed in as {{ Auth::user()->fname." ".Auth::user()->lname }}</p></li>
                   <li>
                        <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>

        @endif
               </ul>

        </div>
    </div>
</div>



   <div class="container body-content hidden-print">

      <div class="row" style="background-color: #4b6c9e;">
        <div class="col-sm-6 text-left">
            <img src="{{ asset('images/logo.png') }}" class="img-responsive">
        </div>
        <div class="col-sm-6 text-right top-right" style="color:white; padding-top:5px; padding-right:15px;" >Helpline (Mon to Sat - 09:30 AM to 06:00 PM)<br />
        </div>
    </div>


</div>

<div class="container table-bordered .hidden-print" style="color: #317eac">

    <style type="text/css">
        div:empty {
            display: none;
        }
    </style>
    <script type="text/javascript">
        $("li").each(function () {

            if (!$.trim($(this).html())) {
                $(this).hide();
            }

        });
    </script>