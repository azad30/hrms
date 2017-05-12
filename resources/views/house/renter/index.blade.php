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
                <h2>My Flats</h2>
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
                    <a href="{{ url('house/renter/create') }}" class="btn btn-primary btn-sm pull-right" title="Create Flat Statement"> Create New Renter <i class="fa fa-plus "></i></a>
                </div>
                <table id="datatable-buttons" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>SL#</th>
                        <th>House No</th>
                        <th>Flat Name</th>
                        <th>Renter Name</th>
                        <th>Start Date</th>
                        <th>Approve</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($renters as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->flat->house->house_no }}</td>
                        <td>{{ $item->flat->name }}</td>
                        <td>{{ $item->renter->name }}</td>
                        <td>{{ Carbon\Carbon::parse($item->start_date)->format('l jS F y') }}</td>
                        <td class="{{ ($item->renter_approve == 1) ? 'bg-success' : 'bg-danger' }}">{{ ($item->renter_approve == 1) ? 'Yes' : 'No' }}</td>
                        <td>
                            <a href="{{ url('/house/renter/' . $item->id) }}" title="View Flat"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                            <a href="{{ url('/house/renter/' . $item->id . '/edit') }}" title="Edit Flat"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                            {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['/house/renter', $item->id],
                            'style' => 'display:inline'
                            ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i>', array(
                            'type' => 'submit',
                            'class' => 'btn btn-danger btn-xs',
                            'title' => 'Delete Renter Information!',
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
