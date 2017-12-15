@extends('templates.dean.main',['title' => 'Assign Convener'])

@section('heading')
Assign Convener
@endsection
@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success">
	<p>
		{{ $message }}
	</p>
</div>
@endif
@if(!empty($assignment))
<div class="alert alert-info">
		<p>
			<strong>{{ $assignment->teacher->user->fullname() }}</strong> is already assigned as Convener to <strong>{{ $requestid->college->form->college_name }}</strong>.
		</p>
	</div>
@else
@if(!empty($requestid))
@if(!empty($teachers))

<form class="form-horizontal" role="form" method="POST" action="{{ route('deanassignconvener',$requestid->id) }}">
	{{ csrf_field() }}


	<div class="form-group">
		<h4 >
			<strong>
				<label class="col-md-4 control-label">College</label>
			</strong>
		</h4>
		<input type="text" class="form-control" value="{{ $requestid->college->form->college_name }}" disabled="disabled">
	</div>
	
	<div class="form-group">
		<h4 >
			<strong>
				<label class="col-md-4 control-label">Reference ID</label>
			</strong>
		</h4>
		<input type="text" class="form-control" value="{{ $requestid->college->form->ref_id }}" disabled="disabled">
	</div>
	
	<div class="form-group">
		<h4 >
			<strong>
				<label class="col-md-4 control-label">Dated</label>
			</strong>
		</h4>
		<input type="text" class="form-control" value="{{ $requestid->created_at->toFormattedDateString() }}" disabled="disabled">
	</div>
	
	<div class="form-group{{ $errors->has('id_teacher') ? ' has-error' : '' }}">
		<h4 >
			<strong>
				<label class="col-md-4 control-label">Select Convener</label>
			</strong>
		</h4>
		<div class="col-md-6">
			<select name="id_teacher" class="selectpicker" data-live-search="true" id="id_teacher" title="Select Convener..." required>
				<option value="" disabled selected style="display: none;">Select Convener...</option>
				@foreach($teachers as $teacher)
				<option value="{{ $teacher->id }}">
					{{ $teacher->user->fullname() }} - {{ $teacher->department->name }}</option>
					@endforeach
				</select>

				@if ($errors->has('id_teacher'))
				<span class="help-block">
					<strong>{{ $errors->first('id_teacher') }}</strong>
				</span>
				@endif
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-6 col-md-offset-4">
				<button type="submit" class="btn btn-primary">
					Assign Convener
				</button>
			</div>
		</div>
	</form>



	@else

	<div class="alert alert-info">
		<p>
			No Teachers Available.
		</p>
	</div>

	@endif
	@else

	<div class="alert alert-info">
		<p>
			Invalid Request.
		</p>
	</div>

	@endif
	@endif
	@endsection
