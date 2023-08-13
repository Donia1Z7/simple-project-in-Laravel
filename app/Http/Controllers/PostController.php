<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $post = Post::all();
        return view('posts.index', ["posts" => $post]);
    }

    public function show(Post $post)
    {

        return view('posts.show', ['post' => $post]);
    }

    public function create()
    {
        $users = User::all();
        return view('posts.create',['users'=>$users]);
    }

    public function store(Post $post)
    {
        $title = request()->title;
        $description = request()->description;
        $user_id = request()->user_id ;


         $post->title = $title;
         $post->description = $description;
         $post->user_id = $user_id;

         $post->save();

        return redirect(route("posts.index"));;
    }

    public function edit(Post $post)
    {
        $users = User::all();
        return view('posts.edit',['post'=>$post],['users'=>$users]);
    }

    public function update(Post $post){

        $title = request()->title;
        $description = request()->description;

        $post->update([
            'title' => $title,
        'description' => $description
        ]);

        return redirect(route("posts.index"));
    }
    public function destroy(Post $post){

        $post->delete();
        return redirect(route("posts.index"));

    }

}
