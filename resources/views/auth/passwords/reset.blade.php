@extends('layouts.log')

@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="animate form login_form">
        <section class="login_content">
            <form role="form" method="POST" action="{{ route('password.request') }}">
                {{ csrf_field() }}
                <input type="hidden" name="token" value="{{ $token }}">
                <h1>Reset Password</h1>
                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="email" class="form-control" name="email" value="{{ $email or old('email') }}" placeholder="E-mail" required autofocus />
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                </div>
                <div>
                    <button type="submit" class="btn btn-primary form-control"> Reset Password </button>
                </div>

                <div class="clearfix"></div>

                <div class="separator">
                    <p class="change_link">
                        <a href="{{ url('/login') }}"> Back to the login page </a>
                    </p>

                    @include('common.log.footer')

                </div>
            </form>
        </section>
    </div>
@endsection
