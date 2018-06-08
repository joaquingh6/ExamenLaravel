@extends('layouts.layout')

@section('content')

<section class="pages container">
        <div class="page page-contact">
            
            <div class="divider-2" style="margin:25px 0;"></div>
            <div class="form-contact">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="input-container container-flex space-between">
                        <label>E-Mail Address</label>
                        <input type="email" placeholder="Email" name="email" class="input-email{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}">
                        @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif                       
                    </div>
                    <div class="input-container container-flex space-between">

                    <label>{{ __('Password') }}</label>
                    <input type="password" name="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}">
                    @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                    </div>
                    <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                          <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                </form>
            </div>
           
            
        </div>
    </section>
@endsection
