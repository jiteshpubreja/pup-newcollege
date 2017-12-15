@if(!empty($colleges))
<table width="100%">
	@if($request=='allcollege')
	<tr style="line-height:30px;">
		<td colspan="4" style="text-align: center;">
			<h3>List of College Applicants</h3>
		</td>
	</tr>
	<tr style="line-height:30px;">
		<td width="10%">
			<h4>
				<label>S.No.
				</label>
			</h4>
		</td>
		<td width="35%">
			<h4 >
				<label>College
				</label>
			</h4>
		</td>
		<td width="35%">
			<h4 >
				<label>Email
				</label>
			</h4>
		</td>
		<td width="20%">
			<h4 >
				<label>Date (Application)
				</label>
			</h4>
		</td>
	</tr>
	@elseif( $request=='loigranted')
	<tr style="line-height:30px;">
		<td colspan="4" style="text-align: center;">
			<h3>List of College Applicants with LOI Granted</h3>
		</td>
	</tr>
	<tr style="line-height:30px;">
		<td width="8%">
			<h4>
				<label>S.No.
				</label>
			</h4>
		</td>
		<td width="30%">
			<h4 >
				<label>College
				</label>
			</h4>
		</td>
		<td width="28%">
			<h4 >
				<label>Email
				</label>
			</h4>
		</td>
		<td width="18%">
			<h4 >
				<label>Date (Application)
				</label>
			</h4>
		</td>
		<td width="16%">
			<h4 >
				<label>Date (LOI Grant)
				</label>
			</h4>
		</td>
	</tr>
	
	@elseif( $request=='loinongranted')
	<tr style="line-height:30px;">
		<td colspan="4" style="text-align: center;">
			<h3>List of College Applicants with LOI Non Granted</h3>
		</td>
	</tr>
	<tr style="line-height:30px;">
		<td width="8%">
			<h4>
				<label>S.No.
				</label>
			</h4>
		</td>
		<td width="30%">
			<h4 >
				<label>College
				</label>
			</h4>
		</td>
		<td width="28%">
			<h4 >
				<label>Email
				</label>
			</h4>
		</td>
		<td width="18%">
			<h4 >
				<label>Date (Application)
				</label>
			</h4>
		</td>
	</tr>
	
	
	@endif
	<?php $sr = 1; ?>
	@if($request=='allcollege')
	@foreach($colleges as $college)
	@if($college->form)
	<tr style="line-height:20px;">
		<td>
			<label>({{ $sr++ }})</label>
		</td>
		<td>
			<label>{{ $college->form->college_name }}
			</label>
		</td>
		<td>
			<label>{{ $college->user->email }}
			</label>
		</td>
		<td>
			<label>{{ $college->form->created_at->toFormattedDateString() }}</label>
		</td>
	</tr>	
	@endif
	@endforeach
	@elseif($request=='loigranted')
	@foreach($colleges as $college)
	@if($college->form)
	@if($college->form->is_loi_granted)
	<tr style="line-height:20px;">
		<td>
			<label>({{ $sr++ }})</label>
		</td>
		<td>
			<label>{{ $college->form->college_name }}
			</label>
		</td>
		<td>
			<label>{{ $college->user->email }}
			</label>
		</td>
		<td>
			<label>{{ $college->form->created_at->toFormattedDateString() }}</label>
		</td>
		<td>
			<label>{{ $college->form->updated_at->toFormattedDateString() }}</label>
		</td>
	</tr>	
	@endif
	@endif
	@endforeach
	@elseif($request=='loinongranted')
	@foreach($colleges as $college)
	@if($college->form)
	@if(!$college->form->is_loi_granted)
	<tr style="line-height:20px;">
		<td>
			<label>({{ $sr++ }})</label>
		</td>
		<td>
			<label>{{ $college->form->college_name }}
			</label>
		</td>
		<td>
			<label>{{ $college->user->email }}
			</label>
		</td>
		<td>
			<label>{{ $college->form->created_at->toFormattedDateString() }}</label>
		</td>		
	</tr>	
	@endif
	@endif
	@endforeach
	@elseif($request=='discrepancies')
	<?php $clg = 1;?>
	@foreach($colleges as $college)
	<?php $srr = 1;?>
	@if($college->form)
	@if($college->latestinspection)
	@if($clg++>1)
	<br pagebreak="true"/>
	@endif
	<tr style="line-height:30px;">
		<td colspan="3">
			<h3>Latest Inspection Report for {{ $college->form->college_name }}(College)</h3>
		</td>
		<td  style="text-align: right;">
			<h4>Dated: {{ $college->latestinspection->created_at->toFormattedDateString() }}</h4>
		</td>
	</tr>
	
	<tr style="line-height:20px;">
		<td width="10%">
			<h4>
				<label>S.No.
				</label>
			</h4>
		</td>
		<td width="60%">
			<h4 >
				<label>Discrepancy Name
				</label>
			</h4>
		</td>
		<td width="15%">
			<h4>
				<label>Is Discrepancy
				</label>
			</h4>
		</td>
		<td width="15%">
			<h4 >
				<label>Remarks
				</label>
			</h4>
		</td>
	</tr>
	@foreach($categories as $category)
	<hr>
	<tr style="line-height:20px;">
		<td>
			<h4>({{$srr++}})</h4>
		</td>
		<td>
			<h4>{{ $category->name }}</h4>
		</td>
	</tr>
	<hr>
	<?php $sr = 1; ?>
	@foreach($college->latestinspection->discrepancies as $list)
	@if($list->listname->id_discrepancy_category == $category->id)
	<tr style="line-height:17px;">
		<td style="text-align: center;">
			({{ $sr++ }})
		</td>
		<td style="text-align: left;">
			
			{{ $list->listname->name }}
			
		</td>
		<td>
			{{ $list->is_discrepancy ? "Yes":"No" }}
			
		</td>
		<td>
			{{ $list->remarks ? $list->remarks : "{Not Provided}" }}
			
		</td>
	</tr>
	@endif

	@endforeach
	
	@endforeach
	<br/>&nbsp;<br/>
	<tr style="line-height:20px;background-color: darkgray ;color: white;" >
		<td>&nbsp;</td>
		<td colspan="3">
			<h4>final remarks</h4>
		</td>
	</tr>
	<br/>
	<tr>
		<td>&nbsp;</td>
		<td colspan="3">
			
			<p>
				{!! nl2br($college->latestinspection->final_remarks) !!}
			</p>
		</td>
	</tr>
	@endif
	@endif
	@endforeach
	
	@endif
</table>
@else
<p> nothing to display</p>
@endif
