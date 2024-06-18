@extends('layouts/layout_welcome')

@section('content')
<div class="container-xxl bg-white p-0">

    <!-- Navbar & Hero Start -->
    <div class="container-xxl position-relative p-0" id="home">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>2'Resto</h1>
                <!-- <img src="{{ asset('')}}frontend/img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0 pe-4">
                    <a href="#home" class="nav-item nav-link">Home</a>
                    <a href="#about" class="nav-item nav-link">About</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Login</a>
                        <div class="dropdown-menu m-0">
                            <a href="{{ route('login') }}" class="dropdown-item">Login</a>
                            <a href="{{route('register')}}" class="dropdown-item">Register</a>
                        </div>
                    </div>
                    <a href="#service" class="nav-item nav-link">Service</a>
                    <a href="#team" class="nav-item nav-link">Our Team</a>
                    <a href="#testimonial" class="nav-item nav-link">Testimonial</a>

                </div>
            </div>
        </nav>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.navbar-nav .nav-link').on('click', function () {
                    $('.navbar-nav .nav-link').removeClass('active');
                    $(this).addClass('active');
                });
            });
        </script>

        <div class="container-xxl py-5 bg-dark hero-header mb-5">
            <div class="container my-5 py-5">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6 text-center text-lg-start">
                        <h1 class="display-3 text-white animated slideInLeft">Selamat Datang<br>2'Resto</h1>
                        <p class="text-white animated slideInLeft mb-4 pb-2">kami mengundang Anda untuk merasakan
                            pengalaman kuliner yang autentik dan memuaskan di tengah-tengah keramaian kota. Terletak di
                            jantung pusat kota, restoran kami menawarkan suasana yang hangat dan ramah, cocok untuk
                            bersantai bersama keluarga dan teman..</p>
                        <a href="{{ route('login') }}"
                            class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Book A Table</a>
                    </div>
                    <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                        <img class="img-fluid" src="{{ asset('')}}frontend/img/hero.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->


    <!-- Service Start -->
    <div class="container-xxl py-5" id="service">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                            <h5>Master Chefs</h5>
                            <p>Pengalaman kuliner istimewa yang memadukan keterampilan memasak dengan seni rasa.
                                Benamkan diri Anda dalam perpaduan sempurna antara pengalaman dan cita rasa yang kaya,
                                sebuah perjalanan melalui keunggulan kuliner.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                            <h5>Quality Food</h5>
                            <p>Nikmati pengalaman bersantap mewah yang tak tertandingi. Benamkan diri Anda dalam
                                perpaduan cita rasa yang canggih, di mana setiap hidangan dibuat dengan presisi,
                                memastikan perjalanan kuliner yang menyenangkan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-cart-plus text-primary mb-4"></i>
                            <h5>Online Order</h5>
                            <p>Jelajahi kemudahan pemesanan online dengan platform kami yang mudah. ​​Temukan berbagai
                                pilihan dengan mudah dari tempat Anda yang nyaman. Rasakan kemudahan dan pilihan
                                istimewa di ujung jari Anda.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                            <h5>24/7 Service</h5>
                            <p>Nikmati layanan 24/7 kami yang memadukan suasana yang tenang dengan pelayanan yang
                                sempurna. Rasakan ketenangan dan keramahtamahan yang luar biasa—di mana setiap momen
                                diciptakan dengan penuh perhatian.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- About Start -->
    <div class="container-xxl py-5" id="about">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s"
                                src="{{ asset('')}}frontend/img/about-1.jpg">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s"
                                src="{{ asset('')}}frontend/img/about-2.jpg" style="margin-top: 25%;">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s"
                                src="{{ asset('')}}frontend/img/about-3.jpg">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s"
                                src="{{ asset('')}}frontend/img/about-4.jpg">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h5 class="section-title ff-secondary text-start text-primary fw-normal">Tentang Kami</h5>
                    <h1 class="mb-4">Welcome to <i class="fa fa-utensils text-primary me-2"></i>2'Resto</h1>
                    <p class="mb-4">Temukan sensasi kuliner yang memanjakan di restoran kami. Apakah Anda datang untuk
                        menikmati makan malam yang tenang atau merayakan momen istimewa, staf kami yang ramah dan
                        suasana yang mengundang siap membuat setiap kunjungan menjadi pengalaman yang berharga.
                    </p>
                    <p class="mb-4">Temukan sensasi kuliner yang memanjakan di restoran kami. Apakah Anda datang untuk
                        menikmati makan malam yang tenang atau merayakan momen istimewa, staf kami yang ramah dan
                        suasana yang mengundang siap membuat setiap kunjungan menjadi pengalaman yang berharga.</p>

                    <div class="row g-4 mb-4">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">15</h1>
                                <div class="ps-4">
                                    <p class="mb-0">Tahun</p>
                                    <h6 class="text-uppercase mb-0">Pengalaman</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">4</h1>
                                <div class="ps-4">
                                    <p class="mb-0">Master Chef</p>
                                    <h6 class="text-uppercase mb-0">Terkenal</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Team Start -->
    <div class="container-xxl pt-5 pb-3" id="team">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Team Members</h5>
                <h1 class="mb-5">Our Master Chefs</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <div class="rounded-circle overflow-hidden m-4">
                            <img class="img-fluid" src="{{ asset('')}}frontend/img/Chef Arnold.jpeg" alt="">
                        </div>
                        <h5 class="mb-0">Arnold Poernomo</h5>
                        <small>Chef</small>
                        <div class="d-flex justify-content-center mt-3">
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <div class="rounded-circle overflow-hidden m-4">
                            <img class="img-fluid" src="{{ asset('')}}frontend/img/Chef Marinka.jpg" alt="">
                        </div>
                        <h5 class="mb-0">Maria Irene Susanto</h5>
                        <small>Chef</small>
                        <div class="d-flex justify-content-center mt-3">
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <div class="rounded-circle overflow-hidden m-4">
                            <img class="img-fluid" src="{{ asset('')}}frontend/img/Chef Renata.jpg" alt="">
                        </div>
                        <h5 class="mb-0">Puti Renatta R. M.</h5>
                        <small>Chef</small>
                        <div class="d-flex justify-content-center mt-3">
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <div class="rounded-circle overflow-hidden m-4">
                            <img class="img-fluid" src="{{ asset('')}}frontend/img/Chef Juna.jpeg" alt="">
                        </div>
                        <h5 class="mb-0">Junior John Rorimpandey</h5>
                        <small>Chef</small>
                        <div class="d-flex justify-content-center mt-3">
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s" id="testimonial">
        <div class="container">
            <div class="text-center">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Testimonial</h5>
                <h1 class="mb-5">Our Clients Say!!!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item bg-transparent border rounded p-4">
                    <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                    <p>Makanannya Sangat Enak</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle"
                            src="{{ asset('')}}frontend/img/testimonial-1.jpg" style="width: 50px; height: 50px;">
                        <div class="ps-3">
                            <h5 class="mb-1">Nabilla</h5>
                            <small>Clients</small>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-transparent border rounded p-4">
                    <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                    <p>Tempatnya Sangat Nyaman</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle"
                            src="{{ asset('')}}frontend/img/testimonial-2.jpg" style="width: 50px; height: 50px;">
                        <div class="ps-3">
                            <h5 class="mb-1">Anisa</h5>
                            <small>Clients</small>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-transparent border rounded p-4">
                    <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                    <p>Pelayanannya Sangat Baik</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle"
                            src="{{ asset('')}}frontend/img/testimonial-3.jpg" style="width: 50px; height: 50px;">
                        <div class="ps-3">
                            <h5 class="mb-1">Ridwan</h5>
                            <small>Clients</small>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-transparent border rounded p-4">
                    <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                    <p>Pantas Disebut Restorang Bintang 5</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle"
                            src="{{ asset('')}}frontend/img/testimonial-4.jpg" style="width: 50px; height: 50px;">
                        <div class="ps-3">
                            <h5 class="mb-1">Susi</h5>
                            <small>Clients</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Company</h4>
                    <a class="btn btn-link" href="#about">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="{{ route('reservation') }}">Reservation</a>
                    <a class="btn btn-link" href="">Privacy Policy</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, Bandung, Indonesia</p>
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
                        <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text"
                            placeholder="Your email">
                        <button type="button"
                            class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Gamelab.id</a>,
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Home</a>
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
</div>
@endsection