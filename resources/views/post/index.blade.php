@extends('layout.app')
@section('title', 'Home Page')
@section('heading', 'All Posts')
@section('link_text', 'Add New Post')
@section('link', '/post/create')

@section('content')

@if(session('message'))
<div class="alert alert-{{ session('status') }} alert-dismissible fade show" role="alert">
  <strong>{{ session('message') }}</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if($posts->isNotEmpty())
<div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Image</th>
        <th>Title</th>
        <th>Content</th>
        <th>Category</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($posts as $post)
      <tr>
        <td><img src="{{ asset('storage/images/'.$post->image) }}" alt="{{ $post->title }}" class="img-thumbnail" style="max-width: 100px;"></td>
        <td>{{ $post->title }}</td>
        <td>{{ Str::limit($post->content, 100) }}</td>
        <td>{{ $post->category }}</td>
        <td class="action-buttons">
            <a href="{{ route('post.show', $post->id) }}" class="btn btn-primary me-1">View</a>
            <a href="/post/{{$post->id}}/edit" class="btn btn-success me-1">Edit</a>
            <form action="/post/{{$post->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>


      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@else
<h2 class="text-center text-secondary p-4">No post found in the database!</h2>
@endif

<div class="d-flex justify-content-center my-5">
  {{ $posts->onEachSide(1)->links() }}
</div>

@endsection
