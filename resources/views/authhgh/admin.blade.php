@extends('templates.main',['title' => 'Admin Signup'])
@section('heading')
Admin Sign Up
@endsection
@section('content')
<style>
.btn-primary {
      box-shadow: 1px 2px 5px #000000;

  }</style>


<form class="form-horizontal" action='' method='post' id="myForm">
<div class="form-group">
    <label class="control-label col-sm-2" for="fname1">First Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name='fname' id='fname1'  placeholder="Enter First Name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="lname1">Last Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name='lname' id='lname1' placeholder="Enter Last Name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pnumber1">Phone No:</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name='pnumber' id='pnumber1' placeholder="Enter Phone number">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email1">Email:</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id='email1' name='email' placeholder="Enter email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd1">Password:</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id='password1' name='password' placeholder="Enter password">
    </div>
  </div>

 <div class="form-group" style="height:70px;">
    <div class="col-sm-offset-2 col-sm-10"  >

  <select name="role" class=" selectpicker" data-live-search="true" id="role1" title="Please select role..." >

  <option value="Clerk">Clerk</option>
  <option value="Dean">Dean</option>
  <option value="Inspmember">Inspection Member</option>
  <option value="Insphead">Inspection Head</option>
  <option value="Admin">Admin</option>

  </select>
  </div>
  </div>




  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary" value="Registration">Submit</button>
    </div>
  </div>


         <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <span class="white">Already Registered?</span> <a href="login.php" class="active">Login Here</a>
    </div>
  </div>



	</form>


@endsection
