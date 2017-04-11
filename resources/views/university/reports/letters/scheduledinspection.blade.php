@if(!empty($assignment))
<table width="100%">
	<tbody>
		
			<tr>
				<td width="60%">{!! punjabi_alternate("( ਰਜਿਸਟਰਡ )")!!}</td>
				<td style="text-align: right;" colspan="4" width="40%">ਨੰ {{ $assignment->college->form->ref_id }}{!! punjabi_alternate("  / ਕਾਲਜ/ਸ-4<br /><br/> ਮਿਤੀ")!!} {{ $assignment->created_at->format('d-m-Y') }}</td>
			</tr>
			<tr>
				<td colspan="5">
					<p style="text-align: left;">{!! punjabi_alternate("ਪ੍ਰਿੰਸੀਪਲ,")!!}</p>
					<p style="text-align: left;">{{ $assignment->college->form->college_name }},</p>
					<p style="text-align: justify;">{!! punjabi_alternate("ਵਿਸ਼ਾ : ਕਾਲਜ ਵਿਖੇ ( ਸੈਸ਼ਨ 2018-19 ) ਤੋਂ ")!!}{{ $assignment->college->form->courses }}{!! punjabi_alternate(" ਕੋਰਸ ਸ਼ੁਰੂ ਕਰਨ ਸਬੰਧੀ ।")!!}</p>
					<p style="text-align: left;">{!! punjabi_alternate("ਸ੍ਰੀਮਾਨ ਜੀ,")!!}</p>
					<p style="text-align: justify; ">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;{!! punjabi_alternate(" ਉਪਰੋਕਤ ਵਿਸ਼ੇ ਸਬੰਧੀ ਡੀਨ, ਕਾਲਜ ਵਿਕਾਸ ਕੌਂਸਲ ਵੱਲੋਂ ਹੋਏ ਆਦੇਸ਼ਾਂ ਅਨੁਸਾਰ ਸੂਚਿਤ ਕੀਤਾ ਜਾਂਦਾ ਹੈ ਕਿ ਕਾਲਜ ਵਿਖੇ ( ਸੈਸ਼ਨ 2018-19 ) ਤੋਂ ")!!}{{ $assignment->college->form->courses }}{!! punjabi_alternate(" ਕੋਰਸ ਸ਼ੁਰੂ ਕਰਨ ਸਬੰਧੀ ਉਪਲਬਧ ਸਹੂਲਤਾਂ ਦਾ ਜਾਇਜ਼ਾ ਲੈਣ ਹਿੱਤ ਯੂਨੀਵਰਸਿਟੀ ਵੱਲੋਂ ਗਠਿਤ ਕਮੇਟੀ ਮੁਆਇਨਾ ਕਰਨ ਲਈ ਮਿਤੀ (  ")!!}{{ $assignment->schedule->date->format('d-m-Y') }} ){!! punjabi_alternate(" ( ਸਵੇਰੇ 11:30) ਵਜੇ ਕਾਲਜ ਵਿਖੇ ਪੁੱਜ ਰਹੀ ਹੈ। ਇਸ ਸਬੰਧੀ ਲੋੜੀਂਦੀ ਸੂਚਨਾ ਅਤੇ ਦਸਤਾਵੇਜ਼ ਤਿਆਰ ਕਰਕੇ ਰੱਖਣ ਦੀ ਖੇਚਲ ਕਰਨੀ। ਇਸ ਮੰਤਵ ਲਈ ਕਮੇਟੀ ਦੇ ਮੈਂਬਰ ਸਹਿਬਾਨ 2000 ਰੁਪਏ ਪ੍ਰਤੀ ਮੈਂਬਰ ਦੇ ਹਿਸਾਬ ਨਾਲ ਸੇਵਾਫਲ ਅਤੇ ਕਾਰ ਰਾਹੀਂ ਟੀ.ਏ. ਦੀ ਅਦਾਇਗੀ ਯੂਨੀਵਰਸਿਟੀ ਨਿਯਮਾਂ/ਫੈਸਲੇ ਅਨੁਸਾਰ ( 10 ਰੁਪਏ ਪ੍ਰਤੀ ਕਿਲੋਮੀਟਰ ) ਮੌਕੇ ਤੇ ਹੀ ਕਮੇਟੀ ਦੇ ਕਨਵੀਨਰ ਸਹਿਬਾਨ ਕਰ ਦਿੱਤੀ ਜਾਵੇ। ਜੇਕਰ ਕਮੇਟੀ ਵੱਲੋਂ ਸਫ਼ਰ ਦੌਰਾਨ ਟੋਲ ਟੈਕਸ ਭਰਿਆ ਜਾਂਦਾ ਹੈ ਤਾਂ ਇਸ ਦੀ ਵੀ ਅਦਾਇਗੀ ਕੀਤੀ ਜਾਵੇ। ਇਹ ਵੀ ਸੂਚਿਤ ਕੀਤਾ ਜਾਂਦਾ ਹੈ ਕਿ ਯੂਨੀਵਰਸਿਟੀ ਵੱਲੋਂ ਨਿਰਧਾਰਿਤ 2000 ਰੁਪਏ ਪ੍ਰਤੀ ਮੈਂਬਰ ਸੇਵਾਫਲ ਦੀ ਅਦਾਇਗੀ ਮੈਂਬਰ ਸਹਿਬਾਨ ਦੇ ਨਾਮ ਜਾਰੀ ਅਕਾਉਂਟ ਪੇ ਚੈੱਕ ਰਾਂਹੀ ਕੀਤੀ ਜਾਵੇ ਅਤੇ ਇਸ ਸਬੰਧੀ ਮੈਂਬਰ ਸਹਿਬਾਨ ਤੋਂ ਰਿਸੀਵਿੰਗ ਪ੍ਰਾਪਤ ਕੀਤੀ ਜਾਵੇ।")!!}</p><br/>
				</td>
			</tr>
			<tr>
				<td style="text-align: right;" colspan="5">{!! punjabi_alternate("ਵਿਸ਼ਵਾਸ ਪਾਤਰ,<br /><br />ਸਹਾਇਕ ਰਜਿਸਟਰਾਰ ( ਕਾਲਜਾਂ )")!!}<br /></td>
			</tr>
			<tr>
				<td style="text-align: left;" width="50%">{!! punjabi_alternate("ਪਿੱਠ ਅੰਕਣ ਨੰ . . . . . . . / ਕਾਲਜ / ਸ - 4")!!}</td>
				<td style="text-align: right;" colspan="4" width="50%">{!! punjabi_alternate("ਮਿਤੀ")!!}{{ $assignment->created_at->format('d-m-Y') }}</td>
			</tr>
			<tr>
				<td colspan="5"><br />
					<p style="text-align: justify;">{!! punjabi_alternate("&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ਉਪਰੋਕਤ ਦਾ ਉਤਾਰਾ ਹੇਠ ਲਿਖੀਆਂ ਸੂਚਨਾ ਅਤੇ ਅਗਲੇਰੀ ਕਾਰਵਾਈ ਹਿੱਤ ਭੇਜਦੇ ਹੋਏ ਬੇਨਤੀ ਕੀਤੀ ਜਾਂਦੀ ਹੈ ਕਿ ਉਪਰੋਕਤ ਵਿਸ਼ੇ ਸਬੰਧੀ ਨਿਰਧਾਰਿਤ ਮਿਤੀ/ਸਮੇਂ ਅਨੁਸਾਰ ਕਾਲਜ ਦਾ ਮੁਆਇਨਾ ਕਰਨ ਦੀ ਖੇਚਲ ਕਰਨੀ। ਕਮੇਟੀ ਦੇ ਕਨਵੀਨਰ ਬੇਨਤੀ ਕੀਤੀ ਜਾਂਦੀ ਹੈ ਕਿ ਉਹ ਆਪਣੀਆਂ ਟਿੱਪਣੀਆਂ/ਸਿਫ਼ਾਰਸ਼ਾਂ ਸਪੱਸ਼ਟ ਤੌਰ ਤੇ ਦੋ-ਤਿੰਨ ਦਿਨਾਂ ਦੇ ਅੰਦਰ-ਅੰਦਰ ਭੇਜਣ ਦੀ ਖੇਚਲ ਕਰਨੀ ਜੀ:")!!}</p>



					<p >&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;1. {{ $assignment->teacher->user->fullname() }}, {{ $assignment->teacher->department->name }} (Convener) ( {{ $assignment->teacher->user->mobile }} )</p>

					<?php $sr = 2; ?>
					@foreach($assignment->members as $member)
					<p >&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;{{$sr++}}. {{ $member->teacher->user->fullname() }}, {{ $member->teacher->department->name }} ( {{ $member->teacher->user->mobile }} )</p>
					@endforeach
					<br/>
				</td>
			</tr>
			<tr>
				<td width="10%">
					<p>ਨੋਟ-</p>
				</td>
				<td width="10%">1.&nbsp;</td>
				<td colspan="3" width="80%">
					<p>{!! punjabi_alternate("ਕਮੇਟੀ ਦੇ ਕਨਵੀਨਰ ਬੇਨਤੀ ਕੀਤੀ ਜਾਂਦੀ ਹੈ ਕਿ ਉਹ ਆਪਣੇ ਪੱਧਰ ਤੇ ਕਾਰ ਦਾ ਪ੍ਰਬੰਧ ਕਰਨ ਦੀ ਖੇਚਲ ਕਰਨ ਜੀ ਅਤੇ ਨਾਲ ਹੀ ਮੁਆਇਨਾ ਕਮੇਟੀ ਦੀ ਰਿਪੋਰਟ 2-3 ਦਿਨਾਂ ਦੇ ਅੰਦਰ ਅੰਦਰ ਡੀਨ,ਕਾਲਜ ਵਿਕਾਸ ਕੌਂਸਲ ਦੇ ਦਫਤਰ ਭੇਜਣ ਦੀ ਖੇਚਲ ਕਰਨ ਜੀ।")!!}</p>
				</td>
			</tr>
			<tr><td width="10%">
				<p>&nbsp;</p>
			</td>
			<td width="10%">2.&nbsp;</td>
			<td colspan="3" width="80%">
				<p>{!! punjabi_alternate("ਮੁਆਇਨੇ ਲਈ ਸੇਵਾਫਲ ਅਤੇ ਕਾਰ ਰਾਹੀਂ ਸਫਰ ਕਰਨ ਲਈ ਟੀ.ਏ ਡੀ ਅਦਾਇਗੀ ਕਾਲਜ ਪਾਸੋਂ ਮੌਕੇ ਤੇ ਹੀ ਪ੍ਰਾਪਤ ਕੀਤੀ ਜਾਵੇ।")!!}</p>
				<p>ਕਾਲਜ ਫੋਨ ({{ $assignment->college->form->principal_phone_number }} ,{!! punjabi_alternate("ਪ੍ਰਿੰਸੀਪਲ ) ਰਾਹੀਂ ਮੁਆਇਨੇ ਦੀ ਮਿਤੀ/ਸਮੇਂ ਬਾਰੇ ਸੂਚਿਤ ਕਰ ਦਿੱਤਾ ਗਿਆ ਹੈ ਜੀ।")!!}</p><br/>
			</td>
		</tr>
		<tr>
			<td style="text-align: right;" colspan="5">{!! punjabi_alternate("ਸਹਾਇਕ ਰਜਿਸਟਰਾਰ ( ਕਾਲਜਾਂ )")!!}</td>
		</tr>
	</tbody>
</table>
@else
<p>Nothing To Display</p>
@endif
