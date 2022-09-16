@extends("layout")

@section("content")


<div class="row">
    <h1>Create Post</h1>
    <div class="col-md-8 col-md-offset-2">
        <br>
        <form action="/posts" method="POST" id="postForm">
            @csrf
            <div class="form-group">
                <label for="title">Title <span class="require">*</span></label>
                <input type="text" id="title" class="form-control" required name="title" />
                @error("title")
                <div class="alert alert-danger">
                    
                    {{$message}}
                     
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="image">Image link</label>
                <input type="text" class="form-control" name="image"/>
            </div>
            @error("image")
                <div class="alert alert-danger">
                    
                    {{$message}}
                     
                </div>
                @enderror

            <div class="form-group">
                <label for="body">Body</label>
                <textarea id="userText" rows="5" class="form-control" required name="body"></textarea>
            </div>
            @error("body")
                <div class="alert alert-danger">
                    
                    {{$message}}
                     
                </div>
                @enderror
            

            <div class="form-group">
                <input type="submit" name='post-update-form' id="post-btn" class="btn btn-primary" value='Update'>
                <!-- </button> -->
                <a href="/" class="btn btn-default">Cancel</a>
            </div>
        </form>
    </div>

</div>

@endsection