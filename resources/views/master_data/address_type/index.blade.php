@extends('layouts.app')
@section('style')
    <!-- iCheck -->
    <link href="{{ asset('design/vendors/iCheck/skins/flat/green.css" rel="stylesheet') }}">
    <!-- Datatables -->
    <link href="{{ asset('design/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('design/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('design/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('design/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('design/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="clearfix"></div>
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Names</h2>
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
                <div>
                    <a href="{{ url('master_data/address_type/create') }}" class="btn btn-primary btn-sm pull-right" title="Create Name"> Create New Address Type <i class="fa fa-plus "></i></a>
                </div>
                <table id="datatable-buttons" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>SL#</th>
                        <th>Name</th>
                        <th>Created</th>
                        <th>Action</th>

                    </tr>
                    </thead>

                    <tbody>
                    @foreach($address as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ Carbon\Carbon::parse($item->created_at)->format('l jS F y') }}</td>
                        <td>
                            <a href="{{ url('/master_data/address_type/' . $item->id) }}" title="View Name"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                            <a href="{{ url('/master_data/address_type/' . $item->id . '/edit') }}" title="Edit Name"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                            {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['/master_data/address_type', $item->id],
                            'style' => 'display:inline'
                            ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i>', array(
                            'type' => 'submit',
                            'class' => 'btn btn-danger btn-xs',
                            'title' => 'Delete Address Type',
                            'onclick'=>'return confirm("Confirm Delete?")'
                            )) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <!-- iCheck -->
    <script src="{{ asset('design/vendors/iCheck/icheck.min.js') }}"></script>
    <!-- Datatables -->
    <script src="{{ asset('design/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('design/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('design/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('design/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('design/vendors/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('design/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('design/vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('design/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{ asset('design/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('design/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('design/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}"></script>
    <script src="{{ asset('design/vendors/datatables.net-scroller/js/dataTables.scroller.min.js') }}"></script>
    <script src="{{ asset('design/vendors/jszip/dist/jszip.min.js') }}"></script>
    <script src="{{ asset('design/vendors/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('design/vendors/pdfmake/build/vfs_fonts.js') }}"></script>
@endsection
