@extends('templates.college.main',['title' => 'Apply For New College'])
@section('heading')
Registration Form
@endsection
@section('content')

@if(!empty($form))
@if($form->is_loi_granted)
@if(!empty($request))
@if ($message = Session::get('success'))
<div class="alert alert-success">
	<p>
		{{ $message }}
	</p>
</div>
@else
@if($request->is_forwarded_to_dean)
<div class="alert alert-info">
	<p>
		You Already Requested on <strong>{{ $request->created_at->toFormattedDateString() }}</strong>. Your Request Is Forwarded to the Dean.
	</p>
</div>
@else
<div class="alert alert-info">
	<p>
		You Already Requested on <strong>{{ $request->created_at->toFormattedDateString() }}</strong>. Your Request Is Pending.
	</p>
</div>
@endif
@endif
@else
@if(!empty($assignment))
<div class="alert alert-info">
	<p>
		Your Request has been assigned to <strong>{{ $assignment->teacher->user->fullname() }}</strong>. You can contact them on <strong>{{ $assignment->teacher->user->email }}</strong> for further Correspondence.
	</p>
</div>
@else
<form class="form-horizontal" role="form" method="POST" action="{{ route('collegerequestinspection') }}">
	{{ csrf_field() }}
<div class="alert alert-info">
	<p>
		Your can Request For Inspection To Be Done Here.
	</p>
</div>

	<div class="form-group">
		<div class="col-md-6 col-md-offset-4">
			<button type="submit" class="btn btn-primary">
				Request For Inspection
			</button>
		</div>
	</div>
</form>
@endif
@endif

@else
<div class="alert alert-info">
	<p>
		You Can Request For Inspection once you've been Granted The Letter of Intent.
	</p>
</div>
@endif
@else
<div class="alert alert-info">
	<p>
		You Need To Submit Your Application Form First.
	</p>
</div>
@endif
@endsection




