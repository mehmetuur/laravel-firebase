@extends('layout')

@section('header')
 <!-- header -->
 <header class="header" style="background-image: url({{asset("images/about-img.jpg")}});">
  <div class="header-text">
    <h1>Mehmet Uğur Şahin</h1>
    <h4>“Hayat, kendini bulmakla ilgili değildir; kendini yaratmakla ilgilidir.” George B. Shaw</h4>
  </div>
  <div class="overlay"></div>
</header>

@endsection

@section('main')
<!-- main -->
<main class="container">
  <h2 class="header-title">Latest Blog Posts</h2>
  <section class="cards-blog latest-blog">
    @foreach ($posts as $post )
    <div class="card-blog-content">
      <img style="width: 600px; height:400px" src={{asset("$post->imagePath")}} alt="" />
    <p>
      {{$post->created_at->diffForHumans()}}
      <span>Written By {{$post->user->name}}</span>
    </p>
    <h4 style="font-weight: bolder">
      <a href="{{route('blog.show',$post)}}">{{$post->title}}</a>
    </h4>
  </div>
    @endforeach
  </section>
</main>
@endsection