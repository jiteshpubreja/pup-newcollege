@extends('templates.main',['title' => 'Apply New College'])

@section('heading')
Instructions for applying New Colleges.
@endsection

@section('content')

<div class="alert alert-danger h3 text-center timestext">
	New College application-Form for the courses offered by Punjabi University,Patiala
</div>

<div class="row text-center">

	<a href="{{ route('register') }}" class="btn btn-danger btn-lg" target="_blank"><i class="glyphicon glyphicon-hand-right"></i> Click here to Register new college</a><br/><br/>
</div>
<br />
<br />


<div id="MainContent_panelNotices" class="panel panel-default">
	<table class="table  table-responsive table-hover table-bordered text-left timestext h3" cellspacing="0" rules="all" border="1" id="MainContent_ListNotices" style="border-collapse:collapse;">
		<tr>
			<th class="bg-success" scope="col">Notice</th>
		</tr>
		<tr>
			<td>
				Applications are only accepted online and upload required documents </a>
			</td>
		</tr>
	</table>
</div>

<div class="row text-justify">
	<div class="col-md-12">
		<div class="panel panel-primary">
			<div class="panel-heading text-uppercase"><strong>ONLINE APPLICATION PROCEDURE</strong></div>
			<div class="panel-body text-info">


				
				<h3 class="text-left"><strong>Step-1:- REGISTRATION PROCEDURE</strong></h3>
				<ol>
					<li>Open {{ url('/') }}</li>
					<li>Fill the Registration Form Online - kindly fill your particulars as Name,e-mail address,Mobile No., landlines number, etc. </li>
					<li>
						Verification mail will be sent to your email id.
					</li>
					<li>
						Activate your account.
					</li>
					<li>Make payment using DD( Demand Draft ).<br />
					</li>
					<li>This completes your registration process subject to payment confirmation. To fill your application form please refer to step 2.</li>

				</ol>
				<hr class="redhr" />
				<h3 class="text-uppercase"><strong>Step-2:- Fill Online Application Form</strong> </h3>
				<ol class="ulstyle">
					<li>Open {{ url('/') }} and open the Application Form by logging on <span
						style="font-weight: bold">Login button</span>
						<br />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="font-weight: bold">or</span><br />
						Proceed from Registration Step. </li>
						<li>Fill the Application Form Online and provide information regarding your land details,requirements for new college etc.</li>
						<li>After completion of the Application Form click on<span style="font-weight: bold"> SAVE </span>button.</li>
					</ol>
					<hr class="redhr" />
					<h3 class="text-uppercase"><strong>Step-3 Edit your Application Form</strong> </h3>
					<ol class="ulstyle">
						<li>The registered college can edit information filled by them in the Application Form for limited period using User id and password issued to them. </li>
						<li>Once the Application Fee payment status is confirmed you will be issued User Id and Password. The intimation about this will be made through e-mail alerts.</li>
					</ol>
					<hr class="redhr" />
					<h3 class="text-uppercase">
						<strong>Step-4 Print the Form</strong>
					</h3>
					<div class="ulstyle">
						Registered college whose payment has been confirmed and who have successfully
						completed step 2, can print their application forms for their personal record, using
						User Id and Password.
					</div>
				</div>
			</div>
		</div>
	</div>

	@endsection