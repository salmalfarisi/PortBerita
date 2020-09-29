@extends('accountpanel.layout')

@section('authorindex')

	<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-1">
          <div class="col-sm-6">
            <h1 class="m-1 text-dark"> <small> </small></h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
		
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
                <h3 class="card-title">Author Account Database</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
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
                      <th style="width:10%;"><center>No</center></th>
                      <th style="width:30%;"><center>Author</center></th>
                      <th style="width:30%;"><center>Email</center></th>
                      <th style="width:20%;"><center>Last Login</center></th>
                      <th style="width:10%;"><center>Option</center></th>
                    </tr>
                  </thead>
                  <tbody>
				    <?php $no = 1; ?>
					@foreach($data as $user)
                    <tr>
                      <td><center><?php echo $no++; ?></center></td>
                      <td>{{ $user->nama }}</td>
                      <td>{{ $user->email }}</td>
                      <td><center>{{ $user->terakhirlogin }}</center></td>
                      <td>
						<center>
							<div class="btn-group">
								<a href="/webkhusus/author/lockaccount/{{ $user->id }}" data-toggle="tooltip" title="Change author password" type="button" class="btn btn-xs bg-yellow">
									<span class="fa fa-lock"></span>
								</a>
							</div>
							<div class="btn-group">
								<a href="/webkhusus/author/delete/{{ $user->id }}" data-toggle="tooltip" title="Delete this account" type="button" class="btn btn-xs bg-red">
									<span class="fa fa-trash"></span>
								</a>
							</div>
						</center>
					  </td>
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