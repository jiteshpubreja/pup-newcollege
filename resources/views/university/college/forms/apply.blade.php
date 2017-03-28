@extends('templates.college.main',['title' => 'Apply For New College'])
@section('heading')
Registration Form
@endsection
@section('content')
<form class="form-horizontal" role="form" method="POST" action="{{ route('collegenewapply') }}">
	{{ csrf_field() }}
	@if ($message = Session::get('success'))
	<div class="alert alert-success">
		<p>
			{{ $message }}
		</p>
	</div>
	@else
	<div class="alert alert-info">
		<p>
			Once You Save The Form It can be edited Later.
		</p>
	</div>
	@endif
	<div class="form-group{{ $errors->has('college_name') ? ' has-error' : '' }}">
		<div class="col-sm-1" >
			<label>1</label>
		</div>
		<div class="col-sm-7" >
			<label>College Name</label>
		</div>
		<div class="col-sm-4">
			<input type="text" class="form-control" required id="college_name" name="college_name" >
			@if ($errors->has('college_name'))
			<span class="help-block">
				<strong>{{ $errors->first('college_name') }}</strong>
			</span>
			@endif
		</div>
	</div>


	<hr class="style18">
	<div class="form-group{{ $errors->has('session') ? ' has-error' : '' }}">
		<div class="col-sm-1" >
			<label>2</label>
		</div>
		<div class="col-sm-7" >
			<label>Session(From which year to start)</label>
		</div>
		<div class="col-sm-4" >
			<input type="text" class="form-control" required name="session" id="session" >
			@if ($errors->has('session'))
			<span class="help-block">
				<strong>{{ $errors->first('session') }}</strong>
			</span>
			@endif
		</div>
	</div>
	<br>
	<hr class="style18">
	<div class="form-group{{ $errors->has('courses') ? ' has-error' : '' }}">
		<div class="col-sm-1" >
			<label>3</label>
		</div>
		<div class="col-sm-7" >
			<label>Courses To be start</label>
		</div>
		<div class="col-sm-4" >
			<input type="text" class="form-control" required name="courses" id="courses" >
			@if ($errors->has('courses'))
			<span class="help-block">
				<strong>{{ $errors->first('courses') }}</strong>
			</span>
			@endif
		</div>
		<!-- SPACE FOR DROP DOWN T-->

		<!--  <div class="col-sm-4" ><input type="text" class="form-control" name="class" id="class" ></div> -->
	</div>
	<br>
	<hr class="style18">
	<div class="form-group{{ $errors->has('co_education') ? ' has-error' : '' }}">
		<div class="col-sm-1" >
			<label>4</label>
		</div>
		<div class="col-sm-7" >
			<label>Will it be a Co-Education?</label>
		</div> 
		<div class="col-sm-4" >
			<div class="radio radio-inline">

				<strong><input type="radio" name="co_education" value="1"><label>Yes
				</label></strong>
				<strong><input type="radio" name="co_education" value="0" checked><label>No
				</label></strong>
			</div>
		</div>


	</div>
	<br>

	<div class="form-group">
		<div class="well well-sm">5.Give details of following facilities:</div>
	</div>

	<div class="form-group{{ $errors->has('railway_station') ? ' has-error' : '' }}">
		<div class="col-sm-1" >
			<label>I</label>
		</div>
		<div class="col-sm-7" >
			<label>Railway Station</label>
		</div>
		<div class="col-sm-4">
			<input type="text" class="form-control" required id="railway_station" name="railway_station" >
			@if ($errors->has('railway_station'))
			<span class="help-block">
				<strong>{{ $errors->first('railway_station') }}</strong>
			</span>
			@endif
		</div>
	</div>
	<br>


	<div class="form-group{{ $errors->has('bus_stand') ? ' has-error' : '' }}">
		<div class="col-sm-1" >
			<label>II</label>
		</div>
		<div class="col-sm-7" >
			<label>Bus Stand</label>
		</div>
		<div class="col-sm-4">
			<input type="text" class="form-control" required id="bus_stand" name="bus_stand" >
			@if ($errors->has('bus_stand'))
			<span class="help-block">
				<strong>{{ $errors->first('bus_stand') }}</strong>
			</span>
			@endif
		</div>
	</div>
	<br>


	<div class="form-group{{ $errors->has('post_office') ? ' has-error' : '' }}">
		<div class="col-sm-1" >
			<label>III</label>
		</div>
		<div class="col-sm-7" >
			<label>Post office</label>
		</div>
		<div class="col-sm-4">
			<input type="text" class="form-control" required id="post_office" name="post_office" >
			@if ($errors->has('post_office'))
			<span class="help-block">
				<strong>{{ $errors->first('post_office') }}</strong>
			</span>
			@endif
		</div>
	</div>
	<br>


	<div class="form-group{{ $errors->has('telegram') ? ' has-error' : '' }}">
		<div class="col-sm-1" >
			<label>IV</label>
		</div>
		<div class="col-sm-7" >
			<label>Telegram office</label>
		</div>
		<div class="col-sm-4">
			<input type="text" class="form-control" required id="telegram" name="telegram" >
			@if ($errors->has('telegram'))
			<span class="help-block">
				<strong>{{ $errors->first('telegram') }}</strong>
			</span>
			@endif
		</div>
	</div>
	<br>


	<div class="form-group{{ $errors->has('college_phone_number') ? ' has-error' : '' }}">
		<div class="col-sm-1" >
			<label>V</label>
		</div>
		<div class="col-sm-7" >
			<label>Telephone of college</label>
		</div>
		<div class="col-sm-4">
			<input type="text" class="form-control" required id="college_phone_number" name="college_phone_number" >
			@if ($errors->has('college_phone_number'))
			<span class="help-block">
				<strong>{{ $errors->first('college_phone_number') }}</strong>
			</span>
			@endif
		</div>
	</div>
	<br>



	<div class="form-group{{ $errors->has('principal_phone_number') ? ' has-error' : '' }}">
		<div class="col-sm-1" >
			<label>VI</label>
		</div>
		<div class="col-sm-7" >
			<label>Telephone of Principal</label>
		</div>
		<div class="col-sm-4">
			<input type="text" class="form-control" required id="principal_phone_number" name="principal_phone_number" >
			@if ($errors->has('principal_phone_number'))
			<span class="help-block">
				<strong>{{ $errors->first('principal_phone_number') }}</strong>
			</span>
			@endif
		</div>
	</div>
	<br>


	<div class="form-group{{ $errors->has('president_of_mgmt_committee') ? ' has-error' : '' }}">
		<div class="col-sm-1" >
			<label>VII</label>
		</div>
		<div class="col-sm-7" >
			<label>Telephone of President of managing comittee of college</label>
		</div>
		<div class="col-sm-4">
			<input type="text" class="form-control" required id="president_of_mgmt_committee" name="president_of_mgmt_committee" >
			@if ($errors->has('president_of_mgmt_committee'))
			<span class="help-block">
				<strong>{{ $errors->first('president_of_mgmt_committee') }}</strong>
			</span>
			@endif
		</div>
	</div>
	<br>


	<div class="form-group{{ $errors->has('secretary_office') ? ' has-error' : '' }}">
		<div class="col-sm-1" >
			<label>VIII</label>
		</div>
		<div class="col-sm-7" >
			<label>Telephone of Secratory office</label>
		</div>
		<div class="col-sm-4">
			<input type="text" class="form-control" required id="secretary_office" name="secretary_office" >
			@if ($errors->has('secretary_office'))
			<span class="help-block">
				<strong>{{ $errors->first('secretary_office') }}</strong>
			</span>
			@endif
		</div>
	</div>
	<br>


	<div class="form-group{{ $errors->has('principal_residence_phone') ? ' has-error' : '' }}">
		<div class="col-sm-1" >
			<label>IX</label>
		</div>
		<div class="col-sm-7" >
			<label>Telephone of Principal House number</label>
		</div>
		<div class="col-sm-4">
			<input type="text" class="form-control" required id="principal_residence_phone" name="principal_residence_phone" >
			@if ($errors->has('principal_residence_phone'))
			<span class="help-block">
				<strong>{{ $errors->first('principal_residence_phone') }}</strong>
			</span>
			@endif
		</div>
	</div>
	<br>

	<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
		<div class="well well-sm">6.Give following Building Details:</div>
	</div>

	<div class="form-group{{ $errors->has('principal_office_building') ? ' has-error' : '' }}">
		<div class="col-sm-1" >
			<label>I</label>
		</div>
		<div class="col-sm-7" >
			<label>Principal Office</label>
		</div>
		<div class="col-sm-4">
			<input type="text" class="form-control" required id="principal_office_building" name="principal_office_building" >
			@if ($errors->has('principal_office_building'))
			<span class="help-block">
				<strong>{{ $errors->first('principal_office_building') }}</strong>
			</span>
			@endif
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
	<div class="form-group{{ $errors->has('classes_count') ? ' has-error' : '' }}">
		<div class="col-sm-1" >
			<label>II</label>
		</div>
		<div class="col-sm-7" >
			<label>Classes Count</label>
		</div>
		<div class="col-sm-4">
			<input type="text" class="form-control" required id="classes_count" name="classes_count" >
			@if ($errors->has('classes_count'))
			<span class="help-block">
				<strong>{{ $errors->first('classes_count') }}</strong>
			</span>
			@endif
		</div>
	</div>
	<br>

	<div class="form-group{{ $errors->has('classes_size') ? ' has-error' : '' }}">
		<div class="col-sm-1" >
			<label>III</label>
		</div>
		<div class="col-sm-7" >
			<label>Classes Size</label>
		</div>
		<div class="col-sm-4">
			<input type="text" class="form-control" required id="classes_size" name="classes_size" >
			@if ($errors->has('classes_size'))
			<span class="help-block">
				<strong>{{ $errors->first('coclasses_size') }}</strong>
			</span>
			@endif
		</div>
	</div>
	<br>
	<div class="form-group{{ $errors->has('staff_room') ? ' has-error' : '' }}">
		<div class="col-sm-1" >
			<label>IV</label>
		</div>
		<div class="col-sm-7" >
			<label>Staff Room</label>
		</div>
		<div class="col-sm-4">
			<input type="text" class="form-control" required id="staff_room" name="staff_room" >
			@if ($errors->has('staff_room'))
			<span class="help-block">
				<strong>{{ $errors->first('staff_room') }}</strong>
			</span>
			@endif
		</div>
	</div>
	<br>
	<div class="form-group{{ $errors->has('commonroom_for_girls') ? ' has-error' : '' }}">
		<div class="col-sm-1" >
			<label>V</label>
		</div>
		<div class="col-sm-7" >
			<label>Common Room For Girls</label>
		</div>
		<div class="col-sm-4">
			<input type="text" class="form-control" required id="commonroom_for_girls" name="commonroom_for_girls" >
			@if ($errors->has('commonroom_for_girls'))
			<span class="help-block">
				<strong>{{ $errors->first('commonroom_for_girls') }}</strong>
			</span>
			@endif
		</div>
	</div>
	<br>
	<div class="form-group{{ $errors->has('commonroom_for_boys') ? ' has-error' : '' }}">
		<div class="col-sm-1" >
			<label>VI</label>
		</div>
		<div class="col-sm-7" >
			<label>Common Room For Boys</label>
		</div>
		<div class="col-sm-4">
			<input type="text" class="form-control" required id="commonroom_for_boys" name="commonroom_for_boys" >
			@if ($errors->has('commonroom_for_boys'))
			<span class="help-block">
				<strong>{{ $errors->first('commonroom_for_boys') }}</strong>
			</span>
			@endif
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




	<div class="form-group{{ $errors->has('reading_room') ? ' has-error' : '' }}">
		<div class="col-sm-1" >
			<label>VII</label>
		</div>
		<div class="col-sm-7" >
			<label>Reading Room</label>
		</div> 
		<div class="col-sm-4" >
			<div class="radio radio-inline">

				<strong><input type="radio" name="reading_room" id="reading_room_true" value="1"><label>Yes
				</label></strong>
				<strong><input type="radio" name="reading_room" id="reading_room_false" value="0" checked><label>No
				</label></strong>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-1"><p></p></div>
		</div>

		<div class="form-group{{ $errors->has('readingroom_size') ? ' has-error' : '' }}">
			<div class="col-sm-1" >
			</div>
			<div class="col-sm-7" >
				<ul>
					<li>Reading Room Size</li>
				</ul>
			</div>
			<div class="col-sm-4" >
				<input type="hidden" name="readingroom_size" value="-- NA --">
				<input type="text" class="form-control" required id="readingroom_size" name="readingroom_size" value="-- NA --" disabled="disabled" >
				@if ($errors->has('readingroom_size'))
				<span class="help-block">
					<strong>{{ $errors->first('readingroom_size') }}</strong>
				</span>
				@endif
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
			<div class="radio radio-inline">

				<strong><input type="radio" name="periodical_room" id="periodical_room_true" value="1"><label>Yes
				</label></strong>
				<strong><input type="radio" name="periodical_room" id="periodical_room_false" value="0" checked><label>No
				</label></strong>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-1"><p></p></div>
		</div>

		<div class="form-group{{ $errors->has('periodical_room_size') ? ' has-error' : '' }}">
			<div class="col-sm-1" >
			</div>
			<div class="col-sm-7" >
				<ul>
					<li>Periodical Room Size</li>
				</ul>
			</div>
			<div class="col-sm-4" >
				<input type="hidden" name="periodical_room_size" value="-- NA --">
				<input type="text" class="form-control" required id="periodical_room_size" name="periodical_room_size"  value="-- NA --" disabled="disabled">
				@if ($errors->has('periodical_room_size'))
				<span class="help-block">
					<strong>{{ $errors->first('periodical_room_size') }}</strong>
				</span>
				@endif
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
			<div class="radio radio-inline">

				<strong><input type="radio" name="studyroom_for_staff" id="studyroom_for_staff_true" value="1"><label>Yes
				</label></strong>
				<strong><input type="radio" name="studyroom_for_staff" id="studyroom_for_staff_false" value="0" checked><label>No
				</label></strong>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-1"><p></p></div>
		</div>

		<div class="form-group{{ $errors->has('studyroom_for_staff_size') ? ' has-error' : '' }}">
			<div class="col-sm-1" >
			</div>
			<div class="col-sm-7" >
				<ul>
					<li>Study Room Staff Size</li>
				</ul>
			</div>
			<div class="col-sm-4" >
				<input type="hidden" name="studyroom_for_staff_size" value="-- NA --">
				<input type="text" class="form-control" required id="studyroom_for_staff_size" name="studyroom_for_staff_size"  value="-- NA --" disabled="disabled" >
				@if ($errors->has('studyroom_for_staff_size'))
				<span class="help-block">
					<strong>{{ $errors->first('studyroom_for_staff_size') }}</strong>
				</span>
				@endif
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
			<div class="radio radio-inline">

				<strong><input type="radio" name="science_lab" id="science_lab_true" value="1"><label>Yes
				</label></strong>
				<strong><input type="radio" name="science_lab" id="science_lab_false" value="0" checked><label>No
				</label></strong>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-1"><p></p></div>
		</div>

		<div class="form-group{{ $errors->has('science_lab_size') ? ' has-error' : '' }}">
			<div class="col-sm-1" >
			</div>
			<div class="col-sm-7" >
				<ul>
					<li>Science Laboratory Size</li
					</ul>
				</div>
				<div class="col-sm-4" >
					<input type="hidden" name="science_lab_size" value="-- NA --">
					<input type="text" class="form-control" required id="science_lab_size" name="science_lab_size"  value="-- NA --" disabled="disabled">
					@if ($errors->has('science_lab_size'))
					<span class="help-block">
						<strong>{{ $errors->first('science_lab_size') }}</strong>
					</span>
					@endif
				</div>
			</div>
		</div>

		<br>



		<br>
		<div class="form-group{{ $errors->has('another_store_room') ? ' has-error' : '' }}">
			<div class="col-sm-1" >
				<label>XI</label>
			</div>
			<div class="col-sm-7" >
				<label>Another Store Room</label>
			</div>
			<div class="col-sm-4">
				<input type="text" class="form-control" required id="another_store_room" name="another_store_room" >
				@if ($errors->has('another_store_room'))
				<span class="help-block">
					<strong>{{ $errors->first('another_store_room') }}</strong>
				</span>
				@endif
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
				<div class="radio radio-inline">

					<strong><input type="radio" name="water_supply" value="1"><label>Yes
					</label></strong>
					<strong><input type="radio" name="water_supply" value="0" checked><label>No
					</label></strong>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-1"><p></p></div>
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
				<div class="radio radio-inline">

					<strong><input type="radio" name="electricity" value="1"><label>Yes
					</label></strong>
					<strong><input type="radio" name="electricity" value="0" checked><label>No
					</label></strong>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-1"><p></p></div>
			</div>
		</div>


		<br>
		<div class="form-group{{ $errors->has('boys_washroom') ? ' has-error' : '' }}">
			<div class="col-sm-1" >
				<label>XIV</label>
			</div>
			<div class="col-sm-7" >
				<label>Boys Washroom</label>
			</div>
			<div class="col-sm-4">
				<input type="text" class="form-control" required id="boys_washroom" name="boys_washroom" >
				@if ($errors->has('boys_washroom'))
				<span class="help-block">
					<strong>{{ $errors->first('boys_washroom') }}</strong>
				</span>
				@endif
			</div>
		</div>
		<br>
		<div class="form-group{{ $errors->has('girls_washroom') ? ' has-error' : '' }}">
			<div class="col-sm-1" >
				<label>XV</label>
			</div>
			<div class="col-sm-7" >
				<label>Girls Washroom</label>
			</div>
			<div class="col-sm-4">
				<input type="text" class="form-control" required id="girls_washroom" name="girls_washroom" >
				@if ($errors->has('girls_washroom'))
				<span class="help-block">
					<strong>{{ $errors->first('girls_washroom') }}</strong>
				</span>
				@endif
			</div>
		</div>
		<br>
		<div class="form-group{{ $errors->has('other_details') ? ' has-error' : '' }}">
			<div class="col-sm-1" >
				<label>XVI</label>
			</div>
			<div class="col-sm-7" >
				<label>Another Details Of Building</label>
			</div>
			<div class="col-sm-4">
				<input type="text" class="form-control" required id="other_details" name="other_details" >
				@if ($errors->has('other_details'))
				<span class="help-block">
					<strong>{{ $errors->first('other_details') }}</strong>
				</span>
				@endif
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
				<div class="radio radio-inline">

					<strong><input type="radio" name="residence_for_principal" value="1"><label>Yes
					</label></strong>
					<strong><input type="radio" name="residence_for_principal" value="0" checked><label>No
					</label></strong>
				</div>
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
				<div class="radio radio-inline">

					<strong><input type="radio" name="required_furniture" value="1"><label>Yes
					</label></strong>
					<strong><input type="radio" name="required_furniture" value="0" checked><label>No
					</label></strong>
				</div>
			</div>
		</div>
		<br>



		<div class="form-group"><!--{{ $errors->has('name') ? ' has-error' : '' }}">-->
			<div class="well well-sm">9.Give details of following Land Details:</div>
		</div>
		<br>



		<div class="form-group">
			<div class="col-sm-8">

				<div class="form-group{{ $errors->has('land_details') ? ' has-error' : '' }}">
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

<div class="form-group{{ $errors->has('law_it_management_land') ? ' has-error' : '' }}">
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
	<div class="form-group{{ $errors->has('land_for_physical_education') ? ' has-error' : '' }}">
		<div class="col-sm-1" >
			<label>IV</label>
		</div>
		<div class="col-sm-11" >
			<label>Land Required for Phyisical Education college inside or outside should be 5Arcs</label>
		</div>

	</div>
	<br> 



	<div class="form-group{{ $errors->has('mba_mca') ? ' has-error' : '' }}">
		<div class="col-sm-1" >
			<label>V</label>
		</div>
		<div class="col-sm-11" >
			<label>Courses under AICTE should have land according to AICTE norms. For MBA 1Arcs, For MCA 1.5Arcs</label>
		</div>

	</div>
	<br>

	<div class="form-group{{ $errors->has('responsibility_of_society_interest') ? ' has-error' : '' }}">
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


			<textarea class="form-control"  rows="22" name="land_details"   required></textarea>
			@if ($errors->has('land_details'))
			<span class="help-block">
				<strong>{{ $errors->first('land_details') }}</strong>
			</span>
			@endif
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
<div class="form-group{{ $errors->has('endorsement_fund') ? ' has-error' : '' }}">
	<div class="col-sm-1" >
		<label>10</label>
	</div>
	<div class="col-sm-7" >
		<label>Does college had submitted or will submit the amount of endorsement fund in the form of F.D.R. payable to Dean,College Development Council, Punjabi University,Patiala (Details of Endorsement Fund decided by University is in Appendix-1)</label>
	</div> 
	<div class="col-sm-4" >
		<div class="radio radio-inline">

			<strong><input type="radio" id="endorsement_fund_true" name="endorsement_fund" value="1"><label>Yes
			</label></strong>
			<strong><input type="radio" id="endorsement_fund_false" name="endorsement_fund" value="0" checked><label>No
			</label></strong>
		</div>
	</div>
</div>
<div class="form-group">
	<div class="col-sm-1"><p></p></div>
</div>

<div class="form-group{{ $errors->has('endorsement_fund_details') ? ' has-error' : '' }}">
	<div class="col-sm-1" >
	</div>
	<div class="col-sm-7" >
		&nbsp;
	</div>
	<div class="col-sm-4" >
		<input type="hidden" name="endorsement_fund_details" value="-- NA --">
		<textarea  class="form-control" rows="4"  required id="endorsement_fund_details" name="endorsement_fund_details" disabled="disabled"  >-- NA --</textarea>
		@if ($errors->has('endorsement_fund_details'))
		<span class="help-block">
			<strong>{{ $errors->first('endorsement_fund_details') }}</strong>
		</span>
		@endif
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
		<div class="radio radio-inline">

			<strong><input type="radio" name="resources" id="resources_true" value="1"><label>Yes
			</label></strong>
			<strong><input type="radio" name="resources" id="resources_false" value="0" checked><label>No
			</label></strong>
		</div>
	</div>
	<br>
	<div class="form-group">
		<div class="col-sm-1"><p></p></div>
	</div>
	<div class="form-group{{ $errors->has('resources_detail') ? ' has-error' : '' }}">
		<div class="col-sm-1" >
		</div>
		<div class="col-sm-7" >
			<ul>
				<li>Explain with summary</li
				</ul>
			</div>
			<div class="col-sm-4" >
				<input type="hidden" name="resources_detail" value="-- NA --">
				<input type="text" class="form-control" required id="resources_detail" name="resources_detail"  value="-- NA --" disabled="disabled" >
				@if ($errors->has('resources_detail'))
				<span class="help-block">
					<strong>{{ $errors->first('resources_detail') }}</strong>
				</span>
				@endif
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
			<div class="radio radio-inline">
				<strong><input type="radio" name="bank_balance" value="1"><label>Yes
				</label></strong>
				<strong><input type="radio" name="bank_balance" value="0" checked><label>No
				</label></strong>
			</div>
		</div>
	</div>
	<br>
	<hr class="style18">
	<div class="form-group{{ $errors->has('provision_of_25000') ? ' has-error' : '' }}">
		<div class="col-sm-1" >
			<label>13</label>
		</div>
		<div class="col-sm-7" >
			<label>Does college have provision of Rs. 25,000/- for Library Books for first year or they will arrange it? </label>
		</div> 
		<div class="col-sm-4" >
			<div class="radio radio-inline">

				<strong><input type="radio" name="provision_of_25000" value="1"><label>Yes
				</label></strong>
				<strong><input type="radio" name="provision_of_25000" value="0" checked><label>No
				</label></strong>
			</div>
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
						<div class="radio radio-inline">
							<strong><input type="radio" name="every_year_10000" value="1"><label>Yes
							</label></strong>
							<strong><input type="radio" name="every_year_10000" value="0" checked><label>No
							</label></strong>
						</div>
					</div>
					</div>
					<div class="form-group">
					<div class="col-sm-1" ><p></p></div>
					<div class="col-sm-7" >
						<li>Does college had spent any amount on books earlier ?</li>
					</div> 
					<div class="col-sm-4" >
						<div class="radio radio-inline">

							<strong><input type="radio" name="any_other_amount" value="1"><label>Yes
							</label></strong>
							<strong><input type="radio" name="any_other_amount" value="0" checked><label>No
							</label></strong>
						</div>
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
			<div class="radio radio-inline">

				<strong><input type="radio" name="register_committee" value="1"><label>Yes
				</label></strong>
				<strong><input type="radio" name="register_committee" value="0" checked><label>No
				</label></strong>
			</div>
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
			<div class="radio radio-inline">

				<strong><input type="radio" name="early_members" value="1"><label>Yes
				</label></strong>
				<strong><input type="radio" name="early_members" value="0" checked><label>No
				</label></strong>
			</div>
		</div>
		</div>
		<div class="form-group">
		<div class="col-sm-1"><p></p></div>
			<div class="col-sm-7" >
						<li>Does college Managing Comittee is ready to appointee Qualified faculity </li>

					</div> 
					<div class="col-sm-4" >
						<div class="radio radio-inline">
							<strong><input type="radio" name="appoint_qualifiedfaculty" value="1"><label>Yes
							</label></strong>
							<strong><input type="radio" name="appoint_qualifiedfaculty" value="0" checked><label>No
							</label></strong>
						</div>
					</div>
				</div>


				<div class="form-group">
					<div class="col-sm-1"><p></p></div>
					<div class="col-sm-7" >

						<li>Give salary scale according to UGC and University?</li>

					</div> 
					<div class="col-sm-4" >
						<div class="radio radio-inline">
							<strong><input type="radio" name="salary_acc_ugc" value="1"><label>Yes
							</label></strong>
							<strong><input type="radio" name="salary_acc_ugc" value="0" checked><label>No
							</label></strong>
						</div>
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
			<div class="radio radio-inline">

				<strong><input type="radio" name="within_5mile"  value="1"><label>Yes
				</label></strong>
				<strong><input type="radio" name="within_5mile" value="0" checked><label>No
				</label></strong>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-1"><p></p></div>
		</div>

		<div class="form-group{{ $errors->has('any_other_college_name') ? ' has-error' : '' }}">
			<div class="col-sm-1" >
			</div>
			<div class="col-sm-7" >
				<ul>
					<li>If no then give the name of any other college nearby and distance from college?</li>
				</ul>
			</div>
			<div class="col-sm-4" >
				<input type="text" class="form-control" required id="any_other_college_name" name="any_other_college_name"  >
				@if ($errors->has('any_other_college_name'))
				<span class="help-block">
					<strong>{{ $errors->first('any_other_college_name') }}</strong>
				</span>

				@endif
			</div>
		</div>
	</div>
	<br>

	<div class="form-group">
		<div class="col-sm-1" >&nbsp;</div>
		<div class="col-sm-7" >&nbsp;</div>
		<div class="col-sm-4 text-justify" >

			<button type="submit" class="btn btn-primary" >Save</button>
		</div>
	</div>
</form>



<script type="text/javascript">

 ////////////////////////////READING ROOM////////////////////////////////////


 $('#reading_room_true').click(function()
 {
 	$('#readingroom_size').removeAttr("disabled");
 	$('#readingroom_size').val('');
 });

 $('#reading_room_false').click(function()
 {
 	$('#readingroom_size').val('-- NA --');
 	$('#readingroom_size').attr("disabled","disabled");
 });


/////////////////////////////PERIODICAL ROOM///////////////////////////////////


$('#periodical_room_true').click(function()
{
	$('#periodical_room_size').removeAttr("disabled");
	$('#periodical_room_size').val('');
});

$('#periodical_room_false').click(function()
{
	$('#periodical_room_size').val('-- NA --');
	$('#periodical_room_size').attr("disabled","disabled");
});


/////////////////////////////STUDY ROOM///////////////////////////////////


$('#studyroom_for_staff_true').click(function()
{
	$('#studyroom_for_staff_size').removeAttr("disabled");
	$('#studyroom_for_staff_size').val('');
});

$('#studyroom_for_staff_false').click(function()
{
	$('#studyroom_for_staff_size').val('-- NA --');
	$('#studyroom_for_staff_size').attr("disabled","disabled");
});


/////////////////////////////SCIENCE LAB///////////////////////////////////


$('#science_lab_true').click(function()
{
	$('#science_lab_size').removeAttr("disabled");
	$('#science_lab_size').val('');
});

$('#science_lab_false').click(function()
{

	$('#science_lab_size').val('-- NA --');
	$('#science_lab_size').attr("disabled","disabled");
});

/////////////////////////////endorsement fund///////////////////////////////////


$('#endorsement_fund_true').click(function()
{
	$('#endorsement_fund_details').removeAttr("disabled");
	$('#endorsement_fund_details').val('');
});

$('#endorsement_fund_false').click(function()
{
	$('#endorsement_fund_details').val('-- NA --');

	$('#endorsement_fund_details').attr("disabled","disabled");

});


////////////////////////////RESOURCES////////////////////////////////////


$('#resources_true').click(function()
{
	$('#resources_detail').removeAttr("disabled");
	$('#resources_detail').val('');
});

$('#resources_false').click(function()
{
	$('#resources_detail').attr("disabled","disabled");
	$('#resources_detail').val('-- NA --');
});

</script>


@endsection




