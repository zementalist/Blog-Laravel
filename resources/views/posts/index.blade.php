@extends("layout")

@section("content")
<div class="row justify-content-center">
    @foreach($posts as $post)
    <div class="col-md-6 col-lg-4">
        <div class="card-content">
            <div class="card-img">
                <img src="img/{{$post->image}}" alt="">
                <span class="username">
                    <h4> <a href="#" class="username_url">{{$post->user->name}}</a></h4>
                </span>
            </div>
            <div class="card-desc text-center">
                <h3>{{$post->title}}</h3>
                <p>{{substr($post->body, 0, 30)}}</p>
                <a href="/posts/{{$post->id}}" class="btn-card">Read</a>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection