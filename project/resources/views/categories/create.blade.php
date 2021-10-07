@extends('base')

@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a category</h1>
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
        <form class="mt-5" method="post" action="{{ route('categories.store') }}">
            <div class="form-group">
                <label for="name">Category name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Category name" />
            </div>
            @csrf
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
    </div>
</div>
@endsection
