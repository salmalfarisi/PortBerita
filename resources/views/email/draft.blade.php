@extends('accountpanel.layout')

@section('bikinemail')

	<div class="card card-primary">
		<div class="card-header">
			<h3 class="card-title">Quick Example</h3>
		</div>
		<!-- /.card-header -->
        <!-- form start -->
        <form action= "{{ route('sendemail') }}" method= "post">
			{{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email">
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter receiver">
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">Message</label>
                    <input type="text" class="form-control" id="message" name="message" placeholder="Enter message">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Send</button>
                </div>
		</form>
	</div>

@endsection