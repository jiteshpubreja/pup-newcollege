@extends('templates.clerk.main',['title' => 'View Backnotes'])

@section('heading')
View Backnotes
@endsection
@section('content')
@if(!empty($colleges))
@if(!empty($collegeid))
<table class="table table-striped">
	<thead>
		<tr>
			<th width="20%">Backnote Details</th>
			<th>Remarks</th>        
		</tr>
	</thead>
	<tbody>
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
				<br/>
				<a class="btn btn-primary btn-xs" href="{{ route('clerkviewapplication',$backnote->college->form->id) }}" target="_blank">View Application</a>
				@elseif($backnote->purpose == "inspection")
				<span class='label label-success'>{{ $backnote->ref_id }}</span>
				<br/>
				<br/>
				<a class="btn btn-success btn-xs" href="{{ route('clerkviewinspection',$backnote->id_inspection) }}" target="_blank">View Inspection no. {{ $backnote->id_inspection }}</a>
				@endif
				<br/>
				<br/>
				<small>{{ $backnote->created_at->format('d-M-Y g:ia') }}</small>
			</td>
			<td>{!! nl2br($backnote->remarks) !!}</td>
		</tr>
		@endforeach
	</tbody>
</table>
<div class=" col-md-12" style="text-align: center;"> 
	<hr class="redhr">
	<a class="btn btn-primary" href="{{ route('clerkbacknotespdf',$collegeid->id) }}">Download PDF</a>
</div>
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
					Email
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
					View Backnotes
				</label>
			</h4>
		</td>
	</tr>
	<?php $sr = 1; ?>
	@foreach($colleges as $college)
	@if($college->backnotes->count())
	<tr style="line-height:30px;">
		<td>
			<label>({{ $sr++ }})</label>
		</td>
		<td>
			<label>
				@if($college->form)
				{{ $college->form->college_name }}
				@else
				{{ $college->user->fullname() }}
				@endif
			</label>
		</td>
		<td>
			<label>
				{{ $college->user->email }}
			</label>
		</td>
		<td>
			<label>
				@if($college->form)
				<a class="btn btn-primary btn-xs" href="{{ route('clerkviewapplication',$college->form->id) }}">View Application
				</a>
				@else
				No Application Found
				@endif
			</label>
		</td>
		<td>
			<label>
				<a class="btn btn-primary btn-xs" href="{{ route('clerkbacknotes',$college->id) }}">View Backnotes</a>
			</label>
		</td>
	</tr>
	@endif
	@endforeach
</table>
@endif
@endif
@endsection
