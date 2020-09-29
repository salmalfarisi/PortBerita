
@extends('accountpanel.layout')

@section('detailpublication')

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
		
		@if($total == '1')
			<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Detail Publication</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="#" class="form-horizontal">
			  {{ method_field('PUT') }}
			  {{ csrf_field() }}
                <div class="card-body">
				  <input type="hidden" class="form-control" id="id" value="{{ $data->id }}">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Author</label>
                    <div class="col-sm-10">
						<p><b>{{ \App\User::where(['id' => $data->iduser])->pluck('nama')->first() }}</b></p>
                    </div>
                  </div>
				  <div class="form-group row">
                    <label for="writer" class="col-sm-2 col-form-label">Permission</label>
                    <div class="col-sm-10"><p>
						@if($data->status == "readytopublish")
							Need Permission to Publish News
						@elseif($data->status == "needtobeupdated")
						    Need Permission to Change News Data
						@elseif($data->status == "needdelete")  
						    Need Permission to Delete News Data
						@endif
                    </p></div>
                  </div>
				  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Title</label>
					<div class="col-sm-10">
						<p><b>{{ $data->judul }}</b></p>
					</div>
				  </div>
				  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Category</label>
					<div class="col-sm-10">
						<p>{{ $data->kategori }}</p>
					</div>
				  </div>
				  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Summary</label>
					<div class="col-sm-10">
						<p>{!! str_replace("\r","<br/>", $data->rangkuman) !!}</p>
					</div>
				  </div>
				  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Article</label>
					<div class="col-sm-10">
						<p>{!! str_replace("\r","<br/>", $data->isiberita) !!}</p>
					</div>
				  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="button" class="btn btn-danger float-left" data-toggle="modal" data-target="#tolakpermintaan">
					Cancel
                  </button>
                  <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#terimapermintaan">
					Accept
                  </button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
		@elseif($total == '2')
			<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Identity of Author</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body">
                  <div class="form-group row">
                    <label for="writer" class="col-sm-2 col-form-label">Author</label>
                    <div class="col-sm-10">
						{{ \App\User::where(['id' => $data->iduser])->pluck('nama')->first() }}
                    </div>
                  </div>
				  <div class="form-group row">
                    <label for="writer" class="col-sm-2 col-form-label">Permission</label>
                    <div class="col-sm-10">
						@if($data->status == "readytopublish")
							Need Permission to Publish News
						@elseif($data->status == "needtobeupdated")
						    Need Permission to Change News Data
						@elseif($data->status == "needdelete")  
						    Need Permission to Delete News Data
						@endif
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
            </div>
			<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Detail Publication for Old Data</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body">
                  <div class="form-group row">
                    <label for="writer" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
						{{ $olddata->judul }}
                    </div>
                  </div>
				  <div class="form-group row">
                    <label for="writer" class="col-sm-2 col-form-label">Summary</label>
                    <div class="col-sm-10">
						{{ $olddata->rangkuman }}
                    </div>
                  </div>
				  <div class="form-group row">
                    <label for="writer" class="col-sm-2 col-form-label">Category</label>
                    <div class="col-sm-10">
						{{ $olddata->kategori }}
                    </div>
                  </div>
				  <div class="form-group row">
                    <label for="writer" class="col-sm-2 col-form-label">Article</label>
                    <div class="col-sm-10">
						{{ $olddata->isiberita }}
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
            </div>
			<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Detail Permission Publication for Change Data</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body">
				  <input type="hidden" class="form-control" id="id" value="{{ $olddata->id }}">
				  @if($olddata->judul != $data->judul)
                  <div class="form-group row">
                    <label for="writer" class="col-sm-2 col-form-label bg-warning">Title</label>
                    <div class="col-sm-10">
					 {{ $data->judul }}
                    </div>
                  </div>
				  @endif
				  @if($olddata->rangkuman != $data->rangkuman)
				  <div class="form-group row">
                    <label for="writer" class="col-sm-2 col-form-label bg-warning">Summary</label>
                    <div class="col-sm-10">
						{{ $data->rangkuman }}
                    </div>
                  </div>
				  @endif
				  @if($olddata->kategori != $data->kategori)
				  <div class="form-group row">
                    <label for="writer" class="col-sm-2 col-form-label bg-warning">Category</label>
                    <div class="col-sm-10">
						{{ $data->kategori }}
                    </div>
                  </div>
				  @endif
				  @if($olddata->isiberita != $data->isiberita)
				  <div class="form-group row">
                    <label for="writer" class="col-sm-2 col-form-label bg-warning">Article</label>
                    <div class="col-sm-10">
						{{ $data->isiberita }}
                    </div>
                  </div>
				  @endif
                </div>
                <div class="card-footer">
				  <button type="button" class="btn btn-danger float-left" data-toggle="modal" data-target="#tolakperubahandata">
					Cancel
                  </button>
                  <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#terimaperubahandata">
					Accept
                  </button>
                </div>
                <!-- /.card-footer -->
            </div>
		@endif
		</div>
	</div>
	
	@if($permintaanuser == "deletedata" or $permintaanuser == "publishdata")
		<div class="modal fade" id="terimapermintaan">
			<div class="modal-dialog">
			  <div class="modal-content bg-primary">
				<div class="modal-header">
				  <h4 class="modal-title">Accept Permission</h4>
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
				</div>
				<form action="/webkhusus/publication/detail/{judul}/result" class="form-horizontal" method="post">
					{{ method_field('PUT') }}
					{{ csrf_field() }}
				<div class="modal-body">
				  <input type="hidden" name="id" value="{{ $data->id }}">
				  <input type="hidden" name="status" value="{{ $data->status }}">
				  <input type="hidden" name="permission" value="{{ $permintaanuser }}">
				  <input type="hidden" name="result" value="accept">
				  <p>{{ $accept }}</p>
				</div>
				<div class="modal-footer justify-content-between">
				  <button type="button" class="btn btn-outline-light btn-danger" data-dismiss="modal">Close</button>
				  <button type="submit" class="btn btn-outline-light btn-primary">Accept</button>
				</div>
				</form>
			  </div>
			  <!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /.modal -->
		
		<div class="modal fade" id="tolakpermintaan">
			<div class="modal-dialog">
			  <div class="modal-content bg-danger">
				<div class="modal-header">
				  <h4 class="modal-title">Cancel Permission</h4>
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
				</div>
				<form action="/webkhusus/publication/detail/{judul}/result" class="form-horizontal" method="post">
					{{ method_field('PUT') }}
					{{ csrf_field() }}
				<div class="modal-body">
				  <input type="hidden" name="id" value="{{ $data->id }}">
				  <input type="hidden" name="status" value="{{ $data->status }}">
				  <input type="hidden" name="permission" value="{{ $permintaanuser }}">
				  <input type="hidden" name="result" value="cancel">
				  <p>{{ $cancel }}</p>
				</div>
				<div class="modal-footer justify-content-between">
				  <button type="button" class="btn btn-outline-light btn-danger" data-dismiss="modal">Close</button>
				  <button type="submit" class="btn btn-outline-light btn-primary">Accept</button>
				</div>
				</form>
			  </div>
			  <!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /.modal -->
	@elseif($permintaanuser == 'changedata')
		<div class="modal fade" id="terimaperubahandata">
			<div class="modal-dialog">
			  <div class="modal-content bg-primary">
				<div class="modal-header">
				  <h4 class="modal-title">Accept Permission</h4>
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
				</div>
				<form action="/webkhusus/publication/detail/{{ $olddata->judul }}/updatedata/result" class="form-horizontal" method="post">
					{{ method_field('PUT') }}
					{{ csrf_field() }}
				<div class="modal-body">
				  <input type="hidden" name="oldid" value="{{ $olddata->id }}">
				  <input type="hidden" name="newid" value="{{ $data->id }}">
				  <input type="hidden" name="permission" value="{{ $permintaanuser }}">
				  <input type="hidden" name="result" value="accept">
				  <p>Are you sure want to agree this permission ?</p>
				</div>
				<div class="modal-footer justify-content-between">
				  <button type="button" class="btn btn-outline-light btn-danger" data-dismiss="modal">Close</button>
				  <button type="submit" class="btn btn-outline-light btn-primary">Accept</button>
				</div>
				</form>
			  </div>
			  <!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /.modal -->
		
		<div class="modal fade" id="tolakperubahandata">
			<div class="modal-dialog">
			  <div class="modal-content bg-danger">
				<div class="modal-header">
				  <h4 class="modal-title">Cancel Permission</h4>
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
				</div>
				<form action="/webkhusus/publication/detail/{{ $olddata->judul }}/updatedata/result" class="form-horizontal" method="post">
					{{ method_field('PUT') }}
					{{ csrf_field() }}
				<div class="modal-body">
				  <input type="hidden" name="oldid" value="{{ $olddata->id }}">
				  <input type="hidden" name="newid" value="{{ $data->id }}">
				  <input type="hidden" name="permission" value="{{ $permintaanuser }}">
				  <input type="hidden" name="result" value="cancel">
				  <p>Are you sure want to cancel this permission ?</p>
				</div>
				<div class="modal-footer justify-content-between">
				  <button type="button" class="btn btn-outline-light btn-danger" data-dismiss="modal">Close</button>
				  <button type="submit" class="btn btn-outline-light btn-primary">Accept</button>
				</div>
				</form>
			  </div>
			  <!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /.modal -->
	@endif

@endsection