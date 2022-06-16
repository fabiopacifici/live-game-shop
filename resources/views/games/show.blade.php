@extends('layouts.app')

@section('content')
<img class="img-fluid" src="{{$game->cover_image}}" alt="">

<h1>{{$game->title}}</h1>
<div class="content">
  {{$game->description}}
</div>

@endsection