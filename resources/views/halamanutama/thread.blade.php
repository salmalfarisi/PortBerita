@extends('halamanutama.layout')

@section('showAllThreads')

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
		
		<div class="card">
            <div class="card-header">
                <h3 class="card-title">Thread</h3>

                <div class="card-tools">
				  <form action="{{ route('findthread') }}" method="get">
					{{ method_field('GET') }}
					{{ csrf_field() }}
					  <div class="input-group input-group-sm" style="width: 150px;">
						<input type="text" name="searching" class="form-control float-right" placeholder="Search" value="{{ old('searching') }}">

						<div class="input-group-append">
						  <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
						</div>
					  </div>
				  </form>
                </div>
            </div>
              <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th><center>User</center></th>
                      <th><center>Title</center></th>
                      <th><center>Date</center></th>
                    </tr>
                  </thead>
                  <tbody>
				    @foreach($thread as $data)
						<tr>
						  <td><center>{{ \App\User::where(['id' => $data->iduser])->pluck('nama')->first() }}</center></td>
						  <td><center>{{ $data->judul }}</center></td>
						  <td><center>{{ $data->created_at }}</center></td>
						</tr>
					@endforeach
                  </tbody>
                </table>
            </div>
            <!-- /.card-body -->
			<div class="card-footer">
				{{ $thread->links() }}
			</div>
        </div>
		
	  </div>
	</div>

@endsection