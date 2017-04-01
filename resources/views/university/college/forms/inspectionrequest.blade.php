@extends('templates.college.main',['title' => 'Apply For New College'])
@section('heading')
Registration Form
@endsection
@section('content')
@if(!empty($form))
@if($form->is_loi_granted)

Hello

@else
<div class="alert alert-info">
	<p>
		You Can Request For Inspection once you've been Granted The Letter of Intent.
	</p>
</div>
@else
<div class="alert alert-info">
	<p>
		You Need To Submit Your Application Form First.
	</p>
</div>
@endif
@endsection




