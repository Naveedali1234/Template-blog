<div class="blog-post">

            
            <h2 class="blog-post-title"><a href="post/{{$post->id}}">{{$post->title}}</a></h2>
            {{$post->user->name}} on 
            <p class="blog-post-meta">{{$post->created_at->toFormattedDateString()}} </p>

            {{$post->body}}
            <br>
            <a href="post/create">+ Create New Post  </a>
          </div><!-- /.blog-post -->