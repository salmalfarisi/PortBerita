@extends('accountpanel.layout')

@section('commandsforauthor')

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
			
				<!-- Commands for editor only -->
				@if($task == 'lock')
					<form action="{{ route('lockthisaccount') }}" method="post">
						{{ method_field('PUT') }}
						{{ csrf_field() }}
						<div class="card card-warning">
							<div class="card-header">
								<h3 class="card-title">Make permission to approve a News</h3>
							</div>
							<div class="card-body">
								<input type="hidden" id="id" name="id" value="{{ $data->id }}">
									<h4>Are you sure want to lock this user account ?</h4>
								<h5>{{ $data->nama }}</h5>
								<div class="form-group">
									<label for="exampleInputEmail1">Enter Author Email for Confirmation</label>
									<input type="email" class="form-control" id="name" name="email">
								</div>
							</div>
							<div class="card-footer">
								<div class="row">
									<div class="col-6">
										<div class="text-left">
											<a href="{{ route('authoddatabase') }}" class="btn btn-danger">Cancel</a>
										</div>
									</div>
									<div class="col-6">
										<div class="text-right">
											 <button type="submit" class="btn btn-primary">Lock This Account</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>
				@elseif($task == 'delete')
					<form action="{{ route('deletethisaccount') }}" method="post">
						{{ method_field('DELETE') }}
						{{ csrf_field() }}
						<div class="card card-danger">
							<div class="card-header">
								<h3 class="card-title">Delete a News</h3>
							</div>
							<div class="card-body">
								<input type="hidden" id="id" name="id" value="{{ $data->id }}">
								<h4>Are you sure want to delete this user account ?</h4>
								<h5>{{ $data->nama }}</h5>
							</div>
							<div class="card-footer">
								<div class="row">
									<div class="col-6">
										<div class="text-left">
											<a href="{{ route('authoddatabase') }}" class="btn btn-secondary">Cancel</a>
										</div>
									</div>
									<div class="col-6">
										<div class="text-right">
											 <button type="submit" class="btn btn-primary">Delete This Account</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>
				@endif
			</div>
			<div class="col-lg-2">
			</div>
		</div>
	  </div>
	</div>
					
@endsection