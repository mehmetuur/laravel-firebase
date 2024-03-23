@extends('layout')
@section('head')
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
@endsection
@section('main')
<main class="container" style="background-color: #fff;">
    <section id="contact-us">
        <h1 style="padding-top: 50px;">Edit New Catagory</h1>

        @if (session('status'))
          <p style="color: red">{{session('status')}}</p>
        
          
        @endif
        <div class="contact-form">
            <form action="{{route('catagories.update',$catagory)}}" method="POST" >
                @method('put')
                @csrf
                <label for="name"><span>Name</span></label>
                <input type="text" id="name" name="name" value="{{$catagory->name}}" />
                    @error('name')
                      <p style="color: red; margin-bottom:25px">  {{$message}}</p>
                    @enderror
            
                <input type="submit" value="Gönder" />
            </form>
        </div>
          <div class="create-catagory">
            <ul>
              
                <li ><a href="{{route('catagories.create')}}"> catagory list</a></li>
                
            </ul>

        </div>

        </div>
    </section>
</main>
@endsection
