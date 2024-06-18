@extends('layouts/layout_welcome')

@section('title', 'Reservation')

@section('content_header')
    <h1>Reservation</h1>
@stop

@section('content')
    {{-- Formulir Reservation --}}
    <div class="container-fluid px-0" id="reservation" style="min-height: 100vh;">
        <div class="row g-0" style="min-height: 100vh;">
            <div class="col-lg-6 col-md-12 d-flex flex-column" style="min-height: 50vh;">
                <img class="img-fluid w-100 h-100" src="{{ asset('frontend/img/book_table.jpg') }}" alt="Book Table" style="object-fit: cover;">
            </div>
            <div class="col-lg-6 col-md-12 bg-dark d-flex align-items-center" style="min-height: 50vh;">
                <div class="p-5 wow fadeInUp w-100" data-wow-delay="0.2s">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-primary"><i class="fa fa-utensils me-3"></i>2'Resto</h3>
                        <a href="{{ route('dashboard') }}" class="btn btn-primary py-2 px-4">
                            <i class="fas fa-arrow-left"></i> Back
                        </a> 
                    </div>
                    <h5 class="section-title ff-secondary text-start text-primary fw-normal mb-2">Reservation</h5>
                    <h1 class="text-white mb-4">Book A Table Online</h1>
                    <form action="{{ route('reservations.store') }}" method="POST" id="form-reservasi">
                        @csrf
                        <input type="hidden" id="user_id" name="user_id" value="{{ auth()->id() }}">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="cust_name" name="cust_name" placeholder="Your Name" required>
                                    <label for="cust_name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="contact" name="contact" placeholder="Your Email" required>
                                    <label for="contact">Your Email</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating date" id="date3" data-target-input="nearest">
                                    <input type="datetime-local" class="form-control" id="reservation_date" name="reservation_date" placeholder="Date & Time" required>
                                    <label for="reservation_date">Date & Time</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select" id="number_guest" name="number_guest" required>
                                        <option value="1">People 1</option>
                                        <option value="2">People 2</option>
                                        <option value="3">People 3</option>
                                    </select>
                                    <label for="number_guest">No Of People</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" name="special_request" placeholder="Special Request" id="special_request" style="height: 100px"></textarea>
                                    <label for="special_request">Special Request</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Book Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>            
        </div>
    </div>

    {{-- Show Table Data Reservation --}}
    <div class="container-fluid bg-dark text-light footer pt-3 mt-3 wow fadeIn" data-wow-delay="0.1s" style="min-height: 100vh;" id="card-tabel"> 
        <div class="container-fluid mt-5">
            <div class="row justify-content-center">
                <div class="col-md-11">
                    <div class="table-responsive">
                        <h3 class="text-center mb-4">
                            <span style="color: orange">My</span>
                            <span style="color: white">Reservation</span>
                        </h3>
                        <table id="reservations-table" class="table table-hovered table-striped table-condensed table-white-mode">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th style="width: 150px;">Reservation Date</th>
                                    <th>Customer Name</th>
                                    <th>Contact</th>
                                    <th>Number of Guests</th>
                                    <th>Special Requests</th>
                                    <th>Remark</th>
                                    <th style="width: 120px;">Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>    

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-3 mt-3 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Company</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Reservation</a>
                    <a class="btn btn-link" href="">Privacy Policy</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, Jakarta, Indonesia</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Opening</h4>
                    <h5 class="text-light fw-normal">Monday - Saturday</h5>
                    <p>09AM - 09PM</p>
                    <h5 class="text-light fw-normal">Sunday</h5>
                    <p>10AM - 08PM</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Kelompok 2 - Fullstack 3</a>, 
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="{{ url('/') }}">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    @include('reservation._modal_edit')
@stop

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<style>
    html, body {
        height: 100%;
    }
    #reservation {
        min-height: 100vh;
    }
    #reservation .col-lg-6, 
    #reservation .col-md-12 {
        min-height: 50vh;
    }
    .navbar-brand h1 {
        font-size: 1.75rem;
    }
    .form-floating label {
        color: #6c757d;
    }
    .form-control .form-select{
        background-color: #ffffff;
        color: #fff;
    }
    .form-control:focus .form-select:focus{
        background-color: #FFF2D7;
        color: #fff;
    }
    .form-control::placeholder {
        color: #6c757d;
    }
    .footer {
        background: #111;
        color: #ddd;
    }
    .footer a {
        color: #ddd;
    }
    .footer a:hover {
        color: #fff;
    }
    .footer .btn-social {
        margin-right: .5rem;
    }
    .swal-confirm-button {
        background-color: orange !important; 
        border-color: orange !important; 
        color: white !important; 
    }
    /* Styling for table */
    #reservations-table_wrapper {
        margin-top: 20px;
    }

    #reservations-table th,
    #reservations-table td {
        vertical-align: middle;
    }

    #reservations-table .action-column {
        width: 100px; /* Adjust width as needed */
        text-align: center;
    }

    /* Styling for white mode table */
    .table-white-mode {
        color: #000000; /* Black text color */
        background-color: #ffffff; /* White background color */
    }

    .table-white-mode thead th {
        color: #000000; /* Black text color for table header */
        background-color: #f2f2f2; /* Light gray background color for table header */
        border-color: #dddddd; /* Border color */
    }

    .table-white-mode tbody td {
        color: #000000; /* Black text color for table body */
        background-color: #ffffff; /* White background color for table body */
        border-color: #dddddd; /* Border color */
    }
    .dataTables_wrapper .top {
        display: flex;
        justify-content: space-between;
        margin-bottom: 10px;
    }
    
    .dataTables_wrapper .bottom {
        display: flex;
        justify-content: space-between;
        margin-top: 10px;
    }

    .dataTables_wrapper .dataTables_filter {
        margin-left: 10px;
        margin-bottom: 15px;
        color: #ffffff;
    }

    .dataTables_wrapper .dataTables_length {
        margin-right: 10px;
        margin-bottom: 15px;
        color: #ffffff;
    }

    .dataTables_wrapper .dataTables_length select{
        color: #ffffff;
    }

    .dataTables_wrapper .dataTables_info{
        color: #ffffff;
        margin-bottom: 25px;
    }

    .dataTables_wrapper .dataTables_paginate {
        margin-right: 10px;
    }

</style>
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    {{-- Store Reservation Data --}}
    <script>
        $(document).ready(function () {
            $('#form-reservasi').submit(function (e) {
                e.preventDefault();
                Swal.fire({
                    title: "Are you sure?",
                    text: "Do you want to proceed with the reservation?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonText: "Yes, proceed",
                    cancelButtonText: "Cancel",
                    reverseButtons: true,
                    customClass: {
                        confirmButton: 'swal-confirm-button'
                    }
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: 'POST',
                            url: '{{ route('reservations.store') }}',
                            data: $(this).serialize(),
                            success: function (response) {
                                Swal.fire("Success!", response.message, "success");
    
                                $('#form-reservasi')[0].reset();
                                $('#reservations-table').DataTable().draw(true);
                            },
                            error: function (error) {
                                Swal.fire("Error!", error.responseJSON.message, "error");
                            }
                        });
                    } else {
                        return false;
                    }
                });
            });
        });
    </script>    

    {{-- Get Reservation Data --}}
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#reservations-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('reservation.data') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: true, searchable: false, width: '40px' },
                    { data: 'reservation_date', name: 'reservation_date' },
                    { data: 'cust_name', name: 'cust_name' },
                    { data: 'contact', name: 'contact' },
                    { data: 'number_guest', name: 'number_guest' },
                    { data: 'special_request', name: 'special_request' },
                    { data: 'remark', name: 'remark', orderable: false, searchable: false },
                    { data: 'action', name: 'action', orderable: false, searchable: false },
                ]
            });
        });
    </script>
    
    {{-- Cancel Reservation --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            @if(session('scrollTo'))
                $('html, body').animate({
                    scrollTop: $("#{{ session('scrollTo') }}").offset().top
                }, 1000);
            @endif
        });

        @if(session('status'))
            Swal.fire({
                title: 'Success',
                text: "{{ session('status') }}",
                icon: 'success',
                confirmButtonText: 'OK'
            });
        @endif

        function confirmCancel(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "Do you want to cancel this reservation?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, cancel it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: `{{ url('/reservation/cancel') }}/${id}`,
                        type: 'POST',
                        data: {
                            _token: '{{ csrf_token() }}',
                            _method: 'DELETE'
                        },
                        success: function(response) {
                            Swal.fire("Success!", response.message, "success");
                            $('#reservations-table').DataTable().ajax.reload();
                        },
                        error: function(error) {
                            Swal.fire("Error!", error.responseJSON.message, "error");
                        }
                    });
                }
            });
        }
    </script>

    {{-- Edit Reservation --}}
    <script>
        // Edit button click handler
        function populateEditModal(id) { 
            $.ajax({
                url: '/reservation/edit/' + id,
                type: 'GET',
                success: function(response) {
                    var reservation = response.reservation;

                    // Populate data into modal fields
                    $('#edit_reservation_id').val(reservation.id);
                    $('#edit_cust_name').val(reservation.cust_name);
                    $('#edit_contact').val(reservation.contact);
                    $('#edit_reservation_date').val(reservation.reservation_date.replace(' ', 'T'));
                    $('#edit_number_guest').val(reservation.number_guest);
                    $('#edit_special_request').val(reservation.special_request);

                    // Show edit modal
                    $('#editReservationModal').modal('show');
                },
                error: function(error) {
                    console.log(error);
                    Swal.fire("Error!", "Failed to fetch reservation data.", "error");
                }
            });
        }

        $(document).ready(function() {
            // Submit edit form handler
            $('#editReservationForm').submit(function(e) {
                e.preventDefault();

                var reservationId = $('#edit_reservation_id').val(); 
                $.ajax({
                    url: '/reservation/update/' + reservationId,
                    type: 'PUT', // Gunakan metode PUT karena Anda menggunakan Laravel
                    data: $(this).serialize(),
                    success: function(response) {
                        Swal.fire("Success!", response.message, "success");
                        $('#editReservationModal').modal('hide');
                        $('#reservations-table').DataTable().draw(false);
                    },
                    error: function(error) {
                        console.log(error);
                        Swal.fire("Error!", error.responseJSON.message, "error");
                    }
                });
            });
        });

    </script>
    
@stop