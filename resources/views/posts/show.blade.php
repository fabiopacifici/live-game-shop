@extends('layouts.app')

@section('content')
<img class="img-fluid" src="{{$post->cover_image}}" alt="">

<h1>{{$post->title}}</h1>
<div class="content">
  {{$post->body}}
</div>
@endsection
