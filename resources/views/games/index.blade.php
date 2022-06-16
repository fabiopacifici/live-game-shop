@extends('layouts.app')

@section('content')



<div class="container">
  <div class="heading d-flex justify-content-between align-items-center">
    <h1 class="p-5">Games</h1>
    <div>
      <a class="btn btn-primary d-block" href="{{route('games.create')}}">Create Game</a>
    </div>
  </div>

  <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>thumb</th>
        <th>title</th>
        <th>description</th>
        <th>cover image</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>

      @foreach($games as $game)
      <tr>
        <td scope="row">{{$game->id}}</td>

        <td><img width="50" src="{{$game->thumb}}" alt=""></td>
        <td>{{$game->title}}</td>
        <td>{{$game->description}}</td>
        <td><img width="50" src="{{$game->cover_image}}" alt=""></td>
        <td><a href="{{route('games.show', $game->id)}}">View</a>- Edit - Delete</td>
      </tr>
      @endforeach
    </tbody>
  </table>

</div>


@endsection