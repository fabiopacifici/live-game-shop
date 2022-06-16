@extends('layouts.app')

@section('content')



<div class="container">
  <div class="heading d-flex justify-content-between align-items-center">
    <h1 class="p-5">posts</h1>
    <div>
      <a class="btn btn-primary d-block" href="{{route('posts.create')}}">Create post</a>
    </div>
  </div>

  <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>title</th>
        <th>body</th>
        <th>cover image</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>

      @forelse($posts as $post)
      <tr>
        <td scope="row">{{$post->id}}</td>
        <td>{{$post->title}}</td>
        <td>{{$post->body}}</td>
        <td><img width="50" src="{{$post->cover_image}}" alt=""></td>
        <td><a href="{{route('posts.show', $post->id)}}">View</a>- Edit - Delete</td>
      </tr>
      @empty
      <tr>
        <td scope="row">No posts yet!</td>
      </tr>
      @endforelse
    </tbody>
  </table>

</div>


@endsection