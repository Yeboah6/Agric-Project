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
                                                <button class="btn btn-info btn-sm edit-btn" data-id="{{ $customer->id }}" data-name="{{ $customer->name }}" data-email="{{ $customer->email }}" data-toggle="modal" data-target="#modal-report">Edit</button>
                                                <a href="{{ url('/delete-post/'.$customer->id) }}" class="btn btn-danger btn-sm">Delete</a>
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

        {{-- Display Edit Customer --}}

        <div class="modal fade" id="modal-report" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Customer</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('customer.update', $customer->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id" id="edit-id" value="{{ $customer->id }}">
                            <div class="form-group">
                                <label for="edit-name">Name</label>
                                <input type="text" name="name" class="form-control" id="edit-name" 
                                       value="{{ $customer->name }}" required>
                            </div>
                            <div class="form-group">
                                <label for="edit-email">Email</label>
                                <input type="email" name="email" class="form-control" id="edit-email" 
                                       value="{{ $customer->email }}" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
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
