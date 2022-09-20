<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        // SELECT id, title, created_at ORDER BY created_at DESC
        $posts = Post::select()->orderBy("created_at", "DESC")->limit(2)->get();
    

        // $posts = Post::all();
        return view("posts.index")->with("posts", $posts);
    }

    public function create() {
        return view("posts.create");
    }

    public function store(Request $request) {
        $data = $request->validate([
            "title" => ["required", "min:5", "max:50"],
            "image" => ["required"],
            "body" => ["required", "min:5"]
        ]
        );

        $data["user_id"] = auth()->user()->id;
        $post = Post::create($data);
        // $post = new Post();
        // $post->title = $data["title"];
        // $post->body = $data["body"];
        // $post->image = $data["image"];
        // $post->user_id = 1;

        // $post->save();
        dd($post);


    }

    public function edit($id) {
        $post = Post::findOrFail($id);
        if($post->user_id == auth()->user()->id)
            return view("posts.edit")->with("post", $post);
        return response("Unauthorized", 401);
    }

    public function update(Request $request) {
        $data = $request->validate([
            "title" => ["required", "min:5", "max:50"],
            "image" => ["required"],
            "body" => ["required", "min:5"],
            "post_id" => ["required"]
        ]
        );
        $id = $data["post_id"];
        $post = Post::find($id);

        if($post->user_id == auth()->user()->id){
            $post->update($data);
        // $post->title = $data["title"];
        // $post->body = $data["body"];
        // $post->image = $data["image"];
        // $post->save();

        return redirect("/posts/$post->id");
        }
        return response("Unauthorized", 401);
        
    }

    public function show($id) {
        $post = Post::find($id);
        return view("posts.show")->with("post", $post);
    }

    public function destroy(Request $request) {
        $id = $request->get("id");
        dd($request->all());
        $post = Post::findOrFail($id);
        $post->delete();

        return view("posts.create")->with("message", "POST IS DELETED");
    }

    public function test(Request $request, $id) {
        dd($id);
    }


}
