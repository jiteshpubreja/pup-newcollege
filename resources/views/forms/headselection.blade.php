@extends('templates.main',['title' => 'Team Selection'])
@section('heading')
Team Selection Form
@endsection
@section('content')

<div class="panel-heading"><strong><!-- InstanceBeginEditable name="content_head" -->Faculty Head Selection for Inspection<!-- InstanceEndEditable --></strong></div>
                <div class="panel-body text-info">

                   <!-- InstanceBeginEditable name="content_body" --> <style>



  .btn-success {
      box-shadow: 1px 2px 5px #000000;

  }</style>

  <div class="container">


  </form>
  <form class="form-horizontal" role="form" action="" method="post" name="loginform">
  <div class="form-group">
    <label class="control-label col-sm-2" for="refid1">Ref Id:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name='refid' id='refid1'  >
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="inspno1">Inspection No:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name='inspno' id='inspno1' >
    </div>
  </div>

          <div class="form-group" style="height:70px;">
    <div class="col-sm-offset-2 col-sm-10"  >

  <select name="role" class=" selectpicker" data-live-search="true" id="role1" title="Please select Team Head..." >

 <option value="f1">F1</option>
            <option value="f2">F2</option>
            <option value="f3">F3</option>
            <option value="f4">F4</option>
            <option value="f5">F5</option>

  </select>
  </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email1" name="email" placeholder="Enter email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="password1">Password:</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="password1" name="password" placeholder="Enter password">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit"  name="login" class="btn btn-success">Submit</button>
    </div>
  </div>

</form>
  </div><!-- InstanceEndEditable -->
              </div>


@endsection
