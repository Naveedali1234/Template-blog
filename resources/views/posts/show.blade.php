@extends ('layout.master')

@section('content')
	<div class="col-sm-8 blog-main">
		<h1>{{$post->title}}</h1>

		{{$post->body}}
		<hr>
		<div class="comments"> 
		   @if(Session::has('message_success'))
		     <div class="alert alert-success">{{Session::get('message_success')}}</div>
		     @endif
		      @if(Session::has('message_danger'))
		     <div class="alert alert-danger">{{Session::get('message_danger')}}</div>
		     @endif
			<ul class="list-group">
			@foreach($post->comments as $comment)
				<li class="list-group-item">
				<strong>
					{{$post->created_at->DiffForHumans()}}
				</strong>
					{{$comment->body}}
				</li>
				@endforeach
			</ul>
		</div>
		<div class="card">
			<div class="card-block">
				<form method="POST" action="/post/{{$post->id}}/comment">
				{{ csrf_field() }}
					<div class="form-group">
						<textarea name="body" placeholder="Add Comment" class="form-control"></textarea>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Add Comment</button>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection