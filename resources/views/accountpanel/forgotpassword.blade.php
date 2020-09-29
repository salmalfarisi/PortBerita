@extends('accountpanel.layoutspecial')

@section('forgotpass')
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Forgot Password</p>

      <form action="{{ route('storeforgotpass') }}" method="post">
	  {{ method_field('PUT') }}
	  {{ csrf_field() }}
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
        <div class="input-group mb-3">
		  <input type="hidden" class="form-control" name="position" value="fromwebkhusus">
          <input type="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Request new password</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mt-3 mb-1">
        <a href="{{ route('loginkhusus') }}">Login</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>

@endsection
