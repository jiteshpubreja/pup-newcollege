@if(!empty($collegeid))
@if($collegeid->form)
<h3 style="text-align: center;">Office Backnotes for {{ $collegeid->form->college_name }}</h3>
@else
<h3 style="text-align: center;">Office Backnotes</h3>
@endif
<table width="100%" border="1px" cellpadding="5px">
		<tr>
			<th width="30%">Backnote Details</th>
			<th width="70%">Remarks</th>        
		</tr>
		@foreach($collegeid->backnotes as $backnote)

		<tr {{ $backnote->user_type == "dean" ? "class=\"active\"" : "" }}>
			<td><strong>{{ $backnote->user->fullname() }}</strong>
				<br/>
				{{ role($backnote->user_type) }}
				<br/>
				@if($backnote->purpose == "application-reject")
				<span class='label label-danger'>{{ $backnote->ref_id }}</span>
				<br/>
				<span class='label label-danger'>Application Rejected</span>
				@elseif($backnote->purpose == "application")
				<span class='label label-primary'>{{ $backnote->ref_id }}</span>
				<br/>
				<span class='label label-primary'>Application {{ $backnote->user_type == "dean" ? "Approved" : "Forwarded" }}</span>
				@elseif($backnote->purpose == "inspection")
				<span class='label label-success'>{{ $backnote->ref_id }}</span>
				<br/>
				<span class='label label-success'>Inspection {{ $backnote->user_type == "dean" ? "Approved" : "Forwarded" }}</span>
				@endif
				<br/>
				<br/>
				<small>{{ $backnote->created_at->format('d-M-Y g:ia') }}</small>
			</td>
			<td>{!! nl2br($backnote->remarks) !!}</td>
		</tr>
		@endforeach
</table>
@endif
