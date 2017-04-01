@extends('templates.college.main',['title' => 'Upload Supporting Documents'])
@section('heading')
Upload Supporting Documents
@endsection
@section('content')
@if(!empty($form))
@if(!empty($files))
<form method="POST" action="{{route('collegeuploaddocs')}}" class="form-horizontal" role="form" enctype="multipart/form-data">


    {!! csrf_field() !!}

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>
            {{ $message }}
        </p>
    </div>
    @elseif ($message = Session::get('error'))
    <div class="alert alert-danger">
        <p>
            {{ $message }}
        </p>
    </div>
    @else
    <div class="alert alert-info">
        <p>
            The Documents should be in .pdf form. All related Documents Should Be Merged into one PDF file
        </p>
    </div>
    @endif
    <?php $sr = 1; $count = 0; ?>
    <br>
    <br>
    <div class="row">
        <div class="col-sm-1" >
            <label>
                ({{ $sr++ }})
            </label>
        </div>
        <div class="col-sm-6" >
            <label>
                Land Details
            </label>
        </div>
        <div class="col-sm-4">
@if(!array_key_exists("landdetails", $files))
    
          <input type="file" accept="application/pdf" id="landdetails" name="landdetails"/>
          <br />
          <?php $count++; ?>
          @else
          <a class="btn btn-primary btn-xs" href="{{ $files['landdetails'] }}" >Download</a>
  @endif
      </div>
  </div>
  <br>
    
  <div class="row">
    <div class="col-sm-1" >
        <label>
                ({{ $sr++ }})
        </label>
    </div>
    <div class="col-sm-6" >
        <label>
            Building Details
        </label>
    </div>
    <div class="col-sm-4">
@if(!array_key_exists("buildingdetails", $files))
        <input type="file" accept="application/pdf" id="buildingdetails" name="buildingdetails"/>
        <br />
          <?php $count++; ?>
  @else
          <a class="btn btn-primary btn-xs" href="{{ $files['buildingdetails'] }}" >Download</a>
  @endif
    </div>
</div>
<br>
   
@if($form->bank_balance)
<div class="row">
    <div class="col-sm-1" >
        <label>
                ({{ $sr++ }})
        </label>
    </div>
    <div class="col-sm-6" >
        <label>
            Attach proofs. If bank have any other amount on the name of college?
        </label>
    </div>
    <div class="col-sm-4">
 @if(!array_key_exists("bankproofs", $files))
        <input type="file" accept="application/pdf" id="bankproofs" name="bankproofs"/>
        <br />
          <?php $count++; ?>
  @else
          <a class="btn btn-primary btn-xs" href="{{ $files['bankproofs'] }}" >Download</a>
  @endif
    </div>
</div>
<br>
@endif
    
<div class="row">
    <div class="col-sm-1" >
        <label>
                ({{ $sr++ }})
        </label>
    </div>
    <div class="col-sm-6" >
        <label>
            Permisstions from : (NCTE, AICTE, PB.GOVT.etc) upload the permission letter
        </label>
    </div>
    <div class="col-sm-4">
@if(!array_key_exists("permissionletters", $files))
        <input type="file" accept="application/pdf" id="permissionletters" name="permissionletters"/>
        <br />
          <?php $count++; ?>
  @else
          <a class="btn btn-primary btn-xs" href="{{ $files['permissionletters'] }}" >Download</a>
  @endif
    </div>
</div>
<br>
    
@if($form->register_committee)
<div class="row">
    <div class="col-sm-1" >
        <label>
                ({{ $sr++ }})
        </label>
    </div>
    <div class="col-sm-6" >
        <label>
            The list of members. (For number of Members of Managing Comittee see Paragarph-3 of Application Letter.) Send the copy of Registration.
        </label>
    </div>
    <div class="col-sm-4">
@if(!array_key_exists("comitteelist", $files))
        <input type="file" accept="application/pdf" id="comitteelist" name="comitteelist"/>
        <br />
          <?php $count++; ?>
   @else
          <a class="btn btn-primary btn-xs" href="{{ $files['comitteelist'] }}" >Download</a>
  @endif
    </div>
</div>
<br>
@endif
<div class="row">
    <div class="col-sm-1" >
        <label>
                ({{ $sr++ }})
        </label>
    </div>
    <div class="col-sm-6" >
        <label>
            Attach a document from Tehsil for every college mentioned above the land is single piece and interest less.
        </label>
    </div>
    <div class="col-sm-4">
    @if(!array_key_exists("tehsildocuments", $files))
        <input type="file" accept="application/pdf" id="tehsildocuments" name="tehsildocuments"/>
        <br />
          <?php $count++; ?>
  @else
          <a class="btn btn-primary btn-xs" href="{{ $files['tehsildocuments'] }}" >Download</a>
  @endif
    </div>
</div>
<br/>
    @if(!($count==0))
<div class="row">
    <div class="col-sm-1" >
        &nbsp;
    </div>
    <div class="col-sm-6" >
        &nbsp;
    </div>
    <div class="col-sm-4 text-justify" >
        <button type="submit" class="btn btn-primary btn-sm glyphicon glyphicon-send " > SAVE
        </button>
    </div>
</div>
@else
<div class="alert alert-info">
        <p>
            All Files Uploaded Sucessfully
        </p>
    </div>
  @endif
</form>
@else
<form method="POST" action="{{route('collegeuploaddocs')}}" class="form-horizontal custm-form" role="form" enctype="multipart/form-data">


    {!! csrf_field() !!}

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>
            {{ $message }}
        </p>
    </div>
    @elseif ($message = Session::get('error'))
    <div class="alert alert-danger">
        <p>
            {{ $message }}
        </p>
    </div>
    @else
    <div class="alert alert-info">
        <p>
            The Documents should be in .pdf form. All related Documents Should Be Merged into one PDF file
        </p>
    </div>
    @endif
    <?php $sr = 1; ?>
    <br>
    <br>
    <div class="row">
        <div class="col-sm-1" >
            <label>
                ({{ $sr++ }})
            </label>
        </div>
        <div class="col-sm-6" >
            <label>
                Land Details
            </label>
        </div>
        <div class="col-sm-4">

          <input type="file" accept="application/pdf" id="landdetails" name="landdetails"/>
          <br />
      </div>
  </div>
  <br>
  <div class="row">
    <div class="col-sm-1" >
        <label>
                ({{ $sr++ }})
        </label>
    </div>
    <div class="col-sm-6" >
        <label>
            Building Details
        </label>
    </div>
    <div class="col-sm-4">

        <input type="file" accept="application/pdf" id="buildingdetails" name="buildingdetails"/>
        <br />
    </div>
</div>
<br>
@if($form->bank_balance)
<div class="row">
    <div class="col-sm-1" >
        <label>
                ({{ $sr++ }})
        </label>
    </div>
    <div class="col-sm-6" >
        <label>
            Attach proofs. If bank have any other amount on the name of college?
        </label>
    </div>
    <div class="col-sm-4">

        <input type="file" accept="application/pdf" id="bankproofs" name="bankproofs"/>
        <br />
    </div>
</div>
<br>
@endif
<div class="row">
    <div class="col-sm-1" >
        <label>
                ({{ $sr++ }})
        </label>
    </div>
    <div class="col-sm-6" >
        <label>
            Permisstions from : (NCTE, AICTE, PB.GOVT.etc) upload the permission letter
        </label>
    </div>
    <div class="col-sm-4">

        <input type="file" accept="application/pdf" id="permissionletters" name="permissionletters"/>
        <br />
    </div>
</div>
<br>
@if($form->register_committee)
<div class="row">
    <div class="col-sm-1" >
        <label>
                ({{ $sr++ }})
        </label>
    </div>
    <div class="col-sm-6" >
        <label>
            The list of members. (For number of Members of Managing Comittee see Paragarph-3 of Application Letter.) Send the copy of Registration.
        </label>
    </div>
    <div class="col-sm-4">

        <input type="file" accept="application/pdf" id="comitteelist" name="comitteelist"/>
        <br />
    </div>
</div>
<br>
@endif
<div class="row">
    <div class="col-sm-1" >
        <label>
                ({{ $sr++ }})
        </label>
    </div>
    <div class="col-sm-6" >
        <label>
            Attach a document from Tehsil for every college mentioned above the land is single piece and interest less.
        </label>
    </div>
    <div class="col-sm-4">
        <input type="file" accept="application/pdf" id="tehsildocuments" name="tehsildocuments"/>
        <br />
    </div>
</div>
<br/>
<div class="row">
    <div class="col-sm-1" >
        &nbsp;
    </div>
    <div class="col-sm-6" >
        &nbsp;
    </div>
    <div class="col-sm-4 text-justify" >
        <button type="submit" class="btn btn-primary btn-sm glyphicon glyphicon-send " > SAVE
        </button>
    </div>
</div>

</form>
@endif
@else
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>
        {{ $message }}
    </p>
</div>
@else
<div class="alert alert-info">
    <p>
        You Need To Submit Your Application Form First.
    </p>
</div>
@endif

@endif



@endsection