 @extends('layouts.layout')

@section('content')

<section class="posts container">
 <article class="post w-image">

   	<figure><img src=" {{$post->file}}" alt="" class="img-responsive"></figure>
			<div class="content-post">
				<header class="container-flex space-between">
					<div class="date">
						<span class="c-gray-1">sep 18</span>
					</div>
					<div class="post-category">
						<span class="category text-capitalize">{{$post->category->name}}</span>
					</div>
				</header>      
				<h1> {{$post->name }} </h1>
        <div class="divider"></div>
        <div class="image-w-text">
          <figure class="block-left"><img src="img/img-post-2.png" alt=""></figure>
          <div>
            <p> {{ $post->body }} </p>
          </div>
        </div>

        <footer class="container-flex space-between">
         
          <div class="tags container-flex">
           
						@foreach($post->tags as $tag)
							<span class="tag c-gray-1 text-capitalize">{{$tag->name}} </span>
            @endforeach
          </div>
      </footer>
      <div class="comments">
      <div class="divider"></div>
        <div id="disqus_thread"></div>

                                
      </div><!-- .comments -->
    </div>
  </article>
</section>
@endsection