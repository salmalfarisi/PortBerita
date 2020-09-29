@extends('halamanutama.layout')

@section('halamanutama')

    <!-- Main content -->
    <div class="content">
      <div class="container">
		
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
		
        <div class="row">
			<div class="col-12 col-lg-9">
				<div class="card">
				  <!-- /.card-header -->
				  <div class="card-body">
					<div id="CarouselGambar" class="carousel slide" data-ride="carousel">
					  <ol class="carousel-indicators">
						@foreach($imageslide as $carousel)
							<li data-target="#CarouselGambar" data-slide-to="{{ $loop->index }}" class=" {{ $loop->first ? 'active': '' }}"></li>
						@endforeach
					  </ol>
					  <div class="carousel-inner">
					    @foreach($imageslide as $recentnews)
						<div class="carousel-item {{ $loop->first ? 'active': '' }}">
						  <a href="#">
						  <picture>
							<source media="(max-width: 400px)" srcset="{{ url('/berita/xs/'.$recentnews->foto) }}">
							<source media="(max-width: 800px)" srcset="{{ url('/berita/md/'.$recentnews->foto) }}">
							<img style="width:100%" src="{{ url('/berita/lg/'.$recentnews->foto) }}" alt="IfItDoesntMatchAnyMedia">
						  </picture>
						  <div class="carousel-caption">
							<h6><b class="btn btn-sm bg-secondary">{{ $recentnews->judul }}</b></h6>
						  </div>
						  </a>
						</div>
					  @endforeach
					  </div>
					  <a class="carousel-control-prev" href="#CarouselGambar" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					  </a>
					  <a class="carousel-control-next" href="#CarouselGambar" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					  </a>
					</div>
				  </div>
				  <!-- /.card-body -->
				</div>
				<div class="card">
				  <div class="card-header">
					<h3 class="card-title">
					  <i class="fas fa-newspaper"></i>
					  Recent News
					</h3>
				  </div>
				  <!-- /.card-header -->
				  <div class="card-body">
				  @foreach($news as $newsdata)
					<dl class="row">
						  <dt class="col-12 col-sm-4">
							<picture>
								<source media="(max-width: 400px)" srcset="{{ url('/berita/xs/'.$newsdata->foto) }}">
								<source media="(max-width: 800px)" srcset="{{ url('/berita/md/'.$newsdata->foto) }}">
								<img style="width:100%" src="{{ url('/berita/lg/'.$newsdata->foto) }}" width="240" height="180" alt="IfItDoesntMatchAnyMedia">
							</picture>
						  </dt>
						  <dd class="col-12 col-sm-8">
							<div class="row">
								<div class="col-12 col-sm-8">
									<a href="/home/news/{{ $newsdata->judul }}" style="color:black;">{{ $newsdata->judul }}</a>
								</div>
								<div class="col-12 col-sm-4">
									<a href="/home/news/{{ $newsdata->judul }}"  style="color:black;"><small>{{ $newsdata->created_at }}</small></a> | 
									<a href="/home/news/{{ $newsdata->judul }}"  style="color:black;"><small>{{ $newsdata->kategori }}</small></a>
								</div>
							</div>
							<a href="/home/news/{{ $newsdata->judul }}" style="color:black;">{{ $newsdata->rangkuman }}</a>
						  </dd>
					</dl>
				  @endforeach
				  </div>
				  <!-- /.card-body -->
				</div>
			</div>
			
			<div class="col-12 col-lg-3">
				<div class="card">
				  <div class="card-header">
					<h3 class="card-title">
					  <i class="fas fa-user-edit"></i>
					  Recent Thread
					</h3>
				  </div>
				  <!-- /.card-header -->
				  <div class="card-body">
					@foreach($thread as $article)
						<dd><a href="home/thread/{{ $article->judul }}">{{ $article->judul }}</a></dd>
					@endforeach
				  </div>
				  <!-- /.card-body -->
				</div>
				<div class="card">
				  <div class="card-header">
					<h3 class="card-title">
					  <i class="fas fa-star"></i>
					  Popular News
					</h3>
				  </div>
				  <!-- /.card-header -->
				  <div class="card-body">
					<dl class="row">
						<?php $no = 1; ?>
						@foreach($popular as $trendnews)
						  <dt class="col-sm-3"><center><h2>#<?php echo $no++; ?></h2></center></dt>
						  <dd class="col-sm-9"><a href="/home/news/{{ $trendnews->judul }}" style="color:black;">{{ $trendnews->judul }}</a></dd>
					    @endforeach
					</dl>
				  </div>
				  <!-- /.card-body -->
				</div>
			</div>
		</div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
@endsection