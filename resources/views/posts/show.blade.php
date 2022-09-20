@extends("layout")

@section("content")
<section class="mt-4">
    <!--Grid row-->
    <div class="row">

        <!--Grid column-->
        <div class="col-md-8 mb-4">
            <h3 class="my-2">{{$post->title}}</h3>
            <small id="article-meta">By
                <strong>
                    <a href="/user">
                        {{$post->user->name}}
                    </a>
                </strong>
                , on{{$post->created_at}}
            </small>

            <!--Featured Image-->
            <div class="card my-4 mb-4">

                <img src="{{asset('img/' . $post->image)}}">

            </div>
            <!--/.Featured Image-->

            <!-- CR(UD) Form -->
            @if( auth()->user() && auth()->user()->id == $post->user_id)
            <div class="card my-4 mb-4">
                <div class="row">
                    <div class="col-md-6">
                        <a href="/posts/{{$post->id}}/edit"><button class="btn btn-primary" style="width:100%;">Edit</button></a>
                    </div>
                    <div class="col-md-6">
                        <form action="/posts/delete?id={{$post->id}}" method="GET">
                            @csrf
                            <input type="hidden" name="post_id" value="{{$post->id}}">
                            <input type="submit" style="width:100%;" class="btn btn-danger" name="post-delete-form"
                                value="DELETE">
                        </form>
                    </div>
                </div>
            </div>
            @endif

            <!--/ CR(UD) Form -->
            <!--Card-->
            <div class="card mb-4">

                <!--Card content-->
                <div class="card-body">{{$post->body}}</div>

            </div>
            <!--/.Card-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-4 mb-4">

            <!--/.Card : Dynamic content wrapper-->

            <!--Card-->
            <div class="card mb-4 wow fadeIn">

                <div class="card-header">Related articles</div>

                <!--Card content-->
                <div class="card-body">
                    <!-- If there are related posts -->
                    <ul class="list-unstyled">
                        <!-- Loop over posts -->
                        <li class="media related-post">
                            <div class="media-body">
                                <a href="/posts">
                                    <h5 class="mt-0 mb-1 font-weight-bold">Post Title</h5>
                                </a>
                                This is post body
                            </div>
                        </li>
                    </ul>
                    <h4>There are no related posts!</h4>
                </div>

            </div>
            <!--/.Card-->

        </div>
        <!--Grid column-->

    </div>
    <!--Grid row-->

</section>
<!--Section: Post-->
@endsection