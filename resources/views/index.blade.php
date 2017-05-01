@extends('templates.main',['title' => 'Home'])
@section('heading')
Punjabi University, Patiala
@endsection
@section('content')
<div class="row">
  <div class="col-sm-3 ">
    <div class="container ">
      <div class="navbar-header ">
        <div class="navbar-inverse hidden-lg">
          <div class="brand hidden-lg">
            <span style="color:white;">External Links</span>         
            <button type="button" class="navbar-toggle " data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
        </div>
        <div class="navbar-collapse collapse" id="myNavbar">
          <ul class="nav nav-pills nav-stacked" id="myNavbar">
            <li><a href="http://www.punjabiuniversity.ac.in" target="_blank">Punjabi University Main Site </a></li>
            <li><a href="http://www.pupadmissions.ac.in" target="_blank">Pup Admissions </a></li>
            <li><a href="http://www.punjabipedia.org" target="_blank">Punjabi Encyclopedia</a></li>
            <li><a href="http://www.punjabiuniversity.ac.in/pbiuniweb/neighbourhoodcampusesnew.html" target="_blank">Neighbourhood Campuses</a></li>
            <li><a href="{{asset('list_of_affiliated_colleges.pdf')}}" target="_blank">Affiliated Colleges</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-7 col-md-offset-1">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
        <li data-target="#myCarousel" data-slide-to="5"></li>
        <li data-target="#myCarousel" data-slide-to="6"></li>
        <li data-target="#myCarousel" data-slide-to="7"></li>
      </ol>
      <!-- Wrapper for slides -->
      <div class="carousel-inner" >
        <div class="item active">
          <img src="images/dcs.jpg" style="width:100%;">
        </div>
        <div class="item">
          <img src="images/lotus.jpg" style="width:100%;">
        </div>
        <div class="item">
          <img src="images/21122.jpg" style="width:100%;">
        </div>
        <div class="item">
          <img src="images/21121.jpg" style="width:100%;">
        </div>
        <div class="item">
          <img src="images/bg1.jpg" style="width:100%;">
        </div>
        <div class="item">
          <img src="images/pb1.jpg" style="width:100%;">
        </div>
        <div class="item">
          <img src="images/library.jpg" style="width:100%;">
        </div>
        <div class="item">
          <img src="images/26117.jpg" style="width:100%;">
        </div>
      </div>
      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  <!-- <table width="70%" height="40%" border="0" align="right" cellpadding="0" cellspacing="0">
      <tr>
        <td width="44%" align="right" valign="top" >
          <div class="polaroid"><img style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 1), 0 6px 20px 0 rgba(0, 0, 0, 1);" name="SLIDESIMG" border="0" src="{{('images/dcs.jpg')}}"width="700px" height="400px"
            style="filter:progid:DXImageTransform.Microsoft.Fade()" alt="">
            <div class="row">
              <div class="col-sm-1">&nbsp;</div>
              <div class="col-sm-10">
                <br>
                <p>Established on April 30,1962 in the erstwhile princely state of patiala with the main objective of furthering the cause of Punjabi language, art and literature, Punjabi University has since evolved into the largest University in the state.Spread over 600 acres of land, its 500 teachers are imparting instruction and guidance to nearly 9,000 students in a multi-faceted, multi-pronged and multi-faculty environment comprising 65 Teaching and Research Departments on its campus, five Regional Centres, Six Neighbourhood Campuses and 166 colleges affiliated to it.</p>
              </div> 
              <div class="col-sm-1">&nbsp;</div>
            </div>
          </div>
          <SCRIPT type="text/javascript">
            
            if (document.images) {
              SLIDES.image = document.images.SLIDESIMG;
// Create a function to ramp up the image opacity in Mozilla
var fadein_opacity = 0.04;
var fadein_img = SLIDES.image;
function fadein(opacity) {
  if (typeof opacity != 'undefined') { fadein_opacity = opacity; }
  if (fadein_opacity < 0.99 && fadein_img && fadein_img.style &&
    typeof fadein_img.style.MozOpacity != 'undefined') {
    fadein_opacity += .05;
  fadein_img.style.MozOpacity = fadein_opacity;
  setTimeout("fadein()", 50);
}
}
// Tell the slideshow to call our function whenever the slide is changed
SLIDES.post_update_hook = function() { fadein(0.04); }
}
</SCRIPT> </td>
</tr>
</table> -->
</div>
</div>
<div class="row">
  <div class="col-sm-3">&nbsp;</div>
  <div class="col-sm-7 col-md-offset-1 ">
    <br>
    <p>Established on April 30,1962 in the erstwhile princely state of patiala with the main objective of furthering the cause of Punjabi language, art and literature, Punjabi University has since evolved into the largest University in the state.Spread over 600 acres of land, its 500 teachers are imparting instruction and guidance to nearly 9,000 students in a multi-faceted, multi-pronged and multi-faculty environment comprising 65 Teaching and Research Departments on its campus, five Regional Centres, Six Neighbourhood Campuses and 166 colleges affiliated to it.</p>
  </div> 
  
</div>
@endsection
