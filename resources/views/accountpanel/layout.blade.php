<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <meta name="csrf-token" content="{{ csrf_token() }}">
	
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  
  <title>PortBerita | {{ $posisihalaman }} | {{ Auth::user()->nama }} </title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">
</head>
<body class="sidebar-mini sidebar-collapse">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
	  <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
			<div class="card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header">
                <h4 class="widget-user-username">{{ Auth::user()->nama }}</h4>
				@if( Auth::user()->jenisakun == "2" )
					<h5 class="widget-user-desc">Login as Author</h5>
				@elseif( Auth::user()->jenisakun == "3" )
					<h5 class="widget-user-desc">Login as Editor</h5>
				@endif
              </div>
              <div class="widget-user-desc">
				<center>
					<img src="{{ url('/profile/'.Auth::user()->foto) }}" class="profile-user-img img-circle" style="size:120%;">
				</center>
              </div>
              <div class="card-body">
				<div class="row">
					<div class="col-6">
						<a href="{{ route('profileaccount') }}" class="btn btn-sm btn-info btn-block" style="float:left;">Profile</a>
					</div>
					<div class="col-6">
						<a href="{{ route('logoutuntukAdmin') }}" class="btn btn-sm btn-primary btn-block" style="float:right;">Logout</a>
					</div>
				</div>
              </div>
            </div>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('paneladmin') }}" class="brand-link">
      <img src="{{ asset('logo(cooltext).png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">PortBerita</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ url('/profile/comment/'.Auth::user()->foto) }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a class="d-block" style="color:white;">{{ Auth::user()->nama }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
		 @if(Auth::user()->jenisakun == '2')
		  <li class="nav-item">
            <a href="{{ route('makenews') }}" class="nav-link">
              <i class="nav-icon fas fa-plus"></i>
              <p>
                Create News Data
              </p>
            </a>
          </li>
		  <li class="nav-item">
            <a href="{{ route('databeritabyid') }}" class="nav-link">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                Your News Data
              </p>
            </a>
          </li>
		  <li class="nav-item">
            <a href="/webkhusus/berita/beritaperAccount/{{ Auth::user()->id }}" class="nav-link">
              <i class="nav-icon fas fa-list-ul"></i>
              <p>
                On Process
              </p>
            </a>
          </li>
		  <li class="nav-item">
            <a href="{{ route('databerita') }}" class="nav-link">
              <i class="nav-icon fas fa-database"></i>
              <p>
                All News Data
              </p>
            </a>
          </li>
		  @elseif(Auth::user()->jenisakun == '3')
		  <li class="nav-item has-treeview menu-close">
		    <a href="#" class="nav-link">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                News
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
			<ul class="nav nav-treeview">
			  <li class="nav-item">
				<a href="{{ route('makenews') }}" class="nav-link">
				  <i class="nav-icon fas fa-plus"></i>
				  <p>
					Create News Data
				  </p>
				</a>
			  </li>
			  <li class="nav-item">
                <a href="{{ route('databerita') }}" class="nav-link">
				  <i class="far fa-newspaper nav-icon"></i>
                  <p>All News Data</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="{{ route('publicationdata') }}" class="nav-link">
				  <i class="far fa-check-square nav-icon"></i>
                  <p>Publication</p>
                </a>
              </li>
            </ul>
		  </li>
		  <li class="nav-item has-treeview menu-close">
		    <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Author Account
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
			<ul class="nav nav-treeview">
			  <li class="nav-item">
				<a href="{{ route('createnewauthor') }}" class="nav-link">
				  <i class="nav-icon fas fa-user-plus"></i>
				  <p>
					Create New User
				  </p>
				</a>
			  </li>
			  <li class="nav-item">
                <a href="{{ route('authoddatabase') }}" class="nav-link">
				  <i class="fas fa-database nav-icon"></i>
                  <p>Author Database</p>
                </a>
              </li>
            </ul>
		  </li>
		  @endif
		  <!--<li class="nav-item">
            <a href="{{ route('draftemail') }}" class="nav-link">
              <i class="nav-icon fas fa-envelope"></i>
              <p>
                Make New Message
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>-->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  
	<!-- Tujuan untuk membuat if dalam section untuk menyembunyikan halaman yield yang lain -->
	<section class="content container-fluid">
		
		<!-- Web Page for Editor and Writer -->
		@if($perintah == "informasiumum")
		  <section class="container-fluid">
			@yield('informasiumum')
		  </section>
		@elseif($perintah == "profil")
		  <section class="container-fluid">
			@yield('profil')
		  </section>
		@elseif($perintah == "databerita")
		  <section class="container-fluid">
			@yield('databerita')
		  </section>
		@elseif($perintah == "lookanews")
		  <section class="container-fluid">
			@yield('lookanews')
		  </section>
		@elseif($perintah == "makenews")
		  <section class="container-fluid">
			@yield('makenews')
		  </section>
		@elseif($perintah == "editnews")
		  <section class="container-fluid">
			@yield('editnews')
		  </section>
		<!-- Web Page for Writer Only -->
		@elseif($perintah == "databeritaperid")
		  <section class="container-fluid">
			@yield('databeritaperid')
		  </section>
		<!-- To Change Status of News and Commands for Ready to Publish and Delete -->
		@elseif($perintah == "changestatus")
		  <section class="container-fluid">
			@yield('changestatus')
		  </section>
		<!-- For Editor Only and Thir Section only for author account database -->
		@elseif($perintah == "authorindex")
		  <section class="container-fluid">
			@yield('authorindex')
		  </section>
		@elseif($perintah == "createnewauthor")
		  <section class="container-fluid">
			@yield('createnewauthor')
		  </section>
		@elseif($perintah == "commandsforauthor")
		  <section class="container-fluid">
			@yield('commandsforauthor')
		  </section>
		<!-- Publication of News -->
		@elseif($perintah == "showPublicData")
		  <section class="container-fluid">
			@yield('showPublicData')
		  </section>
		@elseif($perintah == "detailpublication")
		  <section class="container-fluid">
			@yield('detailpublication')
		  </section>
		<!-- For Reset and New Password for Writer and Editor -->
		@elseif($perintah == "resetpass")
		  <section class="container-fluid">
			@yield('resetpass')
		  </section>
		@elseif($perintah == "draftemail")
		  <section class="container-fluid">
			@yield('bikinemail')
		  </section>
		@endif
	
	</section>
  
    
  <!-- /.control-sidebar -->
	
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Contact : facebookidbuat@yahoo.com
    </div>
    <!-- Default to the left -->
    <strong>For Portfolio Only
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

	<!-- Preview Image for Profile Page -->
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