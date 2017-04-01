@extends('templates.dean.main',['title' => 'View Supporting Documents'])
@section('heading')
View Supporting Documents
@endsection
@section('content')
@if(!empty($form))
@if(!empty($files))
<?php $sr = 1; ?>
@if(array_key_exists("landdetails", $files))
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
		<a class="btn btn-primary btn-xs" href="{{ $files['landdetails'] }}" >Download</a>
	</div>
</div>
<br>
@endif
@if(array_key_exists("buildingdetails", $files))
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
		<a class="btn btn-primary btn-xs" href="{{ $files['buildingdetails'] }}" >Download</a>
	</div>
</div>
<br>
@endif
@if(array_key_exists("bankproofs", $files))
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
		<a class="btn btn-primary btn-xs" href="{{ $files['bankproofs'] }}" >Download</a>
	</div>
</div>
<br>
@endif

@if(array_key_exists("permissionletters", $files))
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
		<a class="btn btn-primary btn-xs" href="{{ $files['permissionletters'] }}" >Download</a>
	</div>
</div>
<br>
@endif

@if(array_key_exists("comitteelist", $files))
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
		<a class="btn btn-primary btn-xs" href="{{ $files['comitteelist'] }}" >Download</a>
	</div>
</div>
<br>
@endif
@if(array_key_exists("tehsildocuments", $files))
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
		<a class="btn btn-primary btn-xs" href="{{ $files['tehsildocuments'] }}" >Download</a>
	</div>
</div>
<br/>
@endif
@else
<div class="alert alert-info">
	<p>
		No Supporting Documents Found.
	</p>
</div>
@endif
@else

<div class="alert alert-info">
	<p>
		Invalid Request.
	</p>
</div>

@endif
@endsection




