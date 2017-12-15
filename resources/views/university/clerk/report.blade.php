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
                Loi Granted Colleges
            </option>
            <option value="loinongranted">
                Non Loi Granted Colleges 
            </option>
            <option value="discrepancies">
                Inspections done
            </option>
        </select>
    </div>
</div>
<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <button type="submit" class="btn btn-primary">
            Generate Report
        </button>
    </div>
</div>
</form>
@endsection
