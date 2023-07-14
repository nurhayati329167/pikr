<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>PIK-R Karangampel</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link href="{{ asset('Impact/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('Impact/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('Impact/assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{ asset('Impact/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{ asset('Impact/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{ asset('Impact/assets/css/main.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/css/swiper.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/js/swiper.min.js"></script>
    <style type="text/css">
    .divider {
        border: 1px solid #ccc;
    }

    img {
        width: 70%;
        margin-top: 5px;
    }

    .swiper-container {
        width: 100%;
        height: 100%;
        margin-bottom: auto;
    }

    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-mb: 10px;
        -webkit-align-items: center;
        align-items: center;
        margin-bottom: auto;
    }
    </style>
</head>

<body>
    <header id="header" class="header d-flex align-items-center">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
            </a>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="#hero">Beranda</a></li>
                    <li><a href="#profil">Profil</a></li>
                    <li><a href="#artikel">Artikel</a></li>
                    <li><a href="#program">Program</a></li>
                    <li><a href="{{ url('login')}}">Login</a></li>
                </ul>
            </nav>
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
    </header>
    <section id="hero" class="hero">
        <div class="container position-relative">
            <div class="row gy-5" data-aos="fade-in">
                @foreach($profils as $profil)
                <div
                    class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-justify text-lg-start text-light">
                    <h2>PIK-R Karangampel</h2>
                    <h4><strong>{{$profil->bio}}</strong>

                        <!-- {{ \Illuminate\Support\Str::limit(($profil->keterangan), 301) }} -->
                        <!-- <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="{{ url('profils')}}" class="btn-get-started">Baca selengkapnya</a>
                    </div> -->
                    </h4>

                </div>
                @endforeach
                <div class="col-lg-6 order-1 order-lg-1">
                    <img src="{{ asset('Impact/assets/img/counseling.png')}}" class="img-fluid center" alt=""
                        data-aos="zoom-out" data-aos-delay="50" width="70%">
                </div>
            </div>
        </div>

        <div class="icon-boxes position-relative">
        </div>

        </div>
    </section>

    <main id="main">
        <section id="profil" class="about">
            <div class="container" data-aos="fade-up">
                @foreach($profils as $profil)
                <div class="section-header">
                    <h2>{{$profil->judul}}</h2>
                    <img src="{{ asset('images/profil/'.$profil->gambar) }}" class="img-fluid center" alt=""
                        data-aos="zoom-out" data-aos-delay="50" width="60%">
                </div>
                <div class="row">
                    <div class="col">
                    </div>
                    <div class="col-md-9">
                        <div class="card text-justify">
                            <div class="card-body" style="border=0">
                                {!!$profil->keterangan!!}
                            </div>
                        </div>
                    </div>
                    <div class="col">
                    </div>
                    <!-- <div class="row gy-4">
                    <div class="col-lg-12">
                        {!!$profil->keterangan!!}
                    </div>
                </div> -->
                    @endforeach
                </div>
        </section>

        <!-- Section Artikel -->
        <section id="artikel" class="testimonials">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Artikel</h2>
                </div>

                <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                        @foreach($artikels as $artikel)
                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <img src="{{ asset('images/artikel/'.$artikel->gambar) }}" width="100">
                                            <h3 class="text-center">{{$artikel->judul}}</h3>
                                        </div>
                                    </div>
                                    <p class="text-center">
                                        {!! \Illuminate\Support\Str::limit(($artikel->isi), '500') !!}<br>
                                    </p>
                                    <a href="{{ url('profils')}}" class="btn btn-success text-center">Baca
                                        selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section>
        <hr />
        <!-- Section Proker -->
        <section id="program" class="faq">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4">

                    <div class="col-lg-4">
                        <div class="content px-xl-5">
                            <h3><strong>Program Kerja</strong> PIK Remaja Kec.Karangampel</h3>
                        </div>
                    </div>

                    <div class="col-lg-8">

                        <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">
                            @foreach($proker as $pr)
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-1">

                                        {{$pr->judul_proker}}
                                    </button>
                                </h3>
                                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        {{$pr->keterangan}}
                                    </div>
                                </div>
                            </div><!-- # Faq item-->
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Frequently Asked Questions Section -->
    </main>
    <footer id="footer" class="footer">

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-info">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span>Impact</span>
                    </a>
                    <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita
                        valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
                    <div class="social-links d-flex mt-4">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">Product Management</a></li>
                        <li><a href="#">Marketing</a></li>
                        <li><a href="#">Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>Contact Us</h4>
                    <p>
                        A108 Adam Street <br>
                        New York, NY 535022<br>
                        United States <br><br>
                        <strong>Phone:</strong> +1 5589 55488 55<br>
                        <strong>Email:</strong> info@example.com<br>
                    </p>

                </div>

            </div>
        </div>

        <div class="container mt-4">
            <div class="copyright">
                &copy; Copyright <strong><span>Impact</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
            </div>
        </div>

    </footer><!-- End Footer -->
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('Impact/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('Impact/assets/vendor/aos/aos.js')}}"></script>
    <script src="{{ asset('Impact/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{ asset('Impact/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
    <script src="{{ asset('Impact/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{ asset('Impact/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('Impact/assets/vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('Impact/assets/js/main.js')}}"></script>
    <script type="text/javascript">
    var swiper = new Swiper('.swiper-container', {
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
    </script>

</body>

</html>