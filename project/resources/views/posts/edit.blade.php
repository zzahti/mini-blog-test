@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a post</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('posts.update', $post->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Title" value="{{ $post->title }}" required />
            </div>

            <div class="form-group">
                <label for="image_url">Image url</label>
                <input type="text" name="image_url" id="image_url" class="form-control" placeholder="https://" value="{{ $post->image_url }}" required />
            </div>

            <div class="form-group">
                <label for="body">Body</label>
                <textarea name="body" id="body" class="form-control" style="height: 400px;" placeholder="Body" value="{{ $post->body }}" required></textarea>
            </div>

            <div class="form-group">
              <select name="category" class="form-control" required>
                <option value="">Category</option>
                @foreach($categories as $category)
                  <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group">
              <select name="status" class="form-control" required>
                  <option value="">Status</option>
                  <option value="draft">Draft</option>
                  <option value="publisher">Publish</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
