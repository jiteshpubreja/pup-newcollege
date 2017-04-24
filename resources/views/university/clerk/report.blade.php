@extends('templates.clerk.main',['title' => 'Generating Report'])
@section('heading')
Generate Report
@endsection
@section('content')
<form class="form-horizontal" role="form" method="POST" action="{{ route('finalreport') }}">
    {{ csrf_field() }}
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>
          {{ $message }}
      </p>
  </div>
  @endif
  <div class="form-group">
     <h4 >
        <strong> 
            <label for="id_dept" class="col-md-4 control-label">
                Report
            </label>
        </strong>
    </h4>
    <div class="col-md-6">
        <select name="finalreport" class=" selectpicker" id="finalreport" title="Select Report..." required>
            <option value="allcollege">
                All College list
            </option>
            <option value="loigranted">
                Loi Granted College 
            </option>
            <option value="discrepancies">
                Inspections done
            </option>
        </select>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog  modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
      </div> 
      <div class="modal-body">
        Are You Sure you want.......
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
</div>
</div>
</form>
<!-- Button trigger modal -->
<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            Generate Report
        </button>
    </div>
</div>
@endsection
