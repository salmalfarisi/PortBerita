@extends('halamanutama.layout')

@section('registration')
	
  @include('accountpanel.notifikasiflash')

		@if($message = Session::get('error'))
			<div class="alert alert-danger alert-block">
				<button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button>
				<strong>{{ $message }}</strong>
			</div>
		@endif

		@if(count($errors) > 0)
			<div class="alert alert-danger bg-red">
				<ul>
					@foreach($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
	
  <!-- Main content -->
    <div class="content">
      <div class="container">
	  
		  <div class="row">
			<div class="col-md-3">
			</div>
			
			<div class="col-md-6">  
			  <div class="card">
				<div class="card-body register-card-body">
				  <p class="login-box-msg">Register a new member</p>

				  <form action="{{ route('submitregistration') }}" method="post">
					{{ method_field('POST') }}
					{{ csrf_field() }}
					<div class="input-group mb-3">
					  <input type="text" class="form-control" name="nama" placeholder="Full name">
					  <div class="input-group-append">
						<div class="input-group-text">
						  <span class="fas fa-user"></span>
						</div>
					  </div>
					</div>
					<div class="input-group mb-3">
					  <input type="email" class="form-control" name="email" placeholder="Email">
					  <div class="input-group-append">
						<div class="input-group-text">
						  <span class="fas fa-envelope"></span>
						</div>
					  </div>
					</div>
					<div class="text-right">
					  <button type="submit" class="btn btn-block btn-primary">Register</button>
					</div>
				  </form>
				  <p class="mt-3 mb-1">
					<a href="{{ route('home') }}">Kembali ke Halaman Utama</a>
				  </p>
				</div>
				<!-- /.form-box -->
			  </div>
			  
			  <div class="col-md-3">
			  </div>
			</div>
			
		</div>
	</div>

@endsection