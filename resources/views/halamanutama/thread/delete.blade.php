@extends('halamanutama.layout')

@section('deletethread')

	<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
		
		<div class="row">
			<div class="col-lg-2">
			</div>
			<div class="col-lg-8">
				@foreach($data as $thread)
				<form action="/threads/deletethread/accept/{{ $thread->judul }}" method="post">
					{{ method_field('DELETE') }}
					{{ csrf_field() }}
					<div class="card card-danger">
						<div class="card-header">
							<h3 class="card-title">Delete a Thread</h3>
						</div>
						<div class="card-body">
							<input type="hidden" id="id" name="id" value="{{ $thread->id }}">
							<input type="hidden" id="photo" name="photo" value="{{ $thread->foto }}">
							<h4>Are you sure want to delete this thread ?</h4>
							<h5>{{ $thread->judul }}</h5>
						</div>
						<div class="card-footer">
							<div class="row">
								<div class="col-6">
									<div class="text-left">
										<a href="{{ route('threaddatas') }}" class="btn btn-secondary">Cancel</a>
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
				@endforeach
			</div>
			<div class="col-lg-2">
			</div>
		</div>
	</div>
					
@endsection