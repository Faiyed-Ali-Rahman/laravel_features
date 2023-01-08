<?php
 
 namespace App\Http\Controllers;
  
 use Illuminate\Http\Request;
 use App\Models\Post;
  
 class PostController extends Controller
 {
      
     public function index() {
  
         $posts =  Post::orderBy("id", "desc")->paginate(5);
  
         return view("posts", compact("posts"));
     }
  
  
     // Create Post 
     public function create() {
  
         return view("create");
     }
  
  
     public function store(Request $request) {
  
         $post = [  "title"  =>  $request->title,
                     "body" => $request->body
                 ];
        // if($request->body || $request->title== null){
        //     return back()->with("success", "You need to fill both field");           
        // }
        // else {
             $post  =  Post::create($post);
  
            return back()->with("success", "Post has been created");
            
        // }
         
     }
 }