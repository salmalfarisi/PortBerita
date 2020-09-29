@extends('accountpanel.layout')

@section('databerita')

	<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-1">
          <div class="col-sm-6">
            <h1 class="m-1 text-dark"> <small> </small></h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
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
	
	@if(Auth::user()->jenisakun == "2")
		@if($command == 'showinformation')
			<div class="row">
			  <div class="col-md-4 col-sm-4 col-12">
				<div class="info-box">
				  <span class="info-box-icon bg-success"><i class="far fa-newspaper"></i></span>

				  <div class="info-box-content">
					<span class="info-box-text">Popular News</span>
					<span class="info-box-number">{{ $popular->judul }}</span>
				  </div>
				  <!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			  </div>
			  <!-- /.col -->
			  <div class="col-md-4 col-sm-4 col-12">
				<div class="info-box">
				  <span class="info-box-icon bg-info"><i class="fas fa-tasks"></i></span>

				  <div class="info-box-content">
					<span class="info-box-text">On Process</span>
					<span class="info-box-number">{{ $taskonprocess }}</span>
				  </div>
				  <!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			  </div>
			  <!-- /.col -->
			  <div class="col-md-4 col-sm-4 col-12">
				<div class="info-box">
				  <span class="info-box-icon bg-danger"><i class="fas fa-times"></i></span>

				  <div class="info-box-content">
					<span class="info-box-text">Permission Reject</span>
					<span class="info-box-number">{{ $rejecttask }}</span>
				  </div>
				  <!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			  </div>
			  <!-- /.col -->
			</div>
		@endif
	@endif
	
	<div class="content">
      <div class="container-fluid">
		<div class="card">
              <div class="card-header">
                <h3 class="card-title">News Data</h3>

                <div class="card-tools">
					<div class="input-group input-group-sm">
						<input type="text" name="table_search" class="form-control float-right" placeholder="Search">

						<div class="input-group-append">
							<button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
						</div>
					</div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th><center>No</center></th>
                      <th><center>Title</center></th>
					  <th><center>Category</center></th>
					  <th><center>Total Viewers (Today)</center></th>
					  @if(Auth::user()->jenisakun =="2")
						  <th><center>Status</center></th>
					  @endif
					  <th><center>Updated at</center></th>
                      <th><center>Option</center></th>
                    </tr>
                  </thead>
                  <tbody>
				    <?php $no = 1; ?>
					@foreach($data as $news)
                    <tr>
					  <td><center><?php echo $no++; ?></center></td>
                      <td>{{ $news->judul }}</td>
                      <td><center>{{ $news->kategori }}</center></td>
                      <td><center>{{ $news->viewer }}</center></td>
					  @if(Auth::user()->jenisakun == "2")
						  @if($news->status == 'published')
							<td><center><span class="badge bg-success">PUBLISHED</center></td>
						  @elseif($news->status == 'needtobeupdated')
							<td><center><span class="badge bg-warning">NEED PERMISSION TO UPDATE</center></td>
						  @elseif($news->status == 'needdelete')
							<td><center><span class="badge bg-danger">NEED PERMISSION TO DELETE</center></td>
						  @elseif($news->status == 'rejected' or $news->status == 'rejectedforchangedata')
						    <td><center><span class="badge bg-danger">REJECTED</center></td>
						  @elseif($news->status == 'draft')
							<td><center><span class="badge bg-info">DRAFT</center></td>
						  @elseif($news->status == 'readytopublish')
							<td><center><span class="badge bg-primary">READY TO PUBLISH</center></td>
					      @endif
					  @endif
					  <td><center>{{ $news->updateddata }}</center></td>
                      <td><center>
						<!-- for editor and writer -->
						@if($news->status == 'published')
							<div class="btn-group">
								<a href="/webkhusus/berita/show/{{ $news->judul }}" data-toggle="tooltip" title="Look this news" type="button" class="btn btn-xs bg-info">
									<span class="fa fa-eye"></span>
								</a>
							</div>
							@if($news->iduser == Auth::user()->id)
							<div class="btn-group">
								<a href="/webkhusus/berita/delete/{{ $news->judul }}" data-toggle="tooltip" title="Delete news data" type="button" class="btn btn-xs bg-red">
									<span class="fa fa-trash"></span>
								</a>
							</div>
							<div class="btn-group">
								<a href="/webkhusus/berita/edit/{{ $news->judul }}" data-toggle="tooltip" title="Change news data" type="button" class="btn btn-xs bg-yellow">
									<span class="fa fa-pen"></span>
								</a>
							</div>
							@endif
						<!-- for writer only -->
						@elseif($news->status == 'needtobeupdated' or $news->status == 'needdelete' or $news->status == 'readytopublish')
							<div class="btn-group">
								<a href="/webkhusus/berita/show/{{ $news->judul }}" data-toggle="tooltip" title="Look this news" type="button" class="btn btn-xs bg-info">
									<span class="fa fa-eye"></span>
								</a>
							</div>
						@elseif($news->status == 'draft' or $news->status == 'rejected' or $news->status == 'rejectedforchangedata')
							<div class="btn-group">
								<a href="/webkhusus/berita/approval/{{ $news->judul }}" data-toggle="tooltip" title="Approve this news" type="button" class="btn btn-xs bg-primary">
									<span class="fa fa-check"></span>
								</a>
							</div>
							<div class="btn-group">
								<a href="/webkhusus/berita/show/{{ $news->judul }}" data-toggle="tooltip" title="Look this news" type="button" class="btn btn-xs bg-info">
									<span class="fa fa-eye"></span>
								</a>
							</div>
							<div class="btn-group">
								<a href="/webkhusus/berita/edit/{{ $news->judul }}" data-toggle="tooltip" title="Change news data" type="button" class="btn btn-xs bg-yellow">
									<span class="fa fa-pen"></span>
								</a>
							</div>
							<div class="btn-group">
								<a href="/webkhusus/berita/delete/{{ $news->judul }}" data-toggle="tooltip" title="Delete news data" type="button" class="btn btn-xs bg-red">
									<span class="fa fa-trash"></span>
								</a>
							</div>
						@endif
						</center></td>
                    </tr>
					@endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
		</div>
	  </div>
	</div>

@endsection