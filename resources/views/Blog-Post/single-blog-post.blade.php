@extends('layout')

@section('main')
<main class="container">
  <section class="single-blog-post">
    <h1>{{$post->title}}</h1>

    <p class="time-and-author">
      {{$post->created_at->diffForHumans()}}
      <span>Written By {{$post->user->name}}</span>
    </p>

    <div class="single-blog-post-ContentImage" data-aos="fade-left">
        <img src={{asset("$post->imagePath")}}
    </div>

    <div class="about-text">
      {!!$post->body!!}
    </div>
  </section>
  
</main>

@endsection
