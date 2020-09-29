@extends('accountpanel.layout')

@section('lookanews')

	<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-1">
          <div class="col-sm-6">
            <h1 class="m-1 text-dark"> <small> </small></h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
		
		<div class="row">
			<div class="col-lg-2">
			</div>
			<div class="col-lg-8">
				<div class="card card-info">
					<div class="card-header">
						<h3 class="card-title">{{ $data->judul }}</h3>
					</div>
					<!-- /.card-header -->
					<!-- form start -->
					<div class="card-body">
						<center>
							<picture>
								<source media="(max-width: 400px)" srcset="{{ url('/berita/xs/'.$data->foto) }}">
								<source media="(max-width: 800px)" srcset="{{ url('/berita/sm/'.$data->foto) }}">
								<source media="(min-width: 1200px)" srcset="{{ url('/berita/md/'.$data->foto) }}">
								<img style="width:100%;" src="{{ url('/berita/lg/'.$data->foto) }}">
							</picture>
						</center>
						<hr>
						<div class="row">
							<div class="col-6">
								<p>{{ \App\User::where(['id' => $data->iduser])->pluck('nama')->first() }}</p>
							</div>
							<div class="col-6 text-right">
								<p>{{ $data->kategori }} | {{ $data->updated_at }}</p>
							</div>
						</div>
						<p>{!! str_replace("\r","<br/>", $data->isiberita) !!}</p>
					</div>
						<!-- /.card-body -->

					<div class="card-footer text-right">
						<a href="{{ route('databerita') }}" class="btn btn-primary">Back to News Data</a>
					</div>
					</div>
					
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
					
					@if($data->status == 'published' or Auth::user()->jenisakun == "3")
					<div class="card card-widget">
					  <div class="card-header">
						<h3><center>What People Say About...</center></h3>
						<h5><center>{{ $data->judul }}</center></h5>
					  </div>
					  <!-- /.card-header -->
					  <!-- /.card-body -->
					  <div class="card-body card-comments">
						<div class="card-comment">
						
						@foreach($comment as $commentator)
							<div class="row">
								<div class="col-4 col-sm-3 col-md-2 col-lg-2">
									<center>
										<img style="width:100%; height:100%;" class="img-circle img-fluid" src="{{ url('/profile/comment/'.\App\User::where(['id' => $commentator->iduser])->pluck('foto')->first()) }}">
									</center>
								</div>
								<div class="col-8 col-sm-9 col-md-10 col-lg-10">
									<div class="row">
										<div class="col-12 col-sm-6 col-lg-8">
											<p>{{ $commentator->usernameyangcomment }}</p>
										</div>
										<div class="col-12 col-sm-6 col-lg-4">
											<p>Post comment at {{ $commentator->created_at }}</p>
										</div>
									</div>
									<p>{{ $commentator->isikomentar }}</p>
								</div>
							</div>
							<hr>
						@endforeach
						</div>
						<!-- /.card-comment -->
					  </div>
					  @if($data->iduser == Auth::user()->id)
					  <!-- /.card-footer -->
					  <div class="card-footer">
						<form action="#" method="post">
							{{ csrf_field() }}
							<input type="hidden" name="title" value="{{ $data->judul }}">
							<div class="row">
								<div class="col-12 col-sm-10">
									<textarea type="text" rows="4" class="form-control form-control-sm" id="comment" name="comment" placeholder="Your Comment"></textarea>
									<small>Max. Character 500 character</small>
								</div>
								<div class="col-12 col-sm-2">
									<button type="submit" class="btn btn-sm btn-block btn-primary">Comment</button>
								</div>
							</div>
						</form>
					  </div>
					  <!-- /.card-footer -->
					  @endif
					  @endif
					</div>
				</div>
				<div class="col-lg-2">
				</div>
			</div>
		</div>
	  </div>
	</div>
@endsection