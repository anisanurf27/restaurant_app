@extends('layouts.app1')

@section('content')
<div class="container">
    <h1>Your Cart</h1>@extends('layouts.app1')

    <style>
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-title {
            margin-bottom: 30px;
            font-size: 2em;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f4f4f4;
            color: #333;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .btn-danger {
            background-color: #ff4d4d;
            border-color: #ff4d4d;
        }

        .btn-danger:hover {
            background-color: #e60000;
            border-color: #e60000;
        }

        .btn-success {
            background-color: #4caf50;
            border-color: #4caf50;
        }

        .btn-success:hover {
            background-color: #45a049;
            border-color: #45a049;
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
        <h3 class="section-title ff-secondary text-center text-primary fw-normal">List Orderan</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cartItems as $cartItem)
                    <tr>
                        <td>{{ $cartItem->product->name }}</td>
                        <td>{{ $cartItem->quantity }}</td>
                        <td>{{ $cartItem->product->price * $cartItem->quantity }}</td>
                        <td>
                            <form action="{{ route('cart.destroy', $cartItem->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-3 text-center">
            <a href="{{ route('checkout.form') }}" class="btn btn-success"
                style="background-color:orange; border-color:orange; border-radius: 10px;">Proceed to Checkout</a>
        </div>
    </div>
    @endsection
    <ul class="list-group">
        @foreach($cartItems as $cartItem)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $cartItem->product->name }} ({{ $cartItem->quantity }})
                <span>{{ $cartItem->product->price * $cartItem->quantity }}</span>
                @extends('layouts.app1')

                <style>
                    .container {
                        max-width: 1200px;
                        margin: 0 auto;
                    }

                    .section-title {
                        margin-bottom: 30px;
                        font-size: 2em;
                    }

                    table {
                        width: 100%;
                        border-collapse: collapse;
                        margin-top: 20px;
                    }

                    th,
                    td {
                        border: 1px solid #ddd;
                        padding: 12px;
                        text-align: left;
                    }

                    th {
                        background-color: #f4f4f4;
                        color: #333;
                    }

                    tr:nth-child(even) {
                        background-color: #f9f9f9;
                    }

                    .btn-danger {
                        background-color: #ff4d4d;
                        border-color: #ff4d4d;
                    }

                    .btn-danger:hover {
                        background-color: #e60000;
                        border-color: #e60000;
                    }

                    .btn-success {
                        background-color: #4caf50;
                        border-color: #4caf50;
                    }

                    .btn-success:hover {
                        background-color: #45a049;
                        border-color: #45a049;
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
                    <h3 class="section-title ff-secondary text-center text-primary fw-normal">List Orderan</h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cartItems as $cartItem)
                                <tr>
                                    <td>{{ $cartItem->product->name }}</td>
                                    <td>{{ $cartItem->quantity }}</td>
                                    <td>{{ $cartItem->product->price * $cartItem->quantity }}</td>
                                    <td>
                                        <form action="{{ route('cart.destroy', $cartItem->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-3 text-center">
                        <a href="{{ route('checkout.form') }}" class="btn btn-success"
                            style="background-color:orange; border-color:orange; border-radius: 10px;">Proceed to
                            Checkout</a>
                    </div>
                </div>
                <form action="{{ route('cart.destroy', $cartItem->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </li>
        @endforeach
    </ul>
    <div class="mt-3">
        <a href="{{ route('checkout.form') }}" class="btn btn-success">Proceed to Checkout</a>
    </div>
</div>
@endsection