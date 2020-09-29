@extends('halamanutama.layout')

@section('lookarticle')
	
		<div class="row">
		<div class="col-12 col-sm-12 col-md-12 col-lg-9">
			<div class="card">
				<div class="card-header">
					<h3><center>{{ $data->judul }}</center></h3>
				</div>
				<div class="card-body">
					<center>
						<picture>
							<source media="(max-width: 400px)" srcset="{{ url('/thread/xs/'.$data->foto) }}">
							<source media="(max-width: 800px)" srcset="{{ url('/thread/sm/'.$data->foto) }}">
							<source media="(min-width: 1200px)" srcset="{{ url('/thread/md/'.$data->foto) }}">
							<img style="width:100%;" src="{{ url('/thread/lg/'.$data->foto) }}" alt="IfItDoesntMatchAnyMedia">
						</picture>
					</center>
					<hr>
					<p>{!! str_replace("\r","<br/>", $data->isithread) !!}</p>
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
			<div class="card">
				<div class="card-header">
					<center>Comment</center>
				</div>
				<div class="card-body">
					@foreach($comment as $commentator)
						<div class="row">
							<div class="col-4 col-sm-3 col-md-2 col-lg-2">
								<center>
									<img class="img-circle" style="width:100%;" src="{{ url('/profile/comment/'.\App\User::where(['id' => $commentator->iduser])->pluck('foto')->first()) }}">
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
				<div class="card-footer">
					@if($statuslogin == "yes")
						<form action="{{ route('postcommentThread') }}" method="post">
							{{ csrf_field() }}
							<div class="row">
								<input type="hidden" name="title" value="{{ $data->judul }}">
								<div class="col-3 col-sm-3 col-md-2 col-lg-2">
									<center><picture>
										<source media="(max-width: 400px)" srcset="{{ url('/profile/comment/'.Auth::user()->foto) }}">
										<source media="(max-width: 800px)" srcset="{{ url('/profile/comment/'.Auth::user()->foto) }}">
										<source media="(min-width: 1200px)" srcset="{{ url('/profile/comment/'.Auth::user()->foto) }}">
										<img class="img-circle" style="width:80%;" src="{{ url('/profile/comment/'.Auth::user()->foto) }}" alt="IfItDoesntMatchAnyMedia">
									</picture></center>
								</div>
								<div class="col-9 col-sm-9 col-md-10 col-lg-10">
									<div class="row">
										<div class="col-12 col-sm-10">
											<textarea type="text" rows="4" class="form-control form-control-sm" id="comment" name="comment" placeholder="Your Comment"></textarea>
											<small>Max. Character 500 character</small>
										</div>
										<div class="col-12 col-sm-2">
											<button type="submit" class="btn btn-sm btn-block btn-primary">Comment</button>
										</div>
									</div>
								</div>
							</div>
						</form>
					@else
						<h5><center>Login or Sign Up to Comment this Thread</center></h5>
					@endif
				</div>
			</div>
		</div>
		
		<div class="col-12 col-sm-12 col-md-12 col-lg-3">
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">
					  <i class="fas fa-user-edit"></i>
					  Recent Thread
					</h3>
				</div>
				  <!-- /.card-header -->
				<div class="card-body">
					@foreach($anotherarticles as $article)
						<dd><a href="/home/thread/{{ $article->judul }}" style="color:black;">{{ $article->judul }}</a></dd>
					@endforeach
				</div>
				  <!-- /.card-body -->
			</div>
			
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">
					  <i class="fas fa-newspaper"></i>
					  Popular News
					</h3>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<dl class="row">
					  <dt class="col-sm-3"><center><h2>#1</h2></center></dt>
					  <dd class="col-sm-9">A description list is perfect for defining terms.</dd>
					  <dt class="col-sm-3"><center><h2>#2</h2></center></dt>
					  <dd class="col-sm-9">A description list is perfect for defining terms.</dd>
					</dl>
				</div>
				<!-- /.card-body -->
			</div>
			
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">
					  <i class="fas fa-poll"></i>
					  Popular Thread
					</h3>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<dl class="row">
					  <dt class="col-sm-3"><center><h2>#1</h2></center></dt>
					  <dd class="col-sm-9">A description list is perfect for defining terms.</dd>
					  <dt class="col-sm-3"><center><h2>#2</h2></center></dt>
					  <dd class="col-sm-9">A description list is perfect for defining terms.</dd>
					</dl>
				</div>
				<!-- /.card-body -->
			</div>
		</div>
	</div>
	
@endsection