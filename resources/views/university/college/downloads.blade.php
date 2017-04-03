@extends('templates.college.main',['title' => 'Downloads'])
@section('heading')
Downloads Section
@endsection
@section('content')
@if(!empty($downloads))

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
					Download
				</label>
			</h4>
		</td>
	</tr>


	<?php $sr = 1; ?>
@foreach($downloads as $name => $link)
<tr style="line-height:30px;">
		<td>
			<label>({{ $sr++ }})</label>
		</td>
		<td>
			<label>
				{{ $name }}
			</label>
		</td>
		<td>
			<a class="btn btn-primary btn-xs" href="{{ $link }}" >Download</a>
		</td>
	</tr>



@endforeach
</table>



@else
<div class="alert alert-info">
	<p>
		Nothing To Download
	</p>
</div>

@endif
@endsection