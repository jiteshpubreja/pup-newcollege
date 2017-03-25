@extends('templates.main',['title' => 'Draft Details'])
@section('heading')
Draft Details Submition
@endsection
@section('content')
<form class="form-horizontal">
{!! Form::open() !!}
  <div class="form-group{{ $errors->has('president_Name') ? ' has-error' : '' }}">
    <div class="col-sm-1" >
      <label>1</label>
    </div>
    <div class="col-sm-6" >
      <label >President Name Of Institute</label>
    </div>
    <div class="col-sm-4">
     <input type="Text" class="form-control" required id="president_Name" name="president_Name" >
     @if ($errors->has('president_Name'))
     <span class="help-block">
      <strong>{{ $errors->first('president_Name') }}</strong>
    </span>
    @endif
  </div>
</div>
<br>
<hr>
<div class="form-group{{ $errors->has('purpose_of_draft') ? ' has-error' : '' }}">
  <div class="col-sm-1" >
    <label>2</label>
  </div>
  <div class="col-sm-6" >
    <label >Purpose Of Draft</label>
  </div>
  <div class="col-sm-4">
   <input type="Text" class="form-control" required id="purpose_of_draft" name="purpose_of_draft" >
   @if ($errors->has('purpose_of_draft'))
   <span class="help-block">
    <strong>{{ $errors->first('purpose_of_draft') }}</strong>
  </span>
  @endif
</div>
</div>
<br>
<hr>
<div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">
  <div class="col-sm-1" >
    <label>3</label>
  </div>
  <div class="col-sm-6" >
    <label >Amount</label>
  </div>
  <div class="col-sm-4">
   <input type="Text" class="form-control" required id="amount" name="amount" >
   @if ($errors->has('amount'))
   <span class="help-block">
    <strong>{{ $errors->first('amount') }}</strong>
  </span>
  @endif
</div>
</div>
<br>
<hr>
<div class="form-group{{ $errors->has('draft_number') ? ' has-error' : '' }}">
  <div class="col-sm-1" >
    <label>4</label>
  </div>
  <div class="col-sm-6" >
    <label >Draft Number</label>
  </div>
  <div class="col-sm-4">
   <input type="Text" class="form-control" required id="draft_number" name="draft_number" >
   @if ($errors->has('draft_number'))
   <span class="help-block">
    <strong>{{ $errors->first('draft_number') }}</strong>
  </span>
  @endif
</div>
</div>
<br>
<hr>
<div class="form-group{{ $errors->has('bank_name') ? ' has-error' : '' }}">
  <div class="col-sm-1" >
    <label>5</label>
  </div>
  <div class="col-sm-6" >
    <label >Bank Name</label>
  </div>
  <div class="col-sm-4">
   <input type="Text" class="form-control" required id="bank_name" name="bank_name" >
   @if ($errors->has('bank_name'))
   <span class="help-block">
    <strong>{{ $errors->first('bank_name') }}</strong>
  </span>
  @endif
</div>
</div>
<br>
<hr>
<div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
  <div class="col-sm-1" >
    <label>6</label>
  </div>
  <div class="col-sm-6" >
    <label >Date (DD,MM,YYYY)</label>
  </div>
  <div class="col-sm-4">
   <input type="Text" class="form-control" required id="date" name="date" >
   @if ($errors->has('date'))
   <span class="help-block">
    <strong>{{ $errors->first('date') }}</strong>
  </span>
  @endif
</div>
</div>
<br>
<hr>
<div class="form-group{{ $errors->has('draft_image_upload') ? ' has-error' : '' }}">
  <div class="col-sm-1" >
    <label>6</label>
  </div>
  <div class="col-sm-6" >
    <label >Draft Image Upload</label>
  </div>
  <div class="col-sm-4">
    <!-- {!! Form::open(array('url'=>'/handleUpload', 'files'=>true)) !!} -->

    {!! Form::file('file') !!}

    <!-- {!! Form::token() !!} -->

    <!-- {!! Form::submit('Upload') !!} -->
    @if ($errors->has('draft_image_upload'))
    <span class="help-block">
      <strong>{{ $errors->first('draft_image_upload') }}</strong>
    </span>
    @endif
  </div>
</div>
<br>
<hr>

<div class="form-group">
  <div class="col-sm-1" >&nbsp;</div>
  <div class="col-sm-6" >&nbsp;</div>
  <div class="col-sm-4 text-justify" >

    <button type="submit" class="btn btn-primary" >Submit</button>
  </div>
</div>

{!! Form::close() !!}













</form>


@endsection