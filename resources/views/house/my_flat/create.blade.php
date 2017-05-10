@extends('layouts.app')

@section('content')
    <div class="clearfix"></div>
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2><a class="btn btn-warning btn-xs" href="{{ url('/house/my_flat') }}" title="Back" class=""><i class="fa fa-arrow-left" aria-hidden="true"></i></a> - Create My Flat</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Settings 1</a>
                            </li>
                            <li><a href="#">Settings 2</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                @if ($errors->any())
                    <div class="alert alert-danger" align="center" id="error-alert">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <ul style="list-style-type: none;">
                            @foreach ($errors->all() as $error)
                                <li >{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <hr/>
                @endif
                {!! Form::open(['url' => '/house/my_flat', 'class' => 'form-horizontal form-label-left', 'novalidate']) !!}

                    @include ('house.my_flat.form')

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

@section('script')

    <!-- validator -->
    <script src="{{ asset('design/vendors/validator/validator.js') }}"></script>


@endsection
