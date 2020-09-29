@extends('halamanutama.layout')

@section('thread')
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
		
		<div class="card">
              <div class="card-header">
                <h3 class="card-title">Thread Data</h3>

                <div class="card-tools">
					<div class="row">
						<div class="col-6">
						  <div class="input-group input-group-sm">
							<input type="text" name="table_search" class="form-control float-right" placeholder="Search">

							<div class="input-group-append">
							  <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
							</div>
						  </div>
						</div>
						<div class="col-6">
							<div class="input-group input-group-md">
								<a href="{{ route('createthread') }}" class="btn btn-sm btn-primary">Create new data</a>
							</div>
						</div>
					</div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Title</th>
                      <th>Updated at</th>
					  <th>Total Comment</th>
                      <th>Option</th>
                    </tr>
                  </thead>
                  <tbody>
				    <?php $no = 1; ?>
					@foreach($data as $thread)
                    <tr>
					  <td><center><?php echo $no++; ?></center></td>
                      <td>{{ $thread->judul }}</td>
					  <td><center>{{ $thread->updatedata }}</center></td>
					  <td><center>{{ $thread->totaldata }}</center></td>
                      <td>
					    <div class="btn-group">
							<a href="threads/lookathread/{{ $thread->judul }}" data-toggle="tooltip" title="Lihat Isi Thread" type="button" class="btn btn-xs bg-info">
								<span class="fa fa-eye"></span>
							</a>
						</div>
						<div class="btn-group">
							<a href="threads/editthread/{{ $thread->judul }}" data-toggle="tooltip" title="Ubah Data Thread" type="button" class="btn btn-xs bg-yellow">
								<span class="fa fa-pen"></span>
							</a>
						</div>
						<div class="btn-group">
							<a href="threads/deletethread/{{ $thread->judul }}" data-toggle="tooltip" title="Hapus Data Thread" type="button" class="btn btn-xs bg-red">
								<span class="fa fa-trash"></span>
							</a>
						</div></td>
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