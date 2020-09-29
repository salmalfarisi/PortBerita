
@extends('accountpanel.layout')

@section('changestatus')

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
				<!-- 
					All status of news : 
					- readytopublish (w + e)
					- published (w + e)
					- draft (w)
					- rejected (w)
					- needtobeupdated (w+e)
					- needdelete (w+e)
				-->
			
				<!-- Commands for writer only -->
				@if($command == 'approvenews')
					@if($statusnews == 'draft' or $statusnews == 'rejected' or $statusnews == 'rejectedforchangedata' and Auth::user()->jenisakun == "2")
						<form action="{{ route('approvenews') }}" method="post">
							{{ method_field('PUT') }}
							{{ csrf_field() }}
							<div class="card card-primary">
								<div class="card-header">
									<h3 class="card-title">Make permission to approve a News</h3>
								</div>
								<div class="card-body">
									<input type="hidden" id="id" name="id" value="{{ $data->id }}">
									<input type="hidden" id="photo" name="status" value="{{ $data->status }}">
									<input type="hidden" id="photo" name="photo" value="{{ $data->foto }}">
									<input type="hidden" class="form-control" id="createddata" name="createddata" value="{{ $data->created_at }}">
									<h4>Are you sure want to make permission to approve this news ?</h4>
									<h5>{{ $data->judul }}</h5>
								</div>
								<div class="card-footer">
									<div class="row">
										<div class="col-6">
											<div class="text-left">
												<a href="{{ route('databerita') }}" class="btn btn-danger">Cancel</a>
											</div>
										</div>
										<div class="col-6">
											<div class="text-right">
											  <button type="submit" class="btn btn-success">Accept</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</form>
					@endif
				@elseif($command == 'deletenews')
					@if($statusnews == 'draft' or $statusnews == 'rejected' and Auth::user()->jenisakun == "2" and $command == "deletenews")
						<form action="{{ route('deletenews') }}" method="post">
							{{ method_field('DELETE') }}
							{{ csrf_field() }}
							<div class="card card-danger">
								<div class="card-header">
									<h3 class="card-title">Delete a News</h3>
								</div>
								<div class="card-body">
									<input type="hidden" id="id" name="id" value="{{ $data->id }}">
									<input type="hidden" id="photo" name="photo" value="{{ $data->foto }}">
									<input type="hidden" id="photo" name="status" value="{{ $data->status }}">
									<input type="hidden" id="photo" name="changestatus" value="{{ $command }}">
									<h4>Are you sure want to delete this news ?</h4>
									<h5>{{ $data->judul }}</h5>
								</div>
								<div class="card-footer">
									<div class="row">
										<div class="col-6">
											<div class="text-left">
												<a href="{{ route('databerita') }}" class="btn btn-secondary">Cancel</a>
											</div>
										</div>
										<div class="col-6">
											<div class="text-right">
											  <button type="submit" class="btn btn-primary">Delete</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</form>
					@else
						<form action="{{ route('deletenews') }}" method="post">
							{{ method_field('DELETE') }}
							{{ csrf_field() }}
							<div class="card card-danger">
								<div class="card-header">
									<h3 class="card-title">Delete a News</h3>
								</div>
								<div class="card-body">
									<input type="hidden" id="id" name="id" value="{{ $data->id }}">
									<input type="hidden" id="photo" name="photo" value="{{ $data->foto }}">
									<input type="hidden" id="photo" name="status" value="{{ $data->status }}">
									<input type="hidden" id="photo" name="changestatus" value="{{ $command }}">
									<h4>Are you sure want to delete this news ?</h4>
									<h5>{{ $data->judul }}</h5>
								</div>
								<div class="card-footer">
									<div class="row">
										<div class="col-6">
											<div class="text-left">
												<a href="{{ route('databerita') }}" class="btn btn-secondary">Cancel</a>
											</div>
										</div>
										<div class="col-6">
											<div class="text-right">
											  <button type="submit" class="btn btn-primary">Delete</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</form>
					@endif
				@endif
			</div>
			<div class="col-lg-2">
			</div>
		</div>
	  </div>
	</div>
					
@endsection