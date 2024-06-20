@extends('adminlte::page')

@section('title', 'Edit Category Detail')

@section('content_header')
    <h1>Edit Category Detail</h1>
@stop

@section('content')
    <div class="container">
        <form action="{{ route('categorydetails.update', $categoryDetail->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="category_id">Category ID:</label>
                <input type="text" name="category_id" class="form-control" id="category_id" value="{{ $categoryDetail->category_id }}" required>
            </div>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ $categoryDetail->name }}" required>
            </div>
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" name="image" class="form-control" id="image">
                <img src="{{ $categoryDetail->image }}" alt="{{ $categoryDetail->name }}" width="100">
            </div>
            <div class="form-group">
                <label for="food_type">Food Type:</label>
                <select name="food_type" class="form-control" id="food_type" required>
                    <option value="Makanan" {{ $categoryDetail->food_type == 'Makanan' ? 'selected' : '' }}>Makanan</option>
                    <option value="Minuman" {{ $categoryDetail->food_type == 'Minuman' ? 'selected' : '' }}>Minuman</option>
                </select>
            </div>
            <div class="form-group">
                <label for="meal_time">Meal Time:</label>
                <select name="meal_time" class="form-control" id="meal_time" required>
                    <option value="Sarapan" {{ $categoryDetail->meal_time == 'Sarapan' ? 'selected' : '' }}>Sarapan</option>
                    <option value="Makan Siang" {{ $categoryDetail->meal_time == 'Makan Siang' ? 'selected' : '' }}>Makan Siang</option>
                    <option value="Makan Malam" {{ $categoryDetail->meal_time == 'Makan Malam' ? 'selected' : '' }}>Makan Malam</option>
                </select>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" class="form-control" id="description" required>{{ $categoryDetail->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="slug">Slug:</label>
                <input type="text" name="slug" class="form-control" id="slug" value="{{ $categoryDetail->slug }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@stop
