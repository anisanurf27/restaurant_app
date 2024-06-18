@extends('adminlte::page')

@section('title', 'Menu List')

@section('content_header')
    <h1>Menu List</h1>
@stop

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Category</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($menus as $menu)
            <tr>
                <td>{{ $menu->name }}</td>
                <td>{{ $menu->description }}</td>
                <td>${{ $menu->price }}</td>
                <td>{{ $menu->category }}</td>
                <td>
                    <img src="{{ asset('images/'.$menu->image) }}" alt="{{ $menu->name }}" style="width: 50px; height: 50px;">
                </td>
                <td>
                    <a href="{{ route('menus.edit', $menu->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ route('menus.destroy', $menu->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('menus.create') }}" class="btn btn-success">Add New Menu</a>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
