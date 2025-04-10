@extends('layouts.admin-layout')

@section('content')

@include('includes.admin-sidenav')
	
@include('includes.admin-header')

<style>

.btn-send {
        background-color: #116530;
        color: #fff; 
        margin-left: 1350px;
        border-radius: 5px;
     }

    @media screen and (max-width: 1850px) {
        .btn-send {
            margin-left: 800px;
        }
    }

    @media screen and (max-width: 550px) {
        .btn-send {
            margin-left: 340px;
        }
    }

</style>

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
                            <li class="breadcrumb-item"><a href="#!">Customers</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Customer List</h5>
                        <a href="/send-email" class="btn btn-send">Send Email</a>
                    </div>
                    <div class="card-body">
                        @if (Session::has('success'))
                            <div class="alert alert-success text-center">{{ Session::get('success') }}</div>
                        @endif
                        @if (Session::has('fail'))
                            <div class="alert alert-danger text-center">{{ Session::get('fail') }}</div>
                        @endif

                        <div class="table-responsive">
                            <table id="report-table" class="table table-bordered table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>Customer ID</th>
                                        <th>Customers</th>
                                        <th>Email</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($customers as $customer)
                                        <tr>
                                            <td>{{ $customer->id }}</td>
                                            <td>{{ $customer->name }}</td>
                                            <td>{{ $customer->email }}</td>
                                            <td>
                                                {{-- <button class="btn btn-info btn-sm edit-btn" data-id="{{ $customer->id }}" data-name="{{ $customer->name }}" data-email="{{ $customer->email }}" data-toggle="modal" data-target="#modal-report">Edit</button> --}}
                                                <a href="{{ url('/customers/'.$customer->id) }}" class="btn btn-info btn-sm edit-btn" >Edit</a>
                                                <a href="{{ url('/delete-customer/'.$customer->id) }}" class="btn btn-danger btn-sm">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
    $('#report-table').DataTable();

    $(document).on('click', '.edit-btn', function () {
        let id = $(this).data('id');
        let name = $(this).data('name');
        let email = $(this).data('email');

        $('#edit-id').val(id);
        $('#edit-name').val(name);
        $('#edit-email').val(email);
    });
</script>


@endsection
