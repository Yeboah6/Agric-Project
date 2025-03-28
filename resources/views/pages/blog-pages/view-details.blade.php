@extends('layouts.admin-layout')

@section('content')

@include('includes.admin-sidenav')
	
@include('includes.admin-header')

<style>

    .ser-vid {
      width: 620px; 
      height:240px;
    }
  
  @media screen and (max-width: 700px) {
    .ser-vid {
      width: 340px; 
      height: 240px;
      margin-left: -7px;
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
                            <h5 class="m-b-10">Post Details</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Blog Post</a></li>
                            <li class="breadcrumb-item"><a href="#!">Details</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- customar project  start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <button onclick="history.back()" style="background-color: #116530;color: #fff" class="btn">Back</button>
                        <br>
                        <br>
                        <div class="row">
                            <div class="col-lg-5">
                                <div id="carouselExampleCaptions" class="">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="{{ asset('../uploads/blog-images/'.$detail -> image) }}" alt="Applicant_image" style="width: 100%">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <form class="pl-lg-4">
                                    <h1>{{ $detail -> blog_id }}</h1>
                                    <br>
                                    <br>
                                    <h4 class="mt-0">{{ $detail -> title}}</h4>
                                    <br>
                                    <h5 class="mt-0"><span>Author: </span>{{ $detail -> author}} </h5>
                                    {{-- <h3 class="mt-0">{{ $detail -> title}} </h3> --}}
                                    <p class="mb-1">Added Date: {{ $detail -> created_at->format('F d, Y')}}</p>
                                </form>
                            </div>
                            <div class="col-lg-12">
                                <div class="mt-4">
                                    {{-- <h6>{{ $detail -> title }}</h6> --}}
                                    <h6>Message:</h6>
                                    <p>{{ $detail -> message }} </p>
<br>
<br>
<br>
                                    @if($detail -> video)
                                        <blockquote>
                                          <video class="ser-vid" controls>
                                              <source src="{{ asset('uploads/blog-videos/' . $detail -> video) }}" type="video/mp4">
                                              Your browser does not support the video tag.
                                          </video>
                                        </blockquote>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!-- customar project  end -->
                    </div>
                    <!-- [ Main Content ] end -->
                </div>
            </div>

<script src="assets/js/plugins/jquery.dataTables.min.js"></script>
<script src="assets/js/plugins/dataTables.bootstrap4.min.js"></script>
<!-- Apex Chart -->
<script src="assets/js/plugins/apexcharts.min.js"></script>
<script>

</script>


@endsection
