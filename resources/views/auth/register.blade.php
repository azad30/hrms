@extends('layouts.log')

@section('content')
        <div class="animate form login_form">
            <section class="login_content">
                <form role="form" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                    <h1>Register</h1>
                    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                        <input name="name"  type="text" class="form-control" value="{{ old('name') }}" placeholder="Name *" required="" />
                        @if ($errors->has('name'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('username') ? ' has-error' : '' }}">
                        <input name="username"  type="text" class="form-control" value="{{ old('username') }}" placeholder="Username *" required="" />
                        @if ($errors->has('username'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('username') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                        <input name="email"  type="text" class="form-control" value="{{ old('email') }}" placeholder="E-mail *" required="" />
                        @if ($errors->has('email'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input name="password" type="password" class="form-control" placeholder="Password *" required="" />
                        @if ($errors->has('password'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password *" required="">
                    </div>
                    <div class="form-group {{ $errors->has('father_name') ? ' has-error' : '' }}">
                        <input name="father_name"  type="text" class="form-control" value="{{ old('father_name') }}" placeholder="Father's Name *" required="" />
                        @if ($errors->has('father_name'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('father_name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('mother_name') ? ' has-error' : '' }}">
                        <input name="mother_name"  type="text" class="form-control" value="{{ old('mother_name') }}" placeholder="Mother's Name *" required="" />
                        @if ($errors->has('mother_name'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('mother_name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('dob') ? ' has-error' : '' }}">
                        <input name="dob"  type="date" class="form-control" value="{{ old('dob') }}" placeholder="Date of Birth *" required="" />
                        @if ($errors->has('dob'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('dob') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('gender') ? ' has-error' : '' }}">
                        <span class="pull-left">Gender * : </span>
                        <label class="radio-inline"><input type="radio" name="gender" value="male" required {{ old('gender')=="male" ? 'checked="checked"' : '' }}>Male</label>
                        <label class="radio-inline"><input type="radio" name="gender" value="female" required {{ old('gender')=="female" ? 'checked="checked"' : '' }}>Female</label>
                        <label class="radio-inline"><input type="radio" name="gender" value="others" required {{ old('gender')=="others" ? 'checked="checked"' : '' }}>Others</label>
                        @if ($errors->has('gender'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('gender') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('marital_status') ? ' has-error' : '' }}">
                        <select class="form-control" name="marital_status" required="">
                            <option value="">Marital Status *</option>
                            <option value="married" {{ old('marital_status')=="married" ? 'selected' : '' }}>Married</option>
                            <option value="single" {{ old('marital_status')=="single" ? 'selected' : '' }}>Single</option>
                            <option value="divorcee" {{ old('marital_status')=="divorcee" ? 'selected' : '' }}>Divorcee</option>
                            <option value="others" {{ old('marital_status')=="others" ? 'selected' : '' }}>Others</option>
                        </select>
                        @if ($errors->has('marital_status'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('marital_status') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('religion') ? ' has-error' : '' }}">
                        <select class="form-control" name="religion" required="">
                            <option value="">Religion *</option>
                            <option value="islam" {{ old('religion')=="islam" ? 'selected' : '' }}>Islam</option>
                            <option value="hinduism" {{ old('religion')=="hinduism" ? 'selected' : '' }}>Hinduism</option>
                            <option value="christianity" {{ old('religion')=="christianity" ? 'selected' : '' }}>Christianity</option>
                            <option value="buddhism" {{ old('religion')=="buddhism" ? 'selected' : '' }}>Buddhism</option>
                            <option value="others" {{ old('religion')=="others" ? 'selected' : '' }}>Others</option>
                        </select>
                        @if ($errors->has('religion'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('religion') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('') ? ' has-error' : '' }}">
                        <input name="occupation"  type="text" class="form-control" value="{{ old('occupation') }}" placeholder="Occupation *" required="" />
                        @if ($errors->has('occupation'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('occupation') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('occupation_details') ? ' has-error' : '' }}">
                        <textarea name="occupation_details" class="form-control" rows="5" placeholder="Occupation Details *" required="">{{ old('occupation_details') }}</textarea>
                        @if ($errors->has('occupation_details'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('occupation_details') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('educational_qualification') ? ' has-error' : '' }}">
                        <textarea name="educational_qualification" class="form-control" rows="5" placeholder="Educational Qualification" required="">{{ old('educational_qualification') }}</textarea>
                        @if ($errors->has('educational_qualification'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('educational_qualification') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('phone_number') ? ' has-error' : '' }}">
                        <input name="phone_number"  type="text" class="form-control" value="{{ old('phone_number') }}" placeholder="Phone Number *" required="" />
                        @if ($errors->has('phone_number'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('phone_number') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('nid') ? ' has-error' : '' }}">
                        <input name="nid"  type="text" class="form-control" value="{{ old('nid') }}" placeholder="National ID *" required="" />
                        @if ($errors->has('nid'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('nid') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('passport_number') ? ' has-error' : '' }}">
                        <input name="passport_number"  type="text" class="form-control" value="{{ old('passport_number') }}" placeholder="Passport Number" required="" />
                        @if ($errors->has('passport_number'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('passport_number') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('tin_number') ? ' has-error' : '' }}">
                        <input name="tin_number"  type="text" class="form-control" value="{{ old('tin_number') }}" placeholder="Tin Number" required="" />
                        @if ($errors->has('tin_number'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('tin_number') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('permanent_address') ? ' has-error' : '' }}">
                        <textarea name="permanent_address" class="form-control" rows="5" placeholder="Permanent Address" required="">{{ old('permanent_address') }}</textarea>
                        @if ($errors->has('permanent_address'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('permanent_address') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('emergency_contact') ? ' has-error' : '' }}">
                        <input name="emergency_contact"  type="text" class="form-control" value="{{ old('emergency_contact') }}" placeholder="Emergency Contact" required="" />
                        @if ($errors->has('emergency_contact'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('emergency_contact') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary form-control"> Register </button>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
                        <p class="change_link">Already registered?
                            <a href="{{ url('login') }}" > Login Account </a>
                        </p>

                        <div class="clearfix"></div>
                        <br />

                        @include('common.log.footer')

                    </div>
                </form>
            </section>
        </div>
@endsection
