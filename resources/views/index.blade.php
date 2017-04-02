@extends('templates.main',['title' => 'Home'])

@section('heading')
Punjabi University, Patiala
@endsection
@section('content')

<div class="row">
<div class="col-sm-4 ">
<ul class="nav nav-pills nav-stacked">
    <li><a href="http://www.punjabiuniversity.ac.in" target="_blank">Punjabi University Main Site </a></li>
    <li><a href="http://www.pupadmissions.ac.in" target="_blank">Pup Admissions </a></li>
    <li><a href="http://www.punjabipedia.org" target="_blank">Punjabi Encyclopedia</a></li>
    <li><a href="http://www.punjabiuniversity.ac.in/pbiuniweb/neighbourhoodcampusesnew.html" target="_blank">Neighbourhood Campuses</a></li>
    <li><a href="{{asset('list_of_affiliated_colleges.pdf')}}" target="_blank">Affiliated Colleges</a></li>
    
    
  </ul>
</div>
<div class="col-sm-6 col-md-offset-1">

<table width="700px" height="400px" border="0" align="right" cellpadding="0" cellspacing="0">
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

<!--

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


//-->

              </SCRIPT>	</td>
  </tr>
</table>
</div>
</div>





@endsection
