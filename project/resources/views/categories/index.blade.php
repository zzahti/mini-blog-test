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
        <h1 class="display-3">Categories</h1>
        <div>
            <a href="{{ route('categories.create')}}" class="btn btn-primary mt-3 mb-3">New category</a>
        </div>
    <table class="table table-striped">
        <thead>
            <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Uuid</td>
            <td>Created at</td>
            <td>Updated at</td>
            <td colspan = 2>Actions</td>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td>{{$category->uuid}}</td>
                <td>{{$category->created_at}}</td>
                <td>{{$category->updated_at}}</td>
                <td>
                    <a href="{{ route('categories.edit',$category->id)}}" class="btn btn-primary">Edit</a>
                </td>
                <td>
                    <form action="{{ route('categories.destroy', $category->id)}}" method="post">
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
