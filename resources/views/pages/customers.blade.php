@extends('layouts.admin-layout')

@section('content')

@include('includes.admin-sidenav')
	
@include('includes.admin-header')

<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/dashboard"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Blogs</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- subscribe start -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Blogs List</h5>
                    </div>
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-sm-6">
                            </div>
                            @if (Session::has('success'))
                                <div class="alert alert-success" style="text-align: center;">{{ Session::get('success') }}</div>
                            @endif
                            @if (Session::has('fail'))
                                <div class="alert alert-danger" style="text-align: center;">{{ Session::get('fail') }}</div>
                            @endif
                        </div>
                        <div class="table-responsive">
                            <table id="report-table" class="table table-bordered table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>Customer ID</th>
                                        <th>customers</th>
                                        <th>Email</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                        @foreach ($customers as $customer)
                                            <tr>
                                                <td>{{ $customer -> id}}</td>
                                                <td>{{ $customer -> name}}</td>
                                                <td>{{ $customer -> email}}</td>
                                                <td>
                                                    <a href="{{ url ('/view-details/'.$customer -> id)}}" class="btn btn-warning btn-sm">View</a>
                                                    <a href="{{ url ('/edit-post/'.$customer -> id)}}" class="btn btn-info btn-sm">Edit</a>
                                                    <a href="{{ url ('/delete-post/'.$customer -> id)}}" class="btn btn-danger btn-sm">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- subscribe end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>

<!-- [ Main Content ] end -->

<!-- Required Js -->
<script src="assets1/js/vendor-all.min.js"></script>

<script src="assets1/js/plugins/jquery.dataTables.min.js"></script>
<script src="assets1/js/plugins/dataTables.bootstrap4.min.js"></script>

<script>
    // DataTable start
    $('#report-table').DataTable();
    // DataTable end
</script>


@endsection
