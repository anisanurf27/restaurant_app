@extends('adminlte::page')

@section('title', 'Category Details')

@section('content_header')
    <h1>Category Details</h1>
@stop

@section('content')
    <div class="container">
        <a href="{{ route('categorydetails.create') }}" class="btn btn-success mb-3">Create New Category Detail</a>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Image</th>
                <th>Country</th>
                <th>Description</th>
                <th>Slug</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($categorydetails as $categoryDetail)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $categoryDetail->name }}</td>
                    <td><img src="{{ $categoryDetail->image }}" alt="{{ $categoryDetail->name }}" width="50"></td>
                    <td>{{ $categoryDetail->country }}</td>
                    <td>{{ $categoryDetail->description }}</td>
                    <td>{{ $categoryDetail->slug }}</td>
                    <td>
                        <form action="{{ route('category-detail.destroy', $categoryDetail->id) }}" method="POST">
                            <a class="btn btn-primary" href="{{ route('category-detail.edit', $categoryDetail->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@stop
