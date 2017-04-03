@extends('templates.teacher.main',['title' => 'Schedule Inspection'])

@section('heading')
Schedule Inspection
@endsection
@section('content')
@if(!empty($assignment))
@if(!empty($schedule))
@if ($message = Session::get('success'))
<div class="alert alert-success">
	<p>
		{{ $message }}
	</p>
</div>
@else
<div class="alert alert-info">
	<p>
		Your Inspection is Scheduled For <strong>{{ $assignment->college->form->college_name }}</strong> on <strong>{{ $schedule->date->toFormattedDateString() }}</strong>.
		<br>
		If You Want To Reschedule, You Can Do So Below.
	</p>
</div>


<form class="form-horizontal" role="form" method="POST" action="{{ route('teacherscheduleinspection') }}">
	{{ csrf_field() }}
	<input type="hidden" name="_method" value="PUT">

	<div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
		<h4 >
			<strong><label for="date" class="col-md-4 control-label">Tentative Inspection Date</label></strong>
		</h4>

		<div class="col-md-6">
			<input id="date" type="date" class="form-control" name="date" value="{{ old('date') }}" required>

			@if ($errors->has('date'))
			<span class="help-block">
				<strong>{{ $errors->first('date') }}</strong>
			</span>
			@endif
		</div>
	</div>

	<div class="form-group">
		<div class=" col-md-4"> 
			<a class="btn btn-primary" href="{{ route('teacherviewapplication') }}">View Application</a>
		</div>
		<div class="col-md-6">
			<button type="submit" class="btn btn-primary">
				Schedule Inspection
			</button>
		</div>	
	</div>
</form>
@endif
@else

<form class="form-horizontal" role="form" method="POST" action="{{ route('teacherscheduleinspection') }}">
	{{ csrf_field() }}

	@if ($message = Session::get('success'))
	<div class="alert alert-success">
		<p>
			{{ $message }}
		</p>
	</div>
	@else
	<div class="alert alert-info">
		<p>
			Please Schedule Inspection Below for <strong>{{ $assignment->college->form->college_name }}</strong>.
		</p>
	</div>
	@endif

	<div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
		<h4 >
			<strong><label for="date" class="col-md-4 control-label">Tentative Inspection Date</label></strong>
		</h4>

		<div class="col-md-6">
			<input id="date" type="date" class="form-control" name="date" value="{{ old('date') }}" required>

			@if ($errors->has('date'))
			<span class="help-block">
				<strong>{{ $errors->first('date') }}</strong>
			</span>
			@endif
		</div>
	</div>


	<div class="form-group">
		<div class=" col-md-4"> 
			<a class="btn btn-primary" href="{{ route('teacherviewapplication') }}">View Application</a>
		</div>
		<div class="col-md-6">
			<button type="submit" class="btn btn-primary">
				Schedule Inspection
			</button>
		</div>	
	</div>
</form>


@endif

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
		You Haven't Been Assigned Any Inspection Yet
	</p>
</div>
@endif
@endif
@endsection
