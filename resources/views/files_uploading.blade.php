@extends('templates.main',['title' => '5000-2'])
@section('heading')
Files Uploading
@endsection
@section('content')
{!! Form::open(array('route'=>'uploadfiles', 'files'=>true)) !!}
<span class="bg-info" >NOTE: THE DOCUMENTS SHOULD BE IN .pdf OR .jpeg(should be clear) FORM </span>
<br>
<br>
<div class="row">
      <div class="col-sm-1" >
        <label>1</label>
      </div>
      <div class="col-sm-6" >
        <label >Land Details</label>
      </div>
      <div class="col-sm-4">

          {!! Form::file('file1') !!}
     </div>
   </div>
   <br>
   <div class="row">
      <div class="col-sm-1" >
        <label>2</label>
      </div>
      <div class="col-sm-6" >
        <label >Building Details</label>
      </div>
      <div class="col-sm-4">

          {!! Form::file('file2') !!}
     </div>
   </div>
   <br>
   <div class="row">
      <div class="col-sm-1" >
        <label>3</label>
      </div>
      <div class="col-sm-6" >
        <label >any other amount on the name of college? Attach proofs.</label>
      </div>
      <div class="col-sm-4">

          {!! Form::file('file3') !!}
     </div>
   </div>
   <br>
   <div class="row">
      <div class="col-sm-1" >
        <label>4</label>
      </div>
      <div class="col-sm-6" >
        <label >Required Permisstions from : (NCTE, AICTE, PB.GOVT.etc) upload the permission letter</label>
      </div>
      <div class="col-sm-4">

          {!! Form::file('file4') !!}
     </div>
   </div>
   <br>
   <div class="row">
      <div class="col-sm-1" >
        <label>5</label>
      </div>
      <div class="col-sm-6" >
        <label >The list of members. (For number of Members of Managing Comittee see Paragarph-3 of Application Letter.) Send the copy of Registration.</label>
      </div>
      <div class="col-sm-4">

          {!! Form::file('file5') !!}
     </div>
   </div>
   <br>
    <div class="row">
      <div class="col-sm-1" >
        <label>6</label>
      </div>
      <div class="col-sm-6" >
        <label >Attach a document from Tehsil for every college mentioned above the land is single piece and interest less.</label>
      </div>
      <div class="col-sm-4">

          {!! Form::file('file6') !!}

     </div>
   </div>
   <br>
   <div class="row">
<div class="col-sm-1" >&nbsp;</div>
<div class="col-sm-6" >&nbsp;</div>
<div class="col-sm-4 text-justify" >

<button type="submit" class="btn btn-primary btn-sm glyphicon glyphicon-send " > SAVE</button>
</div></div>

{!! Form::close() !!}





@endsection