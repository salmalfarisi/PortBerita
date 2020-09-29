@extends('halamanutama.layout')

@section('resetpass')

  <div class="row">
	<div class="col-4">
	</div>
	<div class="col-4">
	  <div class="card">
		<div class="card-body login-card-body">
		  <p class="login-box-msg">{{ $messages }}</p>

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
		  <form action="{{ route('submitnewpassword') }}" method="post">
			{{ method_field('PUT') }}
			{{ csrf_field() }}
			<input type="hidden" class="form-control" name="id" value="{{ $data->id }}">
			<input type="hidden" class="form-control" name="jenisakun" value="{{ $data->jenisakun }}">
			<input type="hidden" class="form-control" name="nama" value="{{ $data->nama }}">
			<div class="input-group mb-3">
			  <input type="password" class="form-control" name="password" placeholder="Password">
			  <div class="input-group-append">
				<div class="input-group-text">
				  <span class="fas fa-lock"></span>
				</div>
			  </div>
			</div>
			<div class="input-group mb-3">
			  <input type="password" class="form-control" name="repeatpassword" placeholder="Confirm Password">
			  <div class="input-group-append">
				<div class="input-group-text">
				  <span class="fas fa-lock"></span>
				</div>
			  </div>
			</div>
			<div class="row">
			  <div class="col-12">
				<button type="submit" class="btn btn-primary btn-block">Save New Password</button>
			  </div>
			  <!-- /.col -->
			</div>
		  </form>

		  <p class="mt-3 mb-1">
			<a href="login.html">Login</a>
		  </p>
		</div>
		<!-- /.login-card-body -->
	  </div>
	</div>
	<div class="col-4">
	</div>
  </div>

@endsection