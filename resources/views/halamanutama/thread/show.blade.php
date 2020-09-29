@extends('halamanutama.layout')

@section('lookathread')
	
	<div class="content-header">
      <div class="container">
	
		<div class="row">
			<div class="col-lg-2">
			</div>
			<div class="col-lg-8">
				@foreach($data as $thread)
				<div class="card card-info">
					<div class="card-header">
						<h3 class="card-title">{{ $thread->judul }}</h3>
					</div>
					<!-- /.card-header -->
					<!-- form start -->
					<div class="card-body">
						<center>
							<picture>
								<source media="(max-width: 400px)" srcset="{{ url('/thread/xs/'.$thread->foto) }}">
								<source media="(max-width: 800px)" srcset="{{ url('/thread/sm/'.$thread->foto) }}">
								<source media="(min-width: 1200px)" srcset="{{ url('/thread/md/'.$thread->foto) }}">
								<img style="width:100%;" src="{{ url('/thread/lg/'.$thread->foto) }}">
							</picture>
						</center>
						<hr>
						<p>{!! str_replace("\r","<br/>", $thread->isithread) !!}</p>
					</div>
						<!-- /.card-body -->

					<div class="card-footer">
						<div class="text-right">
							<a href="{{ route('threaddatas') }}" class="btn btn-primary">Back to Thread Data</a>
						</div>
					</div>
					@endforeach
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
					
					<div class="card card-widget">
					  <div class="card-header">
					  @foreach($data as $title)
						<h3><center>What People Say About...</center></h3>
						<h5><center>{{ $title->judul }}</center></h5>
					  @endforeach
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
					  <!-- /.card-footer -->
					  <div class="card-footer">
						<form action="{{ route('postcommentThread') }}" method="post">
							{{ csrf_field() }}
							@foreach($data as $title)
								<input type="hidden" name="title" value="{{ $title->judul }}">
							@endforeach
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
					</div>
				</div>
				<div class="col-lg-2">
				</div>
			</div>
		</div>
	</div>
@endsection