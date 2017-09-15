<div class="item form-group {{ $errors->has('renter_id') ? 'has-error' : ''}}">
    {!! Form::label('renter_id', 'Renter ID *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::text('renter_id', null, ['class' => 'form-control col-md-7 col-xs-12', 'placeholder' => 'Enter Renter ID', 'data-validate-length-range' => '3', 'required' => 'required']) !!}
        {!! $errors->first('renter_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="item form-group {{ $errors->has('renter_name') ? 'has-error' : ''}}">
    {!! Form::label('renter_name', 'Renter Name', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::text('renter_name', null, ['class' => 'form-control col-md-7 col-xs-12', 'placeholder' => 'Enter Renter Name']) !!}
        {!! $errors->first('renter_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="ln_solid"></div>
<div class="form-group">
    <div class="col-md-6 col-md-offset-3">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-success']) !!}
    </div>
</div>

