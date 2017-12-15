@extends('templates.teacher.main',['title' => 'View Inspection'])

@section('heading')
View Inspection
@endsection
@section('content')
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
	<label>Inspection Submitted on {{ $inspectionid->created_at->toFormattedDateString() }}
	</div>
	<hr class="redhr">
	<div class=" col-md-12" style="text-align: center;"> 
		<a class="btn btn-primary" href="{{ route('teacherviewinspectionpdf',$inspectionid->id) }}">Download PDF</a> 
		@if($inspectionid->attachment)
		&nbsp;&nbsp;&nbsp;&nbsp;
		<a class="btn btn-primary" href="{{ $inspectionid->attachment }}">Download Attachment</a>
		@endif
	</div>


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
					<a class="btn btn-primary btn-xs" href="{{ route('teacherviewinspection',$inspection->id) }}">View Inspection</a>

				</label>
			</td>
		</tr>
		@endforeach

	</table>

	@endif

	@else
	<div class="alert alert-info">
		<p>
			You Haven't Done Any Inspections Yet
		</p>
	</div>

	@endif

	@endsection
