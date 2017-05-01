@extends('templates.admin.main',['title' => 'Admin Home'])

@section('heading')
Admin Section
@endsection
@section('content')
<div class="alert alert-danger h3 text-center timestext">
	Punjabi University New College
</div>
<div class="row text-justify">
	<div class="col-md-12">
		<div class="panel panel-primary">
			<div class="panel-heading text-uppercase"><strong>Steps To Add Different Users</strong></div>
			<div class="panel-body text-info">
				<h3 class="text-left"><strong>Step-1:- NEW USER ALLOTMENT PERMISSIONS</strong></h3>
				<ol>
					<li>Teacher</li>
					<li>AR </li>
					<li>Dean<br/></li>
					<li>Admin</li>
				</ol>
				<hr class="redhr" />
				<h3 class="text-uppercase"><strong>Step-2:- NEW DEPARTMENT ALLOTMENT PERMISSIONS</strong> </h3>
				<ol class="ulstyle">
					<li>In this you can add departments of <b>TEACHER</b>, <b>AR</b> AND <b>DEAN </b></li>
				</ol>
				<hr class="redhr" />
			</div>
		</div>
	</div>
</div>
@endsection
