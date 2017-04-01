@extends('templates.dean.main',['title' => 'View Drafts'])
@section('heading')
View Drafts
@endsection
@section('content')
@if(!empty($payments))
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
					President
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
					Purpose
				</label>
			</h4>
		</td>
		<td>
			<h4 >
				<label>
					Amount
				</label>
			</h4>
		</td>
		<td>
			<h4 >
				<label>
					Draft No.
				</label>
			</h4>
		</td>
		<td>
			<h4 >
				<label>
					Bank Name
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
					Document
				</label>
			</h4>
		</td>
		<td>
			<h4 >
				<label>
					Approval
				</label>
			</h4>
		</td>
	</tr>


	<?php $sr = 1; ?>
	@foreach($payments as $payment)
	<tr style="line-height:30px;">
		<td>
			<label>({{ $sr++ }})</label>
		</td>
		<td>
			<label>
				{{ $payment->president_name }}
			</label>
		</td>
		<td>
			<label>
				{{ $payment->college->user->email }}
			</label>
		</td>
		<td>
			<label>
				{{ $payment->purpose }}
			</label>
		</td>
		<td>
			<label>
				{{ $payment->amount }}
			</label>
		</td>
		<td>
			<label>
				{{ $payment->draft_no }}
			</label>
		</td>
		<td>
			<label>
				{{ $payment->bank_name }}
			</label>
		</td>
		<td>
			<label>
				{{ dated_format($payment->dated) }}
			</label>
		</td>
		<td>
			<a class="btn btn-primary btn-xs" href="{{ $payment->draft_image }}" >Download</a>
		</td>
		<td>
			<label>
				Approved By {{ \App\Clerk::find($payment->verified_by)->user->fullname() }}
			</label>



		</td>
	</tr>
	@endforeach

</table>
@else
<div class="alert alert-info">
	<p>
		No Drafts Found.
	</p>
</div>
@endif
@endsection




