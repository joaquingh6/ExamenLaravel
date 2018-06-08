@extends('layouts.layout')

@section('content')
<section class="posts container">
    @foreach($posts as $post)
    <article class="post w-image">


        <figure><img src="{{$post->file}}" alt="" class="img-responsive"></figure>
        <div class="content-post">
            <header class="container-flex space-between">
                <div class="date">
                    <span class="c-gray-1">sep 18</span>
                </div>
                <div class="post-category">
                    <span class="category text-capitalize">i do observe</span>
                </div>
            </header>
            <h1>{{$post->name}} </h1>
            <div class="divider"></div>
            <cite class="cite">{{$post->excerpt}}</cite>
            <footer class="container-flex space-between">
                    {!!Form::open(['route'=>['post.show', $post->id] , 'method'=>'GET']) !!}
                    <button class="btn btn-sn btn">Leer mas</button>
                    {!!Form::close()!!}
                <div class="tags container-flex">
                    <span class="tag c-gray-1 text-capitalize">#yosemite</span>
                    <span class="tag c-gray-1 text-capitalize">#peak</span>
                    <span class="tag c-gray-1 text-capitalize">#photo</span>
                </div>
            </footer>
        </div>
    </article>
@endforeach
</section>
@endsection
