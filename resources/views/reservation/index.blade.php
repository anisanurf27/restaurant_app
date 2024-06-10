@extends('layouts/layout_welcome')

@section('title', 'Reservation')

@section('content_header')
    <h1>Reservation</h1>
@stop

@section('content')
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>2'Resto</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 pe-4">
                <a href="{{ url('/') }}" class="nav-item nav-link">Home</a>
                <a href="#about" class="nav-item nav-link">About</a>
                <a href="#service" class="nav-item nav-link">Service</a>
                <a href="#menu" class="nav-item nav-link">Menu</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="#reservation" class="dropdown-item active">Booking</a>
                        <a href="#team" class="dropdown-item">Our Team</a>
                        <a href="#testimonial" class="dropdown-item">Testimonial</a>
                    </div>
                </div>
                <a href="#contact" class="nav-item nav-link">Contact</a>
            </div>
            <a href="{{ route('reservation') }}" class="btn btn-primary py-2 px-4">Book A Table</a>
        </div>
    </nav>

    <div class="container-fluid px-0" id="reservation" style="min-height: 100vh;">
        <div class="row g-0" style="min-height: 100vh;">
            <div class="col-lg-6 col-md-12 d-flex flex-column" style="min-height: 50vh;">
                <img class="img-fluid w-100 h-100" src="{{ asset('frontend/img/book_table.jpg') }}" alt="Book Table" style="object-fit: cover;">
            </div>
            <div class="col-lg-6 col-md-12 bg-dark d-flex align-items-center" style="min-height: 50vh;">
                <div class="p-5 wow fadeInUp w-100" data-wow-delay="0.2s">
                    <h5 class="section-title ff-secondary text-start text-primary fw-normal">Reservation</h5>
                    <h1 class="text-white mb-4">Book A Table Online</h1>
                    <form action="{{ route('reservations.store') }}" method="POST" id="form-reservasi">
                        @csrf
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
@stop

@section('css')
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
</style>
@stop

@section('js')
    {{-- Store Redevation Data --}}
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
@stop