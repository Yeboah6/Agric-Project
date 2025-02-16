@extends('layouts.admin-layout')

@section('content')

@include('includes.admin-sidenav')
	
@include('includes.admin-header')

<style>

/* input[type="text"],
    input[type="date"], 
    input[type="email"],
    input[type="file"],
    input[type='month'], */
    textarea {
        /* width: calc(100% - 20px); */
        width: 1180px;
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
                            <h5 class="m-b-10">Blog</h5>
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
                        <form action="{{ url('/add-post') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <input type="text" name="blog_id" hidden>

                            <div class="form-group">
                                <label class="floating-label" for="author"><small class="text-danger">* </small>Author</label>
                                <input type="text" name="author" class="form-control" required>
                                <span class="text-danger">@error('author'){{ $message }} @enderror</span>
                            </div>
                            <div class="form-group">
                                <label class="floating-label" for="title"><small class="text-danger">* </small>Title</label>
                                <input type="text" name="title" class="form-control" required>
                                <span class="text-danger">@error('title'){{ $message }} @enderror</span>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="floating-label" for="title"><small class="text-danger"></small>Video</label>
                                        <input type="file" name="video" class="form-control">
                                        <span class="text-danger">@error('video'){{ $message }} @enderror</span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="floating-label" for="Attachment">Image</label>
                                        <input type="file" name="image" class="form-control">
                                        <span class="text-danger">@error('image'){{ $message }} @enderror</span>
                                    </div>
                                </div>
                            </div>
                            <label class="floating-label"><small class="text-danger">* </small>Message</label>
                            <div class="form-group">
                                <textarea name="message" placeholder="Type your Message Here" required></textarea>
                                <span class="text-danger">@error('message'){{ $message }} @enderror</span>
                            </div>
                            <button type="submit" class="btn" style="background-color: #116530;color: #fff"> Post </button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- liveline-section end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<div class="modal fade" id="modal-report" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit email template</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>

<!-- [ Main Content ] end -->

<!-- Apex Chart -->
<script src="assets1/js/plugins/trumbowyg.min.js"></script>

@endsection
