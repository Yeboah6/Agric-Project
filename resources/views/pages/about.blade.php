@extends('layouts.app')

@section('content')
    <!-- Navigation -->

    @include('includes.header')
	<!-- full Title -->
	<div class="full-title">
		<div class="container">
			<!-- Page Heading/Breadcrumbs -->
			<h1 class="mt-4 mb-3">About Us
				<small>Subheading</small>
			</h1>
		</div>
	</div>
    <!-- Page Content -->
    <div class="container">
		<div class="breadcrumb-main">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="/">Home</a>
				</li>
				<li class="breadcrumb-item active">About Us</li>
			</ol>
		</div>
		<!-- About Content -->
		<div class="about-main">
			<div class="row">
				<div class="col-lg-6">
					<img class="img-fluid rounded mb-4" src="assets/images/about-img.jpg" alt="" />
				</div>
				<div class="col-lg-6">
					<h2>About Us</h2>
					<p>Founded with the mission to revolutionize Ghana's agricultural landscape, Makoine 
                        Foods and Farms Ltd operates as a key driver of economic growth and rural development. 
                        Our operations span multiple areas, including grains production, livestock farming, and
                        agro-chemical exports.
                    </p>
					<p>By leveraging cutting-edge technology and fostering partnerships 
                        with local and global stakeholders, we aim to address critical challenges in agriculture 
                        such as low productivity, market volatility, and environmental degradation.
                    </p>
					<p>Our efforts 
                        are aligned with sustainable development goals to create long-lasting, positive impacts 
                        for farmers, communities, and the environment.
                    </p>
				</div>
			</div>
			<!-- /.row -->
		</div>

		<!-- Team Members -->
		<div class="team-members-box">  
			<h2>Our Team</h2>
			<div class="row">
				<div class="col-lg-4 mb-4">
				  <div class="card h-100 text-center">
					<img class="card-img-top" src="assets/images/team_01.jpg" alt="" />
					<div class="card-body">
						<h4 class="card-title">Team Member</h4>
						<h6 class="card-subtitle mb-2 text-muted">Position</h6>
						<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
					</div>
					<div class="card-footer">
						<ul>
							<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
						</ul>
					</div>
				  </div>
				</div>
				<div class="col-lg-4 mb-4">
				  <div class="card h-100 text-center">
					<img class="card-img-top" src="assets/images/team_02.jpg" alt="" />
					<div class="card-body">
						<h4 class="card-title">Team Member</h4>
						<h6 class="card-subtitle mb-2 text-muted">Position</h6>
						<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
					</div>
					<div class="card-footer">
						<ul>
							<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
						</ul>
					</div>
				  </div>
				</div>
				<div class="col-lg-4 mb-4">
				  <div class="card h-100 text-center">
					<img class="card-img-top" src="assets/images/team_03.jpg" alt="" />
					<div class="card-body">
						<h4 class="card-title">Team Member</h4>
						<h6 class="card-subtitle mb-2 text-muted">Position</h6>
						<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
					</div>
					<div class="card-footer">
						<ul>
							<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
						</ul>
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
		<!-- /.container -->
	</div>

    <!--footer starts from here-->
       @include('includes.footer')
       
@endsection
