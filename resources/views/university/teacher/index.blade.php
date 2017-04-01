@extends('templates.teacher.main',['title' => 'Teacher Home'])

@section('heading')
Teacher Section
@endsection
@section('content')
<div class="alert alert-danger h3 text-center timestext">
	Punjabi University New College
</div>
<div class="row text-justify">
	<div class="col-md-12">
		<div class="panel panel-primary">
		<div class="panel-heading text-uppercase"><strong>Steps to Upload Inspection</strong></div>
			<div class="panel-body text-info">
				<ol>
					<li>You need to select the inspection report</li>
					<li>Fill all the required data<br/></li>
				</ol>
				<hr class="redhr" />
			</div>
		</div>
	</div>
</div>
@endsection
