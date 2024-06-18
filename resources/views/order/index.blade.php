@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h2>Dashboard Orders</h2>
<style>
    .card-header,
    .nav-pills .nav-link.active,
    .nav-sidebar .nav-link.active,
    .btn-primary {
        background-color: #f8981d;
        /* Orange for headers, active links, buttons */
        color: #fff;
        /* White text for orange elements */
    }

    .card-header h1,
    .nav-pills .nav-link.active,
    .nav-sidebar .nav-link.active,
    .btn-primary:hover {
        color: #fff;
        /* Maintain white text on hover */
    }

    /* Adjust as needed for other elements */
    .text-orange {
        color: #f8981d;
    }

    .table {
        background-color: #fff;
        /* White background */
        border-collapse: collapse;
        /* Remove default table borders */
    }

    .table-bordered th,
    .table-bordered td {
        border: 1px solid #ddd;
        /* Add borders for each cell */
    }

    .thead th {
        background-color: #f8981d;
        /* Orange header background */
        color: #fff;
        /* White text for headers */
        text-align: center;
        /* Center header text */
        padding: 10px 15px;
        /* Add padding for headers */
    }

    .tbody tr:hover {
        background-color: #f5f5f5;
        /* Light gray hover effect */
    }

    .td {
        padding: 8px 12px;
        /* Add padding for cells */
        border-bottom: 1px solid #ddd;
        /* Add bottom border for each row */
    }
</style>
@stop

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h3>Daftar Order</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Total Price</th>
                        <th>Payment Method</th>
                        <th>Created At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->name }}</td>
                            <td>{{ $order->address }}</td>
                            <td>{{ $order->email }}</td>
                            <td>{{ $order->phone }}</td>
                            <td>{{ $order->total_price }}</td>
                            <td>{{ $order->payment_method }}</td>
                            <td>{{ $order->created_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script> console.log('Hi!');</script>
@stop