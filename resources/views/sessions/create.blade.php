@extends ('layout.master')

@section('content')
	<div class="col-sm-8">
		<form method="post" action="/register">
		{{csrf_field()}}
			<div class="form-group">
    		<label for="name">Name</label>
    		<input type="text" class="form-control" id="name" name="name">
  		</div>
  		<div class="form-group">
    		<label for="email">Email</label>
    		<input type="email" class="form-control" id="email" name="email">
  		</div>
  		<div class="form-group">
    		<label for="password">Password</label>
    		<input type="password" class="form-control" id="password" name="password">
  		</div>
  		<div class="form-group">
  			<button type="submit" class="btn btn-primary form-control">Register</button>
  		</div>
		</form>
  		
	</div>
@endsection