@extends('layouts/layout_welcome');

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
                    <a href="#home" class="nav-item nav-link active">Home</a>
                    <a href="#about" class="nav-item nav-link">About</a>
                    <a href="#service" class="nav-item nav-link">Service</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="{{ route('reservation') }}" class="dropdown-item">Booking</a>
                            <a href="#team" class="dropdown-item">Our Team</a>
                            <a href="#testimonial" class="dropdown-item">Testimonial</a>
                        </div>
                    </div>
                    <a href="#contact" class="nav-item nav-link">Contact</a>
                </div>
                <a href="{{ route('reservation') }}" class="btn btn-primary py-2 px-4">Book A Table</a>
            </div>
        </nav>

        <div class="container-xxl py-5 bg-dark hero-header mb-5">
            <div class="container my-5 py-5">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6 text-center text-lg-start">
                        <h1 class="display-3 text-white animated slideInLeft">Selamat Datang<br>2'Resto</h1>
                        <p class="text-white animated slideInLeft mb-4 pb-2">kami mengundang Anda untuk merasakan pengalaman kuliner yang autentik dan memuaskan di tengah-tengah keramaian kota. Terletak di jantung pusat kota, restoran kami menawarkan suasana yang hangat dan ramah, cocok untuk bersantai bersama keluarga dan teman..</p>
                        <a href="" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Book A Table</a>
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
                            <p>Pengalaman kuliner istimewa yang memadukan keterampilan memasak dengan seni rasa. Benamkan diri Anda dalam perpaduan sempurna antara pengalaman dan cita rasa yang kaya, sebuah perjalanan melalui keunggulan kuliner.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                            <h5>Quality Food</h5>
                            <p>Nikmati pengalaman bersantap mewah yang tak tertandingi. Benamkan diri Anda dalam perpaduan cita rasa yang canggih, di mana setiap hidangan dibuat dengan presisi, memastikan perjalanan kuliner yang menyenangkan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-cart-plus text-primary mb-4"></i>
                            <h5>Online Order</h5>
                            <p>Jelajahi kemudahan pemesanan online dengan platform kami yang mudah. ​​Temukan berbagai pilihan dengan mudah dari tempat Anda yang nyaman. Rasakan kemudahan dan pilihan istimewa di ujung jari Anda.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                            <h5>24/7 Service</h5>
                            <p>Nikmati layanan 24/7 kami yang memadukan suasana yang tenang dengan pelayanan yang sempurna. Rasakan ketenangan dan keramahtamahan yang luar biasa—di mana setiap momen diciptakan dengan penuh perhatian.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('')}}frontend/img/slide-3.jpg" class="d-block mx-auto w-70" alt="slideshow">
                <div class="carousel-caption d-none d-md-block">
                    <h5></h5>
                    <p>-</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('')}}frontend/img/slide-2.jpg" class="d-block mx-auto w-70" alt="slideshow">
                <div class="carousel-caption d-none d-md-block">
                    <h5></h5>
                    <p>-</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('')}}frontend/img/slide-1.jpg" class="d-block mx-auto w-70" alt="slideshow">
                <div class="carousel-caption d-none d-md-block">
                    <h5></h5>
                    <p>-</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    
    @push('scripts')
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        
        var myCarousel = document.querySelector('#carouselExampleIndicators');
        var carousel = new bootstrap.Carousel(myCarousel, {
            interval: 5000, 
            ride: 'carousel' // auto-slide
        });
    });
    </script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
    

    <!-- About Start -->
    <div class="container-xxl py-5" id="about">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="{{ asset('')}}frontend/img/about-1.jpg">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="{{ asset('')}}frontend/img/about-2.jpg" style="margin-top: 25%;">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="{{ asset('')}}frontend/img/about-3.jpg">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="{{ asset('')}}frontend/img/about-4.jpg">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" >
                    <h5 class="section-title ff-secondary text-start text-primary fw-normal">Tentang Kami</h5>
                    <h1 class="mb-4">Welcome to <i class="fa fa-utensils text-primary me-2"></i>2'Resto</h1>
                    <p class="mb-4">Temukan sensasi kuliner yang memanjakan di restoran kami. Apakah Anda datang untuk menikmati makan malam yang tenang atau merayakan momen istimewa, staf kami yang ramah dan suasana yang mengundang siap membuat setiap kunjungan menjadi pengalaman yang berharga.
                    </p>
                    <p class="mb-4">Temukan sensasi kuliner yang memanjakan di restoran kami. Apakah Anda datang untuk menikmati makan malam yang tenang atau merayakan momen istimewa, staf kami yang ramah dan suasana yang mengundang siap membuat setiap kunjungan menjadi pengalaman yang berharga.</p>

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
                    <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Menu Start -->
    <div class="container-xxl py-5" id="menu">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
                <h1 class="mb-5">Most Popular Menu</h1>
            </div>
            <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                            <i class="fa fa-coffee fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Popular</small>
                                <h6 class="mt-n1 mb-0">Breakfast</h6>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                            <i class="fa fa-hamburger fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Special</small>
                                <h6 class="mt-n1 mb-0">Launch</h6>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                            <i class="fa fa-utensils fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Lovely</small>
                                <h6 class="mt-n1 mb-0">Dinner</h6>
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('')}}frontend/img/Classic Breakfast Platter.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Classic Breakfast Platter ( 10% OFF )</span>
                                            <span class="text-primary">200k</span> 
                                        </h5>
                                        <small class="fst-italic">Telur Dadar, Roti Panggang, Sosis atau Bacon, Kentang Goreng, Dan Pilihan Buah-Buahan Segar</small>
                                        <button class="material-symbols-outlined" style="background-color:orange; color:white; border-color:orange">shopping_cart_checkout</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('')}}frontend/img/Pancake Stack.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Pancake Stack</span>
                                            <span class="text-primary">125k</span>
                                            </h5>
                                        <small class="fst-italic">Tumpukan pancake lembut dengan pilihan topping seperti madu, maple syrup, atau buah-buahan.</small>
                                        <button class="material-symbols-outlined" style="background-color:orange; color:white; border-color:orange">shopping_cart_checkout</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('')}}frontend/img/Oatmeal Bowl.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Oatmeal Bowl</span>
                                            <span class="text-primary">90k</span>
                                        </h5>
                                        <small class="fst-italic"> Bubur oat dengan pilihan topping seperti buah-buahan, kacang-kacangan, atau madu.</small>
                                        <button class="material-symbols-outlined" style="background-color:orange; color:white; border-color:orange">shopping_cart_checkout</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('')}}frontend/img/Avocado Toast.jpeg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Avocado Toast</span>
                                            <span class="text-primary">125k</span>
                                        </h5>
                                        <small class="fst-italic">Roti gandum panggang dengan lapisan alpukat, telur mata sapi, dan taburan rempah.</small>
                                        <button class="material-symbols-outlined" style="background-color:orange; color:white; border-color:orange">shopping_cart_checkout</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('')}}frontend/img/Smoothie Bowl.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Smoothie Bowl</span>
                                            <span class="text-primary">95k</span>
                                        </h5>
                                        <small class="fst-italic">Smoothie dari campuran buah-buahan seperti pisang, mangga, dan beri, disajikan dalam mangkuk dengan topping granola, chia seed, dan irisan buah.</small>
                                        <button class="material-symbols-outlined" style="background-color:orange; color:white; border-color:orange">shopping_cart_checkout</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('')}}frontend/img/Yogurt Parfait.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Yogurt Parfait  ( 50% OFF )</span>
                                            <span class="text-primary">225k</span>
                                        </h5>
                                        <small class="fst-italic">Lapisan yogurt, granola, dan buah-buahan segar seperti beri, pisang, dan kiwi. Bisa juga ditambah dengan madu atau sirup maple untuk memberikan rasa manis alami.</small>
                                        <button class="material-symbols-outlined" style="background-color:orange; color:white; border-color:orange">shopping_cart_checkout</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('')}}frontend/img/English Breakfast.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>English Breakfast</span>
                                            <span class="text-primary">199k</span>
                                        </h5>
                                        <small class="fst-italic">Sarapan lengkap ala Inggris yang terdiri dari telur (orak-arik atau mata sapi), sosis, bacon, jamur tumis, tomat panggang, kacang panggang, dan roti panggang.</small>
                                        <button class="material-symbols-outlined" style="background-color:orange; color:white; border-color:orange">shopping_cart_checkout</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('')}}frontend/img/Crispy Bacon and Cheese Waffles.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Crispy Bacon and Cheese Waffles</span>
                                            <span class="text-primary">105k</span>
                                        </h5>
                                        <small class="fst-italic">variasi waffle yang gurih dan lezat. Waffle ini dibuat dengan adonan yang diberi tambahan potongan bacon renyah dan keju, sehingga menghasilkan kombinasi rasa yang kaya dan tekstur yang menarik.</small>
                                        <button class="material-symbols-outlined" style="background-color:orange; color:white; border-color:orange">shopping_cart_checkout</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('')}}frontend/img/Grilled Chicken Salad.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Grilled Chicken Salad</span>
                                            <span class="text-primary">165k</span>
                                        </h5>
                                        <small class="fst-italic">Salad hijau dengan potongan ayam panggang, tomat, mentimun, wortel, dan dressing pilihan</small>
                                        <button class="material-symbols-outlined" style="background-color:orange; color:white; border-color:orange">shopping_cart_checkout</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('')}}frontend/img/Classic Burger.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Classic Burger</span>
                                            <span class="text-primary">55k</span>
                                        </h5>
                                        <small class="fst-italic">Burger daging sapi panggang dengan keju, selada, tomat, bawang, dan saus.</small>
                                        <button class="material-symbols-outlined" style="background-color:orange; color:white; border-color:orange">shopping_cart_checkout</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('')}}frontend/img/Vegetable Stir-fry.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Vegetable Stir-fry</span>
                                            <span class="text-primary">85k</span>
                                        </h5>
                                        <small class="fst-italic">Tumis sayuran segar dengan pilihan saus seperti saus tiram atau saus kedelai.</small>
                                        <button class="material-symbols-outlined" style="background-color:orange; color:white; border-color:orange">shopping_cart_checkout</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('')}}frontend/img/Soup and Sandwich Combo.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Soup and Sandwich Combo</span>
                                            <span class="text-primary">95k</span>
                                        </h5>
                                        <small class="fst-italic">Pilihan sup harian dengan setengah sandwich (misalnya, sandwich ayam panggang atau tuna).</small>
                                        <button class="material-symbols-outlined" style="background-color:orange; color:white; border-color:orange">shopping_cart_checkout</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('')}}frontend/img/Stuffed Bell Peppers.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Stuffed Bell Peppers ( 50% OFF )</span>
                                            <span class="text-primary">225k</span>
                                        </h5>
                                        <small class="fst-italic">Paprika yang diisi dengan campuran nasi, sayuran, dan kacang-kacangan.</small>
                                        <button class="material-symbols-outlined" style="background-color:orange; color:white; border-color:orange">shopping_cart_checkout</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('')}}frontend/img/Margherita Pizza.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Margherita Pizza</span>
                                            <span class="text-primary">150k</span>
                                        </h5>
                                        <small class="fst-italic">Pizza dengan tomat, mozzarella, dan basil.</small>
                                        <button class="material-symbols-outlined" style="background-color:orange; color:white; border-color:orange">shopping_cart_checkout</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('')}}frontend/img/Bento Box.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Bento Box</span>
                                            <span class="text-primary">165k</span>
                                        </h5>
                                        <small class="fst-italic">Kotak makan siang dengan berbagai hidangan seperti nasi, daging, dan sayuran.</small>
                                        <button class="material-symbols-outlined" style="background-color:orange; color:white; border-color:orange">shopping_cart_checkout</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('')}}frontend/img/Pasta Carbonara.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Pasta Carbonara</span>
                                            <span class="text-primary">125k</span>
                                        </h5>
                                        <small class="fst-italic">Pasta dengan saus krim, bacon, dan keju parmesan.</small>
                                        <button class="material-symbols-outlined" style="background-color:orange; color:white; border-color:orange">shopping_cart_checkout</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-3" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('')}}frontend/img/Grilled Salmon Fillet.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Grilled Salmon Fillet</span>
                                            <span class="text-primary">275k</span>
                                        </h5>
                                        <small class="fst-italic">Fillet salmon panggang dengan rempah-rempah, disajikan dengan pilihan sisi seperti nasi atau sayuran panggang.</small>
                                        <button class="material-symbols-outlined" style="background-color:orange; color:white; border-color:orange">shopping_cart_checkout</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('')}}frontend/img/Pasta Aglio e Olio.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Pasta Aglio e Olio</span>
                                            <span class="text-primary">150k</span>
                                        </h5>
                                        <small class="fst-italic">Pasta spaghetti dengan saus minyak zaitun, bawang putih, dan cabe, disajikan dengan parmesan parut.</small>
                                        <button class="material-symbols-outlined" style="background-color:orange; color:white; border-color:orange">shopping_cart_checkout</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('')}}frontend/img/Steak with Mashed Potatoes.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Steak with Mashed Potatoes</span>
                                            <span class="text-primary">270k</span>
                                        </h5>
                                        <small class="fst-italic">Steak sapi panggang dengan saus jus, disajikan dengan kentang tumbuk dan sayuran panggang.</small>
                                        <button class="material-symbols-outlined" style="background-color:orange; color:white; border-color:orange">shopping_cart_checkout</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('')}}frontend/img/Vegetarian Buddha Bowl.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Vegetarian Buddha Bowl</span>
                                            <span class="text-primary">150k</span>
                                        </h5>
                                        <small class="fst-italic"></small> Mangkuk besar berisi nasi atau quinoa, sayuran panggang, kacang-kacangan, dan saus tahini.
                                        <button class="material-symbols-outlined" style="background-color:orange; color:white; border-color:orange">shopping_cart_checkout</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('')}}frontend/img/Duck Confit.jpeg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Duck Confit</span>
                                            <span class="text-primary">175k</span>
                                        </h5>
                                        <small class="fst-italic">Bebek yang dimasak perlahan dalam lemaknya sendiri hingga dagingnya sangat empuk, disajikan dengan kentang goreng dan salad hijau.</small>
                                        <button class="material-symbols-outlined" style="background-color:orange; color:white; border-color:orange">shopping_cart_checkout</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('')}}frontend/img/Lamb Chops.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Lamb Chops</span>
                                            <span class="text-primary">250k</span>
                                        </h5>
                                        <small class="fst-italic">Potongan daging domba yang dipanggang hingga empuk, biasanya disajikan dengan saus rosemary atau mint, dan dilengkapi dengan sayuran musiman serta kentang.</small>
                                        <button class="material-symbols-outlined" style="background-color:orange; color:white; border-color:orange">shopping_cart_checkout</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('')}}frontend/img/Risotto.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Risotto</span>
                                            <span class="text-primary">125k</span>
                                          </h5>
                                        <small class="fst-italic">Nasi Italia yang dimasak dengan kaldu hingga creamy, seringkali ditambahkan dengan bahan-bahan seperti jamur, udang, atau asparagus, serta keju parmesan untuk rasa yang kaya.</small>
                                        <button class="material-symbols-outlined" style="background-color:orange; color:white; border-color:orange">shopping_cart_checkout</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('')}}frontend/img/Seafood Paella.jpg" alt="" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Seafood Paella</span>
                                            <span class="text-primary">245k</span>
                                        </h5>
                                        <small class="fst-italic">Hidangan nasi Spanyol yang dimasak dengan saffron, kaldu, dan berbagai jenis seafood seperti udang, kerang, dan cumi. Dilengkapi dengan paprika dan kacang polong.</small>
                                        <button class="material-symbols-outlined" style="background-color:orange; color:white; border-color:orange">shopping_cart_checkout</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Menu End -->


    <!-- Reservation Start -->
    <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s" id="reservation" style="height: 110vh;">
        <div class="row g-0" style="height: 100%;">
            <div class="col-md-6 d-flex flex-column" style="height: 100%;">
                <img class="img-fluid" src="{{ asset('')}}frontend/img/book_table.jpg" alt="" style="object-fit: cover; height: 100%; flex-grow: 1;">
            </div>
            <div class="col-md-6 bg-dark d-flex align-items-center" style="height: 100%;">
                <div class="p-5 wow fadeInUp w-100" data-wow-delay="0.2s">
                    <h5 class="section-title ff-secondary text-start text-primary fw-normal">Reservation</h5>
                    <h1 class="text-white mb-4">Book A Table Online</h1>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating date" id="date3" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input" id="datetime" placeholder="Date & Time" data-target="#date3" data-toggle="datetimepicker" />
                                    <label for="datetime">Date & Time</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select" id="select1">
                                        <option value="1">People 1</option>
                                        <option value="2">People 2</option>
                                        <option value="3">People 3</option>
                                    </select>
                                    <label for="select1">No Of People</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                    <label for="message">Special Request</label>
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
    <!-- Reservation End -->


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
                            <img class="img-fluid" src="{{ asset('')}}frontend/img/team-1.jpg" alt="">
                        </div>
                        <h5 class="mb-0">Full Name</h5>
                        <small>Designation</small>
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
                            <img class="img-fluid" src="{{ asset('')}}frontend/img/team-2.jpg" alt="">
                        </div>
                        <h5 class="mb-0">Full Name</h5>
                        <small>Designation</small>
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
                            <img class="img-fluid" src="{{ asset('')}}frontend/img/team-3.jpg" alt="">
                        </div>
                        <h5 class="mb-0">Full Name</h5>
                        <small>Designation</small>
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
                            <img class="img-fluid" src="{{ asset('')}}frontend/img/team-4.jpg" alt="">
                        </div>
                        <h5 class="mb-0">Full Name</h5>
                        <small>Designation</small>
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
                <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('')}}frontend/img/testimonial-1.jpg" style="width: 50px; height: 50px;">
                    <div class="ps-3">
                        <h5 class="mb-1">client name</h5>
                        <small>Profession</small>
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-transparent border rounded p-4">
                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('')}}frontend/img/testimonial-2.jpg" style="width: 50px; height: 50px;">
                    <div class="ps-3">
                        <h5 class="mb-1">Client Name</h5>
                        <small>Profession</small>
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-transparent border rounded p-4">
                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('')}}frontend/img/testimonial-3.jpg" style="width: 50px; height: 50px;">
                    <div class="ps-3">
                        <h5 class="mb-1">Client Name</h5>
                        <small>Profession</small>
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-transparent border rounded p-4">
                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('')}}frontend/img/testimonial-4.jpg" style="width: 50px; height: 50px;">
                    <div class="ps-3">
                        <h5 class="mb-1">Client Name</h5>
                        <small>Profession</small>
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
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Reservation</a>
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