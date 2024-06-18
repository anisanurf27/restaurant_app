@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <!-- Reservation Recap -->
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $waitingReservations }}</h3>
                    <p>Waiting Reservations</p>
                </div>
                <div class="icon">
                    <i class="fas fa-clock"></i>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $approvedReservations }}</h3>
                    <p>Approved Reservations</p>
                </div>
                <div class="icon">
                    <i class="fas fa-check"></i>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{ $rejectedReservations }}</h3>
                    <p>Rejected Reservations</p>
                </div>
                <div class="icon">
                    <i class="fas fa-times"></i>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-secondary">
                <div class="inner">
                    <h3>{{ $canceledReservations }}</h3>
                    <p>Canceled Reservations</p>
                </div>
                <div class="icon">
                    <i class="fas fa-ban"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Menu Recap -->
        <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{ $menuCount }}</h3>
                    <p>Total Menus</p>
                </div>
                <div class="icon">
                    <i class="fas fa-utensils"></i>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-primary">
                <div class="inner">
                    <h3>{{ $categoryCount }}</h3>
                    <p>Total Categories</p>
                </div>
                <div class="icon">
                    <i class="fas fa-list"></i>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-dark">
                <div class="inner">
                    <h3>{{ $orderCount }}</h3>
                    <p>Total Orders</p>
                </div>
                <div class="icon">
                    <i class="fas fa-shopping-cart"></i>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-light">
                <div class="inner">
                    <h3>{{ $userCount }}</h3>
                    <p>Total Users</p>
                </div>
                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Chart -->
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Reservation Status Overview</h3>
                </div>
                <div class="card-body">
                    <canvas id="reservationChart" style="height: 250px;"></canvas>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Data for the chart
        const ctx = document.getElementById('reservationChart').getContext('2d');
        const reservationChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Waiting', 'Approved', 'Rejected', 'Canceled'],
                datasets: [{
                    label: 'Reservation Status',
                    data: [{{ $waitingReservations }}, {{ $approvedReservations }}, {{ $rejectedReservations }}, {{ $canceledReservations }}],
                    backgroundColor: [
                        'rgba(255, 206, 86, 0.2)', // Waiting
                        'rgba(75, 192, 192, 0.2)',  // Approved
                        'rgba(255, 99, 132, 0.2)',  // Rejected
                        'rgba(201, 203, 207, 0.2)'  // Canceled
                    ],
                    borderColor: [
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(201, 203, 207, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
            }
        });
    </script>
@stop