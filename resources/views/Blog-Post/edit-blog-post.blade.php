@extends('layout')
@section('head')
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
@endsection
@section('main')
<main class="container" style="background-color: #fff;">
    <section id="contact-us">
        <h1 style="padding-top: 50px;">Edit POST</h1>
        @include('includes.flash-message')
        <div class="contact-form">
            <form action="{{route('blog.edit',$post)}}" method="POST" >
                @method('put')
                @csrf
                <label for="title"><span>Başlık</span></label>
                <input type="text" id="title" name="title" value="{{$post->title}}" />
                    @error('title')
                      <p style="color: red; margin-bottom:25px">  {{$message}}</p>
                    @enderror
                <label for="image"><span>Resim</span></label>
                <input type="file" id="image" name="image"value="{{old('image')}}" />
                @error('image')
                <p style="color: red; margin-bottom:25px">  {{$message}}</p>
              @enderror
                <label for="body"><span>İçerik</span></label>
                <textarea  name="body" value="{{old('body')}}">{{$post->body}}</textarea>
                @error('body')
                <p style="color: red; margin-bottom:25px">  {{$message}}</p>
              @enderror
                <input type="submit" value="Gönder" />
            </form>
        </div>
    </section>
</main>
@endsection
@section('scripts')
<script>
  CKEDITOR.replace('body');
 </script>

@endsection