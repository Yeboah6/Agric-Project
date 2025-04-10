@extends('layouts.admin-layout')

@section('content')

@include('includes.admin-sidenav')
	
@include('includes.admin-header')

<style>
    textarea {
        width: calc(100% - 20px);
        height: 300px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        background-color: #f9f9f9;
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
                            <h5 class="m-b-10">Edit Customer</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/dashboard"><i class="feather icon-home"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- liveline-section start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ url('/customers/'. $customer -> id) }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label class="floating-label" for="author"><small class="text-danger">* </small>Name</label>
                                <input type="text" name="name" class="form-control" required value="{{ $customer -> name}}">
                                <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                            </div>
                            <div class="form-group">
                                <label class="floating-label" for="title"><small class="text-danger">* </small>Email</label>
                                <input type="email" name="email" class="form-control" required value="{{ $customer -> email}}">
                                <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                            </div>
                            <button type="submit" class="btn" style="background-color: #116530;color: #fff"> Update </button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- liveline-section end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>

<!-- [ Main Content ] end -->

<!-- Apex Chart -->
<script src="assets1/js/plugins/trumbowyg.min.js"></script>

@endsection
