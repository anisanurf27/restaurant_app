@extends('layouts.app1')

<style>
    .tab-content {
        padding-left: 10px;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
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
        width: 100%;
        max-width: 300px;
        text-align: center;
        margin-bottom: 20px;
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
<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
    <a href="" class="navbar-brand p-0">
        <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Products</h1>
        <!-- <img src="{{ asset('')}}frontend/img/logo.png" alt="Logo"> -->
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0 pe-4">
            <a class="nav-link {{ request()->routeIs('products.index') ? 'active' : '' }}"
                href="{{ route('products.index') }}">Products</a>
            <a class="nav-link {{ request()->routeIs('cart.index') ? 'active' : '' }}"
                href="{{ route('cart.index') }}">Info Pesanan</a>
        </div>
    </div>
</nav>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('.navbar-nav .nav-link').on('click', function () {
            $('.navbar-nav .nav-link').removeClass('active');
            $(this).addClass('active');
        });
    });
</script>
<div class="container-xxl py-5 bg-dark hero-header mb-5"></div>

<div class="container">
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
    </div>
    <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
        <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
            <li class="nav-item">
                <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill"
                    href="#tab-1">
                    <i class="fa fa-utensils fa-2x text-primary"></i>
                    <div class="ps-3">
                        <small class="text-body">Special</small>
                        <h6 class="mt-n1 mb-0">Food</h6>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-2">
                    <i class="fa fa-coffee fa-2x text-primary"></i>
                    <div class="ps-3">
                        <small class="text-body">Special</small>
                        <h6 class="mt-n1 mb-0">Drink</h6>
                    </div>
                </a>
            </li>
        </ul>

        <div class="tab-content">
            <div id="tab-1" class="tab-pane fade show p-0 active">
                <div class="row justify-content-center">
                    @foreach($foods as $food)
                        <div class="col-6 col-md-6 col-lg-4 d-flex align-items-stretch">
                            <div class="card">
                                <img src="{{ $food->image }}" class="card-img-top" alt="{{ $food->name }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $food->name }}</h5>
                                    <p class="card-text">{{ $food->description }}</p>
                                    <p class="card-text">{{ $food->price }}</p>
                                    <div class="card-footer">
                                        <form action="{{ route('cart.store') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{ $food->id }}">
                                            <button type="submit" class="btn btn-primary">Tambah ke Keranjang</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div id="tab-2" class="tab-pane fade show p-0">
                <div class="row justify-content-center">
                    @foreach($drinks as $drink)
                        <div class="col-6 col-md-6 col-lg-4 d-flex align-items-stretch">
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
        </div>
    </div>
</div>

@endsection