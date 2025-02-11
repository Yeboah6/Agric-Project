@extends('layouts.app')

@section('content')
    <!-- Navigation -->

    @include('includes.header')

	<!-- full Title -->
	<div class="full-title">
		<div class="container">
			<!-- Page Heading/Breadcrumbs -->
			<h1 class="mt-4 mb-3">Services
				<small>Subheading</small>
			</h1>
		</div>
	</div>
	
    <!-- Page Content -->
    <div class="container">
		<div class="breadcrumb-main">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="index.html">Home</a>
				</li>
				<li class="breadcrumb-item active">Services</li>
			</ol>
		</div>

		<!-- Image Header -->
		<img class="img-fluid rounded mb-4" src="assets/images/services-big.jpg" alt="" />

		<!-- Services Section -->
		<div class="services-bar">
            <h1 class="my-4">Our Best Services </h1>
            <!-- Services Section -->
            <div class="row">
               <div class="col-lg-4 mb-4">
                  <div class="card h-100">
                     <h4 class="card-header">Garden Fence</h4>
                     <div class="card-img">
                        <img class="img-fluid" src="assets/images/services-img-01.jpg" alt="" />
                     </div>
                     <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
                     </div>
                     <div class="card-footer">
                        <a href="#" class="btn btn-primary">Learn More</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 mb-4">
                  <div class="card h-100">
                     <h4 class="card-header">Garden Watering</h4>
                     <div class="card-img">
                        <img class="img-fluid" src="assets/images/services-img-02.jpg" alt="" />
                     </div>
                     <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
                     </div>
                     <div class="card-footer">
                        <a href="#" class="btn btn-primary">Learn More</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 mb-4">
                  <div class="card h-100">
                     <h4 class="card-header">Garden Supplies</h4>
                     <div class="card-img">
                        <img class="img-fluid" src="assets/images/services-img-03.jpg" alt="" />
                     </div>
                     <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
                     </div>
                     <div class="card-footer">
                        <a href="#" class="btn btn-primary">Learn More</a>
                     </div>
                  </div>
               </div>
            </div>
            <!-- /.row -->
        </div>
		<!-- Our Customers -->
		<div class="customers-box"> 
			<h2>Our Customers</h2>
			<div class="row">
				<div class="col-lg-2 col-sm-4 mb-4">
				  <img class="img-fluid" src="assets/images/logo_01.png" alt="" />
				</div>
				<div class="col-lg-2 col-sm-4 mb-4">
				  <img class="img-fluid" src="assets/images/logo_02.png" alt="" />
				</div>
				<div class="col-lg-2 col-sm-4 mb-4">
				  <img class="img-fluid" src="assets/images/logo_03.png" alt="" />
				</div>
				<div class="col-lg-2 col-sm-4 mb-4">
				  <img class="img-fluid" src="assets/images/logo_04.png" alt="" />
				</div>
				<div class="col-lg-2 col-sm-4 mb-4">
				  <img class="img-fluid" src="assets/images/logo_05.png" alt="" />
				</div>
				<div class="col-lg-2 col-sm-4 mb-4">
				  <img class="img-fluid" src="assets/images/logo_06.png" alt="" />
				</div>
			</div>
			<!-- /.row -->
		</div>

    </div>
    <!-- /.container -->

    <!--footer starts from here-->
   @include('includes.footer')

<!-- Bootstrap core JavaScript -->
@endsection
