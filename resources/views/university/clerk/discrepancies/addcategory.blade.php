@extends('templates.clerk.main',['title' => 'Add Discrepancy Category'])

@section('heading')
Add Discrepancy Category
@endsection
@section('content')


<form class="form-horizontal" role="form" method="POST" action="{{ route('adddiscrepancycategory') }}">
	{{ csrf_field() }}

	@if ($message = Session::get('success'))
	<div class="alert alert-success">
		<p>
			{{ $message }}
		</p>
	</div>
	@endif

	<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
		<h4 >
			<strong><label for="name" class="col-md-4 control-label">Name</label></strong></h4>

			<div class="col-md-6">
				<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

				@if ($errors->has('name'))
				<span class="help-block">
					<strong>{{ $errors->first('name') }}</strong>
				</span>
				@endif
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-6 col-md-offset-4">
				<button type="submit" class="btn btn-primary">
					Add Category
				</button>
			</div>
		</div>

		<div class="form-group">
			<div class="col-lg-1">
				<h4>
					<label>
						S.No.
					</label>
				</h4>
			</div>
			<div class="col-lg-6">
				<h4 >
					<label>
						Category
					</label>
				</h4>
			</div>
		</div>
		<?php $sr = 1; ?>
		@foreach($categories as $category)
		<div class="form-group">
			<div class="col-sm-1">
				<label>({{ $sr++ }})</label>
			</div>
			<div class="col-sm-6">
				<label>
					{{ $category['name'] }}
				</label>
			</div>
		</div>
		@endforeach

	</form>
	@endsection