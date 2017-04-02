@extends('templates.clerk.main',['title' => 'View Inspection Requests'])

@section('heading')
View Inspection Requests
@endsection
@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success">
	<p>
		{{ $message }}
	</p>
</div>
@endif
@if(!empty($requests))

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
					View Drafts
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
				<a class="btn btn-primary btn-xs" href="{{ route('clerkviewapplication',$request->college->form->id) }}">View Application</a>

			</label>
		</td>
		<td>
			<label>
				<a class="btn btn-primary btn-xs" href="{{ route('clerkviewappdocs',$request->college->form->id) }}">View Documents</a>

			</label>
		</td>
		<td>
			<label>
				<a class="btn btn-primary btn-xs" href="{{ route('clerkviewdrafts',$request->college->form->id) }}">View Drafts</a>
			</label>
		</td>
		<td>
			@if(!$request->is_forwarded_to_dean)
			<a class="btn btn-success btn-xs" href="{{ route('clerkviewapplication',$request->id) }}"
				onclick="event.preventDefault();
				document.getElementById('forward-to-dean').submit();">
				Forward To Dean
			</a>
			&nbsp;
			<a class="btn btn-danger btn-xs" href="{{ route('clerkrejectapplication',$request->id) }}"
				onclick="event.preventDefault();
				document.getElementById('reject-request').submit();">
				<i class="fa fa-times"></i> Reject
			</a>

			<form id="forward-to-dean" action="{{ route('clerkforwardrequest',$request->id) }}" method="POST" style="display: none;">
				<input type="hidden" name="_method" value="PUT">
				{{ csrf_field() }}
			</form>

			<form id="reject-request" action="{{ route('clerkrejectrequest',$request->id) }}" method="POST" style="display: none;">
				<input type="hidden" name="_method" value="PUT">
				{{ csrf_field() }}
			</form>
			@else
			<span class='label label-success'>Forwarded</span>
			@endif
		</td>
	</tr>
	@endforeach

</table>



@else

<div class="alert alert-info">
	<p>
		No Inspection Requests.
	</p>
</div>

@endif





@endsection
