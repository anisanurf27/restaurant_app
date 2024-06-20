@extends('adminlte::page')

@section('title', 'Category List')

@section('content_header')
<h1>Category List</h1>
@stop

@section('content')
@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Categories</h3>
        <div class="card-tools">
            <a href="{{ route('categories.create') }}" class="btn btn-primary">Add New Category</a>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Menu ID</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Slug</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->menu_id }}</td>
                        <td>{{ $category->name }}</td>
                        <td><img src="{{ asset('images/' . $category->image) }}" width="50"></td>
                        <td>{{ $category->slug }}</td>
                        <td>
                            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST"
                                style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop