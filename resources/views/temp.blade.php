<table border="1">
<tr style="font-weight:bold;">
@foreach($keys as $key)
	<td>
		{{ $key }}
	</td>
@endforeach
</tr>
@foreach($users as $user)
<tr>
@foreach($keys as $key)
	<td>
		{{ $user[$key] }}
	</td>
@endforeach
</tr>
@endforeach
</table>