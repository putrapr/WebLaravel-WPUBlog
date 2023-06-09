@extends('dashboard.layouts.main')

@section('container')
<div class="container">
  <div class="row mb-5">
    <div class="col-lg-8">        
      <h2 class='mb-3'>{{ $post["title"] }}</h2>
      <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to my all posts</a>
      <a href="" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
      <a href="" class="btn btn-danger"><span data-feather="x-circle"></span> Delete</a>
      <img src="../../img/{{ $post->category->slug }}.jpg" height="200px"  class="img-fluid object-fit-cover mt-3" alt="{{ $post->category->slug }}">
      <article class="my-3 fs-5">
        {!! $post["body"] !!}
      </article>
      <a href="/posts">Back to Posts</a>
    </div>
  </div>
</div>
@endsection