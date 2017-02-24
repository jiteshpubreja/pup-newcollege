@extends('templates.main')
@section('heading')
First Ragistration Form
@endsection
@section('content')
<style>
				   .btn{ width:160px;}
  .btn-primary {
      box-shadow: 1px 2px 5px #000000;   
  }
  </style><div class="container"><form class="form-horizontal">
    <div class="row">
    <div class="col-sm-1" >
    <label>1</label></div>
	<div class="col-sm-6" >
	<label >College Name</label></div>
	<div class="col-sm-3">
	  <input type="Text" class="form-control" required id="clgname" name="clgname" >
       </div>
         </div>
     <br> 
     <hr> 
    <div class="row">
        <div class="col-sm-1" ><label>2</label></div>
        <div class="col-sm-6" ><label>Session(From which year to start)</label></div>
        <div class="col-sm-4" ><input type="Text" class="form-control" required name="sess" id="sess" ></div></div>
        <br> 
        <hr>
    <div class="row">
      <div class="col-sm-1" ><label>3</label></div>
        <div class="col-sm-6" ><label>Detail of classes to be started</label></div>
        <div class="col-sm-4" ><input type="Text" class="form-control" name="class" id="class" ></div>
	</div>
    <br> 
		<hr> 
         
         <div class="row">
        <div class="col-sm-1" ><label>4</label></div>
        <div class="col-sm-6" ><label>Will it be a Co-Education or Girls</label></div>
        <div class="col-sm-4" ><input type="Text" class="form-control"  name="coedu" id="coedu" ></div>
  	</div>
    <br> 
    <hr>
	
		 
         
         <div class="row">
        <div class="col-sm-1" ><label>5</label></div>
        <div class="col-sm-6" ><label>Give details of following facilities:</label><ul ><li> Railway Station </li>
				<li> Bus Stand </li>
				<li> Post office </li>
				<li> telegram office </li>
				<li> telephone of college/Principal/President of managing comittee of college/Secratory office/House number</li>
				</ul></div>
        <div class="col-sm-4" ><input type="Text" class="form-control" name="facil" id="facil" ></div>
  	</div>
    <br> 
     <hr> 
    
		      
		 
         <div class="row">
        <div class="col-sm-1" ><label>6</label></div>
        <div class="col-sm-6" ><label>Detail of available building</label><ul><li> Principal office</li>
				<li> Classes/Rooms (Counting and size)(According to UGC norms their should be space equal to 10sqft per student) </li>
				<li> Staff room </li>
				<li> Common Rooms for girls and boys </li>
				<li> Library (Size of Rooms) 
				      According to UGC Norms:<br>
					  1 Reading Room: 50" x30" <br>
					  1 Periodical Room: 30" x20" <br>
					  1 Study Room for Staff: 15" x20" <br>
				</li>
				<li> labourtries(Science)<br>
				     (According to Norms 40sqft per students space required)
			  </li>
				 <li> Another Rooms/Stores etc </li>
				 <li> Detials of water,electricity and washrooms </li>
				 <li> Another details of building </li>
			</ul></div>
        <div class="col-sm-4" ><input type="Text" class="form-control" name="building" id="building" ></div>
  	</div>
    
    <br> 
     <hr> 
	
	
		 
	
	<div class="row">
        <div class="col-sm-1" ><label>7</label></div>
        <div class="col-sm-6" ><label>Residence for principal OR
		Will managing comittee will arrange residence for principal(Within 1 km)?
		Or they will promised to do the same?</label></div>
        <div class="col-sm-4" ><input type="Text" class="form-control"  name="residence" id="residence" ></div>
  	</div>
    <br> 
     <hr> 
    
	
	
	
	<div class="row">
        <div class="col-sm-1" ><label>8</label></div>
        <div class="col-sm-6" ><label>Does college have required furniture?</label></div>
        <div class="col-sm-4" ><input type="Text" class="form-control"  name="furniture" id="furniture" ></div>
  	</div>
	
	<br> 
     <hr> 
	
    
    <div class="row">
        <div class="col-sm-1" ><label>9</label></div>
        <div class="col-sm-6" ><label>Details of Land Required for college</label><ol><li>Land required for education 2500sq.mt.</li>
		<li>For Law,Information Technology Mangement and Arts/Science Degree college Land should
		be according to following:<br>
		Inside Municipal corporation Area-  2Arcs<br>
		Inside Municipal Comittee Area   -  3Arcs<br>
		Outside Municipal Comittee Area  -  5Arcs</li>
		<li>Land Required inside Municipal Corporation and Municipal Comittee areas for girls Arts/Science Degree
			college should be 2Arcs and outside Municipal limit it should be 3Arcs </li>
		<li>Land Required for Phyisical Education college inside or outside should be 5Arcs</li>
		<li>Courses under AICTE should have land according to AICTE norms. For MBA 1Arcs, For MCA 1.5Arcs</li>
		<li>If Sociey/Trust have Land according to rules for 99years lease, then permission for opening college
			will be on this promise If during lease time lease agreement overs then due to this if admitted students
			and staff faces any problem then society/trust will be liable for the same.</li><br>
		<span class="bg-info" >NOTE: Attach a document from Tehsil for every college mentioned above the land is single piece and interest less.</span>
		</ol></div>
        <div class="col-sm-4" ><input type="Text" class="form-control"  name="land" id="land"></div>
  	</div>
    <br> 
     <hr> 
	
	
	
    
    <div class="row">
        <div class="col-sm-1" ><label>10</label></div>
        <div class="col-sm-6" ><label>Does college had submitted or will submit the amount of endorsement fund
		in the form of F.D.R. payable to Dean,College Development Council, Punjabi University,Patiala
		(Details of Endorsement Fund decided by University is in Appendix-1)</label></div>
        <div class="col-sm-4" ><input type="Text" class="form-control"  name="endorsement" id="endorsement" ></div>
  	</div>
    <br> 
     <hr> 
	
	
    <div class="row">
        <div class="col-sm-1" ><label>11</label></div>
        <div class="col-sm-6" ><label>Does college has enough resources to maintain their working position?
		    Explain with summary.</label></div>
        <div class="col-sm-4" ><input type="Text" class="form-control"  name="resources" id="resources" ></div>
  	</div>
	<br> 
     <hr> 
	

	
    <div class="row">
        <div class="col-sm-1" ><label>12</label></div>
        <div class="col-sm-6" ><label>Does bank have any other amount on the name of college?
		    Attach proofs.</label></div>
        <div class="col-sm-4" ><input type="Text" class="form-control"  name="bankamt" id="bankamt"></div>
  	</div>
    <br> 
     <hr> 
    
	
	
	
    <div class="row">
        <div class="col-sm-1" ><label>13</label></div>
        <div class="col-sm-6" ><label>Does college have provision of Rs. 25,000/- for Library Books for first year or
		    they will arrange it? and similiarly Rs. 10,000/- will be spent for the same every year?
		    1) Does college had spent any amount on books earlier ? </label></div>
        <div class="col-sm-4" ><input type="Text" class="form-control"  name="liaamt" id="liaamt" ></div>
  	</div>
    <br> 
     <hr> 
    
	
	
    <div class="row">
        <div class="col-sm-1" ><label>14</label></div>
        <div class="col-sm-6" ><label>Does college has any Registered Managing Comittee? If yes then send the list of members.
		    (For number of Members of Managing Comittee see Paragarph-3 of Application Letter.)
		    Send the copy of Registration.</label></div>
        <div class="col-sm-4" ><input type="Text" class="form-control"  name="liaamt" id="liaamt"  ></div>
  	</div>
    <br> 
     <hr> 
	
	
	
    
    <div class="row">
        <div class="col-sm-1" ><label>15</label></div>
        <div class="col-sm-6" ><label>Does college has any members earlier? Does college Managing Comittee is ready to appointee
   		    Qualified faculity and give salary scale according to UGC and University?</label></div>
        <div class="col-sm-4" ><input type="Text" class="form-control"  name="salary" id="salary" ></div>
  	</div>
    <br> 
     <hr> 
    
	
	
    <div class="row">
        <div class="col-sm-1" ><label>16</label></div>
        <div class="col-sm-6" ><label>Is college has any other college within 5mile? If yes then write the name If no then give
		the name of any other college nearby and distance from college?</label></div>
        <div class="col-sm-4" ><input type="Text" class="form-control"  name="distance" id="distance" ></div>
  	</div>
    <BR>
    <div class="row">
    <div class="col-sm-1" >&nbsp;</div>
    <div class="col-sm-6" >&nbsp;</div>
    <div class="col-sm-4 text-justify" >
    
    <button type="button" class="btn btn-primary btn-sm glyphicon glyphicon-send " > SEND</button>
    </div></div>
	
	</form></div>
	



@endsection
