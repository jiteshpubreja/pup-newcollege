@extends('templates.clerk.main',['title' => 'Add Discrepancy'])

@section('heading')
Add Discrepancy
@endsection
@section('content')


<form class="form-horizontal" role="form" method="POST" action="{{ route('adddiscrepancylist') }}">
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
		<div class="form-group{{ $errors->has('id_category') ? ' has-error' : '' }}">
			<h4 >
				<strong> <label for="id_category" class="col-md-4 control-label">Category</label></strong></h4>

				<div class="col-md-6">
					<select name="id_category" class=" selectpicker" data-live-search="true" id="id_category" title="Select Category..." required>
						@foreach($categories as $category)
						<option value="{{ $category['id'] }}">
							{{ $category['name'] }}</option>
							@endforeach
						</select>

						@if ($errors->has('id_category'))
						<span class="help-block">
							<strong>{{ $errors->first('id_category') }}</strong>
						</span>
						@endif
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-6 col-md-offset-4">
						<button type="submit" class="btn btn-primary">
							Add Discrepancy
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
								Discrepancy
							</label>
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
					<div class="col-sm-1">
						<label>({{ $sr++ }})</label>
					</div>
					<div class="col-sm-6">
						<label>
							{{ $discrepancy->name }}
						</label>
					</div>
				</div>
				@endforeach
				@endforeach
			</form>
			@endsection