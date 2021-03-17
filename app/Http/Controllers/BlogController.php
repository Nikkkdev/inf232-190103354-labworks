<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    public function index() {
        $blog = Post::all();
        return view('blog.index')->with(['blog' => $blog]);

    }
    public function store(Request $request){
        Post::create([
            'title'=> $request->title,
            'body'=> $request->body,
        ]);
        return back();
    }
    
  /*  public function get_post($id) {
        $post = Post::fing($id);

        if($post == null)
        return response(['message' => 'post not found'],404);
        return view('post.detail')->with(['post'=> $client ]);
    }
    }
*/   
}
