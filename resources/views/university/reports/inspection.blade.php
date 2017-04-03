@if(!empty($categories))
@if(!empty($inspectionid))
<table width="100%" border="1px" cellpadding="5px">
	<tr style="line-height:30px;">
		<td width="10%">
			<h4>
				<label>S.No.</label>
			</h4>

		</td>
		<td width="35%">
			<h4>
				<label>Descrepencies</label>
			</h4>
		</td>
		<td width="20%">
			<h4>
				<label>Is Discrepancy?</label>
			</h4>
		</td>
		<td width="35%" >
			<h4>
				<label>Remarks</label>
			</h4>
		</td>
	</tr>
	@foreach($categories as $category)
	<tr>
		<td colspan="4">
			
			{{ $category->name }}
			
		</td>
	</tr>
	<?php $sr = 1; ?>
	@foreach($inspectionid->discrepancies as $discrepancy)
	@if($discrepancy->listname->id_discrepancy_category == $category->id)
	<tr style="line-height:30px;">
		<td width="10%">
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
	<tr>

		<td colspan="4">
			<br/><p style="font-size: 15px">Final Remarks</p>
		</td>
	</tr>
	<tr>
		<td colspan="4">
			<p>
				{!! nl2br($inspectionid->final_remarks) !!}
			</p>
		</td>
	</tr>
</table>
@if($inspectionid->attachment)
<p style="text-align: center;">
	Attachment:- {{ $inspectionid->attachment }}
</p>
@endif
@else
<p>Nothing To Display</p>
@endif
@else
<p>Nothing To Display</p>
@endif

