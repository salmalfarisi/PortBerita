@extends('accountpanel.layout')

@section('profil')

	<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-1">
          <div class="col-sm-6">
            <h1 class="m-1 text-dark"> <small> </small></h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
	
	<div class="row">
		<div class="col-lg-2">
		</div>
		
		<div class="col-lg-8">
			<div class="card card-primary card-outline">
				<div class="card-body box-profile">
					<div class="text-center">
						<img class="img-fluid img-circle" src="{{ url('/profile/'.Auth::user()->foto) }}" alt="User profile picture" height="200" width="200">
					</div>

					<h3 class="profile-username text-center">{{ Auth::user()->nama }}</h3>
					
					<h4 class="text-center">Change Profile</h4>
					
					<hr>
					
					<form action="{{ route('changeprofileforadmin') }}" method="post" enctype="multipart/form-data">
						{{ method_field('PUT') }}
						{{  csrf_field() }}
						<input type="hidden" id="id" name="id" value="{{ Auth::user()->id }}">
						<div class="card-body">
						  <div class="form-group">
							<label for="exampleInputEmail1">Nama</label>
							<input type="text" class="form-control" id="name" name="nama" value="{{ Auth::user()->nama }}">
						  </div>
						  <div class="form-group">
							<label for="exampleInputEmail1">Email address</label>
							<input type="email" class="form-control" id="exampleInputEmail1" name="email" value="{{ Auth::user()->email }}">
						  </div>
						  <div class="form-group">
							<label for="exampleInputPassword1">Password</label>
							<input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Reset your password here">
						  </div>
						  <div class="form-group">
							<input type="password" class="form-control" id="exampleInputPassword2" name="repeatpassword" placeholder="Type your password again">
						  </div>
						  <div class="form-group">
							<label for="exampleInputFile">Change Photo</label>
							<div class="input-group">
							  <div class="custom-file">
							    <!--<input type="file" accept="image/*" id="foto" class="form-control" name="foto" onchange="tampilkanPreview(this,'preview')" placeholder="Choose File"/>-->
								<input type="file" class="custom-file-input" id="exampleInputFile" name="foto" onchange="tampilkanPreview(this,'preview')">
								<label class="custom-file-label" for="exampleInputFile">Choose file</label>
							  </div>
							</div>
							<small>Required = Type of File : jpeg or jpg or png</small>
						  </div>
						  <div class="form-group">
							<label class="col-sm-2 control-label"></label>
							<div class="col-sm-6 col-md-4 pull-left">
								<img id="preview" src="" alt="" width="100%" height="300px"/>
							</div>
						  </div>
						  <div class="form-group text-right">
							<button type="submit" class="btn btn-primary">Submit</button>
						  </div>
						</div>
						<!-- /.card-body -->
					</form>
				</div>
				<!-- /.card-body -->
			</div>
		</div>
		
		<div class="col-lg-2">
		</div>
		
	</div>

@endsection