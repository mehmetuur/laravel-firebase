@extends('layout')

@section('main')
    <!-- main -->
    <main class="container">
        <h2 class="header-title">All Blog Posts</h2>
        @include('includes.flash-message')
        <div class="searchbar">
            <form action="">
                <input type="text" placeholder="Search..." name="search" />

                <button type="submit">
                    <i class="fa fa-search"></i>
                </button>

            </form>
        </div>
        <div class="categories">
            <ul>

                @foreach ($catagories as $catagory)
                    <li><a href="{{ route('blog.index', ['catagory' => $catagory->name]) }}">{{ $catagory->name }}</a></li>
                @endforeach
            </ul>
        </div>
        <section class="cards-blog latest-blog">

            @forelse ($posts as $post)
                <div class="card-blog-content">
                    @auth
                        @if (auth()->user()->id === $post->user->id)
                            <div class="div-button">
                                <a href="{{ route('blog.edit', $post) }}">Edit</a>
                                <form action="{{ route('blog.destroy', $post) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" value="Delete">

                                </form>
                            </div>
                        @endif

                    @endauth
                    <img src={{ asset("$post->imagePath") }} alt="" />
                    <p>
                        {{ $post->created_at->diffForHumans() }}
                        <span>Written By {{ $post->user->name }}</span>
                    </p>
                    <h4 style="font-weight: bolder">
                        <a href="{{ route('blog.show', $post) }}">{{ $post->title }}</a>
                    </h4>
                </div>
            @empty
                <p> sory we can not find your search</p>
            @endforelse

        </section>
    </main>
    <!-- pagination -->
    {{-- <div class="pagination" id="pagination">
  <a href="">&laquo;</a>
  <a class="active" href="">1</a>
  <a href="">2</a>
  <a href="">3</a>
  <a href="">4</a>
  <a href="">5</a>
  <a href="">&raquo;</a>
</div> --}} 
<br>
<div class="pagination" >
{{ $posts->links() }}
</div>
    @endsection
