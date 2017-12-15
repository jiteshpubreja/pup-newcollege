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
<form class="form-horizontal">

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
		<div class="col-lg-3">
			<h4>
				<label>Is Discrepancy?</label>
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
	@foreach($inspectionid->discrepancies as $discrepancy)
	@if($discrepancy->listname->id_discrepancy_category == $category->id)
	<div class="form-group">
		<div class="col-sm-1">
			<label>({{ $sr++ }})</label>
		</div>
		<div class="col-sm-6">
			<label>
				{{ $discrepancy->listname->name }}
			</label>
		</div>
		<div class="col-sm-3">
			<label>
				{{ $discrepancy->is_discrepancy ? "Yes":"No" }}
			</label>
		</div>
		<div class="col-sm-2">
			<label>
				{{ $discrepancy->remarks ? $discrepancy->remarks : "{Not Provided}" }}
			</label>
		</div>
	</div>
	@endif
	@endforeach
	@endforeach
</form>
<hr class="style18">
@if($inspectionid->members->count())
<div class="row text-justify">
	<div class="col-md-12">
		<div class="panel panel-primary">
			<div class="panel-heading text-uppercase"><strong>Inspection Team Members</strong></div>
			<div class="panel-body text-info">
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
									Name
								</label>
							</h4>
						</td>
						<td>
							<h4 >
								<label>
									Designation
								</label>
							</h4>
						</td>
						<td>
							<h4 >
								<label>
									Specialization
								</label>
							</h4>
						</td>
						<td>
							<h4 >
								<label>
									Department
								</label>
							</h4>
						</td>
						<td>
							<h4 >
								<label>
									Email
								</label>
							</h4>
						</td>
						<td>
							<h4 >
								<label>
									Mobile No.
								</label>
							</h4>
						</td>
					</tr>
					<?php $sr = 1; ?>
					@foreach($inspectionid->members as $member)
					<tr style="line-height:30px;">
						<td>
							<label>({{ $sr++ }})</label>
						</td>
						<td>
							<label>
								{{ $member->teacher->user->fullname() }}
							</label>
						</td>
						<td>
							<label>
								{{ $member->teacher->designation }}
							</label>
						</td>
						<td>
							<label>
								{{ $member->teacher->specialization }}
							</label>
						</td>
						<td>
							<label>
								{{ $member->teacher->department->name }}
							</label>
						</td>
						<td>
							<label>
								{{ $member->teacher->user->email }}
							</label>
						</td>
						<td>
							<label>
								{{ $member->teacher->user->mobile }}
							</label>
						</td>
					</tr>
					@endforeach
				</table>
			</div>
		</div>
	</div>
</div>
<hr class="style18">
@endif

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



@if(!empty($backnote))
<hr class="redhr">
<div style="text-align: center;" class="form-group">
	<h4>
		<strong>
			<label for="remarks" class="col-md-12 control-label">
				Latest Remarks by {{ $backnote->user->fullname() }} (Dean)
			</label>
		</strong>
	</h4>
</div>

<p style="white-space: pre-line;">
	{{ $backnote->remarks }}
</p>
@endif

@if(!$inspectionid->is_forwarded_to_dean)
<hr class="redhr">


<form id="forward-to-dean" action="{{ route('clerkviewinspection',$inspectionid->id) }}" method="POST">
	<input type="hidden" name="_method" value="PUT">
	{{ csrf_field() }}
	<div style="text-align: center;" class="form-group{{ $errors->has('remarks') ? ' has-error' : '' }}">
		<h4 >
			<strong>
				<label for="remarks" class="col-md-12 control-label">
					Final Remarks
				</label>
			</strong>
		</h4>

		<div class="col-md-12">                       
			<textarea name="remarks" oninput="viewbuttons()" onchange="viewbuttons()" id="remarks" cols="92" rows="5" required>{{ old('remarks') }}</textarea>
			@if ($errors->has('remarks'))
			<span class="help-block">
				<strong>{{ $errors->first('remarks') }}</strong>
			</span>
			@endif
		</div>
	</div>
</form>
@endif



<hr class="redhr">
<div class=" col-md-12" style="text-align: center;"> 
	<a class="btn btn-primary" href="{{ route('clerkbacknotes',$inspectionid->college->id) }}">View Backnotes</a>
	&nbsp;&nbsp;&nbsp;&nbsp;
	<a class="btn btn-primary" href="{{ route('clerkviewinspectionpdf',$inspectionid->id) }}">Download PDF</a>
	@if($inspectionid->attachment)
	&nbsp;&nbsp;&nbsp;&nbsp;
	<a class="btn btn-primary" href="{{ $inspectionid->attachment }}">Download Attachment</a>
	@endif
	@if(!$inspectionid->is_forwarded_to_dean)
	&nbsp;&nbsp;&nbsp;&nbsp;
	<button type="button" style="display: none;" id="forwardbtn" class="btn btn-success" data-toggle="modal" data-target="#myModal">
		Forward To Dean
	</button>
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog  modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
				</div> 
				<div class="modal-body">
					Are You Sure You Want To Forward This Inspection?
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<a class="btn btn-success" href="{{ route('clerkviewinspection',$inspectionid->id) }}"
						onclick="event.preventDefault();
						document.getElementById('forward-to-dean').submit();">
						Forward To Dean
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	
	function viewbuttons() {
		var remarks = document.getElementById("remarks").value;
		if (remarks == '') {
			document.getElementById("forwardbtn").style.display = "none";
		}
		else {
			document.getElementById("forwardbtn").style.display = "inline";
		}
	}
</script>
@else
</div>
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
				{{ $inspection->college->form->college_name }}
			</label>
		</td>
		<td>
			<label>
				{{ $inspection->inspector->user->fullname() }}
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
