@extends('layouts.admin-layout')

@section('content')

<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
	<div class="auth-content">
    <a href="/" class=" d-flex align-items-center" style="margin-left: 120px;">
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <img src="assets/img/agric-logo.jpg" alt="AgriCulture" style="width: 50%;">
      <!-- <h1 class="sitename">AgriCulture</h1>  -->
    </a>
    <br>
    <br>
		<div class="card">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
					<div class="card-body">
						<h4 class="mb-3 f-w-400">Log In</h4>
            			<form action="{{ url('/login') }}" method="POST">
            			  	@if (Session::has('success'))
							<div class="alert alert-success">{{ Session::get('success') }}</div>
							@endif
						
							@if (Session::has('fail'))
								<div class="alert alert-danger">{{ Session::get('fail') }}</div>
							@endif
						
            			  @csrf
            			  <div class="form-group mb-3">
							<label class="floating-label" for="Username">User Name</label>
							<input type="text" name="username" class="form-control" id="Username" value="{{old('username')}}">
							</div>
							<div class="form-group mb-3">
								<label class="floating-label" for="Email">Email address</label>
								<input type="text" name="email" class="form-control" id="Email" value="{{old('email')}}">
							</div>
							<div class="form-group mb-4">
								<label class="floating-label" for="Password">Password</label>
								<input type="password" name="password" class="form-control" id="Password" placeholder="">
							</div>
							<button class="btn btn-block mb-4" type="submit" style="background-color: #116530;color: #fff">Login</button>
            			</form>
            			<button onclick="history.back()" style="background-color: #919191;color: #000" class="btn">Back</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signin ] end -->



@endsection