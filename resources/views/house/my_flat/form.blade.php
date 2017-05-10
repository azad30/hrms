<div class="item form-group {{ $errors->has('house_id') ? 'has-error' : ''}}">
    {!! Form::label('house_id', 'House Name *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::select('house_id', $houses, null, ['class' => 'form-control col-md-7 col-xs-12', 'placeholder' => 'Select House', 'required' => 'required']) !!}
        {!! $errors->first('house_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="item form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    {!! Form::label('name', 'Flat Name *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::text('name', null, ['class' => 'form-control col-md-7 col-xs-12', 'placeholder' => 'Enter Flat Name', 'data-validate-length-range' => '3', 'required' => 'required']) !!}
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="item form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    {!! Form::label('description', 'Flat Description', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::textarea('description',null,['class'=>'form-control col-md-7 col-xs-12', 'placeholder' => 'Enter Flat description', 'data-validate-length-range' => '20,500', 'rows' => 2, 'cols' => 40]) !!}
        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="ln_solid"></div>
<div class="form-group">
    <div class="col-md-6 col-md-offset-3">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-success']) !!}
    </div>
</div>

