<div class="item form-group {{ $errors->has('house_id') ? 'has-error' : ''}}">
    {!! Form::label('house_id', 'House Name *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::select('house_id', $houses, (isset($rent)) && (isset($rent->flat->house_id)) ? $rent->flat->house_id : '', ['class' => 'form-control col-md-7 col-xs-12', 'placeholder' => 'Select House', 'required' => 'required']) !!}
        {!! $errors->first('house_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="item form-group {{ $errors->has('flat_id') ? 'has-error' : ''}}">
    {!! Form::label('flat_id', 'Flat Name *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::select('flat_id', $flats, null, ['class' => 'form-control col-md-7 col-xs-12', 'placeholder' => 'Select Flat', 'required' => 'required']) !!}
        {!! $errors->first('flat_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="item form-group {{ $errors->has('renter_id') ? 'has-error' : ''}}">
    {!! Form::label('renter_id', 'Renter Name *', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
    <div class="col-md-6 col-sm-6 col-xs-12">
        {!! Form::select('renter_id', $renters, null, ['class' => 'form-control col-md-7 col-xs-12', 'placeholder' => 'Select Renter', 'required' => 'required']) !!}
        {!! $errors->first('renter_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="item form-group {{ $errors->has('start_date') ? 'has-error' : ''}}">
    {!! Form::label('start_date', 'Start Date', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
    <div class="col-md-6 col-sm-6 col-xs-12  control-group">
        {!! Form::date('start_date', Carbon\Carbon::now(), ['class' => 'form-control has-feedback-left ', 'id' => 'start_date', 'required' => 'required']) !!}
        <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="item form-group {{ $errors->has('end_date') ? 'has-error' : ''}}">
    {!! Form::label('end_date', 'End Date', ['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
    <div class="col-md-6 col-sm-6 col-xs-12 control-group">
        {!! Form::date('end_date', null, ['class' => 'form-control has-feedback-left ', 'id' => 'end_date']) !!}
        <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="ln_solid"></div>
<div class="form-group">
    <div class="col-md-6 col-md-offset-3">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-success']) !!}
    </div>
</div>

