@if(!empty($form))
<table border="1px" cellpadding="5" >
	<tbody>
		<tr>
			<td style="text-align: center;" width="10%">&nbsp;S.no</td>
			<td style="text-align: center;" width="90%" colspan="2"><h4>Reference ID: {{ $form->ref_id }}</h4></td>
		</tr>
		<tr>
			<td style="text-align: center;" width="10%">1.</td>
			<td width="60%">College Name</td>
			<td width="30%"><p>{{ $form->college_name }}</p></td>
		</tr>
		<tr>
			<td style="text-align: center;" width="10%">2.</td>
			<td width="60%">Session(From which year to start)</td>
			<td width="30%">{{ $form->session }}</td>
		</tr>
		<tr>
			<td style="text-align: center;" width="10%">3.</td>
			<td width="60%">Courses To be start</td>
			<td width="30%">{{ $form->courses }}</td>
		</tr>
		<tr>
			<td style="text-align: center;" width="10%">4.</td>
			<td width="60%">Will it be a Co-Education?</td>
			<td width="30%">{{ $form->co_education?"Yes":"No" }}</td>
		</tr>
		<tr>
			<td style="text-align: center;" width="10%">5.</td>
			<td colspan="2" width="90%">Give details of following facilities:</td>
		</tr>
		<tr>
			<td style="text-align: center;" width="10%">&nbsp;</td>
			<td colspan="2" width="90%">
				<table cellpadding="5">
					<tbody>
						<tr>
							<td style="text-align: center;" width="10%">I</td>
							<td width="57%">Railway Station</td>
							<td width="33%">{{ $form->railway_station }}</td>
						</tr>
						<tr>
							<td style="text-align: center;" width="10%">II</td>
							<td width="57%">Bus Stand</td>
							<td width="33%">{{ $form->bus_stand }}</td>
						</tr>
						<tr>
							<td style="text-align: center;" width="10%">III</td>
							<td width="57%">Post office</td>
							<td width="33%">{{ $form->post_office }}</td>
						</tr>
						<tr>
							<td style="text-align: center;" width="10%">IV</td>
							<td width="57%">Telegram office</td>
							<td width="33%">{{ $form->telegram }}</td>
						</tr>
						<tr>
							<td style="text-align: center;" width="10%">V</td>
							<td width="57%">Telephone of college</td>
							<td width="33%">{{ $form->college_phone_number }}</td>
						</tr>
						<tr>
							<td style="text-align: center;" width="10%">VI</td>
							<td width="57%">Telephone of Principal</td>
							<td width="33%">{{ $form->principal_phone_number }}</td>
						</tr>
						<tr>
							<td style="text-align: center;" width="10%">VII</td>
							<td width="57%">Telephone of President of managing comittee of college</td>
							<td width="33%">{{ $form->president_of_mgmt_committee }}</td>
						</tr>
						<tr>
							<td style="text-align: center;" width="10%">VIII</td>
							<td width="57%">Telephone of Secratory office</td>
							<td width="33%">{{ $form->secretary_office }}</td>
						</tr>
						<tr>
							<td style="text-align: center;" width="10%">IX</td>
							<td width="57%">Telephone of Principal House number</td>
							<td width="33%">{{ $form->principal_residence_phone }}</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
		<tr>
			<td style="text-align: center;" width="10%">6.</td>
			<td colspan="2" width="90%">Give following Building Details:</td>
		</tr>
		<tr>
			<td style="text-align: center;" width="10%">&nbsp;</td>
			<td colspan="2" width="90%">
				<table width="100%" cellpadding="5">
					<tbody>
						<tr>
							<td style="text-align: center;" width="10%">&nbsp;I</td>
							<td width="57%">&nbsp;Principal Office</td>
							<td width="33%">{{ $form->principal_office_building }}</td>
						</tr>

						<tr>
							<td style="text-align: center;" width="10%">&nbsp;II</td>
							<td width="57%">&nbsp;Classes Count</td>
							<td width="33%">{{ $form->classes_count }}</td>
						</tr>
						<tr>
							<td style="text-align: center;" width="10%">III&nbsp;</td>
							<td width="57%">&nbsp;Classes Size</td>
							<td width="33%">{{ $form->classes_size }}</td>
						</tr>
						<tr>
							<td style="text-align: center;" width="10%">IV&nbsp;</td>
							<td width="57%">&nbsp;Staff Room</td>
							<td width="33%">{{ $form->staff_room }}</td>
						</tr>
						<tr>
							<td style="text-align: center;" width="10%">V&nbsp;</td>
							<td width="57%">&nbsp;Common Room For Girls</td>
							<td width="33%">{{ $form->commonroom_for_girls }}</td>
						</tr>
						<tr>
							<td style="text-align: center;" width="10%">VI&nbsp;</td>
							<td width="57%">&nbsp;Common Room For Boys</td>
							<td width="33%">{{ $form->commonroom_for_boys }}</td>
						</tr>

						<tr>
							<td style="text-align: center;" width="10%">VII</td>
							<td width="57%">Reading Room</td>
							<td width="33%">{{ $form->reading_room?"Yes":"No" }}</td>
						</tr>
						<tr>
							<td style="text-align: center;" width="10%">&nbsp;</td>
							<td width="57%">Reading Room Size</td>
							<td width="33%">{{ $form->readingroom_size }}</td>
						</tr>
						<tr>
							<td style="text-align: center;" width="10%">VIII</td>
							<td width="57%">Periodical Room</td>
							<td width="33%">{{ $form->periodical_room?"Yes":"No" }}</td>
						</tr>
						<tr>
							<td style="text-align: center;" width="10%">&nbsp;</td>
							<td width="57%">Periodical Room Size</td>
							<td width="33%">{{ $form->periodical_room_size }}</td>
						</tr>
						<tr>
							<td style="text-align: center;" width="10%">IX</td>
							<td width="57%">Study Room For Staff</td>
							<td width="33%">{{ $form->studyroom_for_staff?"Yes":"No" }}</td>
						</tr>
						<tr>
							<td style="text-align: center;" width="10%">&nbsp;</td>
							<td width="57%">Study Room Staff Size</td>
							<td width="33%">{{ $form->studyroom_for_staff_size }}</td>
						</tr>

						<tr>
							<td style="text-align: center;" width="10%">X</td>
							<td width="57%">Science Laboratory</td>
							<td width="33%">{{ $form->science_lab?"Yes":"No" }}</td>
						</tr>
						<tr>
							<td style="text-align: center;" width="10%">&nbsp;</td>
							<td width="57%">Science Laboratory Size</td>
							<td width="33%">{{ $form->science_lab_size }}</td>
						</tr>
						<tr>
							<td style="text-align: center;" width="10%">XI</td>
							<td width="57%">Another Store Room</td>
							<td width="33%">{{ $form->another_store_room }}</td>
						</tr>
						<tr>
							<td style="text-align: center;" width="10%">XII</td>
							<td width="57%">water Supply</td>
							<td width="33%">{{ $form->water_supply?"Yes":"No" }}</td>
						</tr>
						<tr>
							<td style="text-align: center;" width="10%">XIII</td>
							<td width="57%">Electricity Supply</td>
							<td width="33%">{{ $form->electricity?"Yes":"No" }}</td>
						</tr>
						<tr>
							<td style="text-align: center;" width="10%">XIV</td>
							<td width="57%">Boys Washroom</td>
							<td width="33%">{{ $form->boys_washroom }}</td>
						</tr>
						<tr>
							<td style="text-align: center;" width="10%">XV</td>
							<td width="57%">Girls Washroom</td>
							<td width="33%">{{ $form->girls_washroom }}</td>
						</tr>
						<tr>
							<td style="text-align: center;" width="10%">XVI</td>
							<td width="57%">Another Details Of Building</td>
							<td width="33%">{{ $form->other_details }}</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
		<tr>
			<td style="text-align: center;" width="10%">7.</td>
			<td width="60%">Residence for principal OR Will managing comittee will arrange residence for principal(Within 1 km)? Or they will promised to do the same?</td>
			<td width="30%">{{ $form->residence_for_principal?"Yes":"No" }}</td>
		</tr>
		<tr>
			<td style="text-align: center;" width="10%">8.</td>
			<td width="60%">Does college have required furniture?</td>
			<td width="30%">{{ $form->required_furniture?"Yes":"No" }}</td>
		</tr>
		<tr>
			<td style="text-align: center;" width="10%">9.</td>
			<td colspan="2" width="90%">Give details of following Land Details: &nbsp;</td>
		</tr>
		<tr>
			<td style="text-align: center;" width="10%">&nbsp;</td>
			<td colspan="2" width="90%">
				<table width="100%" cellpadding="5">
					<tbody>
						<tr>
							<td style="text-align: center;" width="10%">&nbsp;I</td>
							<td width="57%">Land required for education 2500sq.mt.</td>
							<td rowspan="7" width="33%">{!! nl2br($form->land_details)!!}</td>
						</tr>
						<tr>
							<td style="text-align: center;" width="10%">II&nbsp;</td>
							<td width="57%">For Law,Information Technology Mangement and Arts/Science Degree college Land should be according to following:<br /> Inside Municipal corporation Area- 2Arcs<br /> Inside Municipal Comittee Area - 3Arcs<br /> Outside Municipal Comittee Area - 5Arcs</td>
						</tr>
						<tr>
							<td style="text-align: center;" width="10%">III&nbsp;</td>
							<td width="57%">Land Required inside Municipal Corporation and Municipal Comittee areas for girls Arts/Science Degree college should be 2Arcs and outside Municipal limit it should be 3Arcs &nbsp;</td>
						</tr>
						<tr>
							<td style="text-align: center;" width="10%">IV&nbsp;</td>
							<td width="57%">Land Required for Phyisical Education college inside or outside should be 5Arcs; &nbsp;</td>
						</tr>
						<tr>
							<td style="text-align: center;" width="10%">V&nbsp;</td>
							<td width="57%">Courses under AICTE should have land according to AICTE norms. For MBA 1Arcs, For MCA 1.5Arcs; &nbsp;</td>
						</tr>
						<tr>
							<td style="text-align: center;" width="10%">VI&nbsp;</td>
							<td width="57%">If Sociey/Trust have Land according to rules for 99years lease, then permission for opening college will be on this promise If during lease time lease agreement overs then due to this if admitted students and staff faces any problem then society/trust will be liable for the same; &nbsp;</td>
						</tr>

					</tbody>
				</table>
			</td>
		</tr>
		<tr>
			<td style="text-align: center;" width="10%">10.</td>
			<td width="60%">Does college had submitted or will submit the amount of endorsement fund in the form of F.D.R. payable to Dean,College Development Council, Punjabi University,Patiala (Details of Endorsement Fund decided by University is in Appendix-1)</td>
			<td width="30%">{{ $form->endorsement_fund?"Yes":"No" }}</td>
		</tr>
		<tr>
			<td style="text-align: center;" width="10%">&nbsp;</td>
			<td width="60%">Details of Endorsement Fund</td>
			<td width="30%">{{ $form->endorsement_fund_details }}</td>
		</tr>
		<tr>
			<td style="text-align: center;" width="10%">11.</td>
			<td width="60%">Does college has enough resources to maintain their working position?</td>
			<td width="30%">{{ $form->resources?"Yes":"No" }}</td>
		</tr>
		<tr>
			<td style="text-align: center;" width="10%">&nbsp;</td>
			<td width="60%">Explain with summary</td>
			<td width="30%">{{ $form->resources_detail }}</td>
		</tr>
		<tr>
			<td style="text-align: center;" width="10%">12.</td>
			<td width="60%">Does bank have any other amount on the name of college? Attach proofs.</td>
			<td width="30%">{{ $form->bank_balance?"Yes":"No" }}</td>
		</tr>
		<tr>
			<td style="text-align: center;" width="10%">13.</td>
			<td width="60%">Does college have provision of Rs. 25,000/- for Library Books for first year or they will arrange it?</td>
			<td width="30%">{{ $form->provision_of_25000?"Yes":"No" }}</td>
		</tr>
		<tr>
			<td style="text-align: center;" width="10%">&nbsp;</td>
			<td colspan="2" width="90%">
				<table width="100%" cellpadding="5">
					<tbody>
						<tr>
							<td style="text-align: center;" width="10%">&nbsp;</td>
							<td width="57%">&nbsp;similiarly Rs. 10,000/- will be spent for the same every year?</td>
							<td width="33%">{{ $form->every_year_10000?"Yes":"No" }}</td>
						</tr>
						<tr>
							<td style="text-align: center;" width="10%">&nbsp;</td>
							<td width="57%">&nbsp;Does college had spent any amount on books earlier ?</td>
							<td width="33%">{{ $form->any_other_amount?"Yes":"No" }}</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
		<tr>
			<td style="text-align: center;" width="10%">14.</td>
			<td width="60%">Does college has any Registered Managing Comittee?</td>
			<td width="30%">{{ $form->register_committee?"Yes":"No" }}</td>
		</tr>

		<tr>
			<td style="text-align: center;" width="10%">15.</td>
			<td width="60%">Does college has any members earlier?</td>
			<td width="30%">{{ $form->early_members?"Yes":"No" }}</td>
		</tr>
		<tr>
			<td style="text-align: center;" width="10%">&nbsp;</td>
			<td colspan="2" width="90%">
				<table width="100%" cellpadding="5">
					<tbody>
						<tr>
							<td style="text-align: center;" width="10%">&nbsp;</td>
							<td width="57%">Does college Managing Comittee is ready to appointee Qualified faculity</td>
							<td width="33%">{{ $form->appoint_qualifiedfaculty?"Yes":"No" }}</td>
						</tr>
						<tr>
							<td style="text-align: center;" width="10%">&nbsp;</td>
							<td width="57%">Give salary scale according to UGC and University?</td>
							<td width="33%">{{ $form->salary_acc_ugc?"Yes":"No" }}</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
		<tr>
			<td style="text-align: center;" width="10%">16.</td>
			<td width="60%">Does college has any other college within 5mile? If yes then write the name</td>
			<td width="30%">{{ $form->within_5mile?"Yes":"No" }}</td>
		</tr>
		<tr>
			<td style="text-align: center;" width="10%">&nbsp;</td>
			<td colspan="2" width="90%">
				<table width="100%" cellpadding="5">
					<tbody>
						<tr>
							<td width="10%">&nbsp;</td>
							<td width="57%">If no then give the name of any other college nearby and distance from college?</td>
							<td width="33%">{{ $form->any_other_college_name }}</td>
						</tr>
					</tbody>
				</table>
			</td>
		</tr>
	</tbody>
</table>
@else
<p>Nothing To Display</p>
@endif