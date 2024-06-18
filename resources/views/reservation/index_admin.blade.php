@extends('adminlte::page')

@section('title', 'Reservations Dashboard')

@section('content_header')
    <h1>Reservation Dashboard</h1>
@stop

@section('content')
    <div class="row mt-4 mb-3">
        <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{ $waitingCount }}</h3>
                    <p>Waiting</p>
                </div>
                <div class="icon">
                    <i class="fas fa-clock"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $approvedCount }}</h3>
                    <p>Approved</p>
                </div>
                <div class="icon">
                    <i class="fas fa-check"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{ $rejectedCount }}</h3>
                    <p>Rejected</p>
                </div>
                <div class="icon">
                    <i class="fas fa-times"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $canceledCount }}</h3>
                    <p>Canceled</p>
                </div>
                <div class="icon">
                    <i class="fas fa-ban"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Reservations List</h3>
            <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                    <select id="filterStatus" class="form-control">
                        <option value="" selected>All Status</option>
                        <option value="Waiting">Waiting</option>
                        <option value="Approved">Approved</option>
                        <option value="Rejected">Rejected</option>
                        <option value="Canceled">Canceled</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table id="reservationsTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Customer Name</th>
                        <th>Contact</th>
                        <th>Reservation Date</th>
                        <th style="width: 100px;">Number of Guests</th>
                        <th>Special Requests</th>
                        <th>User ID</th>
                        <th style="width: 200px;">Remark</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($reservations as $reservation)
                        <tr>
                            <td>{{ $reservation->id }}</td>
                            <td>{{ $reservation->cust_name }}</td>
                            <td>{{ $reservation->contact }}</td>
                            <td>{{ $reservation->reservation_date }}</td>
                            <td>{{ $reservation->number_guest }}</td>
                            <td>{{ $reservation->special_request }}</td>
                            <td>{{ $reservation->user_id }}</td>
                            <td>
                                @if($reservation->approval_by_admin == 0)
                                    <span class="badge badge-warning">Waiting</span>
                                    <div style="display: flex; gap: 5px; margin-top: 5px;">
                                        <button class="btn btn-success btn-sm" onclick="confirmAction('approve', {{ $reservation->id }})">Approve</button>
                                        <button class="btn btn-danger btn-sm" onclick="confirmAction('reject', {{ $reservation->id }})">Reject</button>
                                    </div>
                                @elseif($reservation->approval_by_admin == 1)
                                    <span class="badge badge-success">Approved</span>
                                @elseif($reservation->approval_by_admin == 2)
                                    <span class="badge badge-danger">Rejected</span>
                                @elseif($reservation->approval_by_admin == 3)
                                    <span class="badge badge-info">Canceled</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
@stop

@section('js')
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            // Initialize DataTable
            var table = $('#reservationsTable').DataTable({
                "paging": true,
                "ordering": true,
                "searching": true,
                "info": true
            });

            // Filter by status
            $('#filterStatus').on('change', function() {
                var status = $(this).val();
                table.column(7).search(status).draw(); // Adjust the column index based on your table structure
            });
        });

        function confirmAction(action, id) {
            let url = action === 'approve' ? "{{ url('/admin/reservations/approve') }}/" + id : "{{ url('/admin/reservations/reject') }}/" + id;
            let text = action === 'approve' ? "Do you want to approve this reservation?" : "Do you want to reject this reservation?";

            Swal.fire({
                title: 'Are you sure?',
                text: text,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, ' + action + ' it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: url,
                        type: 'GET',
                        data: {
                            _token: '{{ csrf_token() }}',
                            _method: 'GET' 
                        },
                        success: function(response) {
                            Swal.fire("Success!", response.message, "success");
                            window.location.reload(); 
                        },
                        error: function(error) {
                            Swal.fire("Error!", error.responseJSON.message, "error");
                        }
                    });
                }
            });
        }
    </script>
    <script> console.log('Hi!'); </script>
@stop