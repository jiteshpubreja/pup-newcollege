@extends('templates.main',['title' => 'Reset Password'])

@section('heading')
Reset Password
@endsection
@section('content')
                    @if (session('status'))
                        <div class="alert alert-success">
                            <p>
                              {{ session('status') }}
                            </p>
                          </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

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

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>

@endsection
