@extends('base')
@section('content')
    <div class="container-fluid">
        <div class="section-heading mt-5">
            <h1>From the blog</h1>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                suffered
                alteration in some form sed.</p>
            <a class="btn btn-primary" href="{{url('post/create')}}">Create Post</a>
        </div>
        <div class="web-container">
            <div class="blog-section">
                @foreach($posts as $post)
                    <div class="blog-posts">
                        <a href="">
                            <div class="blog-card">
                                <div class="blog-image" style="background-image: url('{{asset('time.jpg')}}')"></div>
                                <div class="blog-text">
                                    <div class="blog-description">
                                        <span>{{$post->type}}</span>
                                        <h5>{{$post->title}}</h5>
                                        <p>{{$post->content}}
                                        </p>
                                    </div>
                                    <div class="blog-detail">
                                        <div>
                                            <img src="{{asset('girl.jpg')}}" style="border-radius: 50%"
                                                 class="author_image" width="50px" height="50px">
                                        </div>
                                        <div>
                                            <b>{{$post->author}}</b><br>
                                            <small>{{$post->date}} min read</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
