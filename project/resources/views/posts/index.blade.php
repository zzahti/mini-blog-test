@extends('base')

@section('main')
<div class="row">
    <div class="col-sm-12">
        @if(session()->get('success'))
        <div class="alert alert-success mt-3 mb-3">
            {{ session()->get('success') }}  
        </div>
        @endif
    </div>

    <div class="col-sm-12">
        <h1 class="display-3">Posts</h1>
        <div>
            <a href="{{ route('posts.create')}}" class="btn btn-primary mt-3 mb-3">New post</a>
        </div>
    <table class="table table-striped">
        <thead>
            <tr>
            <td>ID</td>
            <td>Title</td>
            <td>Body</td>
            <td>Image Url</td>
            <td>Updated at</td>
            <td colspan = 2>Actions</td>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->body}}</td>
                <td>{{$post->image_url}}</td>
                <td>{{$post->updated_at}}</td>
                <td>
                    <a href="{{ route('posts.edit',$post->id)}}" class="btn btn-primary">Edit</a>
                </td>
                <td>
                    <form action="{{ route('posts.destroy', $post->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div>
</div>
@endsection
