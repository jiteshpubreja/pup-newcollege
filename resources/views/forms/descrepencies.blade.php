@extends('templates.main')
@section('heading')
Descrepencies
@endsection
@section('content')

<form class="form-horizontal">
    <style>
	.btn{ width:160px;}
	.btn-primary {
      box-shadow: 1px 2px 5px #000000;   
  }
		 .well{
			 padding-top:5px;
			 color:#FFF;
background-color:#036;
height:25px;

}</style>
         
		 
         
        <div class="row">
        <div class="col-lg-1" ><h4><label>S. No.</label></h4></div>
        <div class="col-lg-6" ><h4><label>Descrepencies</label></h4></div>
        <div class="col-lg-2" ><h4><label>Status</label></h4></div>
        <div class="col-lg-2" ><h4><label>Remarks</label></h4></div>
        </div>
        <br> 
        
        
        
        
       
		<div class="row">
        <div class="well well-sm">1. LAND/AREA :</div>
        
        </div>
        <div class="row">
      <div class="col-sm-1" ><label>(i)</label></div>
        <div class="col-sm-6" ><label>Education college :  2500 sqr. mtr.</label></div>
         <div class="col-sm-2" ><div class="checkbox">
  <input type="checkbox" value="">
</div></div>
        <div class="col-sm-2" ><input type="Text" class="form-control" name="class" id="class" ></div>
	</div> 
        <hr>
        
        <div class="row">
      <div class="col-sm-1" ><label>(ii)</label></div>
        <div class="col-sm-6" ><label>Law, Information Technology, Management, Arts & Science Degree College:</label>
        <ul> <li>
    Under boundary of Municipal Corporation : 2 Acres <br> (For Girls college: 2 Acres) </li>
    <li> Under boundary of Municipal Committee: 3 Acres<br>(For Girls college: 2 Acres)</li>
    <li> Outside boundary of Municipal Committee & Municipal Corporation: 5 Acres <br>(For Girls college: 3 Acres)</li>
    </ul>
    </div>
         <div class="col-sm-2" ><div class="checkbox">
  <input type="checkbox" value="">
</div></div>
        <div class="col-sm-2" ><input type="Text" class="form-control" name="class" id="class" ></div>
	</div> 
        <hr>
        
        <div class="row">
      <div class="col-sm-1" ><label>(iii)</label></div>
        <div class="col-sm-6" ><label>Physical Education College: 5 Acres</label></div>
         <div class="col-sm-2" ><div class="checkbox">
  <input type="checkbox" value="">
</div></div>
        <div class="col-sm-2" ><input type="Text" class="form-control" name="class" id="class" ></div>
	</div> 
    <br>
        <div class="row">
        <div class="well well-sm">2. INFRASTRUCTURE OF COLLEGE:</div>
        
        </div>
        
        <div class="row">
      <div class="col-sm-1" ><label>(i)</label></div>
        <div class="col-sm-6" ><label>Building Map is Approved</label></div>
         <div class="col-sm-2" ><div class="checkbox">
  <input type="checkbox" value="">
</div></div>
        <div class="col-sm-2" ><input type="Text" class="form-control" name="class" id="class" ></div>
	</div> 
        <hr>
        
        <div class="row">
      <div class="col-sm-1" ><label>(ii)</label></div>
        <div class="col-sm-6" ><label>Principal Office</label></div>
         <div class="col-sm-2" ><div class="checkbox">
  <input type="checkbox" value="">
</div></div>
        <div class="col-sm-2" ><input type="Text" class="form-control" name="class" id="class" ></div>
	</div> 
        <hr>
        
        <div class="row">
      <div class="col-sm-1" ><label>(iii)</label></div>
        <div class="col-sm-6" ><label>>No. of Classrooms and Size of Classroom according to UGC Norms(10 sqr. feet per student)</label></div>
         <div class="col-sm-2" ><div class="checkbox">
  <input type="checkbox" value="">
</div></div>
        <div class="col-sm-2" ><input type="Text" class="form-control" name="class" id="class" ></div>
	</div> 
        <hr>
        
        <div class="row">
      <div class="col-sm-1" ><label>(iv)</label></div>
        <div class="col-sm-6" ><label>Staff Room</label></div>
         <div class="col-sm-2" ><div class="checkbox">
  <input type="checkbox" value="">
</div></div>
        <div class="col-sm-2" ><input type="Text" class="form-control" name="class" id="class" ></div>
	</div> 
        <hr>
        
        <div class="row">
      <div class="col-sm-1" ><label>(v)</label></div>
        <div class="col-sm-6" ><label>Common  Room For Boys/Girls</label></div>
         <div class="col-sm-2" ><div class="checkbox">
  <input type="checkbox" value="">
</div></div>
        <div class="col-sm-2" ><input type="Text" class="form-control" name="class" id="class" ></div>
	</div> 
        <hr>
        
        <div class="row">
      <div class="col-sm-1" ><label>(vi)</label></div>
        <div class="col-sm-6" ><label>Separate Restrooms For Boys & Girls</label></div>
         <div class="col-sm-2" ><div class="checkbox">
  <input type="checkbox" value="">
</div></div>
        <div class="col-sm-2" ><input type="Text" class="form-control" name="class" id="class" ></div>
	</div> 
        <hr>
        
        <div class="row">
      <div class="col-sm-1" ><label>(vii)</label></div>
        <div class="col-sm-6" ><label>Conference Room</label></div>
         <div class="col-sm-2" ><div class="checkbox">
  <input type="checkbox" value="">
</div></div>
        <div class="col-sm-2" ><input type="Text" class="form-control" name="class" id="class" ></div>
	</div> 
        <hr>
        
        <div class="row">
      <div class="col-sm-1" ><label>(viii)</label></div>
        <div class="col-sm-6" ><label>Seminar Hall</label></div>
         <div class="col-sm-2" ><div class="checkbox">
  <input type="checkbox" value="">
</div></div>
        <div class="col-sm-2" ><input type="Text" class="form-control" name="class" id="class" ></div>
	</div> 
        <hr>
        
        <div class="row">
      <div class="col-sm-1" ><label>(ix)</label></div>
        <div class="col-sm-6" ><label>Director Room</label></div>
         <div class="col-sm-2" ><div class="checkbox">
  <input type="checkbox" value="">
</div></div>
        <div class="col-sm-2" ><input type="Text" class="form-control" name="class" id="class" ></div>
	</div> 
        <hr>
        
        <div class="row">
      <div class="col-sm-1" ><label>(x)</label></div>
        <div class="col-sm-8" ><label>Library:</label>
       
          <div class="row">
          <div class="col-sm-1" >
          </div>
          <div class="col-sm-8" >
           <ul>
           <li>Reading Room  :  50'*30'</li
           </ul>
           </div>
           <div class="col-sm-2" >
           <div class="checkbox">
          <input type="checkbox" value="">
          </div>
          </div>
          </div>
          
          <div class="row">
          <div class="col-sm-1" >
          </div>
          <div class="col-sm-8" >
           <ul>
           <li>Study Room For Staff : 15'*20'</li
           </ul>
           </div>
           <div class="col-sm-2" >
           <div class="checkbox">
          <input type="checkbox" value="">
          </div>
          </div>
          </div>
          
          <div class="row">
          <div class="col-sm-1" >
          </div>
          <div class="col-sm-8" >
           <ul>
           <li>Periodical Room : 30'*20'</li
           </ul>
           </div>
           <div class="col-sm-2" >
           <div class="checkbox">
          <input type="checkbox" value="">
          </div>
          </div>
          </div>


</div>
        <div class="col-sm-2" ><input type="Text" class="form-control" name="class" id="class" ></div>
	</div> 
        <hr>
        
        <div class="row">
      <div class="col-sm-1" ><label>(xi)</label></div>
        <div class="col-sm-6" ><label>Agriculture Lab :</label></div>
         <div class="col-sm-2" ><div class="checkbox">
  <input type="checkbox" value="">
</div></div>
        <div class="col-sm-2" ><input type="Text" class="form-control" name="class" id="class" ></div>
	</div> 
        <hr>
        
        <div class="row">
      <div class="col-sm-1" ><label>(xii)</label></div>
        <div class="col-sm-8" ><label>Computer Labs </label>
        <div class="row">
          <div class="col-sm-1" >
          </div>
          <div class="col-sm-8" >
           <ul>
           <li>Licensed Software</li
           </ul>
           </div>
           <div class="col-sm-2" >
           <div class="checkbox">
          <input type="checkbox" value="">
          </div>
          </div>
          </div>
          <div class="row">
          <div class="col-sm-1" >
          </div>
          <div class="col-sm-8" >
           <ul>
           <li>False Ceiling</li
           </ul>
           </div>
           <div class="col-sm-2" >
           <div class="checkbox">
          <input type="checkbox" value="">
          </div>
          </div>
          </div>
          <div class="row">
          <div class="col-sm-1" >
          </div>
          <div class="col-sm-8" >
           <ul>
           <li>Air Conditioner</li
           </ul>
           </div>
           <div class="col-sm-2" >
           <div class="checkbox">
          <input type="checkbox" value="">
          </div>
          </div>
          </div>
          <div class="row">
          <div class="col-sm-1" >
          </div>
          <div class="col-sm-8" >
           <ul>
           <li>Internet Connection</li
           </ul>
           </div>
           <div class="col-sm-2" >
           <div class="checkbox">
          <input type="checkbox" value="">
          </div>
          </div>
          </div>
          <div class="row">
          <div class="col-sm-1" >
          </div>
          <div class="col-sm-8" >
           <ul>
           <li>Network Connectivity</li
           </ul>
           </div>
           <div class="col-sm-2" >
           <div class="checkbox">
          <input type="checkbox" value="">
          </div>
          </div>
          </div>
          <div class="row">
          <div class="col-sm-1" >
          </div>
          <div class="col-sm-8" >
           <ul>
           <li>LED Projector</li
           </ul>
           </div>
           <div class="col-sm-2" >
           <div class="checkbox">
          <input type="checkbox" value="">
          </div>
          </div>
          </div>
          <div class="row">
          <div class="col-sm-1" >
          </div>
          <div class="col-sm-8" >
           <ul>
           <li>Printer</li
           </ul>
           </div>
           <div class="col-sm-2" >
           <div class="checkbox">
          <input type="checkbox" value="">
          </div>
          </div>
          </div>
          <div class="row">
          <div class="col-sm-1" >
          </div>
          <div class="col-sm-8" >
           <ul>
           <li>Fire Safety Measures</li
           </ul>
           </div>
           <div class="col-sm-2" >
           <div class="checkbox">
          <input type="checkbox" value="">
          </div>
          </div>
          </div>
        </div>
        <div class="col-sm-2" ><input type="Text" class="form-control" name="class" id="class" ></div>
	</div> 
        <hr>
        
        <div class="row">
      <div class="col-sm-1" ><label>(xiii)</label></div>
        <div class="col-sm-6" ><label>Science Lab : 40 Sqr. feet per Student :</label></div>
         <div class="col-sm-2" ><div class="checkbox">
  <input type="checkbox" value="">
</div></div>
        <div class="col-sm-2" ><input type="Text" class="form-control" name="class" id="class" ></div>
	</div> 
        <hr>
        <div class="row">
      <div class="col-sm-1" ><label>(xiv)</label></div>
        <div class="col-sm-6" ><label>Hostel for Students</label></div>
         <div class="col-sm-2" ><div class="checkbox">
  <input type="checkbox" value="">
</div></div>
        <div class="col-sm-2" ><input type="Text" class="form-control" name="class" id="class" ></div>
	</div> 
        <hr>
        <div class="row">
      <div class="col-sm-1" ><label>(xv)</label></div>
        <div class="col-sm-6" ><label>Residence of Principle</label></div>
         <div class="col-sm-2" ><div class="checkbox">
  <input type="checkbox" value="">
</div></div>
        <div class="col-sm-2" ><input type="Text" class="form-control" name="class" id="class" ></div>
	</div> 
    <br>
       <div class="row">
        <div class="well well-sm">3.Other Descrepencies:</div>
        
        </div> 
       
        
        <div class="row">
      <div class="col-sm-1" ><label>(3)</label></div>
        <div class="col-sm-6" ><label>Required No. of Teachers for requested courses are appointed</label></div>
         <div class="col-sm-2" ><div class="checkbox">
  <input type="checkbox" value="">
</div></div>
        <div class="col-sm-2" ><input type="Text" class="form-control" name="class" id="class" ></div>
	</div> 
        <hr><div class="row">
      <div class="col-sm-1" ><label>(4)</label></div>
        <div class="col-sm-6" ><label>Selection of Teaching Staff according to
Rules and Norms of Punjabi University Patiala</label></div>
         <div class="col-sm-2" ><div class="checkbox">
  <input type="checkbox" value="">
</div></div>
        <div class="col-sm-2" ><input type="Text" class="form-control" name="class" id="class" ></div>
	</div> 
        <hr><div class="row">
      <div class="col-sm-1" ><label>(5)</label></div>
        <div class="col-sm-6" ><label>Regular Principal</label></div>
         <div class="col-sm-2" ><div class="checkbox">
  <input type="checkbox" value="">
</div></div>
        <div class="col-sm-2" ><input type="Text" class="form-control" name="class" id="class" ></div>
	</div> 
        <hr><div class="row">
      <div class="col-sm-1" ><label>(6)</label></div>
        <div class="col-sm-6" ><label>Selection of Principal according to UGC or University Norms</label></div>
         <div class="col-sm-2" ><div class="checkbox">
  <input type="checkbox" value="">
</div></div>
        <div class="col-sm-2" ><input type="Text" class="form-control" name="class" id="class" ></div>
	</div> 
        <hr>
        <div class="row">
      <div class="col-sm-1" ><label>(7)</label></div>
        <div class="col-sm-6" ><label>Tution fees and other charges according to University rules</label></div>
         <div class="col-sm-2" ><div class="checkbox">
  <input type="checkbox" value="">
</div></div>
        <div class="col-sm-2" ><input type="Text" class="form-control" name="class" id="class" ></div>
	</div> 
        <hr>
        <div class="row">
      <div class="col-sm-1" ><label>(8)</label></div>
        <div class="col-sm-6" ><label>Facilities for physical challenged persons</label></div>
         <div class="col-sm-2" ><div class="checkbox">
  <input type="checkbox" value="">
</div></div>
        <div class="col-sm-2" ><input type="Text" class="form-control" name="class" id="class" ></div>
	</div> 
        <hr>
        <div class="row">
      <div class="col-sm-1" ><label>(9)</label></div>
        <div class="col-sm-6" ><label>Permanent electricity connection</label></div>
         <div class="col-sm-2" ><div class="checkbox">
  <input type="checkbox" value="">
</div></div>
        <div class="col-sm-2" ><input type="Text" class="form-control" name="class" id="class" ></div>
	</div> 
        <hr>
        <div class="row">
      <div class="col-sm-1" ><label>(10)</label></div>
        <div class="col-sm-6" ><label>Books in Library for existing and new requested courses</label></div>
         <div class="col-sm-2" ><div class="checkbox">
  <input type="checkbox" value="">
</div></div>
        <div class="col-sm-2" ><input type="Text" class="form-control" name="class" id="class" ></div>
	</div> 
       <br>
       
        <div class="row">
        <div class="well well-sm">4.Approval :</div>
        
        </div>
        <br>
       
       
        
        <div class="row">
      <div class="col-sm-1" ><label>(i)</label></div>
        <div class="col-sm-6" ><label>AICTE(For Technical and Management courses</label></div>
         <div class="col-sm-2" ><div class="checkbox">
  <input type="checkbox" value="">
</div></div>
        <div class="col-sm-2" ><input type="Text" class="form-control" name="class" id="class" ></div>
	</div> 
        <hr>
        <div class="row">
      <div class="col-sm-1" ><label>(ii)</label></div>
        <div class="col-sm-6" ><label>NCTE(For Education courses)</label></div>
         <div class="col-sm-2" ><div class="checkbox">
         
  <input type="checkbox" value="">
</div></div>

        <div class="col-sm-2" ><input type="Text" class="form-control" name="class" id="class" ></div>
	</div>
    <br>
    <div class="row">
    <div class="col-sm-1" >&nbsp;</div>
    <div class="col-sm-6" >&nbsp;</div>
     <div class="col-sm-2" >&nbsp;</div>
    <div class="col-sm-2 text-justify" >
    
    <button type="button" class="btn btn-primary btn-sm glyphicon glyphicon-send " > SEND</button>
    </div></div>
         </form>
@endsection