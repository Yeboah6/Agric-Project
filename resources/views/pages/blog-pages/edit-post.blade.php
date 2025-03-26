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
                            <h5 class="m-b-10">Edit Blog</h5>
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
                        <button onclick="history.back()" style="background-color: #116530;color: #fff" class="btn">Back</button>
                        <br>
                        <br>
                        <form action="{{ url('/edit-post/'.$edit -> id) }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label class="floating-label" for="author"><small class="text-danger">* </small>Author</label>
                                <input type="text" name="author" class="form-control" required value="{{ $edit -> author}}">
                                <span class="text-danger">@error('author'){{ $message }} @enderror</span>
                            </div>
                            <div class="form-group">
                                <label class="floating-label" for="title"><small class="text-danger">* </small>Title</label>
                                <input type="text" name="title" class="form-control" required value="{{ $edit -> title}}">
                                <span class="text-danger">@error('title'){{ $message }} @enderror</span>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label class="floating-label" for="title"><small class="text-danger"></small>Video</label>
                                    <div class="form-group">
                                        <input type="file" name="video" class="form-control">
<br>
                                         @if($edit && $edit -> video)
                                            <!-- Show the preview of the uploaded image -->
                                            <video width="420" height="240" controls>
                                              <source src="{{ asset('uploads/blog-videos/' . $edit -> video) }}" type="video/mp4">
                                              Your browser does not support the video tag.
                                            </video>
                                        @endif

                                        <span class="text-danger">@error('video'){{ $message }} @enderror</span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label class="floating-label" for="Attachment">Image</label>
                                    <div class="form-group">
                                        <input type="file" name="image" class="form-control">
<br>
                                         @if($edit && $edit -> image)
                                            <!-- Show the preview of the uploaded image -->
                                            <img src="{{ asset('uploads/blog-images/' . $edit -> image) }}" style="width:60%"  alt="Blog Image">
                                        @endif

                                        <span class="text-danger">@error('image'){{ $message }} @enderror</span>
                                    </div>
                                </div>
                            </div>
                            <label class="floating-label"><small class="text-danger">* </small>Message</label>
                            <div class="form-group">
                                <textarea name="message" placeholder="Type your Message Here" required>{{ $edit -> message}}</textarea>
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
