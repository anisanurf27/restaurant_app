@extends('layouts.layout_welcome')
<!DOCTYPE html>
<html>

<head>
    <title>Checkout</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>

    <div class="container mt-5">
        <div class="row justify-content-center mb-4">
            <div class="col-md-8">
                <a href="{{ route('cart.index') }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Back</a>
            </div>
        </div>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h1>Checkout</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('checkout.process') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="address">Catatan :</label>
                                <input type="text" class="form-control" id="address" name="address" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone:</label>
                                <input type="text" class="form-control" id="phone" name="phone" required>
                            </div>
                            <div class="form-group">
                                <label for="total_price">Total Price:</label>
                                <input type="text" class="form-control" id="total_price" name="total_price"
                                    value="{{ $totalPrice }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="payment_method">Payment Method:</label>
                                <select class="form-control" id="payment_method" name="payment_method" required>
                                    <option value="credit_card">Credit Card</option>
                                    <option value="virtual_acount">Virtual Acount</option>
                                    <option value="bank_transfer">Bank Transfer</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>