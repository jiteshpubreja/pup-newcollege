@extends('templates.clerk.main',['title' => 'AR Home'])

@section('heading')
AR Section
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


				
				<h3  class="text-uppercase"><strong>Step-1:- To new discrepancy and their category</strong></h3>
				<ol>
					<li>First add Discrepancy Category</li>
					<li>Now You can add new discrepancy in the category </li>
				</ol>

				<hr class="redhr" />
			</div>
			<div class="panel-heading text-uppercase"><strong>Steps To see the Application Status</strong></div>
			<div class="panel-body text-info">
				<h3  class="text-uppercase"><strong>Step-1:- To find Out Application status and it's approval</strong></h3>
				<ol>
					<li>If the form is not submitted the it will show pending status</li>
					<li>If the form is submitted it shows the form </li>
					<li>There is an Option to forward the Application to Dean  </li>
				</ol>
				<hr class="redhr" />
				<h3 class="text-uppercase"><strong>Step-2:- To Application Rejection</strong> </h3>
				<ol class="ulstyle">
					<li>Its Up to you, is the data according to need, if not, reject the application</li>
				</ol>
				<hr class="redhr" />
			</div>
			<div class="panel-heading text-uppercase"><strong>Steps To see the Inspection Status </strong></div>
			<div class="panel-body text-info">

				<h3 class="text-uppercase"><strong>Step-1:- Inspection Request</strong> </h3>
				<ol>
					<li>If the form is submitted and the college sent request for the inspection it shows in Inspection Requests </li>
					<li>There is an Option to forward the Inspection Request to Dean  </li>
				</ol>
				<hr class="redhr" /> 
				<h3 class="text-uppercase"><strong>Step-2:- Inspection Report</strong> </h3>
				<ol>
					<li>If the Inspection has been carried out and the Report has been submitted, It will show up in View Inspections Section </li>
					<li>There is an Option to forward the Inspection to Dean  </li>
				</ol>
				<hr class="redhr" /> 

			</div>
		</div>
	</div>
</div>
@endsection
