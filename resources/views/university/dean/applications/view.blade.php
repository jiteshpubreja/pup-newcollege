@extends('templates.dean.main',['title' => 'View Application'])
@section('heading')
View Application
@endsection
@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success">
	<p>
		{!! $message !!}
	</p>
</div>
@endif

@if(!empty($applications))
@if(!empty($form))
<div class="form-horizontal">

	<div class="form-group">
		<div class="col-sm-1" >
			<label>1</label>
		</div>
		<div class="col-sm-7" >
			<label>College Name</label>
		</div>
		<div class="col-sm-4">
			<label>{{ $form->college_name }}</label>
		</div>
	</div>


	<hr class="style18">
	<div class="form-group">
		<div class="col-sm-1" >
			<label>2</label>
		</div>
		<div class="col-sm-7" >
			<label>Session(From which year to start)</label>
		</div>
		<div class="col-sm-4" >
			<label>{{ $form->session }}</label>
		</div>
	</div>

	<br>
	<hr class="style18">
	<div class="form-group">
		<div class="col-sm-1" >
			<label>3</label>
		</div>
		<div class="col-sm-7" >
			<label>Courses To be start</label>
		</div>
		<div class="col-sm-4" >
			<label>{{ $form->courses }}</label>
		</div>
		<!-- SPACE FOR DROP DOWN T-->

		<!--  <div class="col-sm-4" ><input type="text" class="form-control" name="class" id="class" ></div> -->
	</div>
	<br>
	<hr class="style18">
	<div class="form-group">
		<div class="col-sm-1" >
			<label>4</label>
		</div>
		<div class="col-sm-7" >
			<label>Will it be a Co-Education?</label>
		</div> 
		<div class="col-sm-4" >
			<label>{{ $form->co_education?"Yes":"No" }}</label>
		</div>
	</div>


	<br>

	<div class="form-group">
		<div class="well well-sm">5.Give details of following facilities:</div>
	</div>

	<div class="form-group">
		<div class="col-sm-1" >
			<label>I</label>
		</div>
		<div class="col-sm-7" >
			<label>Railway Station</label>
		</div>
		<div class="col-sm-4">
			<label>{{ $form->railway_station }}</label>
		</div>
	</div>
	<br>


	<div class="form-group">
		<div class="col-sm-1" >
			<label>II</label>
		</div>
		<div class="col-sm-7" >
			<label>Bus Stand</label>
		</div>
		<div class="col-sm-4">
			<label>{{ $form->bus_stand }}</label>
		</div>
	</div>
	<br>


	<div class="form-group">
		<div class="col-sm-1" >
			<label>III</label>
		</div>
		<div class="col-sm-7" >
			<label>Post office</label>
		</div>
		<div class="col-sm-4">
			<label>{{ $form->post_office }}</label>
		</div>
	</div>
	<br>


	<div class="form-group">
		<div class="col-sm-1" >
			<label>IV</label>
		</div>
		<div class="col-sm-7" >
			<label>Telegram office</label>
		</div>
		<div class="col-sm-4">
			<label>{{ $form->telegram }}</label>
		</div>
	</div>
	<br>


	<div class="form-group">
		<div class="col-sm-1" >
			<label>V</label>
		</div>
		<div class="col-sm-7" >
			<label>Telephone of college</label>
		</div>
		<div class="col-sm-4">
			<label>{{ $form->college_phone_number }}</label>
		</div>
	</div>
	<br>



	<div class="form-group">
		<div class="col-sm-1" >
			<label>VI</label>
		</div>
		<div class="col-sm-7" >
			<label>Telephone of Principal</label>
		</div>
		<div class="col-sm-4">
			<label>{{ $form->principal_phone_number }}</label>
		</div>
	</div>
	<br>


	<div class="form-group">
		<div class="col-sm-1" >
			<label>VII</label>
		</div>
		<div class="col-sm-7" >
			<label>Telephone of President of managing comittee of college</label>
		</div>
		<div class="col-sm-4">
			<label>{{ $form->president_of_mgmt_committee }}</label>
		</div>
	</div>
	<br>


	<div class="form-group">
		<div class="col-sm-1" >
			<label>VIII</label>
		</div>
		<div class="col-sm-7" >
			<label>Telephone of Secratory office</label>
		</div>
		<div class="col-sm-4">
			<label>{{ $form->secretary_office }}</label>
		</div>
	</div>
	<br>


	<div class="form-group">
		<div class="col-sm-1" >
			<label>IX</label>
		</div>
		<div class="col-sm-7" >
			<label>Telephone of Principal House number</label>
		</div>
		<div class="col-sm-4">
			<label>{{ $form->principal_residence_phone }}</label>
		</div>
	</div>
	<br>

	<div class="form-group">
		<div class="well well-sm">6.Give following Building Details:</div>
	</div>

	<div class="form-group">
		<div class="col-sm-1" >
			<label>I</label>
		</div>
		<div class="col-sm-7" >
			<label>Principal Office</label>
		</div>
		<div class="col-sm-4">
			<label>{{ $form->principal_office_building }}</label>
		</div>
	</div>
	<br>


	<div class="form-group">
		<div class="col-sm-1"><p></p></div>
		<div class="col-sm-7">
			<span class="bg-info" >NOTE: (Counting and size)(According to UGC norms their should be space equal to 10sqft per student)</span>
		</div>
	</div>
	<br>
	<br>
	<div class="form-group">
		<div class="col-sm-1" >
			<label>II</label>
		</div>
		<div class="col-sm-7" >
			<label>Classes Count</label>
		</div>
		<div class="col-sm-4">
			<label>{{ $form->classes_count }}</label>
		</div>
	</div>
	<br>

	<div class="form-group">
		<div class="col-sm-1" >
			<label>III</label>
		</div>
		<div class="col-sm-7" >
			<label>Classes Size</label>
		</div>
		<div class="col-sm-4">
			<label>{{ $form->classes_size }}</label>
		</div>
	</div>
	<br>
	<div class="form-group">
		<div class="col-sm-1" >
			<label>IV</label>
		</div>
		<div class="col-sm-7" >
			<label>Staff Room</label>
		</div>
		<div class="col-sm-4">
			<label>{{ $form->staff_room }}</label>
		</div>
	</div>
	<br>
	<div class="form-group">
		<div class="col-sm-1" >
			<label>V</label>
		</div>
		<div class="col-sm-7" >
			<label>Common Room For Girls</label>
		</div>
		<div class="col-sm-4">
			<label>{{ $form->commonroom_for_girls }}</label>
		</div>
	</div>
	<br>
	<div class="form-group">
		<div class="col-sm-1" >
			<label>VI</label>
		</div>
		<div class="col-sm-7" >
			<label>Common Room For Boys</label>
		</div>
		<div class="col-sm-4">
			<label>{{ $form->commonroom_for_boys }}</label>
		</div>
	</div>
	<br>
	<div class="form-group">
		<div class="col-sm-1"><p></p></div>
		<div class="col-sm-7">
			<span class="bg-info" >NOTE: Library (Size of Rooms) According to UGC Norms: <br>
				1 Reading Room: 50" x 30"  <br>
				1 Periodical Room: 30" x 20"  <br>
				1 Study Room for Staff: 15" x 20")
			</span>
		</div>
	</div>
	<br>
	<br>




	<div class="form-group">
		<div class="col-sm-1" >
			<label>VII</label>
		</div>
		<div class="col-sm-7" >
			<label>Reading Room</label>
		</div> 
		<div class="col-sm-4" >
			<label>{{ $form->reading_room?"Yes":"No" }}</label>
		</div>

		<div class="form-group">
			<div class="col-sm-1"><p></p></div>
		</div>

		<div class="form-group">
			<div class="col-sm-1" >
			</div>
			<div class="col-sm-7" >
				<ul>
					<li>Reading Room Size</li>
				</ul>
			</div>
			<div class="col-sm-4" >
				<label>{{ $form->readingroom_size }}</label>
			</div>
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-1" >
			<label>VIII</label>
		</div>
		<div class="col-sm-7" >
			<label>Periodical Room</label>
		</div> 
		<div class="col-sm-4" >
			<label>{{ $form->periodical_room?"Yes":"No" }}</label>
		</div>

		<div class="form-group">
			<div class="col-sm-1"><p></p></div>
		</div>

		<div class="form-group">
			<div class="col-sm-1" >
			</div>
			<div class="col-sm-7" >
				<ul>
					<li>Periodical Room Size</li>
				</ul>
			</div>
			<div class="col-sm-4" >
				<label>{{ $form->periodical_room_size }}</label>
			</div>
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-1" >
			<label>IX</label>
		</div>
		<div class="col-sm-7" >
			<label>Study Room For Staff</label>
		</div> 
		<div class="col-sm-4" >
			<label>{{ $form->studyroom_for_staff?"Yes":"No" }}</label>
		</div>

		<div class="form-group">
			<div class="col-sm-1"><p></p></div>
		</div>

		<div class="form-group">
			<div class="col-sm-1" >
			</div>
			<div class="col-sm-7" >
				<ul>
					<li>Study Room Staff Size</li>
				</ul>
			</div>
			<div class="col-sm-4" >
				<label>{{ $form->studyroom_for_staff_size }}</label>
			</div>
		</div>
	</div>

	<br>
	<div class="form-group">
		<div class="col-sm-1"><p></p></div>
		<div class="col-sm-7">
			<span class="bg-info" >NOTE: Laboratories(Science) 
				(According to Norms 40sqft per students space required)
			</span>
		</div>
	</div>
	<br>
	<br>

	<div class="form-group">
		<div class="col-sm-1" >
			<label>X</label>
		</div>
		<div class="col-sm-7" >
			<label>Science Laboratory</label>
		</div> 
		<div class="col-sm-4" >
			<label>{{ $form->science_lab?"Yes":"No" }}</label>
		</div>
		<div class="form-group">
			<div class="col-sm-1"><p></p></div>
		</div>

		<div class="form-group">
			<div class="col-sm-1" >
			</div>
			<div class="col-sm-7" >
				<ul>
					<li>Science Laboratory Size</li
					</ul>
				</div>
				<div class="col-sm-4" >
					<label>{{ $form->science_lab_size }}</label>
				</div>
			</div>
		</div>

		<br>



		<br>
		<div class="form-group">
			<div class="col-sm-1" >
				<label>XI</label>
			</div>
			<div class="col-sm-7" >
				<label>Another Store Room</label>
			</div>
			<div class="col-sm-4">
				<label>{{ $form->another_store_room }}</label>
			</div>
		</div>
		<br>

		<div class="form-group">
			<div class="col-sm-1" >
				<label>XII</label>
			</div>
			<div class="col-sm-7" >
				<label>water Supply</label>
			</div> 
			<div class="col-sm-4" >
				<label>{{ $form->water_supply?"Yes":"No" }}</label>
			</div>
		</div>


		<br>
		<div class="form-group">
			<div class="col-sm-1" >
				<label>XIII</label>
			</div>
			<div class="col-sm-7" >
				<label>Electricity Supply</label>
			</div> 
			<div class="col-sm-4" >
				<label>{{ $form->electricity?"Yes":"No" }}</label>
			</div>
			<div class="form-group">
				<div class="col-sm-1"><p></p></div>
			</div>
		</div>


		<br>
		<div class="form-group">
			<div class="col-sm-1" >
				<label>XIV</label>
			</div>
			<div class="col-sm-7" >
				<label>Boys Washroom</label>
			</div>
			<div class="col-sm-4">
				<label>{{ $form->boys_washroom }}</label>
			</div>
		</div>
		<br>
		<div class="form-group">
			<div class="col-sm-1" >
				<label>XV</label>
			</div>
			<div class="col-sm-7" >
				<label>Girls Washroom</label>
			</div>
			<div class="col-sm-4">
				<label>{{ $form->girls_washroom }}</label>
			</div>
		</div>
		<br>
		<div class="form-group">
			<div class="col-sm-1" >
				<label>XVI</label>
			</div>
			<div class="col-sm-7" >
				<label>Another Details Of Building</label>
			</div>
			<div class="col-sm-4">
				<label>{{ $form->other_details }}</label>
			</div>
		</div>
		<br>
		<hr class="style18">
		<div class="form-group">
			<div class="col-sm-1" >
				<label>7</label>
			</div>
			<div class="col-sm-7" >
				<label>Residence for principal OR Will managing comittee will arrange residence for principal(Within 1 km)? Or they will promised to do the same?</label>
			</div> 
			<div class="col-sm-4" >
				<label>{{ $form->residence_for_principal?"Yes":"No" }}</label>
			</div>
		</div>
		<br>
		<hr class="style18">
		<div class="form-group ">
			<div class="col-sm-1" >
				<label>8</label>
			</div>
			<div class="col-sm-7" >
				<label>Does college have required furniture?</label>
			</div> 
			<div class="col-sm-4" >
				<label>{{ $form->required_furniture?"Yes":"No" }}</label>
			</div>
		</div>
		<br>



		<div class="form-group"><!--{{ $errors->has('name') ? ' has-error' : '' }}">-->
			<div class="well well-sm">9.Give details of following Land Details:</div>
		</div>
		<br>



		<div class="form-group">
			<div class="col-sm-8">

				<div class="form-group">
					<div class="col-sm-1" >
						<label>I</label>
					</div>
					<div class="col-sm-11" >
						<label>Land required for education 2500sq.mt.</label>
					</div>
<!-- <div class="col-sm-4">
<input type="text" class="form-control" required id="land_details" name="land_details" >
@if ($errors->has('land_details'))
<span class="help-block">
<strong>{{ $errors->first('land_details') }}</strong>
</span>
@endif
</div> -->
</div>
<br>

<div class="form-group">
	<div class="col-sm-1" >
		<label>II</label>
	</div>
	<div class="col-sm-11" >
		<label>For Law,Information Technology Mangement and Arts/Science Degree college Land should
			be according to following:<br>
			Inside Municipal corporation Area-  2Arcs<br>
			Inside Municipal Comittee Area   -  3Arcs<br>
			Outside Municipal Comittee Area  -  5Arcs</label>
		</div>
<!-- <div class="col-sm-4">
<input type="text" class="form-control" required id="law_it_management_land" name="law_it_management_land" >
@if ($errors->has('law_it_management_land'))
<span class="help-block">
<strong>{{ $errors->first('law_it_management_land') }}</strong>
</span>
@endif
</div> -->
</div>
<br>
<div class="form-group">
	<div class="col-sm-1" >
		<label>III</label>
	</div>
	<div class="col-sm-11" >
		<label>Land Required inside Municipal Corporation and Municipal Comittee areas for girls Arts/Science Degree
			college should be 2Arcs and outside Municipal limit it should be 3Arcs</label>
		</div>

	</div>
	<br>
	<div class="form-group">
		<div class="col-sm-1" >
			<label>IV</label>
		</div>
		<div class="col-sm-11" >
			<label>Land Required for Phyisical Education college inside or outside should be 5Arcs</label>
		</div>

	</div>
	<br> 



	<div class="form-group">
		<div class="col-sm-1" >
			<label>V</label>
		</div>
		<div class="col-sm-11" >
			<label>Courses under AICTE should have land according to AICTE norms. For MBA 1Arcs, For MCA 1.5Arcs</label>
		</div>

	</div>
	<br>

	<div class="form-group">
		<div class="col-sm-1" >
			<label>VI</label>
		</div>
		<div class="col-sm-11" >
			<label>If Sociey/Trust have Land according to rules for 99years lease, then permission for opening college will be on this promise If during lease time lease agreement overs then due to this if admitted students and staff faces any problem then society/trust will be liable for the same.</label>
		</div>

	</div>
</div>
<div class="col-sm-4">

	<div class="form-group">
		<div class="col-sm-12">

			<p style="white-space: pre-line;">
				{{ $form->land_details }}
			</p>
		</div>

	</div>

</div>

</div>


<br>
<div class="form-group">
	<div class="col-sm-1"><p></p></div>
	<div class="col-sm-7">
		<span class="bg-info" >NOTE: Attach a document from Tehsil for every college mentioned above the land is single piece and interest less.</span>
	</div>
</div>

<br>
<hr class="style18">
<div class="form-group">
	<div class="col-sm-1" >
		<label>10</label>
	</div>
	<div class="col-sm-7" >
		<label>Does college had submitted or will submit the amount of endorsement fund in the form of F.D.R. payable to Dean,College Development Council, Punjabi University,Patiala (Details of Endorsement Fund decided by University is in Appendix-1)</label>
	</div> 
	<div class="col-sm-4" >
		<label>{{ $form->endorsement_fund?"Yes":"No" }}</label>
	</div>
</div>
<div class="form-group">
	<div class="col-sm-1"><p></p></div>
</div>

<div class="form-group">
	<div class="col-sm-1" >
	</div>
	<div class="col-sm-7" >
		&nbsp;
	</div>
	<div class="col-sm-4" >
		<p style="white-space: pre-line;">
			{{ $form->endorsement_fund_details }}
		</p>
	</div>
</div>
<br>
<hr class="style18">
<div class="form-group">
	<div class="col-sm-1" >
		<label>11</label>
	</div>
	<div class="col-sm-7" >
		<label>Does college has enough resources to maintain their working position?</label>
	</div> 
	<div class="col-sm-4" >
		<label>{{ $form->resources?"Yes":"No" }}</label>
	</div>
	<br>
	<div class="form-group">
		<div class="col-sm-1"><p></p></div>
	</div>
	<div class="form-group">
		<div class="col-sm-1" >
		</div>
		<div class="col-sm-7" >
			<ul>
				<li>Explain with summary</li
				</ul>
			</div>
			<div class="col-sm-4" >
				<label>{{ $form->resources_detail }}</label>
			</div>
		</div>
	</div>
	<br>
	<hr class="style18">

	<div class="form-group">
		<div class="col-sm-1" >
			<label>12</label>
		</div>
		<div class="col-sm-7" >
			<label>Does bank have any other amount on the name of college? Attach proofs.</label>
		</div> 
		<div class="col-sm-4" >
			<label>{{ $form->bank_balance?"Yes":"No" }}</label>
		</div>
	</div>
	<br>
	<hr class="style18">
	<div class="form-group">
		<div class="col-sm-1" >
			<label>13</label>
		</div>
		<div class="col-sm-7" >
			<label>Does college have provision of Rs. 25,000/- for Library Books for first year or they will arrange it? </label>
		</div> 
		<div class="col-sm-4" >
			<label>{{ $form->provision_of_25000?"Yes":"No" }}</label>
		</div>
	</div>

		<!-- <div class="col-sm-1"><p></p></div>
		<div class="col-sm-11">
			<ul> -->
				<div class="form-group">
					<div class="col-sm-1" ><p></p></div>
					<div class="col-sm-7" >
						<li>similiarly Rs. 10,000/- will be spent for the same every year?</li>
					</div> 
					<div class="col-sm-4" >
						<label>{{ $form->every_year_10000?"Yes":"No" }}</label>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-1" ><p></p></div>
					<div class="col-sm-7" >
						<li>Does college had spent any amount on books earlier ?</li>
					</div> 
					<div class="col-sm-4" >
						<label>{{ $form->any_other_amount?"Yes":"No" }}</label>
					</div>
				</div>
			<!-- </ul>
		</div> -->


		<br>
		<hr class="style18">
		<div class="form-group">
			<div class="col-sm-1" >
				<label>14</label>
			</div>
			<div class="col-sm-7" >
				<label>Does college has any Registered Managing Comittee? </label>
			</div> 
			<div class="col-sm-4" >
				<label>{{ $form->register_committee?"Yes":"No" }}</label>
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-1"><p></p></div>
			<div class="col-sm-7">
				<span class="bg-info" >NOTE:If yes then send the list of members. (For number of Members of Managing Comittee see Paragarph-3 of Application Letter.) Send the copy of Registration.</span>
			</div>
		</div>
		<!-- FILE UPLOADER-->



		<br>
		<hr class="style18">
		<div class="form-group">
			<div class="col-sm-1" >
				<label>15</label>
			</div>
			<div class="col-sm-7" >
				<label>Does college has any members earlier?</label>
			</div> 
			<div class="col-sm-4" >
				<label>{{ $form->early_members?"Yes":"No" }}</label>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-1"><p></p></div>
			<div class="col-sm-7" >
				<li>Does college Managing Comittee is ready to appointee Qualified faculity </li>

			</div> 
			<div class="col-sm-4" >
				<label>{{ $form->appoint_qualifiedfaculty?"Yes":"No" }}</label>
			</div>
		</div>


		<div class="form-group">
			<div class="col-sm-1"><p></p></div>
			<div class="col-sm-7" >

				<li>Give salary scale according to UGC and University?</li>

			</div> 
			<div class="col-sm-4" >
				<label>{{ $form->salary_acc_ugc?"Yes":"No" }}</label>
			</div>
		</div>

		<br>
		<hr class="style18">
		<div class="form-group ">
			<div class="col-sm-1" >
				<label>16</label>
			</div>
			<div class="col-sm-7" >
				<label>Does college has any other college within 5mile? If yes then write the name </label>
			</div> 
			<div class="col-sm-4" >
				<label>{{ $form->within_5mile?"Yes":"No" }}</label>
			</div>
			<div class="form-group">
				<div class="col-sm-1"><p></p></div>
			</div>

			<div class="form-group">
				<div class="col-sm-1" >
				</div>
				<div class="col-sm-7" >
					<ul>
						<li>If no then give the name of any other college nearby and distance from college?</li>
					</ul>
				</div>
				<div class="col-sm-4" >
					<label>{{ $form->any_other_college_name }}</label>
				</div>
			</div>
		</div>
	</div>


	<br>
	<div class="form-group"><!--{{ $errors->has('name') ? ' has-error' : '' }}">-->
		<div class="well well-sm">Uploaded Documents:</div>
	</div>
	@if(!empty($files))
	<?php $sr = 1; ?>
	@if(array_key_exists("landdetails", $files))
	<div class="row">
		<div class="col-sm-1" >
			<label>
				({{ $sr++ }})
			</label>
		</div>
		<div class="col-sm-6" >
			<label>
				Land Details
			</label>
		</div>
		<div class="col-sm-4">
			<a class="btn btn-primary btn-xs" href="{{ $files['landdetails'] }}" >Download</a>
		</div>
	</div>
	<br>
	@endif
	@if(array_key_exists("buildingdetails", $files))
	<div class="row">
		<div class="col-sm-1" >
			<label>
				({{ $sr++ }})
			</label>
		</div>
		<div class="col-sm-6" >
			<label>
				Building Details
			</label>
		</div>
		<div class="col-sm-4">
			<a class="btn btn-primary btn-xs" href="{{ $files['buildingdetails'] }}" >Download</a>
		</div>
	</div>
	<br>
	@endif
	@if(array_key_exists("bankproofs", $files))
	<div class="row">
		<div class="col-sm-1" >
			<label>
				({{ $sr++ }})
			</label>
		</div>
		<div class="col-sm-6" >
			<label>
				Attach proofs. If bank have any other amount on the name of college?
			</label>
		</div>
		<div class="col-sm-4">
			<a class="btn btn-primary btn-xs" href="{{ $files['bankproofs'] }}" >Download</a>
		</div>
	</div>
	<br>
	@endif

	@if(array_key_exists("permissionletters", $files))
	<div class="row">
		<div class="col-sm-1" >
			<label>
				({{ $sr++ }})
			</label>
		</div>
		<div class="col-sm-6" >
			<label>
				Permisstions from : (NCTE, AICTE, PB.GOVT.etc) upload the permission letter
			</label>
		</div>
		<div class="col-sm-4">
			<a class="btn btn-primary btn-xs" href="{{ $files['permissionletters'] }}" >Download</a>
		</div>
	</div>
	<br>
	@endif

	@if(array_key_exists("comitteelist", $files))
	<div class="row">
		<div class="col-sm-1" >
			<label>
				({{ $sr++ }})
			</label>
		</div>
		<div class="col-sm-6" >
			<label>
				The list of members. (For number of Members of Managing Comittee see Paragarph-3 of Application Letter.) Send the copy of Registration.
			</label>
		</div>
		<div class="col-sm-4">
			<a class="btn btn-primary btn-xs" href="{{ $files['comitteelist'] }}" >Download</a>
		</div>
	</div>
	<br>
	@endif
	@if(array_key_exists("tehsildocuments", $files))
	<div class="row">
		<div class="col-sm-1" >
			<label>
				({{ $sr++ }})
			</label>
		</div>
		<div class="col-sm-6" >
			<label>
				Attach a document from Tehsil for every college mentioned above the land is single piece and interest less.
			</label>
		</div>
		<div class="col-sm-4">
			<a class="btn btn-primary btn-xs" href="{{ $files['tehsildocuments'] }}" >Download</a>
		</div>
	</div>
	<br/>
	@endif
	@else
	<div class="alert alert-info">
		<p>
			No Supporting Documents Found.
		</p>
	</div>
	@endif
	<br>
	<div class="form-group"><!--{{ $errors->has('name') ? ' has-error' : '' }}">-->
		<div class="well well-sm">Draft Details:</div>
	</div>
	@if($form->college->draft)
	<div class="row">
		<label class="col-sm-3 control-label">
			Name of The President:
		</label>
		<label class="col-sm-5">
			{{$form->college->draft->president_name}}
		</label>
	</div>
	<div class="row">
		<label class="col-sm-3 control-label">
			Email:
		</label>
		<label class="col-sm-5">
			{{$form->college->user->email}}
		</label>
	</div>
	<div class="row">
		<label class="col-sm-3 control-label">
			Amount:
		</label>
		<label class="col-sm-5">
			{{$form->college->draft->amount}}
		</label>
	</div>
	<div class="row">
		<label class="col-sm-3 control-label">
			Draft/University Reciept No.:
		</label>
		<label class="col-sm-5">
			{{$form->college->draft->draft_no}}
		</label>
	</div>
	<div class="row">
		<label class="col-sm-3 control-label">
			Name of The Bank:
		</label>
		<label class="col-sm-5">
			{{$form->college->draft->bank_name}}
		</label>
	</div>
	<div class="row">
		<label class="col-sm-3 control-label">
			Dated:
		</label>
		<label class="col-sm-5">
			{{dated_format($form->college->draft->dated)}}
		</label>
	</div>
	<div class="row">
		<label class="col-sm-3 control-label">
			Scanned Copy:
		</label>
		<label class="col-sm-5">
			<a class="btn btn-primary btn-xs" href="{{ $form->college->draft->draft_image }}" >Download</a>
		</label>
	</div>
	<br>
	@if($form->college->draft->is_verified)
	<div class="row">
		<label class="col-sm-3 control-label">
			Verified By:
		</label>
		<strong>
			<label class="col-sm-5">
				{{ \App\Clerk::find($form->college->draft->verified_by)->user->fullname() }}
			</label>
		</strong>
	</div>
	@else
	<div class="row">
		<strong>
			<label class="col-sm-3 control-label">
				Not Yet Verified
			</label>
		</strong>
	</div>
	@endif
	@else
	<div class="alert alert-info">
		<p>
			No Draft Submitted Yet.
		</p>
	</div>
	@endif
	<hr class="redhr">
	<div class=" col-md-12" style="text-align: center;"> 
		<label>Application Submitted on {{ $form->created_at->toFormattedDateString() }}</label>
	</div>


	@if(!empty($backnote))
	<hr class="redhr">
	<div style="text-align: center;" class="form-group">
		<h4>
			<strong>
				<label for="remarks" class="col-md-12 control-label">
					Final Remarks by {{ $backnote->user->fullname() }} (AR)
				</label>
			</strong>
		</h4>
	</div>

	<p style="white-space: pre-line;">
		{{ $backnote->remarks }}
	</p>
	@endif

	@if(!$form->is_loi_granted)
	<hr class="redhr">

	<form id="grant-loi" action="{{ route('deanviewapplication',$form->id) }}" method="POST">
		<input type="hidden" name="_method" value="PUT">
		{{ csrf_field() }}
		<div style="text-align: center;" class="form-group{{ $errors->has('remarks') ? ' has-error' : '' }}">
			<h4 >
				<strong>
					<label for="remarks" class="col-md-12 control-label">
						Final Remarks
					</label>
				</strong>
			</h4>

			<div class="col-md-12">                       
				<textarea name="remarks" oninput="viewbuttons()" onchange="viewbuttons()" id="remarks" cols="92" rows="5" required>{{ old('remarks') }}</textarea>
				@if ($errors->has('remarks'))
				<span class="help-block">
					<strong>{{ $errors->first('remarks') }}</strong>
				</span>
				@endif
			</div>
		</div>
	</form>
	@endif


	<div class=" col-md-12" style="text-align: center;"> 
		<hr class="redhr">
		<a class="btn btn-primary" href="{{ route('deanbacknotes',$form->college->id) }}">View Backnotes</a>
		&nbsp;&nbsp;&nbsp;&nbsp;
		<a class="btn btn-primary" href="{{ route('deanviewappdocs',$form->id) }}">View Documents</a>
		&nbsp;&nbsp;&nbsp;&nbsp;
		<a class="btn btn-primary" href="{{ route('deanviewapplicationpdf',$form->id) }}">Download PDF</a>
		@if(!$form->is_loi_granted)
		&nbsp;&nbsp;&nbsp;&nbsp;
		<button type="button" style="display: none;" id="loibtn" class="btn btn-success" data-toggle="modal" data-target="#myModal">
			Grant LOI
		</button>
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog  modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
					</div> 
					<div class="modal-body">
						Are You Sure You Want To Grant LOI To This Application?
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<a class="btn btn-success" href="{{ route('deanviewapplication',$form->id) }}"
							onclick="event.preventDefault();
							document.getElementById('grant-loi').submit();">
							Grant LOI
						</a>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript">
			
			function viewbuttons() {
				var remarks = document.getElementById("remarks").value;
				if (remarks == '') {
					document.getElementById("loibtn").style.display = "none";
				}
				else {
					document.getElementById("loibtn").style.display = "inline";
				}
			}
		</script>
		@endif
	</div>
	@else
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
						College
					</label>
				</h4>
			</td>
			<td>
				<h4 >
					<label>
						Reference ID
					</label>
				</h4>
			</td>
			<td>
				<h4 >
					<label>
						Email ID
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
						View Application
					</label>
				</h4>
			</td>
			<td>
				<h4 >
					<label>
						View Documents
					</label>
				</h4>
			</td>
			<td>
				<h4 >
					<label>
						Status
					</label>
				</h4>
			</td>
		</tr>


		<?php $sr = 1; ?>
		@foreach($applications as $application)
		<tr style="line-height:30px;">
			<td>
				<label>({{ $sr++ }})</label>
			</td>
			<td>
				<label>
					{{ $application->college_name }}
				</label>
			</td>
			<td>
				<label>
					{{ $application->ref_id }}
				</label>
			</td>
			<td>
				<label>
					{{ $application->college->user->email }}
				</label>
			</td>
			<td>
				<label>
					{{ $application->created_at->toFormattedDateString() }}

				</label>
			</td>
			<td>
				<label>
					<a class="btn btn-primary btn-xs" href="{{ route('deanviewapplication',$application->id) }}">View Application</a>

				</label>
			</td>
			<td>
				<label>
					<a class="btn btn-primary btn-xs" href="{{ route('deanviewappdocs',$application->id) }}">View Documents</a>

				</label>
			</td>
			<td>
				{!! $application->is_loi_granted ? "<span class='label label-success'>Granted LOI</span>" : ($application->is_seen_by_dean ? "<span class='label label-warning'>Pending</span>" : "<span class='label label-danger'>New</span>") !!}
			</td>
		</tr>
		@endforeach

	</table>

	@endif
	@else
	<div class="alert alert-info">
		<p>
			Invalid Submission
		</p>
	</div>
	@endif
	@endsection




