@extends('templates.main',['title' => '5000-2'])
@section('heading')
Draft Details Submition
@endsection
@section('content')
<form class="form-horizontal">
    <div class="row">
      <div class="col-sm-1" >
        <label>1</label>
      </div>
      <div class="col-sm-6" >
        <label >President Name Of Institute</label>
      </div>
      <div class="col-sm-4">
       <input type="Text" class="form-control" required id="clgname" name="clgname" >
     </div>
   </div>
   <br>
   <hr>
    <div class="row">
      <div class="col-sm-1" >
        <label>2</label>
      </div>
      <div class="col-sm-6" >
        <label >Purpose Of Draft</label>
      </div>
      <div class="col-sm-4">
       <input type="Text" class="form-control" required id="clgname" name="clgname" >
     </div>
   </div>
   <br>
   <hr>
    <div class="row">
      <div class="col-sm-1" >
        <label>3</label>
      </div>
      <div class="col-sm-6" >
        <label >Amount</label>
      </div>
      <div class="col-sm-4">
       <input type="Text" class="form-control" required id="clgname" name="clgname" >
     </div>
   </div>
   <br>
   <hr>
    <div class="row">
      <div class="col-sm-1" >
        <label>4</label>
      </div>
      <div class="col-sm-6" >
        <label >Draft Number</label>
      </div>
      <div class="col-sm-4">
       <input type="Text" class="form-control" required id="clgname" name="clgname" >
     </div>
   </div>
   <br>
   <hr>
       <div class="row">
      <div class="col-sm-1" >
        <label>5</label>
      </div>
      <div class="col-sm-6" >
        <label >Bank Name</label>
      </div>
      <div class="col-sm-4">
       <input type="Text" class="form-control" required id="clgname" name="clgname" >
     </div>
   </div>
   <br>
   <hr>
    <div class="row">
      <div class="col-sm-1" >
        <label>6</label>
      </div>
      <div class="col-sm-6" >
        <label >Date (DD,MM,YYYY)</label>
      </div>
      <div class="col-sm-4">
       <input type="Text" class="form-control" required id="clgname" name="clgname" >
     </div>
   </div>
   <br>
<div class="row">
      <div class="col-sm-1" >
        <label>7</label>
      </div>
      <div class="col-sm-6" >
        <label >Draft Image Upload</label>
      </div>
      <div class="col-sm-4">
       {!! Form::open(array('url'=>'/handleUpload', 'files'=>true)) !!}

          {!! Form::file('file') !!}

          {!! Form::token() !!}

          {!! Form::submit('Upload') !!}
     </div>
   </div>
   <br>
   <div class="row">
<div class="col-sm-1" >&nbsp;</div>
<div class="col-sm-6" >&nbsp;</div>
<div class="col-sm-4 text-justify" >

<button type="button" class="btn btn-primary btn-sm glyphicon glyphicon-send " > SAVE</button>
</div></div>

  </form>














</form>


@endsection