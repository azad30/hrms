<div class="item form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    {!! Form::label('user_id', 'Select User*', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::select('user_id',  $user, null, ['class' => 'form-control col-md-7 col-xs-12', 'placeholder' => 'Select User', 'required' => 'required']) !!}
        {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="item form-group {{ $errors->has('role_id') ? 'has-error' : ''}}">
    {!! Form::label('role_id', 'Select Role*', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::select('role_id', $role, null, ['class' => 'form-control col-md-7 col-xs-12', 'placeholder' => 'Select Role', 'required' => 'required']) !!}
        {!! $errors->first('role_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="ln_solid"></div>
<div class="form-group">
    <div class="col-md-6 col-md-offset-3">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Assign Role', ['class' => 'btn btn-success']) !!}
    </div>
</div>

