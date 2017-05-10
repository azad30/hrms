@extends('layouts.app')
@section('content')
    <div class="clearfix"></div>
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>View Role - {{ $house->id }}</h2>
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
                <a href="{{ url('/house/my_house') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i></button></a>
                <a href="{{ url('/house/my_house/' . $house->id . '/edit') }}" title="Edit House"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                {!! Form::open([
                    'method'=>'DELETE',
                    'url' => ['/house/my_house', $house->id],
                    'style' => 'display:inline'
                ]) !!}
                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i>', array(
                        'type' => 'submit',
                        'class' => 'btn btn-danger btn-xs',
                        'title' => 'Delete House',
                        'onclick'=>'return confirm("Confirm Delete?")'
                ))!!}
                {!! Form::close() !!}

                <table class="table table-striped">
                    <tbody>
                    <tr>
                        <th>ID</th><td>{{ $house->id }}</td>
                    </tr>
                    <tr>
                        <th>House Number</th><td>{{ $house->house_no }}</td>
                    </tr>
                    <tr>
                        <th>House Name</th><td>{{ $house->name }}</td>
                    </tr>
                    <tr>
                        <th>Description</th><td>{{ $house->description }}</td>
                    </tr>
                    <tr>
                        <th>Created Date</th><td>{{ Carbon\Carbon::parse($house->created_at)->format('l jS F y') }}</td>
                    </tr>
                    <tr>
                        <th>Updated Date</th><td>{{ Carbon\Carbon::parse($house->updated_at)->format('l jS F y') }}</td>
                    </tr>

                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
