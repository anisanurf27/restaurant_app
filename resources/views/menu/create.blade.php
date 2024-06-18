@extends('adminlte::page')

@section('title', 'Create')

@section('content_header')
    <h1>tambah menu</h1>
@stop

@section('content')
<h1>Create New Menu</h1>
<form action="{{ route('menus.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group">
        <label for="description">Description:</label>
        <textarea class="form-control" id="description" name="description" required></textarea>
    </div>
    <div class="form-group">
        <label for="price">Price:</label>
        <input type="text" class="form-control" id="price" name="price" required>
    </div>
    <div class="form-group">
        <label for="category">Category:</label>
        <input type="text" class="form-control" id="category" name="category" required>
    </div>
    <div class="form-group">
        <label for="category_id">Category ID:</label>
        <input type="number" class="form-control" id="category_id" name="category_id" required>
    </div>
    <div class="form-group">
        <label for="slug">Slug:</label>
        <input type="text" class="form-control" id="slug" name="slug" required>
    </div>
    <div class="form-group">
        <label for="image">Image:</label>
        <input type="file" class="form-control" id="image" name="image" required>
    </div>
    <button type="submit" class="btn btn-success">Create</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop