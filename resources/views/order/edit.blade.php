@extends('adminlte::page')

@section('title', 'Edit Order')

@section('content_header')
<h2>Edit Order</h2>
@stop

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h3>Edit Order</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('orders.update', $order->id) }}" method="POST">
                @csrf
                @method('POST')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $order->name }}">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name="address" class="form-control" value="{{ $order->address }}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ $order->email }}">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" class="form-control" value="{{ $order->phone }}">
                </div>
                <div class="form-group">
                    <label for="total_price">Total Price</label>
                    <input type="text" name="total_price" class="form-control" value="{{ $order->total_price }}">
                </div>
                <div class="form-group">
                    <label for="payment_method">Payment Method</label>
                    <input type="text" name="payment_method" class="form-control" value="{{ $order->payment_method }}">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('admin.order') }}" class="btn btn-danger">Batal</a>
            </form>
        </div>
    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop
