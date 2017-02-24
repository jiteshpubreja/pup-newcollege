@extends('templates.main')
@section('heading')
Team Selection Form
@endsection
@section('content')
<div class="panel-heading"><strong><!-- InstanceBeginEditable name="content_head" -->Faculty Selection for Inspection<!-- InstanceEndEditable --></strong></div>
                <div class="panel-body text-info">

                   <!-- InstanceBeginEditable name="content_body" -->
                   <style>
				
				
				   
  .btn-success {
      box-shadow: 1px 2px 5px #000000;
	     
  }</style> 
                   
  <div class="container">                 
<form class="form-horizontal" action='' method='post' id="myForm">
<div class="form-group">
    <label class="control-label col-sm-2" for="refid1">Ref Id:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name='refid' id='refid1'  >
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="inspno1">Inspection No:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name='inspno' id='inspno1' >
    </div>
  </div>
  <div class="row">
   <div class=" col-sm-offset-2 col-sm-2"> 
    <label >
            <input type="checkbox" name="Subject1" value="Sub1" id="Subject1_0">
            Subject 1</label>
            </div>
            <div class="col-sm-2"> 
            <label >
            <input type="checkbox" name="Subject1" value="Sub1" id="Subject1_0">
            Subject 2</label>
            <br>
            </div>
            </div>
            <div class="row"><div class="col-sm-10">&nbsp;</div></div>
             <div class="row">
    <label class="control-label col-sm-2" >Team member selection</label>
    <div class="col-sm-10">
      <label for="select">Fecuality1:</label>
          <select name="select" id="select">
          </select>
          	<label for="select2">Fecuality2:</label>
            <select name="select2" id="select2">
            </select>	
            <label for="select3">Fecuality3:</label>
            <select name="select3" id="select3">
            </select>
            <label for="select4">Fecuality4:</label>
            <select name="select4" id="select4">
            </select>
            <label for="select5">Fecuality5:</label>
            <select name="select5" id="select5">
            </select>
    </div>
    </div>
    
            
   <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success" value="Registration">Submit</button>
    </div>
  </div>
  
  </form></div><!-- InstanceEndEditable -->
              </div>

@endsection