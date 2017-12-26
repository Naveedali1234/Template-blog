@extends ('layout.master')
@section('content')
<div class="col-sm-8 blog-main">
<h1>create a post</h1>
<hr>
<form method="POST" action="/">
{{ csrf_field() }}
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>
  <div class="form-group">
    <label for="body">Body</label>
    <textarea id="body" name="body" class="form-control"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Publish</button>

  @if(count($errors))
  <div class="form-group">
  	<div class="alert alert-danger">
  		<ul>
  			@foreach ($errors->all() as $error)
  				<li>{{$error}}</li>
  			@endforeach
  		</ul>
  	</div>
  </div>
  @endif
</form>
</div>
@stop