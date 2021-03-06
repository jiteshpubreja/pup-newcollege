@extends('templates.teacher.main',['title' => 'Inspection Message'])

@section('heading')
Inspection Message
@endsection
@section('content')
@if(!empty($assignment))
@if(!empty($assignment->schedule))
<div class="alert alert-info">
	<p>
		You have Scheduled The Inspection for <strong>{{ $assignment->college->form->college_name }}</strong> on <strong>{{ $assignment->schedule->date->toFormattedDateString() }}</strong>.
		<br>
		The Inspection Submission Portal Will Open On <strong>{{ $assignment->schedule->date->toFormattedDateString() }}</strong> at <strong>{{ $assignment->schedule->date->format('h A') }}</strong>.
		<br>
		Current Time Remaining <strong>{{ $assignment->schedule->date->diffForHumans() }}</strong>.
	</p>
</div>
@else
<div class="alert alert-info">
	<p>
		You Need To Schedule Your Inspection Date First.
	</p>
</div>
@endif
<div class="col-md-12" style="text-align: center;"> 
	<a class="btn btn-primary" href="{{ route('teacherviewapplication') }}">View Application</a>
</div>
<br>
&nbsp;
<br>
@if($assignment->members->count())
<hr class="redhr">
<div class="row text-justify">
	<div class="col-md-12">
		<div class="panel panel-primary">
			<div class="panel-heading text-uppercase"><strong>Inspection Team Members</strong></div>
			<div class="panel-body text-info">
				<table width="100%" style="text-align: center;">
					<tr>
						<td>
							<h4>
								<label>
									S.No.
								</label>
							</h4>
						</td>
						<td>
							<h4 >
								<label>
									Name
								</label>
							</h4>
						</td>
						<td>
							<h4 >
								<label>
									Designation
								</label>
							</h4>
						</td>
						<td>
							<h4 >
								<label>
									Specialization
								</label>
							</h4>
						</td>
						<td>
							<h4 >
								<label>
									Department
								</label>
							</h4>
						</td>
						<td>
							<h4 >
								<label>
									Email
								</label>
							</h4>
						</td>
						<td>
							<h4 >
								<label>
									Mobile No.
								</label>
							</h4>
						</td>
					</tr>
					<?php $sr = 1; ?>
					@foreach($assignment->members as $member)
					<tr style="line-height:30px;">
						<td>
							<label>({{ $sr++ }})</label>
						</td>
						<td>
							<label>
								{{ $member->teacher->user->fullname() }}
							</label>
						</td>
						<td>
							<label>
								{{ $member->teacher->designation }}
							</label>
						</td>
						<td>
							<label>
								{{ $member->teacher->specialization }}
							</label>
						</td>
						<td>
							<label>
								{{ $member->teacher->department->name }}
							</label>
						</td>
						<td>
							<label>
								{{ $member->teacher->user->email }}
							</label>
						</td>
						<td>
							<label>
								{{ $member->teacher->user->mobile }}
							</label>
						</td>
					</tr>
					@endforeach
				</table>
			</div>
		</div>
	</div>
</div>
@endif
@endif
@if(!empty($inspectionmember))

<div class="alert alert-info">
	<p>
		You are a member of Inspection Team for Inspection of <strong>{{ $inspectionmember->assignment->college->form->college_name }}</strong>.
		@if($inspectionmember->assignment->schedule)
		<br>
		It is Scheduled on <strong>{{ $inspectionmember->assignment->schedule->date->toFormattedDateString() }}</strong>.
		@endif
	</p>
</div>
@if($inspectionmember->assignment->members->count())
<hr class="redhr">
<div class="row text-justify">
	<div class="col-md-12">
		<div class="panel panel-primary">
			<div class="panel-heading text-uppercase"><strong>Inspection Team Convener</strong></div>
			<div class="panel-body text-info">
				<table width="100%" style="text-align: center;">
					<tr>
						<td>
							<h4 >
								<label>
									Name
								</label>
							</h4>
						</td>
						<td>
							<h4 >
								<label>
									Designation
								</label>
							</h4>
						</td>
						<td>
							<h4 >
								<label>
									Specialization
								</label>
							</h4>
						</td>
						<td>
							<h4 >
								<label>
									Department
								</label>
							</h4>
						</td>
						<td>
							<h4 >
								<label>
									Email
								</label>
							</h4>
						</td>
						<td>
							<h4 >
								<label>
									Mobile No.
								</label>
							</h4>
						</td>
					</tr>
					<tr style="line-height:30px;">
						<td>
							<label>
								{{ $inspectionmember->assignment->teacher->user->fullname() }}
							</label>
						</td>
						<td>
							<label>
								{{ $inspectionmember->assignment->teacher->designation }}
							</label>
						</td>
						<td>
							<label>
								{{ $inspectionmember->assignment->teacher->specialization }}
							</label>
						</td>
						<td>
							<label>
								{{ $inspectionmember->assignment->teacher->department->name }}
							</label>
						</td>
						<td>
							<label>
								{{ $inspectionmember->assignment->teacher->user->email }}
							</label>
						</td>
						<td>
							<label>
								{{ $inspectionmember->assignment->teacher->user->mobile }}
							</label>
						</td>
					</tr>
				</table>
			</div>
			<hr class="redhr" style="width: 100%;">
			<div class="panel-heading text-uppercase"><strong>Inspection Team Members</strong></div>
			<div class="panel-body text-info">
				<table width="100%" style="text-align: center;">
					<tr>
						<td>
							<h4>
								<label>
									S.No.
								</label>
							</h4>
						</td>
						<td>
							<h4 >
								<label>
									Name
								</label>
							</h4>
						</td>
						<td>
							<h4 >
								<label>
									Designation
								</label>
							</h4>
						</td>
						<td>
							<h4 >
								<label>
									Specialization
								</label>
							</h4>
						</td>
						<td>
							<h4 >
								<label>
									Department
								</label>
							</h4>
						</td>
						<td>
							<h4 >
								<label>
									Email
								</label>
							</h4>
						</td>
						<td>
							<h4 >
								<label>
									Mobile No.
								</label>
							</h4>
						</td>
					</tr>
					<?php $sr = 1; ?>
					@foreach($inspectionmember->assignment->members as $member)
					<tr style="line-height:30px;">
						<td>
							<label>({{ $sr++ }})</label>
						</td>
						<td>
							<label>
								{{ $member->teacher->user->fullname() }}
							</label>
						</td>
						<td>
							<label>
								{{ $member->teacher->designation }}
							</label>
						</td>
						<td>
							<label>
								{{ $member->teacher->specialization }}
							</label>
						</td>
						<td>
							<label>
								{{ $member->teacher->department->name }}
							</label>
						</td>
						<td>
							<label>
								{{ $member->teacher->user->email }}
							</label>
						</td>
						<td>
							<label>
								{{ $member->teacher->user->mobile }}
							</label>
						</td>
					</tr>
					@endforeach
				</table>
			</div>
		</div>
	</div>
</div>
@endif
@endif

@endsection
