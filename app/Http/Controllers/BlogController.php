<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Catagory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
class BlogController extends Controller
{

   public function __construct()
   {
      $this->middleware('auth')->except(['index','show']);
   }
   public function index(Request $request)
   {
       $catagories = Catagory::all(); // Kategorileri al
   
       if ($request->search) {
           // Arama parametresine göre filtreleme
           $posts = Post::where('title', 'like', '%' . $request->search . '%')
                        ->orWhere('body', 'like', '%' . $request->search . '%')
                        ->latest()
                        ->paginate(4);
       } elseif ($request->catagory) {
           // Kategoriye göre filtreleme
           $catagory = Catagory::where('name', $request->catagory)->first();
           if ($catagory) {
               $posts = $catagory->posts()->latest()->paginate(3); // Kategoriye göre filtrelenmiş gönderileri al
           } else {
               $posts = []; // Kategori bulunamadı, boş bir dizi döndürülebilir veya 404 hatası gönderilebilir
           }
       } else {
           // Ne arama ne de kategoriye göre filtreleme
           $posts = Post::latest()->paginate(4); // En son gönderilen gönderileri al
       }
   
       return view('Blog-Post.blog', compact('posts', 'catagories'));
   }
   

   //  public function show($slug)
   //  {  $post=Post::where('slug',$slug)->first();
   //     return view('Blog-Post.single-blog-post',compact('post'));
   //  }
   public function edit(Post $post)
   {  
      if(auth()->user()->id !==$post->user->id)
      {
         abort(403);
      }
      return view('Blog-Post.edit-blog-post', compact('post'));
   }
  

   public function show(Post $post)
   { 
      return view('Blog-Post.single-blog-post', compact('post'));
   }

    public function create()
    { $catagories=Catagory::all();
       return view('Blog-Post.create_blog_post',compact('catagories'));
    }

    public function store(Request $request)
    {
      $request->validate([

         'title'=>'required',
         'image'=>'required | image',
         'body'=>'required',
         'catagory_id'=>'required'
         
      ]);

      $title=$request->input('title');
      $catagory_id=$request->input('catagory_id');
      
      if(Post::latest()->first()!==null)
      {
         $postId=Post::latest()->first()->id +1;
      }
      else{
         $postId=1;
      }
      $slug= Str::slug($title,'-') . '-' . $postId;
      $user_id=Auth::user()->id;
      $body=$request->input('body');


      // update to file

     $imagePath='storage/'. $request->file('image')->store('postimage','public');


     $post=new Post();
     $post->title=$title;
     $post->catagory_id=$catagory_id;
     $post->slug=$slug;
     $post->user_id=$user_id;
     $post->body=$body;
     $post->imagePath=$imagePath;

     $post->save();

      return redirect()->back()->with('status','Post Created');




    }

    public function update(Request $request, Post $post)
    {  
      if(auth()->user()->id !==$post->user->id)
      {
         abort(403);
      }
       $request->validate([
 
          'title'=>'required',
          'image'=>'required | image',
          'body'=>'required'
 
       ]);
 
       $title=$request->input('title');
 
       $postId=$post->id;
       $slug= Str::slug($title,'-') . '-' . $postId;
     
       $body=$request->input('body');
 
 
       // update to file
 
      $imagePath='storage/'. $request->file('image')->store('postimage','public');
 
 
      $post->title=$title;
      $post->slug=$slug;
      $post->body=$body;
      $post->imagePath=$imagePath;
 
      $post->save();
 
       return redirect()->back()->with('status','Post edit Created');
  
    }

    public function destroy( Post $post)
    {
      $post ->delete();
      return redirect()->back()->with('status','Post deleted');
    }
}
