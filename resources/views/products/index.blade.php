@extends('layouts.app1')

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f4f8;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    .header {
        text-align: left;
        color: #ff7f00;
    }

    .header h1 {
        margin: 0;
        font-size: 2.5em;
    }

    .header h2 {
        margin: 0;
        font-size: 2em;
        color: #333;
    }

    .menu {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: center;
    }

    .card {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        width: 300px;
        height: 450px;
        margin: 5px;
        text-align: center;
    }

    .card img {
        width: 100%;
        height: 250px;
        object-fit: cover;
    }

    .card-content {
        padding: 20px;
    }

    .card-content h3 {
        margin: 0;
        font-size: 1.5em;
        color: #333;
    }

    .card-content p {
        margin: 10px 0;
        color: #777;
    }

    .price {
        font-size: 1.2em;
        color: #333;
    }

    .card-footer {
        padding: 20px;
        background-color: #fdd49a;
        text-align: center;
    }

    .card-footer button {
        background-color: #ff7f00;
        color: #fff;
        border: none;
        padding: 10px 20px;
        font-size: 1em;
        cursor: pointer;
        border-radius: 5px;
    }

    .card-footer button:hover {
        background-color: #e56d00;
    }
</style>

@section('content')
<div class="container">
    <h1>Menu</h1>

    <h2>Makanan</h2>
    <div class="row">
        @foreach($foods as $food)
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ $food->image }}" class="card-img-top" alt="{{ $food->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $food->name }}</h5>
                        <p class="card-text">{{ $food->description }}</p>
                        <p class="card-text">{{ $food->price }}</p>
                        <form action="{{ route('cart.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $food->id }}">
                            <button type="submit" class="btn btn-primary">Tambah ke Keranjang</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <h2>Minuman</h2>
    <div class="row">
        @foreach($drinks as $drink)
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ $drink->image }}" class="card-img-top" alt="{{ $drink->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $drink->name }}</h5>
                        <p class="card-text">{{ $drink->description }}</p>
                        <p class="card-text">{{ $drink->price }}</p>
                        <form action="{{ route('cart.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $drink->id }}">
                            <button type="submit" class="btn btn-primary">Tambah ke Keranjang</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection