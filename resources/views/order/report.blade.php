<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 18px;
            text-align: left;
        }
        .table th, .table td {
            padding: 12px 15px;
        }
        .table th {
            background-color: #009879;
            color: #ffffff;
            text-align: center;
        }
        .table tr {
            border-bottom: 1px solid #dddddd;
        }
        .table tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }
        .table tr:last-of-type {
            border-bottom: 2px solid #009879;
        }
        .table tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>

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

<script>
    window.onload = function() {
            window.print();
        };
</script>

</body>
</html>
