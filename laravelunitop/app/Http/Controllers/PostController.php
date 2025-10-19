<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    function add(){
        // DB::table('post')->insert(
        //     ['title' => 'Post 1', 'content'=>'Content 1', 'user_id'=> 1]
        // );
        return view('post.create');
    }

    function store(Request $request){// hiển thị tt nhập ở form
        return $request->input();
    }
    function show(){
    //    $posts = DB::table('post')->get(); // gán với giá trị post
    //    foreach($posts as $post){
    //         echo $post->title; // hiển thị ra từng title
    //         echo "<br>";
    //    }
        //return $posts;
        $posts = DB::table('post')->select('content')->first();
    }

    function read(){
        //$posts = Post::all();

        //return $posts;
        $img = Post::find(2)
        ->FeaturedImages;
        return $img;
    }
}
