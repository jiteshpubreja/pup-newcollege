@extends('templates.teacher.main',['title' => 'Add Inspection'])

@section('heading')
Add Inspection
@endsection
@section('content')
@if(!empty($categories))
@if(!empty($assignment))
<form class="form-horizontal" role="form" method="POST" action="{{ route('teacheraddinspection') }}">
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
			Please Select The Correct Options for Inspection of <strong>{{ $assignment->college->form->college_name }}</strong>.
		</p>
	</div>
	@endif

	<?php $count = 0; ?>
	<div class="form-group">
		<div class="col-lg-1">
			<h4>
				<label>S.No.</label>
			</h4>
		</div>
		<div class="col-lg-5">
			<h4>
				<label>Descrepencies</label>
			</h4>
		</div>
		<div class="col-lg-3">
			<h4>
				<label>Is Discrepancy?</label>
			</h4>
		</div>
		<div class="col-lg-2">
			<h4>
				<label>Remarks</label>
			</h4>
		</div>
	</div>
	@foreach($categories as $category)
	<div class="form-group">
		<div class="well well-sm">
			{{ $category->name }}
		</div>
	</div>
	<?php $sr = 1; ?>
	@foreach($category->discrepancies as $discrepancy)
	<div class="form-group">
		<input type="hidden" name="count" value="{{ ++$count }}">
		<input type="hidden" name="discrepancyid{{ $count }}" value="{{ $discrepancy->id }}">
		<div class="col-sm-1">
			<label>({{ $sr++ }})</label>
		</div>
		<div class="col-sm-5">
			<label for="isdiscrepancy{{ $count }}" >
				{{ $discrepancy->name }}
			</label>
		</div>
		<div class="col-sm-3">
			<div class="radio radio-inline">

				<strong><input type="radio" name="isdiscrepancy{{ $count }}" value="1"><label>Yes
				</label></strong>
				<strong><input type="radio" name="isdiscrepancy{{ $count }}" value="0" checked><label>No
				</label></strong>
			</div>
		</div>
		<div class="col-sm-2">
			<input type="text" name="remarks{{$count}}" class="form-control">
		</div>
	</div>
	@endforeach
	@endforeach


	<div class="form-group{{ $errors->has('finalremarks') ? ' has-error' : '' }}">
		<h4 >
			<strong>
				<label for="finalremarks" class="col-md-2 control-label">
					Final Remarks
				</label>
			</strong>
		</h4>

		<div class="col-md-2">                       
			<textarea name="finalremarks" cols="93" rows="5" required></textarea>
			@if ($errors->has('finalremarks'))
			<span class="help-block">
				<strong>{{ $errors->first('finalremarks') }}</strong>
			</span>
			@endif
		</div>
	</div>


	<div class="form-group">
		<div class="col-md-6 col-md-offset-9">
			<button type="submit" class="btn btn-primary">
				Submit
			</button>
		</div>	
		<input type="hidden" name="collegeid" value="{{ $assignment->id_college }}">
	</div>
</form>
@if($assignment->members->count())
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
		Nothing To Display
	</p>
</div>
@endif
@endif
@endsection
