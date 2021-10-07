@extends('base')

@section('main')
<div class="row">
    <div class="col-sm-12">
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
      <h5 class="my-0 mr-md-auto font-weight-normal">Mini Blog</h5>

      @auth
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="{{ route('signout') }}">Logout</a>
      </nav>
      <a class="btn btn-outline-primary" href="{{ route('categories.index') }}">Categories</a>
      @else
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="{{ route('login') }}">Login</a>
      </nav>
      <a class="btn btn-outline-primary" href="{{ route('register-user') }}">Sign up</a>
      @endauth

    </div>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Hello</h1>
      <p class="lead">Posts</p>

      <div class="text-left">
          <a href="{{ route('posts.create')}}" class="btn btn-primary mt-3 mb-3">New post</a>
      </div>

      @foreach($posts as $post)
        <div class="jumbotron mt-3">
            <h1><a href="{{ route('posts.show', $post->slug)}}">{{$post->title}}</a></h1>
            <p class="lead">{{$post->body}}</p>
        </div>
      @endforeach
    </div>

    </div>
</div>
@endsection
