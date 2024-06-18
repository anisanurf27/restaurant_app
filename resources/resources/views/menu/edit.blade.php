@extends('adminlte::page')

@section('title', 'Edit')

@section('content_header')
    <h1>Edit</h1>
@stop

@section('content')
<h1>Edit Menu</h1>
    <form action="{{ route('menus.update', $menu->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $menu->name }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description" required>{{ $menu->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $menu->price }}" required>
        </div>
        <div class="form-group">
            <label for="category">Category:</label>
            <input type="text" class="form-control" id="category" name="category" value="{{ $menu->category }}" required>
        </div>
        <div class="form-group">
            <label for="category_id">Category ID:</label>
            <input type="number" class="form-control" id="category_id" name="category_id" value="{{ $menu->category_id }}" required>
        </div>
        <div class="form-group">
            <label for="slug">Slug:</label>
            <input type="text" class="form-control" id="slug" name="slug" value="{{ $menu->slug }}" required>
        </div>
        <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop