{!! Form::hidden('user_id', Auth::user()->id  ) !!}
<div class="item form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    {!! FORM::label('name', 'Name *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! FORM::text('name', null, ['class' => 'form-control col-md-7 col-xs-12', 'placeholder' => 'Enter Name', 'data-validate-length-range' => '3', 'required' => 'required']) !!}
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="ln_solid"></div>
<div class="form-group">
    <div class="col-md-6 col-md-offset-3">
        {!! FORM::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-success']) !!}
    </div>
</div>

