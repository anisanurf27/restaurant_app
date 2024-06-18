@extends('layouts.app1')

@section('content')
<div class="container">
    <h1>Your Cart</h1>
    <ul class="list-group">
        @foreach($cartItems as $cartItem)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $cartItem->product->name }} ({{ $cartItem->quantity }})
                <span>{{ $cartItem->product->price * $cartItem->quantity }}</span>
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