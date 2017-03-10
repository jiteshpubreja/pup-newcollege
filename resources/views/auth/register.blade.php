@extends('templates.main',['title' => 'Register'])


@section('heading')
Signup
@endsection
@section('content')
<style>

  .btn-primary {
      box-shadow: 1px 2px 5px #000000;
  }</style>

<form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('fname') ? ' has-error' : '' }}">
                            <h4 >
                                    <strong><label for="fname" class="col-md-4 control-label">First Name</label></strong></h4>

                            <div class="col-md-6">
                                <input id="fname" type="text" class="form-control" name="fname" value="{{ old('fname') }}" required autofocus>

                                @if ($errors->has('fname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('lname') ? ' has-error' : '' }}">
                            <h4 >
                                    <strong><label for="lname" class="col-md-4 control-label">Last Name</label></strong></h4>

                            <div class="col-md-6">
                                <input id="lname" type="text" class="form-control" name="lname" value="{{ old('lname') }}" required autofocus>

                                @if ($errors->has('lname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                           <h4 >
                                    <strong> <label for="email" class="col-md-4 control-label">E-Mail Address</label></strong></h4>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                           <h4 >
                                    <strong> <label for="mobile" class="col-md-4 control-label">Mobile Number</label></strong></h4>

                            <div class="col-md-6">
                                <input id="mobile" type="text" class="form-control" name="mobile" value="{{ old('mobile') }}" required>

                                @if ($errors->has('mobile'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('landline') ? ' has-error' : '' }}">
                           <h4 >
                                    <strong> <label for="landline" class="col-md-4 control-label">Landline Number</label></strong></h4>

                            <div class="col-md-6">
                                <input id="landline" type="text" class="form-control" name="landline" value="{{ old('landline') }}" required>

                                @if ($errors->has('landline'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('landline') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <h4>
                                    <strong><label for="password" class="col-md-4 control-label">Password</label></strong></h4>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <h4>
                                    <strong><label for="password-confirm" class="col-md-4 control-label">Confirm Password</label></strong></h4>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>


@endsection
