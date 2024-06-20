@extends('adminlte::page')

@section('title', 'Create Category Detail')

@section('content_header')
    <h1>Create Category Detail</h1>
@stop

@section('content')
    <div class="container">
        <form action="{{ route('categorydetails.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="category_id">Category ID:</label>
                <input type="text" name="category_id" class="form-control" id="category_id" required>
            </div>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" id="name" required>
            </div>
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" name="image" class="form-control" id="image" required>
            </div>
            <div class="form-group">
                <label for="food_type">Food Type:</label>
                <select name="food_type" class="form-control" id="food_type" required>
                    <option value="Makanan">Makanan</option>
                    <option value="Minuman">Minuman</option>
                </select>
            </div>
            <div class="form-group">
                <label for="meal_time">Meal Time:</label>
                <select name="meal_time" class="form-control" id="meal_time" required>
                    <option value="Sarapan">Sarapan</option>
                    <option value="Makan Siang">Makan Siang</option>
                    <option value="Makan Malam">Makan Malam</option>
                </select>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" class="form-control" id="description" required></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@stop
