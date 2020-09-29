<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PortBerita | {{ $title }}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="{{ route('loginkhusus') }}"><b>PortBerita</b></a>
  </div>
  
  <section><!-- /.login-logo -->
	@if($perintah == "login")
		<section class="container-fluid">
			@yield('login')
		</section>
	@elseif($perintah == "forgotpass")
		<section class="container-fluid">
			@yield('forgotpass')
		</section>
	@elseif($perintah == "storenewpassword")
		<section class="container-fluid">
			@yield('storenewpassword')
		</section>
	@endif
  </section>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>

	<script>
		$.ajaxSetup({
			headers:{
				'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
			}
		});
	</script>

</body>
</html>