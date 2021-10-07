@extends('base')

@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a post</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
        <form class="mt-5" method="post" action="{{ route('posts.store') }}">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Title" required />
            </div>

            <div class="form-group">
                <label for="image_url">Image url</label>
                <input type="text" name="image_url" id="image_url" class="form-control" placeholder="https://" required />
            </div>

            <div class="form-group">
                <label for="body">Body</label>
                <textarea name="body" id="body" class="form-control" style="height: 400px;" placeholder="Body" required></textarea>
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

            @csrf
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
    </div>
</div>
@endsection
