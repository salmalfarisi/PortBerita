@extends('accountpanel.layout')

@section('databeritaperid')

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
	
	<div class="content">
      <div class="container-fluid">
		<div class="card">
              <div class="card-header">
                <h3 class="card-title">News Data on Process</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th><center>No</center></th>
                      <th><center>Title</center></th>
					  <th><center>Permission</center></th>
					  <th><center>Updated at</center></th>
                    </tr>
                  </thead>
                  <tbody>
				    <?php $no = 1; ?>
					@foreach($data as $news)
                    <tr>
					  <td><center><?php echo $no++; ?></center></td>
                      <td>{{ $news->judul }}</td>
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
							<td><center><span class="badge bg-primary">NEED PERMISSION TO PUBLISH</center></td>
					      @endif
					  @endif
					  <td><center>{{ $news->updateddata }}</center></td>
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