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
                            @if (Session::has('success'))
                                <div class="alert alert-success" style="text-align: center;">{{ Session::get('success') }}</div>
                            @endif
                            @if (Session::has('fail'))
                                <div class="alert alert-danger" style="text-align: center;">{{ Session::get('fail') }}</div>
                            @endif
                        <div class="table-responsive">
                            <table id="report-table" class="table table-bordered table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>BLOG ID</th>
                                        <th>image</th>
                                        <th>Author</th>
                                        <th>Title</th>
                                        <th>Context</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                        @foreach ($blogs as $blog)
                                            <tr>
                                                <td>{{ $blog -> blog_id}}</td>
                                                <td style="text-align: center"><img src="{{ asset('../uploads/blog-images/'.$blog -> image) }}" alt="Applicant_image" style="height:60px;"></td>
                                                <td>{{ $blog -> author}}</td>
                                                <td>{{ $blog -> title}}</td>
                                                <td>{{ \Illuminate\Support\Str::limit($blog->message, 40, '...') }}</td>
                                                <td>
                                                    <a href="{{ url ('/view-details/'.$blog -> id)}}" class="btn btn-warning btn-sm">View</a>
                                                    <a href="{{ url ('/edit-post/'.$blog -> id)}}" class="btn btn-info btn-sm">Edit</a>
                                                    <a href="{{ url ('/delete-post/'.$blog -> id)}}" class="btn btn-danger btn-sm">Delete</a>
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
