@extends('layouts.main')

@section('container')
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-8">        
        <h2 class='mb-3'>{{ $post["title"] }}</h2>
        <p>By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        @if ($post->image)
          <div style="max-height: 350px; overflow:hidden">
            <img src="{{ asset('storage/'. $post->image) }}"  class="img-fluid" alt="{{ $post->category->slug }}">
          </div>        
          @else
          <div style="max-height: 350px; overflow:hidden">
            <img src="../img/{{ $post->category->slug }}.jpg" height="350px" class="img-fluid object-fit-cover" alt="{{ $post->category->slug }}">
          </div>
          @endif
        
        
        <article class="my-3 fs-5">
          {!! $post["body"] !!}
        </article>
        <a href="/posts">Back to Posts</a>
      </div>
    </div>
  </div>
@endsection