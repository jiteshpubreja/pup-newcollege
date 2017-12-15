@extends('templates.main',['title' => 'Login'])

@section('heading')
Login
@endsection
@section('content')

                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        @if ($message = Session::get('success'))
                          <div class="alert alert-success">
                            <p>
                              {{ $message }}
                            </p>
                          </div>
                        @endif
                        @if ($message = Session::get('warning'))
                          <div class="alert alert-warning">
                            <p>
                              {{ $message }}
                            </p>
                          </div>
                        @endif

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

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <h4>
                                    <strong><label for="password" class="col-md-4 control-label">Password</label></strong></h4>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block" style="text-align: left;">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                               <strong><input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label>
                                         Remember Me
                                    </label></strong>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>




@endsection
