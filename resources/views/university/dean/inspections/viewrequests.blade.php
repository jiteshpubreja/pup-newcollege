@extends('templates.dean.main',['title' => 'View Inspection Requests'])

@section('heading')
View Inspection Requests
@endsection
@section('content')

@if(!empty($requests))
@if ($message = Session::get('success'))
<div class="alert alert-success">
	<p>
		{{ $message }}
	</p>
</div>
@endif
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
					College
				</label>
			</h4>
		</td>
		<td>
			<h4 >
				<label>
					Reference ID
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
					View Application
				</label>
			</h4>
		</td>
		<td>
			<h4 >
				<label>
					View Documents
				</label>
			</h4>
		</td>
		<td>
			<h4 >
				<label>
					Status
				</label>
			</h4>
		</td>
	</tr>


	<?php $sr = 1; ?>
	@foreach($requests as $request)
	<tr style="line-height:30px;">
		<td>
			<label>({{ $sr++ }})</label>
		</td>
		<td>
			<label>
				{{ $request->college->form->college_name }}
			</label>
		</td>
		<td>
			<label>
				{{ $request->college->form->ref_id }}
			</label>
		</td>
		<td>
			<label>
				{{ $request->created_at->toFormattedDateString() }}

			</label>
		</td>
		<td>
			<label>
				<a class="btn btn-primary btn-xs" href="{{ route('deanviewapplication',$request->college->form->id) }}">View Application</a>

			</label>
		</td>
		<td>
			<label>
				<a class="btn btn-primary btn-xs" href="{{ route('deanviewappdocs',$request->college->form->id) }}">View Documents</a>

			</label>
		</td>
		<td>
			@if(!$request->college->inspectionassignment)
			<a class="btn btn-warning btn-xs" href="{{ route('deanassignconvener',$request->id) }}">
				Assign Convener
			</a>
			@else
			@if(!$request->college->inspectionassignment->members->count())
			<a class="btn btn-warning btn-xs" href="{{ route('deanassignmembers',$request->id) }}">
				Assign Members
			</a>
			@else
			<span class='label label-success'>Assigned</span>
			@endif
			@endif
		</td>
	</tr>
	@endforeach

</table>
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
		No Inspection Requests.
	</p>
</div>
@endif
@endif
@endsection
