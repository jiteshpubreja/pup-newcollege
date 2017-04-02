@if(!empty($assignment))
<table style=" font-family: anmollipi;">
	<tbody>
		<tr>
			<td colspan="5">
				<p style="text-align: center;"><h2><strong>pMjwbI XUnIvristI, pitAwlw</strong></h2>
					<br/>( 1961 dy pMjwb AYkt nMbr 35 qihq sQwpq)<br />( kwlj sYkSn )</p><br/>
				</td>
			</tr>
			<tr>
				<td width="60%">( rijstrf )</td>
				<td style="text-align: right;" colspan="4" width="40%">nM <span  style="font-family: helvetica;">{{ $assignment->college->form->ref_id }}</span> / kwlj/s-4<br /><br/> imqI {{ $assignment->created_at->format('d-m-Y') }}</td>
			</tr>
			<tr>
				<td colspan="5">
					<p style="text-align: left;">ipRMsIpl,</p>
					<p style="text-align: left; font-family: helvetica;">{{ $assignment->college->form->college_name }},</p>
					<p style="text-align: justify;">ivSw : kwlj ivKy ( sYSn 2018-19 ) qoN <span  style="font-family: helvetica;">{{ $assignment->college->form->courses }}</span> kors SurU krn sbMDI [</p>
					<p style="text-align: left;">SRImwn jI,</p>
					<p style="text-align: justify; ">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; auprokq ivSy sbMDI fIn, kwlj ivkws kONsl v~loN hoey AwdySW Anuswr sUicq kIqw jWdw hY ik kwlj ivKy ( sYSn 2018-19 ) qoN <span  style="font-family: helvetica;">{{ $assignment->college->form->courses }}</span> kors SurU krn sbMDI auplbD shUlqW dw jwiezw lYx ih~q XUnIvristI v~loN giTq kmytI muAwienw krn leI imqI (  {{ $assignment->schedule->date->format('d-m-Y') }} ) &fnof; ( svyry 11:30) vjy kwlj ivKy pu~j rhI hY[ ies sbMDI loVINdI sUcnw Aqy dsqwvyz iqAwr krky r~Kx dI Kycl krnI[ ies mMqv leI kmytI dy mYNbr sihbwn &fnof; 2000 rupey pRqI mYNbr dy ihswb nwl syvwPl Aqy kwr rwhIN tI.ey. dI AdwiegI XUnIvristI inXmW/&amp;Ysly Anuswr ( 10 rupey pRqI iklomItr ) mOky qy hI kmytI dy knvInr sihbwn &fnof; kr id~qI jwvy[ jykr kmytI v~loN s&amp;r dOrwn tol tYks BirAw jWdw hY qW ies dI vI AdwiegI kIqI jwvy[ ieh vI sUicq kIqw jWdw hY ik XUnIvristI v~loN inrDwirq 2000 rupey pRqI mYNbr syvwPl dI AdwiegI mYNbr sihbwn dy nwm jwrI AkwauNt py cY~k rWhI kIqI jwvy Aqy ies sbMDI mYNbr sihbwn qoN irsIivMg pRwpq kIqI jwvy[</p><br/>
				</td>
			</tr>
			<tr>
				<td style="text-align: right;" colspan="5">ivSvws pwqr, <br /><br />shwiek rijstrwr ( kwljW )<br /></td>
			</tr>
			<tr>
				<td style="text-align: left;" width="50%">ip~T AMkx nM . . . . . . . / kwlj / s - 4</td>
				<td style="text-align: right;" colspan="4" width="50%">&nbsp;imqI {{ $assignment->created_at->format('d-m-Y') }}</td>
			</tr>
			<tr>
				<td colspan="5"><br />
					<p style="text-align: justify;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; auprokq dw auqwrw hyT ilKIAW &fnof; sUcnw Aqy AglyrI kwrvweI ih~q Byjdy hoey bynqI kIqI jWdI hY ik auprokq ivSy sbMDI inrDwirq imqI/smyN Anuswr kwlj dw muAwienw krn dI Kycl krnI[ kmytI dy knvInr &fnof; bynqI kIqI jWdI hY ik auh AwpxIAW it~pxIAW/is&amp;wrSW sp~St qOr qy do-iqMn idnW dy AMdr-AMdr Byjx dI Kycl krnI jI:</p>



					<p style="font-family: helvetica;">&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;1. Dr. {{ $assignment->teacher->user->fullname() }}, {{ $assignment->teacher->department->name }} (Convener) ( {{ $assignment->teacher->user->mobile }} )</p>

					<?php $sr = 2; ?>
					@foreach($assignment->members as $member)
					<p style="font-family: helvetica;">&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;{{$sr++}}. Dr. {{ $member->teacher->user->fullname() }}, {{ $member->teacher->department->name }} ( {{ $member->teacher->user->mobile }} )</p>
					@endforeach
					<br/>
				</td>
			</tr>
			<tr>
				<td width="10%">
					<p>not-&nbsp;</p>
				</td>
				<td width="10%">1.&nbsp;</td>
				<td colspan="3" width="80%">
					<p>kmytI dy knvInr &fnof; bynqI kIqI jWdI hY ik auh Awpxy p~Dr qy kwr dw pRbMD krn dI Kycl krn jI Aqy nwl hI muAwienw kmytI dI irport 2-3 idnW dy AMdr AMdr fIn,kwlj ivkws kONsl dy d&amp;qr Byjx dI Kycl krn jI[</p>
				</td>
			</tr>
			<tr><td width="10%">
				<p>&nbsp;</p>
			</td>
			<td width="10%">2.&nbsp;</td>
			<td colspan="3" width="80%">
				<p>muAwieny leI syvwPl Aqy kwr rwhIN sPr krn leI tI.ey fI AdwiegI kwlj pwsoN mOky qy hI pRwpq kIqI jwvy[</p>
				<p>kwlj &fnof; Pon ( {{ $assignment->college->form->principal_phone_number }} ,ipRMsIpl ) rwhIN muAwieny dI imqI/smyN bwry sUicq kr id~qw igAw hY jI[</p><br/>
			</td>
		</tr>
		<tr>
			<td style="text-align: right;" colspan="5">shwiek rijstrwr ( kwljW )</td>
		</tr>
	</tbody>
</table>
</body>
</html>
@else
<p>Nothing To Display</p>
@endif
