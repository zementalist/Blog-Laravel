<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index() {
        return view("posts.create");
    }

    public function create() {
        $posts = [];
        return view("posts.create");//->with("message", "New Message");
    }

    public function store(Request $request) {
        $data = $request->validate([
            "title" => ["required", "min:5", "max:50"],
            "image" => ["required"],
            "body" => ["required", "min:5"]
        ]
        );

        $data["user_id"] = 1;
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
        return view("posts.edit")->with("post", $post);
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
        $post->update($data);
        // $post->title = $data["title"];
        // $post->body = $data["body"];
        // $post->image = $data["image"];
        // $post->save();

        return redirect("/posts/$post->id");
        
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
