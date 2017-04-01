@extends('templates.clerk.main',['title' => 'Clerk Home'])

@section('heading')
Clerk Section
@endsection
@section('content')
<div class="alert alert-danger h3 text-center timestext">
	Punjabi University New College
</div>
<div class="row text-justify">
	<div class="col-md-12">
		<div class="panel panel-primary">
			<div class="panel-heading text-uppercase"><strong>Steps To Add New Discrepancy</strong></div>
			<div class="panel-body text-info">


				
				<h3  class="text-uppercase"><strong>Step-1:- To new discrepancy and there category</strong></h3>
				<ol>
					<li>First add Discrepancy following there category</li>
					<li>Now You can add new category of the discrepancy </li>
				</ol>

				<hr class="redhr" />
			</div>
			<div class="panel-heading text-uppercase"><strong>Steps To Add New course </strong></div>
			<div class="panel-body text-info">

				<h3 class="text-uppercase"><strong>Step-1:- New Courses with their fee structure</strong> </h3>
				<ol class="ulstyle">
					<li>You can add new courses with their fee per batch</li>
				</ol>
				<hr class="redhr" /> 

			</div>
			<div class="panel-heading text-uppercase"><strong>Steps To see the inspection Status</strong></div>
			<div class="panel-body text-info">
				<h3  class="text-uppercase"><strong>Step-1:- To find Out Application status and it's approval</strong></h3>
				<ol>
					<li>If the form is not submitted the it will show pending status</li>
					<li>If the form is submitted and the college sent request for the inspection it shows submitted status </li>
					<li>There is an Option to forward the inspection request to Dean  </li>
				</ol>
				<hr class="redhr" />
				<h3 class="text-uppercase"><strong>Step-2:- To Application Rejection</strong> </h3>
				<ol class="ulstyle">
					<li>Its Up to you, is the data according to need, if not, reject the application</li>
				</ol>
				<hr class="redhr" />
			</div>
		</div>
	</div>
</div>
@endsection
