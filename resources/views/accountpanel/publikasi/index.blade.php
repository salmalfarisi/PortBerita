@extends('accountpanel.layout')

@section('showPublicData')

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
	
	<div class="content">
		<div class="container-fluid">	
			<div class="card">
              <div class="card-header">
                <h3 class="card-title">Publication of News</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
				  <div class="row">
					  <thead>
						<tr>
						  <th><center>No</center></th>
						  <th><center>Author</center></th>
						  <th><center>Title</center></th>
						  <th><center>Permission</center></th>
						  <th><center>Option</center></th>
						</tr>
					  </div>
                  </thead>
                  <tbody>
					  <?php $no = 1; ?>
					  @foreach($data as $list)
					  <tr>
						  <td><center><?php echo $no++; ?></center></td>
						  <td><center>{{ \App\User::where(['id' => $list->iduser])->pluck('nama')->first() }}</center></td>
						  <td><center>{{ $list->judul }}</center></td>
						  @if($list->status == "readytopublish")
							<td><center><span class="badge bg-primary">Need Permission to Publish News</span></center></td>
						  @elseif($list->status == "needtobeupdated")
						    <td><center><span class="badge bg-warning">Need Permission to Change News Data</span></center></td>
						  @elseif($list->status == "needdelete")  
						    <td><center><span class="badge bg-danger">Need Permission to Delete News Data</span></center></td>
						  @endif
						  <td>
							<center>
								<a href="/webkhusus/publication/detail/{{ $list->judul }}" data-toggle="tooltip" title="Detail News" type="button" class="btn btn-xs btn-primary">
									<span class="fas fa-eye"></span>
								</a>
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