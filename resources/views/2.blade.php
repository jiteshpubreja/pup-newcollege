@extends('templates.main',['title' => '5000-2'])
@section('heading')
First Registration Form
@endsection
@section('content')
<form class="form-horizontal">
  <div class="form-group{{ $errors->has('college_name') ? ' has-error' : '' }}">
    <div class="col-sm-1" >
      <label>1</label>
    </div>
    <div class="col-sm-6" >
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


<hr>
<div class="form-group{{ $errors->has('session') ? ' has-error' : '' }}">
  <div class="col-sm-1" >
    <label>2</label>
  </div>
  <div class="col-sm-6" >
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
<hr>
<div class="form-group{{ $errors->has('courses') ? ' has-error' : '' }}">
  <div class="col-sm-1" >
    <label>3</label>
  </div>
  <div class="col-sm-6" >
    <label>Cources To be start</label>
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
<hr>
<div class="form-group{{ $errors->has('co_education') ? ' has-error' : '' }}">
  <div class="col-sm-1" >
    <label>4</label>
  </div>
  <div class="col-sm-6" >
    <label>Will it be a Co-Education?</label>
  </div>
  <div class="radio radio-inline"">

    <strong><input type="radio" name="co_education" value="1"><label>Yes
    </label></strong>
    <strong><input type="radio" name="co_education" value="0" checked><label>No
    </label></strong>
  </div>

<!-- <input type="radio" name="check" <?php if (isset($check) && $check=="yes") echo "checked";?> value="yes">Yes
  <input type="radio" name="check" <?php if (isset($check) && $check=="no") echo "checked";?> value="no">No -->
</div>
<br>

<div class="form-group">
  <div class="well well-sm">5.Give details of following facilities:</div>
</div>

<div class="form-group{{ $errors->has('railway_station') ? ' has-error' : '' }}">
  <div class="col-sm-1" >
    <label>I</label>
  </div>
  <div class="col-sm-6" >
    <label >Railway Station</label>
  </div>
  <div class="col-sm-3">
    <input type="text" class="form-control" required id="railway_station" name="railway_station" >
    @if ($errors->has('courses'))
    <span class="help-block">
      <strong>{{ $errors->first('courses') }}</strong>
    </span>
    @endif
  </div>
</div>
<br>


<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
  <div class="col-sm-1" >
    <label>II</label>
  </div>
  <div class="col-sm-6" >
    <label >Bus Stand</label>
  </div>
  <div class="col-sm-3">
    <input type="text" class="form-control" required id="clgname" name="clgname" >
    @if ($errors->has('courses'))
    <span class="help-block">
      <strong>{{ $errors->first('courses') }}</strong>
    </span>
    @endif
  </div>
</div>
<br>


<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
  <div class="col-sm-1" >
    <label>III</label>
  </div>
  <div class="col-sm-6" >
    <label >Post office</label>
  </div>
  <div class="col-sm-3">
    <input type="text" class="form-control" required id="clgname" name="clgname" >
    @if ($errors->has('courses'))
    <span class="help-block">
      <strong>{{ $errors->first('courses') }}</strong>
    </span>
    @endif
  </div>
</div>
<br>


<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
  <div class="col-sm-1" >
    <label>IV</label>
  </div>
  <div class="col-sm-6" >
    <label >telegram office</label>
  </div>
  <div class="col-sm-3">
    <input type="text" class="form-control" required id="clgname" name="clgname" >
    @if ($errors->has('courses'))
    <span class="help-block">
      <strong>{{ $errors->first('courses') }}</strong>
    </span>
    @endif
  </div>
</div>
<br>


<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
  <div class="col-sm-1" >
    <label>V</label>
  </div>
  <div class="col-sm-6" >
    <label >telephone of college</label>
  </div>
  <div class="col-sm-3">
    <input type="text" class="form-control" required id="clgname" name="clgname" >
    @if ($errors->has('courses'))
    <span class="help-block">
      <strong>{{ $errors->first('courses') }}</strong>
    </span>
    @endif
  </div>
</div>
<br>


<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
  <div class="col-sm-1" >
    <label>VI</label>
  </div>
  <div class="col-sm-6" >
    <label >telephone of college</label>
  </div>
  <div class="col-sm-3">
    <input type="text" class="form-control" required id="clgname" name="clgname" >
    @if ($errors->has('courses'))
    <span class="help-block">
      <strong>{{ $errors->first('courses') }}</strong>
    </span>
    @endif
  </div>
</div>
<br>


<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
  <div class="col-sm-1" >
    <label>VII</label>
  </div>
  <div class="col-sm-6" >
    <label >telephone of Principal</label>
  </div>
  <div class="col-sm-3">
    <input type="text" class="form-control" required id="clgname" name="clgname" >
    @if ($errors->has('courses'))
    <span class="help-block">
      <strong>{{ $errors->first('courses') }}</strong>
    </span>
    @endif
  </div>
</div>
<br>


<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
  <div class="col-sm-1" >
    <label>VIII</label>
  </div>
  <div class="col-sm-6" >
    <label >telephone of President of managing comittee of college</label>
  </div>
  <div class="col-sm-3">
    <input type="text" class="form-control" required id="clgname" name="clgname" >
    @if ($errors->has('courses'))
    <span class="help-block">
      <strong>{{ $errors->first('courses') }}</strong>
    </span>
    @endif
  </div>
</div>
<br>


<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
  <div class="col-sm-1" >
    <label>IX</label>
  </div>
  <div class="col-sm-6" >
    <label >telephone of Secratory office</label>
  </div>
  <div class="col-sm-3">
    <input type="text" class="form-control" required id="clgname" name="clgname" >
    @if ($errors->has('courses'))
    <span class="help-block">
      <strong>{{ $errors->first('courses') }}</strong>
    </span>
    @endif
  </div>
</div>
<br>


<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
  <div class="col-sm-1" >
    <label>X</label>
  </div>
  <div class="col-sm-6" >
    <label >telephone of Principal House number</label>
  </div>
  <div class="col-sm-3">
    <input type="text" class="form-control" required id="clgname" name="clgname" >
    @if ($errors->has('courses'))
    <span class="help-block">
      <strong>{{ $errors->first('courses') }}</strong>
    </span>
    @endif
  </div>
</div>
<br>

<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
  <div class="well well-sm">6.Give following Building Details:</div>
</div>

<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
  <div class="col-sm-1" >
    <label>I</label>
  </div>
  <div class="col-sm-6" >
    <label >Principal Office</label>
  </div>
  <div class="col-sm-3">
    <input type="text" class="form-control" required id="clgname" name="clgname" >
    @if ($errors->has('courses'))
    <span class="help-block">
      <strong>{{ $errors->first('courses') }}</strong>
    </span>
    @endif
  </div>
</div>
<br>


<span class="bg-info" >NOTE: (Counting and size)(According to UGC norms their should be space equal to 10sqft per student)</span>

<br>
<br>
<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
  <div class="col-sm-1" >
    <label>II</label>
  </div>
  <div class="col-sm-6" >
    <label >Classes Count</label>
  </div>
  <div class="col-sm-3">
    <input type="text" class="form-control" required id="clgname" name="clgname" >
    @if ($errors->has('courses'))
    <span class="help-block">
      <strong>{{ $errors->first('courses') }}</strong>
    </span>
    @endif
  </div>
</div>
<br>

<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
  <div class="col-sm-1" >
    <label>III</label>
  </div>
  <div class="col-sm-6" >
    <label >Classes Size</label>
  </div>
  <div class="col-sm-3">
    <input type="text" class="form-control" required id="clgname" name="clgname" >
    @if ($errors->has('courses'))
    <span class="help-block">
      <strong>{{ $errors->first('courses') }}</strong>
    </span>
    @endif
  </div>
</div>
<br>
<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
  <div class="col-sm-1" >
    <label>IV</label>
  </div>
  <div class="col-sm-6" >
    <label >Staff Room</label>
  </div>
  <div class="col-sm-3">
    <input type="text" class="form-control" required id="clgname" name="clgname" >
    @if ($errors->has('courses'))
    <span class="help-block">
      <strong>{{ $errors->first('courses') }}</strong>
    </span>
    @endif
  </div>
</div>
<br>
<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
  <div class="col-sm-1" >
    <label>V</label>
  </div>
  <div class="col-sm-6" >
    <label >Common Room For Girls</label>
  </div>
  <div class="col-sm-3">
    <input type="text" class="form-control" required id="clgname" name="clgname" >
    @if ($errors->has('courses'))
    <span class="help-block">
      <strong>{{ $errors->first('courses') }}</strong>
    </span>
    @endif
  </div>
</div>
<br>
<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
  <div class="col-sm-1" >
    <label>VI</label>
  </div>
  <div class="col-sm-6" >
    <label >Common Room For Boys</label>
  </div>
  <div class="col-sm-3">
    <input type="text" class="form-control" required id="clgname" name="clgname" >
    @if ($errors->has('courses'))
    <span class="help-block">
      <strong>{{ $errors->first('courses') }}</strong>
    </span>
    @endif
  </div>
</div>
<br>
<span class="bg-info" >NOTE: Library (Size of Rooms) According to UGC Norms: <br>
  1 Reading Room: 50" x 30"  <br>
  1 Periodical Room: 30" x 20"  <br>
  1 Study Room for Staff: 15" x 20")
</span>
<br>
<br>




<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
  <div class="col-sm-1" >
    <label>VII</label>
  </div>
  <div class="col-sm-6" >
    <label >Reading Room</label>
  </div>
  <div class="radio radio-inline"">

    <strong><input type="radio" name="optradio" value="1"><label>Yes
    </label></strong>
    <strong><input type="radio" name="optradio" value="0" checked><label>No
    </label></strong>
  </div>
  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <div class="col-sm-1"><p></p></div>
  </div>

  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <div class="col-sm-1" >
    </div>
    <div class="col-sm-6" >
      <ul>
        <li>Reading Room Size</li>
      </ul>
    </div>
    <div class="col-sm-3" >
      <input type="text" class="form-control" required id="clgname" name="clgname" >
      @if ($errors->has('courses'))
      <span class="help-block">
        <strong>{{ $errors->first('courses') }}</strong>
      </span>
      @endif
    </div>
  </div>
</div>

<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
  <div class="col-sm-1" >
    <label>VIII</label>
  </div>
  <div class="col-sm-6" >
    <label >Periodical Room</label>
  </div>
  <div class="radio radio-inline"">

    <strong><input type="radio" name="optradio" value="1"><label>Yes
    </label></strong>
    <strong><input type="radio" name="optradio" value="0" checked><label>No
    </label></strong>
  </div>
  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <div class="col-sm-1"><p></p></div>
  </div>

  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <div class="col-sm-1" >
    </div>
    <div class="col-sm-6" >
      <ul>
        <li>Periodical Room Size</li>
      </ul>
    </div>
    <div class="col-sm-3" >
      <input type="text" class="form-control" required id="clgname" name="clgname" >
      @if ($errors->has('courses'))
      <span class="help-block">
        <strong>{{ $errors->first('courses') }}</strong>
      </span>
      @endif
    </div>
  </div>
</div>

<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
  <div class="col-sm-1" >
    <label>IX</label>
  </div>
  <div class="col-sm-6" >
    <label >Study Room For Staff</label>
  </div>
  <div class="radio radio-inline"">

    <strong><input type="radio" name="optradio" value="1"><label>Yes
    </label></strong>
    <strong><input type="radio" name="optradio" value="0" checked><label>No
    </label></strong>
  </div>
  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <div class="col-sm-1"><p></p></div>
  </div>

  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <div class="col-sm-1" >
    </div>
    <div class="col-sm-6" >
      <ul>
        <li>Study Room Staff Size</li>
      </ul>
    </div>
    <div class="col-sm-3" >
      <input type="text" class="form-control" required id="clgname" name="clgname" >
      @if ($errors->has('courses'))
      <span class="help-block">
        <strong>{{ $errors->first('courses') }}</strong>
      </span>
      @endif
    </div>
  </div>
</div>

<br>
<span class="bg-info" >NOTE: labourtries(Science) 
  (According to Norms 40sqft per students space required)
</span>
<br>
<br>

<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
  <div class="col-sm-1" >
    <label>X</label>
  </div>
  <div class="col-sm-6" >
    <label >Science Laboratory</label>
  </div>
  <div class="radio radio-inline"">

    <strong><input type="radio" name="optradio" value="1"><label>Yes
    </label></strong>
    <strong><input type="radio" name="optradio" value="0" checked><label>No
    </label></strong>
  </div>
  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <div class="col-sm-1"><p></p></div>
  </div>

  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <div class="col-sm-1" >
    </div>
    <div class="col-sm-6" >
      <ul>
        <li>Science Laboratory Size</li
        </ul>
      </div>
      <div class="col-sm-3" >
        <input type="text" class="form-control" required id="clgname" name="clgname" >
        @if ($errors->has('courses'))
        <span class="help-block">
          <strong>{{ $errors->first('courses') }}</strong>
        </span>
        @endif
      </div>
    </div>
  </div>

  <br>



  <br>
  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <div class="col-sm-1" >
      <label>XI</label>
    </div>
    <div class="col-sm-6" >
      <label >Another Store Room</label>
    </div>
    <div class="col-sm-3">
      <input type="text" class="form-control" required id="clgname" name="clgname" >
      @if ($errors->has('courses'))
      <span class="help-block">
        <strong>{{ $errors->first('courses') }}</strong>
      </span>
      @endif
    </div>
  </div>
  <br>

  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <div class="col-sm-1" >
      <label>XII</label>
    </div>
    <div class="col-sm-6" >
      <label >water Supply</label>
    </div>
    <div class="radio radio-inline"">

      <strong><input type="radio" name="optradio" value="1"><label>Yes
      </label></strong>
      <strong><input type="radio" name="optradio" value="0" checked><label>No
      </label></strong>
    </div>
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
      <div class="col-sm-1"><p></p></div>
    </div>

    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
      <div class="col-sm-1" >
      </div>
      <div class="col-sm-6" >
        <ul>
          <li>Water Supply Details</li
          </ul>
        </div>
        <div class="col-sm-3" >
          <input type="text" class="form-control" required id="clgname" name="clgname" >
          @if ($errors->has('courses'))
          <span class="help-block">
            <strong>{{ $errors->first('courses') }}</strong>
          </span>
          @endif
        </div>
      </div>
    </div>
    <br>
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
      <div class="col-sm-1" >
        <label>XIII</label>
      </div>
      <div class="col-sm-6" >
        <label >Electricity Supply</label>
      </div>
      <div class="radio radio-inline"">

        <strong><input type="radio" name="optradio" value="1"><label>Yes
        </label></strong>
        <strong><input type="radio" name="optradio" value="0" checked><label>No
        </label></strong>
      </div>
      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <div class="col-sm-1"><p></p></div>
      </div>

      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <div class="col-sm-1" >
        </div>
        <div class="col-sm-6" >
          <ul>
            <li>Electricity Supply Details</li
            </ul>
          </div>
          <div class="col-sm-3" >
            <input type="text" class="form-control" required id="clgname" name="clgname" >
            @if ($errors->has('courses'))
            <span class="help-block">
              <strong>{{ $errors->first('courses') }}</strong>
            </span>
            @endif
          </div>
        </div>
      </div>
      <br>
      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <div class="col-sm-1" >
          <label>XIV</label>
        </div>
        <div class="col-sm-6" >
          <label >Boys Washroom</label>
        </div>
        <div class="col-sm-3">
          <input type="text" class="form-control" required id="clgname" name="clgname" >
          @if ($errors->has('courses'))
          <span class="help-block">
            <strong>{{ $errors->first('courses') }}</strong>
          </span>
          @endif
        </div>
      </div>
      <br>
      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <div class="col-sm-1" >
          <label>XV</label>
        </div>
        <div class="col-sm-6" >
          <label >Girls Washroom</label>
        </div>
        <div class="col-sm-3">
          <input type="text" class="form-control" required id="clgname" name="clgname" >
          @if ($errors->has('courses'))
          <span class="help-block">
            <strong>{{ $errors->first('courses') }}</strong>
          </span>
          @endif
        </div>
      </div>
      <br>
      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <div class="col-sm-1" >
          <label>XVI</label>
        </div>
        <div class="col-sm-6" >
          <label >Another Details Of Building</label>
        </div>
        <div class="col-sm-3">
          <input type="text" class="form-control" required id="clgname" name="clgname" >
          @if ($errors->has('courses'))
          <span class="help-block">
            <strong>{{ $errors->first('courses') }}</strong>
          </span>
          @endif
        </div>
      </div>
      <br>
      <hr>
      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <div class="col-sm-1" >
          <label>7</label>
        </div>
        <div class="col-sm-6" >
          <label >Residence for principal OR Will managing comittee will arrange residence for principal(Within 1 km)? Or they will promised to do the same?</label>
        </div>
        <div class="radio radio-inline"">

          <strong><input type="radio" name="optradio" value="1"><label>Yes
          </label></strong>
          <strong><input type="radio" name="optradio" value="0" checked><label>No
          </label></strong>
        </div>
      </div>
      <br>
      <hr>
      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <div class="col-sm-1" >
          <label>8</label>
        </div>
        <div class="col-sm-6" >
          <label >Does college have required furniture?</label>
        </div>
        <div class="radio radio-inline"">

          <strong><input type="radio" name="optradio" value="1"><label>Yes
          </label></strong>
          <strong><input type="radio" name="optradio" value="0" checked><label>No
          </label></strong>
        </div>
      </div>
      <br>
      <hr>
      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <div class="well well-sm">9.Give details of following Land Details:</div>
      </div>
      <br>
      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <div class="col-sm-1" >
          <label>I</label>
        </div>
        <div class="col-sm-6" >
          <label >Land required for education 2500sq.mt.</label>
        </div>
        <div class="col-sm-3">
          <input type="text" class="form-control" required id="clgname" name="clgname" >
          @if ($errors->has('courses'))
          <span class="help-block">
            <strong>{{ $errors->first('courses') }}</strong>
          </span>
          @endif
        </div>
      </div>
      <br>

      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <div class="col-sm-1" >
          <label>II</label>
        </div>
        <div class="col-sm-6" >
          <label >For Law,Information Technology Mangement and Arts/Science Degree college Land should
            be according to following:<br>
            Inside Municipal corporation Area-  2Arcs<br>
            Inside Municipal Comittee Area   -  3Arcs<br>
            Outside Municipal Comittee Area  -  5Arcs</label>
          </div>
          <div class="col-sm-3">
            <input type="text" class="form-control" required id="clgname" name="clgname" >
            @if ($errors->has('courses'))
            <span class="help-block">
              <strong>{{ $errors->first('courses') }}</strong>
            </span>
            @endif
          </div>
        </div>
        <br>
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
          <div class="col-sm-1" >
            <label>III</label>
          </div>
          <div class="col-sm-6" >
            <label >Land Required inside Municipal Corporation and Municipal Comittee areas for girls Arts/Science Degree
              college should be 2Arcs and outside Municipal limit it should be 3Arcs</label>
            </div>
            <div class="radio radio-inline"">

              <strong><input type="radio" name="optradio" value="1"><label>Yes
              </label></strong>
              <strong><input type="radio" name="optradio" value="0" checked><label>No
              </label></strong>
            </div>
          </div>
          <br>
          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <div class="col-sm-1" >
              <label>IV</label>
            </div>
            <div class="col-sm-6" >
              <label >Land Required for Phyisical Education college inside or outside should be 5Arcs</label>
            </div>
            <div class="col-sm-3">
              <input type="text" class="form-control" required id="clgname" name="clgname" >
              @if ($errors->has('courses'))
              <span class="help-block">
                <strong>{{ $errors->first('courses') }}</strong>
              </span>
              @endif
            </div>
          </div>
          <br>
          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <div class="col-sm-1" >
              <label>V</label>
            </div>
            <div class="col-sm-6" >
              <label >Courses under AICTE should have land according to AICTE norms. For MBA 1Arcs, For MCA 1.5Arcs</label>
            </div>
            <div class="col-sm-3">
              <input type="text" class="form-control" required id="clgname" name="clgname" >
              @if ($errors->has('courses'))
              <span class="help-block">
                <strong>{{ $errors->first('courses') }}</strong>
              </span>
              @endif
            </div>
          </div>
          <br>
          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <div class="col-sm-1" >
              <label>VI</label>
            </div>
            <div class="col-sm-6" >
              <label >Courses under AICTE should have land according to AICTE norms. For MBA 1Arcs, For MCA 1.5Arcs</label>
            </div>
            <div class="col-sm-3">
              <input type="text" class="form-control" required id="clgname" name="clgname" >
              @if ($errors->has('courses'))
              <span class="help-block">
                <strong>{{ $errors->first('courses') }}</strong>
              </span>
              @endif
            </div>
          </div>
          <br>
          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <div class="col-sm-1" >
              <label>VII</label>
            </div>
            <div class="col-sm-6" >
              <label >If Sociey/Trust have Land according to rules for 99years lease, then permission for opening college will be on this promise If during lease time lease agreement overs then due to this if admitted students and staff faces any problem then society/trust will be liable for the same.</label>
            </div>
            <div class="col-sm-3">
              <input type="text" class="form-control" required id="clgname" name="clgname" >
              @if ($errors->has('courses'))
              <span class="help-block">
                <strong>{{ $errors->first('courses') }}</strong>
              </span>
              @endif
            </div>
          </div>
          <br>
          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <div class="col-sm-1" >
              <label>VIII</label>
            </div>
            <div class="col-sm-6" >
              <label >NOTE: Attach a document from Tehsil for every college mentioned above the land is single piece and interest less.</label>
            </div>
            <div class="radio radio-inline"">

              <strong><input type="radio" name="optradio" value="1"><label>Yes
              </label></strong>
              <strong><input type="radio" name="optradio" value="0" checked><label>No
              </label></strong>
            </div>
          </div>
          <br>
          <hr>
          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <div class="col-sm-1" >
              <label>10</label>
            </div>
            <div class="col-sm-6" >
              <label >Does college had submitted or will submit the amount of endorsement fund in the form of F.D.R. payable to Dean,College Development Council, Punjabi University,Patiala (Details of Endorsement Fund decided by University is in Appendix-1)</label>
            </div>
            <div class="radio radio-inline"">

              <strong><input type="radio" name="optradio" value="1"><label>Yes
              </label></strong>
              <strong><input type="radio" name="optradio" value="0" checked><label>No
              </label></strong>
            </div>
          </div>
          <br>
          <hr>
          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <div class="col-sm-1" >
              <label>11</label>
            </div>
            <div class="col-sm-6" >
              <label >Does college has enough resources to aintain their working position?</label>
            </div>
            <div class="radio radio-inline"">

              <strong><input type="radio" name="optradio" value="1"><label>Yes
              </label></strong>
              <strong><input type="radio" name="optradio" value="0" checked><label>No
              </label></strong>
            </div>
            <br>
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <div class="col-sm-1"><p></p></div>
            </div>
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <div class="col-sm-1" >
              </div>
              <div class="col-sm-6" >
                <ul>
                  <li>Explain with summary</li
                  </ul>
                </div>
                <div class="col-sm-3" >
                  <input type="text" class="form-control" required id="clgname" name="clgname" >
                  @if ($errors->has('courses'))
                  <span class="help-block">
                    <strong>{{ $errors->first('courses') }}</strong>
                  </span>
                  @endif
                </div>
              </div>
            </div>
            <br>
            <hr>

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <div class="col-sm-1" >
                <label>12</label>
              </div>
              <div class="col-sm-6" >
                <label >Does bank have any other amount on the name of college? Attach proofs.</label>
              </div>
              <div class="radio radio-inline"">
                <strong><input type="radio" name="optradio" value="1"><label>Yes
                </label></strong>
                <strong><input type="radio" name="optradio" value="0" checked><label>No
                </label></strong>
              </div>
            </div>
            <br>
            <hr>
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <div class="col-sm-1" >
                <label>13</label>
              </div>
              <div class="col-sm-6" >
                <label >Does college have provision of Rs. 25,000/- for Library Books for first year or they will arrange it? </label>
              </div>
              <div class="radio radio-inline"">

                <strong><input type="radio" name="optradio" value="1"><label>Yes
                </label></strong>
                <strong><input type="radio" name="optradio" value="0" checked><label>No
                </label></strong>
              </div>
              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <div class="col-sm-1"><p></p></div>
              </div>

              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <div class="col-sm-1" >
                </div>
                <div class="col-sm-6" >
                  <ul>
                    <li>similiarly Rs. 10,000/- will be spent for the same every year?</li>
                  </ul>
                </div>
                <div class="radio radio-inline"">

                  <strong><input type="radio" name="optradio" value="1"><label>Yes
                  </label></strong>
                  <strong><input type="radio" name="optradio" value="0" checked><label>No
                  </label></strong>
                </div>
              </div>
              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <div class="col-sm-1"><p></p></div>
              </div>

              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <div class="col-sm-1" >
                </div>
                <div class="col-sm-6" >
                  <ul>
                    <li>Does college had spent any amount on books earlier ?</li>
                  </ul>
                </div>
                <div class="radio radio-inline"">

                  <strong><input type="radio" name="optradio" value="1"><label>Yes
                  </label></strong>
                  <strong><input type="radio" name="optradio" value="0" checked><label>No
                  </label></strong>
                </div>
              </div>
            </div>
            <br>
            <hr>
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <div class="col-sm-1" >
                <label>14</label>
              </div>
              <div class="col-sm-6" >
                <label >Does college has any Registered Managing Comittee? </label>
              </div>
              <div class="radio radio-inline"">

                <strong><input type="radio" name="optradio" value="1"><label>Yes
                </label></strong>
                <strong><input type="radio" name="optradio" value="0" checked><label>No
                </label></strong>
              </div>
              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <div class="col-sm-1"><p></p></div>
              </div>

              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <div class="col-sm-1" >
                </div>
                <div class="col-sm-6" >
                  <ul>
                    <li>If yes then send the list of members. (For number of Members of Managing Comittee see Paragarph-3 of Application Letter.) Send the copy of Registration.</li>
                  </ul>
                </div>
                <!-- FILE UPLOADER-->
              </div>
            </div>
            <br>
            <hr>
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <div class="col-sm-1" >
                <label>15</label>
              </div>
              <div class="col-sm-6" >
                <label >Does college has any members earlier?</label>
              </div>
              <div class="radio radio-inline"">

                <strong><input type="radio" name="optradio" value="1"><label>Yes
                </label></strong>
                <strong><input type="radio" name="optradio" value="0" checked><label>No
                </label></strong>
              </div>
              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <div class="col-sm-1"><p></p></div>
              </div>

              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <div class="col-sm-1" >
                </div>
                <div class="col-sm-6" >
                  <ul>
                    <li>Does college Managing Comittee is ready to appointee Qualified faculity </li>
                  </ul>
                </div>
                <div class="radio radio-inline"">

                  <strong><input type="radio" name="optradio" value="1"><label>Yes
                  </label></strong>
                  <strong><input type="radio" name="optradio" value="0" checked><label>No
                  </label></strong>
                </div>
              </div>
              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <div class="col-sm-1"><p></p></div>
              </div>

              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <div class="col-sm-1" >
                </div>
                <div class="col-sm-6" >
                  <ul>
                    <li>Give salary scale according to UGC and University?</li>
                  </ul>
                </div>
                <div class="radio radio-inline"">

                  <strong><input type="radio" name="optradio" value="1"><label>Yes
                  </label></strong>
                  <strong><input type="radio" name="optradio" value="0" checked><label>No
                  </label></strong>
                </div>
              </div>
            </div>
            <br>
            <hr>
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <div class="col-sm-1" >
                <label>16</label>
              </div>
              <div class="col-sm-6" >
                <label >s college has any other college within 5mile? If yes then write the name </label>
              </div>
              <div class="radio radio-inline"">

                <strong><input type="radio" name="optradio" value="1"><label>Yes
                </label></strong>
                <strong><input type="radio" name="optradio" value="0" checked><label>No
                </label></strong>
              </div>
              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <div class="col-sm-1"><p></p></div>
              </div>

              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <div class="col-sm-1" >
                </div>
                <div class="col-sm-6" >
                  <ul>
                    <li>If no then give the name of any other college nearby and distance from college?</li>
                  </ul>
                </div>
                <div class="col-sm-3" >
                  <input type="text" class="form-control" required id="clgname" name="clgname" >
                  @if ($errors->has('courses'))
                  <span class="help-block">
                    <strong>{{ $errors->first('courses') }}</strong>
                  </span>
                  @endif
                </div>
              </div>
            </div>
            <br>
            <hr>

            <div class="form-group">
              <div class="col-sm-1" >&nbsp;</div>
              <div class="col-sm-6" >&nbsp;</div>
              <div class="col-sm-4 text-justify" >

                <button type="submit" class="btn btn-primary" >Submit</button>
              </div>
            </div>
          </form>





          @endsection