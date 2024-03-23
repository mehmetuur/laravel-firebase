@extends('layout')

@section('main')
    <div class="container">
       <p>Catagory List</p>
       @include('includes.flash-message')
        @foreach ($catagories as $catagory)
        <div class="item">
            <h1>{{$catagory->name}}</h1>
            <div >
                <a href="{{route('catagories.edit',$catagory)}}">Edit</a>
            </div>
            <form action="{{route('catagories.destroy',$catagory)}}" method="post">
                @method('delete')
                @csrf
                <input type="submit" value="Delete">
            </form>
  
        </div>
        
        @endforeach
        <div class="create-catagory">
            <ul>
              
                <li ><a href="{{route('catagories.create')}} " style="color:aqua"> Create Category</a></li>
                
            </ul>
    </div>
@endsection
