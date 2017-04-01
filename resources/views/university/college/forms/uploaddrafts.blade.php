@extends('templates.college.main',['title' => 'Upload Drafts'])
@section('heading')
Upload Drafts
@endsection
@section('content')
@if(!empty($payments))

<form method="POST" action="{{route('collegeuploaddraft')}}" class="form-horizontal" role="form" enctype="multipart/form-data">
	{{ csrf_field() }}

	@if ($message = Session::get('success'))
	<div class="alert alert-success">
		<p>
			{{ $message }}
		</p>
	</div>
	@elseif ($message = Session::get('error'))
	<div class="alert alert-danger">
		<p>
			{{ $message }}
		</p>
	</div>
	@else
	<div class="alert alert-info">
		<p>
			The Documents should be in .pdf or .jpg form.
		</p>
	</div>
	@endif

	<div class="form-group{{ $errors->has('president_name') ? ' has-error' : '' }}">
		<h4 >
			<strong><label for="president_name" class="col-md-4 control-label">President's Name Of Institute</label></strong>
		</h4>

		<div class="col-md-6">
			<input id="president_name" type="text" class="form-control" name="president_name" value="{{ old('president_name') }}" required autofocus>

			@if ($errors->has('president_name'))
			<span class="help-block">
				<strong>{{ $errors->first('president_name') }}</strong>
			</span>
			@endif
		</div>
	</div>
	<div class="form-group{{ $errors->has('purpose') ? ' has-error' : '' }}">
		<h4 >
			<strong> <label for="purpose" class="col-md-4 control-label">Purpose Of Draft</label></strong>
		</h4>

		<div class="col-md-6">
			<select name="purpose" class=" selectpicker" data-live-search="true" id="purpose" title="Select Purpose..." required>

				@if(!empty($structures))
				@foreach($structures as $structure)
				<option value="{{ $structure['name'] }}">
					{{ $structure['name']." - Rs. ".$structure['amount'] }}</option>
					@endforeach
					@endif
					<option value="Other">Other</option>
				</select>

				@if ($errors->has('purpose'))
				<span class="help-block">
					<strong>{{ $errors->first('purpose') }}</strong>
				</span>
				@endif
			</div>
		</div>
		<div class="form-group{{ $errors->has('purpose') ? ' has-error' : '' }}">
			<h4 >
				<strong><label for="purpose_other" class="col-md-4 control-label">If Other, Please Specify</label></strong>
			</h4>

			<div class="col-md-6">
				<input id="purpose_other" type="text" class="form-control" name="purpose_other" value="{{ old('purpose_other') }}">

				@if ($errors->has('purpose'))
				<span class="help-block">
					<strong>{{ $errors->first('purpose') }}</strong>
				</span>
				@endif
			</div>
		</div>
		<div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">
			<h4 >
				<strong><label for="amount" class="col-md-4 control-label">Amount</label></strong>
			</h4>

			<div class="col-md-6">
				<input id="amount" type="text" class="form-control" name="amount" value="{{ old('amount') }}">

				@if ($errors->has('amount'))
				<span class="help-block">
					<strong>{{ $errors->first('amount') }}</strong>
				</span>
				@endif
			</div>
		</div>
		<div class="form-group{{ $errors->has('draft_no') ? ' has-error' : '' }}">
			<h4 >
				<strong><label for="draft_no" class="col-md-4 control-label">Draft/University Reciept Number</label></strong>
			</h4>

			<div class="col-md-6">
				<input id="draft_no" type="text" class="form-control" name="draft_no" value="{{ old('draft_no') }}">

				@if ($errors->has('draft_no'))
				<span class="help-block">
					<strong>{{ $errors->first('draft_no') }}</strong>
				</span>
				@endif
			</div>
		</div>
		<div class="form-group{{ $errors->has('bank_name') ? ' has-error' : '' }}">
			<h4 >
				<strong><label for="bank_name" class="col-md-4 control-label">Bank Name/University</label></strong>
			</h4>

			<div class="col-md-6">
				<input id="bank_name" type="text" class="form-control" name="bank_name" value="{{ old('bank_name') }}">

				@if ($errors->has('bank_name'))
				<span class="help-block">
					<strong>{{ $errors->first('bank_name') }}</strong>
				</span>
				@endif
			</div>
		</div>
		<div class="form-group{{ $errors->has('dated') ? ' has-error' : '' }}">
			<h4 >
				<strong><label for="dated" class="col-md-4 control-label">Dated</label></strong>
			</h4>

			<div class="col-md-6">
				<input id="dated" type="date" class="form-control" name="dated" value="{{ old('dated') }}">

				@if ($errors->has('dated'))
				<span class="help-block">
					<strong>{{ $errors->first('dated') }}</strong>
				</span>
				@endif
			</div>
		</div>
		<div class="form-group{{ $errors->has('draft_image') ? ' has-error' : '' }}">
			<h4 >
				<strong><label for="draft_image" class="col-md-4 control-label">Upload Scanned Document</label></strong>
			</h4>

			<div class="col-md-6">
				<input id="draft_image" type="file" accept="application/pdf,image/jpg" name="draft_image">

				@if ($errors->has('draft_image'))
				<span class="help-block">
					<strong>{{ $errors->first('draft_image') }}</strong>
				</span>
				@endif
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-6 col-md-offset-4">
				<button type="submit" class="btn btn-primary">
					Upload Draft
				</button>
			</div>
		</div>
	</form>
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
						President
					</label>
				</h4>
			</td>
			<td>
				<h4 >
					<label>
						Purpose
					</label>
				</h4>
			</td>
			<td>
				<h4 >
					<label>
						Amount
					</label>
				</h4>
			</td>
			<td>
				<h4 >
					<label>
						Draft No.
					</label>
				</h4>
			</td>
			<td>
				<h4 >
					<label>
						Bank Name
					</label>
				</h4>
			</td>
			<td>
				<h4 >
					<label>
						Dated
					</label>
				</h4>
			</td>
			<td>
				<h4 >
					<label>
						Document
					</label>
				</h4>
			</td>
		</tr>


		<?php $sr = 1; ?>
		@foreach($payments as $payment)
		<tr style="line-height:30px;">
			<td>
				<label>({{ $sr++ }})</label>
			</td>
			<td>
				<label>
					{{ $payment->president_name }}
				</label>
			</td>
			<td>
				<label>
					{{ $payment->purpose }}
				</label>
			</td>
			<td>
				<label>
					{{ $payment->amount }}
				</label>
			</td>
			<td>
				<label>
					{{ $payment->draft_no }}
				</label>
			</td>
			<td>
				<label>
					{{ $payment->bank_name }}
				</label>
			</td>
			<td>
				<label>
					{{ dated_format($payment->dated) }}
				</label>
			</td>
			<td>
				<a class="btn btn-primary btn-xs" href="{{ $payment->draft_image }}" >Download</a>
			</td>
		</tr>
		@endforeach

	</table>
	@else
	<div class="alert alert-info">
		<p>
			You Need To Submit Your Application Form First.
		</p>
	</div>
	@endif
	@endsection