@extends('templates.dean.main',['title' => 'Dean Home'])

@section('heading')
Dean Section
@endsection
@section('content')
<div class="alert alert-danger h3 text-center timestext">
	Punjabi University New College
</div>
<div class="row text-justify">
	<div class="col-md-12">
		<div class="panel panel-primary">
			<div class="panel-heading text-uppercase"><strong>Steps To Allot letter Of Intent</strong></div>
			<div class="panel-body text-info">



				<h3 class="text-left"><strong>Step-1:- Allot Letter of Intent</strong></h3>
				<ol>
					<li>You Just need to go on View Applications Option On side menu</li>
					<li>Now you just need to Open the Said Application</li>
					<li>Click The Grant LOI button at the bottom to Approve the Application</li>
				</ol>
				<hr class="redhr" />
			</div>
			<div class="panel-heading text-uppercase"><strong>Steps For Team Selection</strong></div>
			<div class="panel-body text-info">

				<h3 class="text-left"><strong>Step-2:- Team Selection </strong></h3>
				<ol>
					<li>You need to select the Convener of the team</li>
					<li>now select the team members from the list there you can select number of members</li>
				</ol>
				<hr class="redhr" />
			</div>
		</div>
	</div>
	<div class="col-md-12">
		<div class="panel panel-primary">

		</div>
	</div>
</div>
@endsection
