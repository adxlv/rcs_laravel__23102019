@extends('layouts.main')

@section('my_content')

    @include('partials.home-carousel')

    <div class="container blog-posts">

    <!-- Three columns of text below the carousel -->
    <div class="row">
        <div class="col-12" style="padding:30px 0; text-align: center;;">
            <h1>Latest Blog Posts</h1>
        </div>
    </div>

    <div class="row">
        @foreach ($myposts as $post)
            <div class="col-4">
                <div class="card">
                    <img src="https://picsum.photos/800/600" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->body }}</p>
                    <a href="/blog/{{ $post->id }}" class="btn btn-outline-dark">Read more</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div><!-- /.row -->

    <div class="row">
        <div class="btn-group mx-auto" style="margin-top:30px">
        <button type="button" class="btn btn-primary">See more</button>
        </div>
    </div>

    </div>

    <section class="jumbotron text-center" style="margin-top:100px">
        <div class="container">
        <h1 class="jumbotron-heading">If you wish to contact me</h1>
        <p class="lead text-muted">Your information is secure and encrypted, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquat enim ad minim.</p>
        <p>
            <a href="#" class="btn btn-outline-dark my-2">Contact Me</a>
        </p>
        </div>
    </section>


@endsection
