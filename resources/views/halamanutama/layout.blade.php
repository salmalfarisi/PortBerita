<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>PortBerita</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition layout-navbar-fixed sidebar-collapse">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
		<div class="row">
			<div class="col-12">
				<a href="{{ route('home') }}" class="navbar-brand">
					<img height="30" width="30" src="{{ asset('logo(cooltext).png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
					<span class="brand-text font-weight-light"><b>PortBerita</b></span>
				</a>
				
				<!-- Right navbar links -->
				<ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto float-right">
						<!-- Messages Dropdown Menu -->
						<li class="nav-link">
							<form class="form-inline ml-0 ml-md-3">
							  <div class="input-group input-group-sm">
								<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
								<div class="input-group-append">
								  <button class="btn btn-navbar" type="submit">
									<i class="fas fa-search"></i>
								  </button>
								</div>
							  </div>
							</form>
						</li>
						@if($statuslogin == "no")
							<li class="nav-item dropdown">
							  <a class="nav-link" data-toggle="dropdown" href="#">
								<button class="btn btn-sm btn-primary"><i class="fas fa-user"></i> Login</button>
							  </a>
							  <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
								<a href="#" class="dropdown-item">
									<form action="{{ route('loginpunyauser') }}" method="post">
										{{ method_field('POST') }}
										{{ csrf_field() }}
										<div class="form-group">
											<label for="exampleInputEmail1">Email</label>
											<input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Password</label>
											<input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
										</div>
										<div class="form-group">
											<button type="submit" class="btn btn-primary">Login</button>
										</div>
									</form>
									<div class="social-auth-links text-center mb-3">
										<a href="{{ route('forgotuser') }}" class="nav-link">
											<button class="btn btn-block btn-danger">Forgot Password ?</button>
										</a>										
									</div>
								</a>
							  </div>
							</li>
							<li class="nav-item">
								<a href="{{ route('registrationforuser') }}" class="nav-link"><button class="btn btn-sm btn-info"><i class="fas fa-user-plus"></i> Sign Up</button></a>
							</li>
						@elseif($statuslogin == "yes")
							@if(Auth::user()->jenisakun == "1")
								<li class="nav-item dropdown">
									<a class="nav-link" data-toggle="dropdown" href="#">
										<i class="far fa-bell"></i>
										<!-- For Show All Total Current of Notifications -->
										<span class="badge badge-warning navbar-badge">15</span>
									</a>
									<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
									  <span class="dropdown-item dropdown-header">15 Notifications</span>
									  <div class="dropdown-divider"></div>
									  <a href="#" class="dropdown-item">
										<i class="fas fa-envelope mr-2"></i> 4 new messages
										<span class="float-right text-muted text-sm">3 mins</span>
									  </a>
									  <div class="dropdown-divider"></div>
									  <a href="#" class="dropdown-item">
										<i class="fas fa-users mr-2"></i> 8 friend requests
										<span class="float-right text-muted text-sm">12 hours</span>
									  </a>
									  <div class="dropdown-divider"></div>
									  <a href="#" class="dropdown-item">
										<i class="fas fa-file mr-2"></i> 3 new reports
										<span class="float-right text-muted text-sm">2 days</span>
									  </a>
									  <!--<div class="dropdown-divider"></div>
									  <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>-->
									</div>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link navbar-brand" data-toggle="dropdown" href="#">
										<img src="{{ url('/profile/'.Auth::user()->foto) }}" class="brand-image img-circle" width="20" height="20">
									</a>
									<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
									  <div class="card-widget widget-user">
										  <!-- Add the bg color to the header using any of the bg-* classes -->
										  <h4><center>{{ Auth::user()->nama }}</center></h4>
										  <div class="widget-user-desc">
											<center>
												<img src="{{ url('/profile/'.Auth::user()->foto) }}" class="profile-user-img img-circle" style="size:120%;">
											</center>
										  </div>
										  <div class="card-body">
											<div class="row">
												<div class="col-4">
													<a href="{{ route('threaddatas') }}" class="btn btn-sm btn-primary btn-block">Thread</a>
												</div>
												<div class="col-4">
													<a href="{{ route('userprofile') }}" class="btn btn-sm btn-info btn-block" style="float:left;">Profile</a>
												</div>
												<div class="col-4">
													<a href="{{ route('logoutforuser') }}" class="btn btn-sm btn-danger btn-block" style="float:right;">Logout</a>
												</div>
											</div>
										  </div>
									  </div>
									</div>
								</li>
							@else
								<li class="nav-item dropdown">
									<a class="nav-link" data-toggle="dropdown" href="#">
										<i class="far fa-bell"></i>
										<!-- For Show All Total Current of Notifications -->
										<span class="badge badge-warning navbar-badge">15</span>
									</a>
									<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
									  <span class="dropdown-item dropdown-header">15 Notifications</span>
									  <div class="dropdown-divider"></div>
									  <a href="#" class="dropdown-item">
										<i class="fas fa-envelope mr-2"></i> 4 new messages
										<span class="float-right text-muted text-sm">3 mins</span>
									  </a>
									  <div class="dropdown-divider"></div>
									  <a href="#" class="dropdown-item">
										<i class="fas fa-users mr-2"></i> 8 friend requests
										<span class="float-right text-muted text-sm">12 hours</span>
									  </a>
									  <div class="dropdown-divider"></div>
									  <a href="#" class="dropdown-item">
										<i class="fas fa-file mr-2"></i> 3 new reports
										<span class="float-right text-muted text-sm">2 days</span>
									  </a>
									  <!--<div class="dropdown-divider"></div>
									  <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>-->
									</div>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link navbar-brand" data-toggle="dropdown" href="#">
									  <img src="{{ url('/profile/'.Auth::user()->foto) }}" class="brand-image img-circle" width="20" height="20">
									</a>
									<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
									  <div class="card-widget widget-user">
										  <!-- Add the bg color to the header using any of the bg-* classes -->
										  <h4><center>{{ Auth::user()->nama }}</center></h4>
										  <div class="widget-user-desc">
											<center>
												<img src="{{ url('/profile/'.Auth::user()->foto) }}" class="profile-user-img img-circle" style="size:120%;">
											</center>
										  </div>
										  <div class="card-body">
											<a href="{{ route('logoutforuser') }}" class="btn btn-sm btn-danger btn-block" style="float:right;">Logout</a>
										  </div>
									  </div>
									</div>
								</li>
							@endif
						@endif
				</ul>
			</div>
			<div class="col-12">
				<ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
					<li class="nav-item mx-auto">
						<a href="{{ route('articlebytrend') }}" class="nav-link"><b>Trend</b></a>
					</li>
					<li class="nav-item mx-auto">
						<a href="{{ route('articlebyeconomy') }}" class="nav-link"><b>Economy</b></a>
					</li>
					<li class="nav-item mx-auto">
						<a href="{{ route('articlebysport') }}" class="nav-link"><b>Sport</b></a>
					</li>
					<li class="nav-item mx-auto">
						<a href="{{ route('articlebytechnology') }}" class="nav-link"><b>Technology</b></a>
					</li>
					<li class="nav-item mx-auto">
						<a href="{{ route('articlebyinternational') }}" class="nav-link"><b>International</b></a>
					</li>
					<li class="nav-item mx-auto">
						<a href="{{ route('articlebyotomotive') }}" class="nav-link"><b>Otomotive</b></a>
					</li>
					<li class="nav-item mx-auto">
						<a href="{{ route('articlebyhealth') }}" class="nav-link"><b>Health</b></a>
					</li>
					<li class="nav-item mx-auto">
						<a href="{{ route('articlebytravel') }}" class="nav-link"><b>Travel</b></a>
					</li>
					<li class="nav-item mx-auto">
						<a href="{{ route('articlebyentertainment') }}" class="nav-link"><b>Entertainment</b></a>
					</li>
					<li class="nav-item mx-auto">
						<a href="{{ route('showallthread') }}" class="nav-link"><b>Thread</b></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
  </nav>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-3 text-dark"> <small> </small></h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
	
	<!-- Tujuan untuk membuat if dalam section untuk menyembunyikan halaman yield yang lain -->
	<section class="content container-fluid">
	  
		@if($perintah == "halamanutama")
		  <!-- Main Page -->
		  <section class="container-fluid">
			@yield('halamanutama')
		  </section>
		@elseif($perintah == "forgotpass")
		  <!-- Forgot Password -->
		  <section class="container-fluid">
			@yield('forgotpass')
		  </section>
		@elseif($perintah == "resetpass")
		  <!-- Reset Password -->
		  <section class="container-fluid">
			@yield('resetpass')
		  </section>
		@elseif($perintah == "regis")
		  <!-- Registration for User -->
		  <section class="container-fluid">
			@yield('registration')
		  </section>
		@elseif($perintah == "profile")
		  <!-- User Profile -->
		  <section class="container-fluid">
			@yield('profile')
		  </section>
		@elseif($perintah == "thread")
		  <!-- Thread -->
		  <section class="container-fluid">
			@yield('thread')
		  </section>
		@elseif($perintah == "makethread")
		  <!-- Create new Thread -->
		  <section class="container-fluid">
			@yield('newthread')
		  </section>
		@elseif($perintah == "editthread")
		  <!-- Edit a Thread -->
		  <section class="container-fluid">
			@yield('editthread')
		  </section>
		@elseif($perintah == "lookathread")
		  <!-- Show a Thread -->
		  <section class="container-fluid">
			@yield('lookathread')
		  </section>
		@elseif($perintah == "deletethread")
		  <!-- Delete a Thread -->
		  <section class="container-fluid">
			@yield('deletethread')
		  </section>
		@elseif($perintah == "showapublishthread")
		  <section class="container-fluid">
			@yield('lookarticle')
		  </section>
		@elseif($perintah == "lookchoosennews")
		  <section class="container-fluid">
			@yield('lookchoosennews')
		  </section>
		@elseif($perintah == "showAllThreads")
		  <section class="container-fluid">
			@yield('showAllThreads')
		  </section>
		@endif
		
		<div class="container"><a href="#" class="btn btn-xs btn-primary float-right">Back to Top</a></div>
	</section>
	
  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      <b>Contact : facebookidbuat@yahoo.com</b>
    </div>
    <!-- Default to the left -->
    <strong>For Portfolio Only</strong>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>

	<!-- Preview Image -->
	<script>
				function tampilkanPreview(gambar,preview){
	//                membuat objek gambar
					var gb = gambar.files;
	//                loop untuk merender gambar
					for (var i = 0; i < gb.length; i++){
	//                    bikin variabel
						var gbPreview = gb[i];
						var imageType = /image.*/;
						var preview=document.getElementById(preview);
						var reader = new FileReader();
						if (gbPreview.type.match(imageType)) {
	//                        jika tipe data sesuai
							preview.file = gbPreview;
							reader.onload = (function(element) {
								return function(e) {
									element.src = e.target.result;
								};
							})(preview);
		//                    membaca data URL gambar
							reader.readAsDataURL(gbPreview);
						}else{
	//                        jika tipe data tidak sesuai
							alert("Type file tidak sesuai. hanya file yang berekstensi .jpeg atau .png atau .jpg.");
						}
					}
				}
	</script>
	
	<script>
		$.ajaxSetup({
			headers:{
				'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
			}
		});
	</script>

</body>
</html>