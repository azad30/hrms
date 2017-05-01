@extends('layouts.log')

@section('content')
    <div class="animate form login_form">
        <section class="login_content">
            <form role="form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <h1>Login</h1>
                <div class="form-group {{ $errors->has('username') ? ' has-error' : '' }}">
                    <input name="username"  type="text" class="form-control" value="{{ old('username') }}" placeholder="E-mail or Username" required="" />
                    @if ($errors->has('username'))
                        <span class="help-block">
                                <strong>{{ $errors->first('username') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input name="password" type="password" class="form-control" placeholder="Password" required="" />
                    @if ($errors->has('password'))
                        <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div>
                    <button type="submit" class="btn btn-primary form-control"> Login </button>
                </div>
                <div>
                    <a class="pull-right" href="{{ route('password.request') }}">Lost your password?</a>
                    {{--<a class="pull-left" href="{{ url('/register') }}">Create Account</a>--}}
                </div>

                <div class="clearfix"></div>

                <div class="separator">
                    <p class="change_link">New to site?
                        <a href="{{ url('/register') }}"> Create Account </a>
                    </p>

                    @include('common.log.footer')

                </div>
            </form>
        </section>
    </div>
@endsection
