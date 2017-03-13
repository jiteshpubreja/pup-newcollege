@extends('templates.teacher.main',['title' => 'Teacher Home'])

@section('heading')
Add Inspection
@endsection
@section('content')
@if(!empty($categories))
<form class="form-horizontal" role="form" method="POST" action="{{ route('teacheraddinspection') }}">
	{{ csrf_field() }}

	@if ($message = Session::get('success'))
	<div class="alert alert-success">
		<p>
			{{ $message }}
		</p>
	</div>
	@endif

	<div class="alert alert-info">
		<p>
		Please Tick The Correct Checkboxes If That Is <strong>Not</strong> A Discrepancy
		</p>
	</div>
	<?php $count = 0; ?>
	<div class="form-group">
		<div class="col-lg-1">
			<h4>
				<label>S.No.</label>
			</h4>
		</div>
		<div class="col-lg-6">
			<h4>
				<label>Descrepencies</label>
			</h4>
		</div>
		<div class="col-lg-2">
			<h4>
				<label>Status</label>
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
		<div class="col-sm-6">
			<label for="isdiscrepancy{{ $count }}" >
				{{ $discrepancy->name }}
			</label>
		</div>
		<div class="col-sm-2">
			<div class="checkbox">
				<input type="hidden" name="isdiscrepancy{{ $count }}" value="1">
				<input type="checkbox" name="isdiscrepancy{{ $count }}" value="0">
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
			<strong><label for="finalremarks" class="col-md-2 control-label">Final Remarks</label></strong></h4>

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
	<input type="hidden" name="collegeid" value="{{ $collegeid }}">
		</div>
	</form>

@else
@if ($message = Session::get('success'))
	<div class="alert alert-success">
		<p>
			{{ $message }}
		</p>
	</div>
	@endif
Nothing To Display
@endif
	@endsection
