@extends('templates.main',['title' => 'controllersection'])

@section('heading')
<?php
$title="clerk";
?>
<ul class="nav nav-tabs">
                <li class="navbar-btn" style="font-size:18px;">Clerk Section</li><li style="width:20px;">&nbsp;</li>

    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li class="dropdown">
    	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu 1<span class="caret"></span></a>
    <ul class="dropdown-menu">
    	<li><a data-toggle="tab" href="#menu1">Menu 3</a></li>
    	<li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
    	<li><a data-toggle="tab" href="#menu3">Menu 3</a></li>
    </ul>
  </li>
    	<li><a data-toggle="tab" href="#menu2">Menu 2</a></li>

    	<li><a data-toggle="tab" href="#menu3">Menu 3</a></li>

  </ul>




@endsection

@section('content')
<h2>Dynamic Tabs</h2>
  <p>To make the tabs toggleable, add the data-toggle="tab" attribute to each link. Then add a .tab-pane class with a unique ID for every tab and wrap them inside a div element with class .tab-content.</p>


  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>HOME</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>

@endsection
