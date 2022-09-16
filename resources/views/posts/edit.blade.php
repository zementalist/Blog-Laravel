@extends("layout")

@section("content")
<div class="row">
    <h1>Update Post</h1>
    <div class="col-md-8 col-md-offset-2">
        <br>
        <form action="/posts" method="POST" id="postForm">
            @method("put")
            @csrf
            <div class="form-group">
                <label for="title">Title <span class="require">*</span></label>
                <input type="text" id="title" value="{{$post->title}}" class="form-control" required name="title" />
            </div>

            <input type="hidden" name="post_id" value="{{$post->id}}">

            <div class="form-group">
                <label for="image">Image link</label>
                <input type="text" class="form-control" name="image" value="{{$post->image}}" />
            </div>

            <div class="form-group">
                <label for="body">Body</label>
                <textarea id="userText" rows="5" class="form-control" required name="body">{{$post->body}}</textarea>
            </div>

            <div class="form-group">
                <input type="submit" name='post-update-form' id="post-btn" class="btn btn-primary" value='Update'>
                <!-- </button> -->
                <a href="/" class="btn btn-default">Cancel</a>
            </div>
        </form>
    </div>

</div>

@endsection