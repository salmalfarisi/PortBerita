@extends('halamanutama.layout')

@section('newthread')

	<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
		
		@include('accountpanel.notifikasiflash')
	
		@if($message = Session::get('error'))
			<div class="alert alert-danger">
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
		
		<div class="row">
			<div class="col-lg-2">
			</div>
			<div class="col-lg-8">
				<div class="card card-primary">
					<div class="card-header">
						<h3 class="card-title">Create New Thread</h3>
					</div>
					<!-- /.card-header -->
					<!-- form start -->
					<form action="{{ route('storethread') }}" method="post" enctype="multipart/form-data">
						{{ csrf_field() }}
						<div class="card-body">
						  <div class="form-group">
							<label for="exampleInputEmail1">Title</label>
							<input type="text" class="form-control" id="title" name="judul">
							<small>Max. Characters : 250 Characters</small>
						  </div>
						  <div class="form-group">
							<label for="article">Article</label>
							<textarea type="text" rows="10" class="form-control" id="article" name="article"></textarea>
							<small>Max. Characters : 2000 Characters</small>
						  </div>
						  <div class="form-group">
							<label for="exampleInputFile">Upload Photo</label>
							<div class="input-group">
							  <div class="custom-file">
							    <!--<input type="file" accept="image/*" id="foto" class="form-control" name="foto" onchange="tampilkanPreview(this,'preview')" placeholder="Choose File"/>-->
								<input type="file" class="custom-file-input" id="exampleInputFile" name="foto" onchange="tampilkanPreview(this,'preview')">
								<label class="custom-file-label" for="exampleInputFile">Choose file</label>
							  </div>
							</div>
							<small>Type of File : jpeg or jpg or png. Min. Resolution : 640px x 480px</small>
						  </div>
						  <div class="form-group">
							<label class="col-sm-2 control-label"></label>
							<div class="col-sm-6 col-md-4 pull-left">
								<img id="preview" src="" alt="" width="100%" height="300px"/>
							</div>
						  </div>
						</div>
						<!-- /.card-body -->

						<div class="card-footer">
							<div class="row">
								<div class="col-6">
									<div class="text-left">
										<a href="{{ route('threaddatas') }}" class="btn btn-danger">Cancel</a>
									</div>
								</div>
								<div class="col-6">
									<div class="text-right">
									  <button type="submit" class="btn btn-primary">Create</button>
									</div>
								</div>
							</div>
						</div>
					</form>
					</div>
				</div>
				<div class="col-lg-2">
				</div>
			</div>
		</div>
	</div>
@endsection