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

    .alert {
        position: relative;
        padding: 1rem;
        margin-bottom: 1rem;
        border: 1px solid transparent;
        border-radius: 0.25rem;
    }

    .alert-success {
        color: #155724;
        background-color: #d4edda;
        border-color: #c3e6cb;
    }

    .alert-success .close {
        position: absolute;
        top: 0.5rem;
        right: 0.5rem;
        color: inherit;
    }

    .btn-selesai {
        background-color: #007bff;
        /* Blue button */
        color: #fff;
        /* White text */
    }

    .no-print {
        background-color: #007bff;
        /* Blue button */
        color: #fff;
        float: right;
        margin-left: 10px;
        border: none;
        padding: 0.5rem 1rem;
        border-radius: 0.25rem;
    }

</style>
<!-- Include Toastr.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

@stop

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h3>Daftar Order</h3>
            <button onclick="printTable()" class="btn btn-primary mt-2 no-print">Print</button>
        </div>
        
        <div class="card-body">
            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Order updated successfully!</strong> {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <script>
                // Menampilkan notifikasi menggunakan Toastr.js
                toastr.success("Order updated successfully!", 'Success');
            </script>
            @endif
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
                        <th>Aksi</th>
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
                        <td>
                            <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-warning">Edit</a>
                            <form id="delete-form-`{{ $order->id }}`" action="{{ route('orders.destroy', $order->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger" onclick="confirmDelete(`{{ $order->id }}`)">Delete</button>
                            </form>
                        </td>
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
<script>
    // Function untuk konfirmasi penghapusan
    function confirmDelete(orderId) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Submit form penghapusan jika konfirmasi diterima
                document.getElementById('delete-form-' + orderId).submit();
            }
        });
    }

    // Function untuk memindahkan order ke laporan
    function moveToReport(orderId) {
        Swal.fire({
            title: 'Move Order to Report?',
            text: "This action will move the order to the report.",
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#007bff',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, move it!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Kirim permintaan AJAX untuk memindahkan order
                axios.post('/orders/move-to-report/' + orderId)
                    .then(function(response) {
                        toastr.success('Order moved to report successfully!', 'Success');
                        // Lakukan sesuatu setelah berhasil dipindahkan
                    })
                    .catch(function(error) {
                        console.error('Error:', error);
                    });
            }
        });
    }

    function printTable() {
            window.open("{{ route('report') }}", "_blank");
        }
</script>
@stop