@extends('templates.clerk.main',['title' => 'View Inspection'])

@section('heading')
View Inspection
@endsection
@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success">
	<p>
		{{ $message }}
	</p>
</div>
@endif
@if(!empty($inspections))
@if(!empty($inspectionid))
@if(!empty($categories))
<table width="100%">
	<tr style="line-height:30px;">
		<td>
			<h4>
				<label>S.No.</label>
			</h4>

		</td>
		<td>
			<h4>
				<label>Descrepencies</label>
			</h4>
		</td>
		<td>
			<h4>
				<label>Is Discrepancy?</label>
			</h4>
		</td>
		<td>
			<h4>
				<label>Remarks</label>
			</h4>
		</td>
	</tr>
	@foreach($categories as $category)
	<tr>
		<td colspan="4">
			<div class="well well-sm">
				{{ $category->name }}
			</div>
		</td>
	</tr>
	<?php $sr = 1; ?>
	@foreach($inspectionid->discrepancies as $discrepancy)
	@if($discrepancy->listname->id_discrepancy_category == $category->id)
	<tr style="line-height:30px;">
		<td>
			<label>({{ $sr++ }})</label>
		</td>
		<td>
			<label>
				{{ $discrepancy->listname->name }}
			</label>
		</td>
		<td>
			<label>
				{{ $discrepancy->is_discrepancy ? "Yes":"No" }}
			</label>
		</td>
		<td>
			<label>
				{{ $discrepancy->remarks ? $discrepancy->remarks : "{Not Provided}" }}
			</label>
		</td>
	</tr>
	@endif
	@endforeach
	@endforeach
</table>
<hr class="style18">

<h4 >
	<strong><label class="col-md-3 control-label">Final Remarks</label></strong>
</h4>
<br/>
<div class="col-md-2">                       
	<p style="white-space: pre-line;">
		{{ $inspectionid->final_remarks }}
	</p>
</div>
<div class=" col-md-12" style="text-align: center;"> 
	<label>Inspection Submitted on {{ $inspectionid->created_at->toFormattedDateString() }}</label>
	</div>
	@if(!$inspectionid->is_forwarded_to_dean)
	<br/>
	<div class=" col-md-12" style="text-align: right;"> 
		<a class="btn btn-primary" href="{{ route('clerkviewinspection',$inspectionid->id) }}"
			onclick="event.preventDefault();
			document.getElementById('forward-to-dean').submit();">
			Forward To Dean
		</a>
	</div>

	<form id="forward-to-dean" action="{{ route('clerkviewinspection',$inspectionid->id) }}" method="POST" style="display: none;">
		<input type="hidden" name="_method" value="PUT">
		{{ csrf_field() }}
	</form>
	@endif
	@else
	<div class="alert alert-info">
		<p>
			Nothing To Display
		</p>
	</div>
	@endif
	@else
	<table width="100%">
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
						Inspected By
					</label>
				</h4>
			</td>
			<td>
				<h4 >
					<label>
						Final Remarks
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
						View Inspection
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
		@foreach($inspections as $inspection)
		<tr style="line-height:30px;">
			<td>
				<label>({{ $sr++ }})</label>
			</td>
			<td>
				<label>
					{{ $inspection->college->user->fname." ".$inspection->college->user->lname }}
				</label>
			</td>
			<td>
				<label>
					{{ $inspection->inspector->user->fname." ".$inspection->inspector->user->lname }}
				</label>
			</td>
			<td>
				<label>
					{{ $inspection->final_remarks }}

				</label>
			</td>
			<td>
				<label>
					{{ $inspection->created_at->toFormattedDateString() }}
				</label>
			</td>
			<td>
				<label>
					<a class="btn btn-primary btn-xs" href="{{ route('clerkviewinspection',$inspection->id) }}">View Inspection</a>

				</label>
			</td>
			<td>
				{!! $inspection->is_forwarded_to_dean ? "<span class='label label-success'>Forwarded</span>" : ($inspection->is_seen_by_clerk ? "<span class='label label-warning'>Pending</span>" : "<span class='label label-danger'>New</span>") !!}
			</td>
		</tr>
		@endforeach

	</table>

	@endif

	@else
	<div class="alert alert-info">
		<p>
			No Inspections Done Yet
		</p>
	</div>

	@endif

	@endsection
