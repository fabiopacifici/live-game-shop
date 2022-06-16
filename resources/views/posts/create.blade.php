@extends('layouts.app')

@section('content')

<div class="container">
  <h1> Create a new Post</h1>
  <!-- Puntare il form alla rotta POST store -->
  <form action="{{route('posts.store')}}" method="post">
    @csrf
  
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" name="title" id="title" class="form-control" placeholder="Fifa 98" aria-describedby="titleHelper">
      <small id="titleHelper" class="text-muted">Type the post name here</small>
    </div>
    <div class="form-group">
      <label for="cover_image">Cover Image</label>
      <input type="text" name="cover_image" id="cover_image" class="form-control" placeholder="https://myimage.png" aria-describedby="coverImageHelper">
      <small id="coverImageHelper" class="text-muted">Type the cover image path here</small>
    </div>
    <div class="mb-3">
      <label for="body" class="form-label">Body</label>
      <textarea class="form-control" name="body" id="body" rows="5"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Add Post</button>



  </form>
</div>
@endsection