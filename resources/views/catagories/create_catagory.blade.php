@extends('layout')
@section('head')
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
@endsection
@section('main')
<main class="container" style="background-color: #fff;">
    <section id="contact-us">
        <h1 style="padding-top: 50px;">Create New Catagory</h1>

        @include('includes.flash-message')
        <div class="contact-form">
            <form action="{{route('catagories.store')}}" method="POST" >
                @csrf
                <label for="name"><span>Name</span></label>
                <input type="text" id="name" name="name" value="{{old('name')}}" />
                    @error('name')
                      <p style="color: red; margin-bottom:25px">  {{$message}}</p>
                    @enderror
            
                <input type="submit" value="Gönder" />
            </form>
        </div>
          <div class="create-catagory">
            <ul>
              
                <li ><a href="{{route('catagories.index')}}"> catagory list</a></li>
                
            </ul>

        </div>

        </div>
    </section>
</main>
@endsection
