@extends('accountpanel.layout')

@section('informasiumum')

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
  
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
	
	<!-- Main content -->
    <div class="content">
      <div class="container-fluid">
	    <div class="row">
          <div class="col-md-6 col-sm-6 col-12">
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
          <div class="col-md-6 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon bg-primary"><i class="fas fa-tasks"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Permission on Process</span>
                <span class="info-box-number">{{ $totalpermission }}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <div class="row">
		  <div class="col-lg-6">
		    <div class="card">
              <div class="card-header">
                <h3 class="card-title"><b>Top 5 Popular News</b></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width: 10%"><center>No</center></th>
                      <th style="width: 40%"><center>Title</center></th>
                      <th style="width: 25%"><center>Total Views Today</center></th>
                      <th style="width: 25%"><center>Total Comment</center></th>
                    </tr>
                  </thead>
                  <tbody>
					<?php $no = 1; ?>
					@foreach($popularnews as $top5)
                    <tr>
                      <td><center><?php echo $no++; ?></center></td>
                      <td><center>{{ $top5->judul }}</center></td>
                      <td><center>{{ $top5->viewers }}</center></td>
                      <td><center>{{ $top5->totaldata }}</center></td>
                    </tr>
					@endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
		  </div>
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h5 class="m-0">Notification for Publication News data</h5>
              </div>
              <div class="card-body">
                <h3><b>You have : </b></h3>
				
                <p class="card-text"><h5>{{ $ready }} Task to publish news</h5></p>
				<p class="card-text"><h5>{{ $update }} Task to changed news from writer</h5></p>
				<p class="card-text"><h5>{{ $delete }} Task to delete news</h5></p>
                <a href="{{ route('publicationdata') }}" class="btn btn-primary float-right">Go to Publication News Data</a>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
	
@endsection