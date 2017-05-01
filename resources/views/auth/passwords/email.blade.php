@extends('layouts.log')

@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="animate form login_form">
        <section class="login_content">
            <form role="form" method="POST" action="{{ route('password.email') }}">
                {{ csrf_field() }}
                <h1>Reset Password</h1>
                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-mail" required autofocus />
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div>
                    <button type="submit" class="btn btn-primary form-control"> Send Password Reset Link </button>
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
