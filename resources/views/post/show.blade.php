@extends('layout.app')
@section('title', 'Post Details')
@section('heading', 'Post Details')
@section('link_text', 'Goto All Posts')
@section('link', '/post')

@section('content')

<div class="row my-4">
  <div class="col-lg-8 mx-auto">
    <div class="card shadow">
    <div class="card-header bg-primary">
        <h3 class="text-light fw-bold">View Post</h3>
    </div>
      <img src="{{ asset('storage/images/'.$post->image) }}" class="img-fluid card-img-top">
      <div class="card-body p-5">
        <h3 class="fw-bold text-primary">{{ $post->title }}</h3>
        <p>{{ $post->content }}</p>
        <p>Category : {{ $post->category }}</p>
      </div>
     
    </div>
  </div>
</div>
@endsection