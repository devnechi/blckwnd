@extends('layouts.public_lay')

@section('content')
       <!--hero section start-->
        <section class="hero-it-solution hero-nine-bg ptb-120" style="background: url('img/hero-9-img.png')no-repeat center center">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-10">
                        <div class="hero-content-wrap mt-5 mt-lg-0 mt-xl-0">
                            <h1 class="fw-bold display-5">We Care Your any IT Solution</h1>
                            <p class="lead">
                                Proactively coordinate quality quality vectors vis-a-vis supply
                                chains. Quickly engage client-centric web services.
                            </p>
                            <div class="action-btn mt-5 align-items-center d-block d-sm-flex d-lg-flex d-md-flex">
                                <a href="request-demo.html" class="btn btn-primary me-3">Request For Demo</a>
                                <a href="http://www.youtube.com/watch?v=hAP2QF--2Dg"
                                    class="text-decoration-none popup-youtube d-inline-flex align-items-center watch-now-btn mt-3 mt-lg-0 mt-md-0 text-primary">
                                    <i class="fas fa-play text-primary border-2 border-primary"></i>
                                    Watch Demo
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hero-img position-relative mt-5 mt-lg-0">
                            <img src="img/banner_image.png" alt="hero hero-it-solution " class="img-fluid" />
                            <div class="dots">
                                <img src="img/banner_dot.png" alt="dot" class="dot-1" />
                                <img src="img/banner_dot.png" alt="dot" class="dot-2" />
                            </div>
                            <div class="bubble">
                                <span class="bubble-1"></span>
                                <span class="bubble-2"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--hero section end-->

        <!-- About Start -->
        <section class="ptb-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-left text-lg-center mb-32 mb-lg-0">
                            <img src="img/about.jpg" alt="" class="img-fluid" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-right">
                            <h4 class="text-primary h5 mb-3">Why Choose Us</h4>
                            <h2 class="mb-4">
                                We are working with <br />
                                15 years exprience
                            </h2>
                            <p>
                                There are many variations of passages of Lorem Ipsum available, but
                                the majority have suffered alteration in some form, by injected
                                humour
                            </p>
                            <ul class="list-unstyled d-flex flex-wrap list-two-col mt-4 mb-4">
                                <li class="py-1">
                                    <div class="d-flex about-icon-box align-items-center">
                                        <div class="me-3">
                                            <img src="img/pie-chart.png" alt="" />
                                        </div>
                                        <div>
                                            <h5>Expert around the world</h5>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-1">
                                    <div class="d-flex about-icon-box align-items-center">
                                        <div class="me-3">
                                            <img src="img/team.png" alt="" />
                                        </div>
                                        <div>
                                            <h5>Best Practice For Business</h5>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                            <ul class="list-unstyled d-flex flex-wrap list-two-col mt-4 mb-4">
                                <li class="py-1">
                                    <i class="fad fa-check-circle me-2 text-primary"></i>
                                    Digital Conference
                                </li>
                                <li class="py-1">
                                    <i class="fad fa-check-circle me-2 text-primary"></i>
                                    Greate Speckers
                                </li>
                                <li class="py-1">
                                    <i class="fad fa-check-circle me-2 text-primary"></i>Event
                                    Management
                                </li>
                                <li class="py-1">
                                    <i class="fad fa-check-circle me-2 text-primary"></i>
                                    Have Fun on Event
                                </li>
                                <li class="py-1">
                                    <i class="fad fa-check-circle me-2 text-primary"></i>Sales
                                    compliance
                                </li>
                                <li class="py-1">
                                    <i class="fad fa-check-circle me-2 text-primary"></i>
                                    Showcasing success
                                </li>
                            </ul>
                            <a href="#" class="link-with-icon text-decoration-none mt-3 btn btn-primary">
                                Learn More
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About End -->

        <!-- tech tabs start -->
        <section class="ptb-120 bg-dark">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="text-center">
                            <h2>We Build any Kind Of Technology</h2>
                            <p>
                                Credibly grow premier ideas rather than bricks-and-clicks strategic
                                theme areas distributed for stand-alone web-readiness.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="service-tabs">
                            <ul class="nav nav-pills d-flex justify-content-center" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active me-4" id="pills-home-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                        aria-selected="true">
                                        <i class="fas fa-desktop me-3"></i>
                                        <span>Web Design</span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link me-4" id="pills-profile-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-profile" type="button" role="tab"
                                        aria-controls="pills-profile" aria-selected="false">
                                        <i class="fas fa-tablet-alt me-3"></i>
                                        <span>App Development</span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-contact" type="button" role="tab"
                                        aria-controls="pills-contact" aria-selected="false">
                                        <i class="fas fa-vector-square me-2"></i>
                                        <span>UX/UI Design</span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <div class="tab-content-wrapper pt-60">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="text-center mb-5 mb-lg-0">
                                            <img src="img/tab_img1.png" alt="" class="img-fluid" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="tab-right-content">
                                            <h2>
                                                We are working with <br />
                                                15 years exprience
                                            </h2>
                                            <p>
                                                Continually network effective bandwidth whereas
                                                goal-oriented schemas. Intrinsicly incentivize corporate
                                                synergy with accurate task bricks-and-clicks leadership
                                                skills.
                                            </p>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <i class="fas fa-check text-primary"></i>
                                                    <span>Digital Conferance</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-check text-primary"></i>
                                                    <span>Great Speak</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-check text-primary"></i>
                                                    <span>Event Mangement</span>
                                                </li>
                                            </ul>
                                            <a href="#" class="text-white link-with-icon text-decoration-none">
                                                Know More About Us
                                                <i class="fas fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <div class="tab-content-wrapper pt-60">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="pe-5 mb-5 mb-lg-0">
                                            <img src="img/tab_img2.png" alt="" class="img-fluid" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="tab-right-content">
                                            <h2>Automation Power</h2>
                                            <p>
                                                Continually network effective bandwidth whereas
                                                goal-oriented schemas. Intrinsicly incentivize corporate
                                                synergy with accurate task bricks-and-clicks leadership
                                                skills.
                                            </p>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <i class="fas fa-check text-primary"></i>
                                                    <span>Digital Conferance</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-check text-primary"></i>
                                                    <span>Great Speak</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-check text-primary"></i>
                                                    <span>Event Mangement</span>
                                                </li>
                                            </ul>
                                            <a href="#" class="text-white link-with-icon text-decoration-none">
                                                Know More About Us
                                                <i class="fas fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab">
                            <div class="tab-content-wrapper pt-60">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="mb-5 mb-lg-0">
                                            <img src="img/tab_img3.png" alt="" class="img-fluid" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="tab-right-content">
                                            <h2>Advanced Technology</h2>
                                            <p>
                                                Continually network effective bandwidth whereas
                                                goal-oriented schemas. Intrinsicly incentivize corporate
                                                synergy with accurate task bricks-and-clicks leadership
                                                skills.
                                            </p>
                                            <ul class="list-unstyled">
                                                <li>
                                                    <i class="fas fa-check text-primary"></i>
                                                    <span>Digital Conferance</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-check text-primary"></i>
                                                    <span>Great Speak</span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-check text-primary"></i>
                                                    <span>Event Mangement</span>
                                                </li>
                                            </ul>
                                            <a href="#" class="text-white link-with-icon text-decoration-none">
                                                Know More About Us
                                                <i class="fas fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- taech tabs end -->

        <!-- app two feature three start -->
        <section class="services-icon ptb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-10">
                        <div class="section-heading text-center">
                            <h2>Services We Provide</h2>
                            <p>
                                Credibly grow premier ideas rather than bricks-and-clicks strategic
                                theme areas distributed for stand-alone web-readiness.
                            </p>
                        </div>
                        ,
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 p-0">
                        <div class="single-service p-lg-5 p-4 text-center mt-3 border-bottom border-end">
                            <div class="service-icon icon-center">
                                <img src="img/service/coding.png" alt="service icon" width="65" height="65" />
                            </div>
                            <div class="service-info-wrap">
                                <h3 class="h5">Web Development</h3>
                                <p>
                                    Holisticly morph distinctive methodologies and vertical e-tailers.
                                    Rapidiously grow customized data.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 p-0">
                        <div class="single-service p-lg-5 p-4 text-center mt-3 border-bottom border-end">
                            <div class="service-icon icon-center">
                                <img src="img/service/app-development.png" alt="service icon" width="65" height="65" />
                            </div>
                            <div class="service-info-wrap">
                                <h3 class="h5">App Development</h3>
                                <p>
                                    Holisticly morph distinctive methodologies and vertical e-tailers.
                                    Rapidiously grow customized data.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 p-0">
                        <div class="single-service p-lg-5 p-4 text-center mt-3 border-bottom">
                            <div class="service-icon icon-center">
                                <img src="img/service/shield.png" alt="service icon" width="65" height="65" />
                            </div>
                            <div class="service-info-wrap">
                                <h3 class="h5">Data Sceurity</h3>
                                <p>
                                    Holisticly morph distinctive methodologies and vertical e-tailers.
                                    Rapidiously grow customized data.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 p-0">
                        <div class="single-service p-lg-5 p-4 text-center border-end">
                            <div class="service-icon icon-center">
                                <img src="img/service/curve.png" alt="service icon" width="65" height="65" />
                            </div>
                            <div class="feature-info-wrap">
                                <h3 class="h5">UI/UX Design</h3>
                                <p>
                                    Holisticly morph distinctive methodologies and vertical e-tailers.
                                    Rapidiously grow customized data.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 p-0">
                        <div class="single-service p-lg-5 p-4 text-center border-end">
                            <div class="service-icon icon-center">
                                <img src="img/service/graphic-design.png" alt="service icon" width="65" height="65" />
                            </div>
                            <div class="feature-info-wrap">
                                <h3 class="h5">Graphics Design</h3>
                                <p>
                                    Holisticly morph distinctive methodologies and vertical e-tailers.
                                    Rapidiously grow customized data.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 p-0">
                        <div class="single-service p-lg-5 p-4 text-center">
                            <div class="service-icon icon-center">
                                <img src="img/service/promotion.png" alt="service icon" width="65" height="65" />
                            </div>
                            <div class="feature-info-wrap">
                                <h3 class="h5">Digital Marketing</h3>
                                <p>
                                    Holisticly morph distinctive methodologies and vertical e-tailers.
                                    Rapidiously grow customized data.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- app two feature three end -->

        <!-- portfolio start -->
        <section class="portfolio bg-light ptb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-10">
                        <div class="section-heading text-center">
                            <h2>Our Portfolio</h2>
                            <p>
                                Credibly grow premier ideas rather than bricks-and-clicks strategic
                                theme areas distributed for stand-alone web-readiness.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="tab-button mb-5">
                            <ul class="nav nav-pills d-flex justify-content-center" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all"
                                        aria-selected="true">
                                        All
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-branding-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-branding" type="button" role="tab"
                                        aria-controls="pills-branding" aria-selected="false">
                                        Branding
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-design-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-design" type="button" role="tab"
                                        aria-controls="pills-design" aria-selected="false">
                                        Design
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-logo-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-logo" type="button" role="tab" aria-controls="pills-logo"
                                        aria-selected="false">
                                        Logo
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-web-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-web" type="button" role="tab" aria-controls="pills-web"
                                        aria-selected="false">
                                        Web
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="tab-content" id="pills-tabContent">
                        <!-- All -->
                        <div class="tab-pane fade show active" id="pills-all" role="tabpanel"
                            aria-labelledby="pills-all-tab">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="single-portfolio-item mb-30">
                                        <div class="portfolio-item-img">
                                            <img src="img/portfolio/portfolio1.jpg" alt="portfolio photo"
                                                class="img-fluid" />
                                            <div class="portfolio-info">
                                                <h5>
                                                    <a href="portfolio-single.html"
                                                        class="text-decoration-none text-white">Website Design
                                                        Project</a>
                                                </h5>
                                                <div class="categories">
                                                    <span>Design,</span>
                                                    <span>Web</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-portfolio-item mb-30">
                                        <div class="portfolio-item-img">
                                            <img src="img/portfolio/portfolio2.jpg" alt="portfolio photo"
                                                class="img-fluid" />
                                            <div class="portfolio-info">
                                                <h5>
                                                    <a href="portfolio-single.html"
                                                        class="text-decoration-none text-white">Leafery Branding
                                                    </a>
                                                </h5>
                                                <div class="categories">
                                                    <span>Branding,</span>
                                                    <span>Logo</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-portfolio-item mb-30">
                                        <div class="portfolio-item-img">
                                            <img src="img/portfolio/portfolio3.jpg" alt="portfolio photo"
                                                class="img-fluid" />
                                            <div class="portfolio-info">
                                                <h5>
                                                    <a href="portfolio-single.html"
                                                        class="text-decoration-none text-white">Information Architencure
                                                    </a>
                                                </h5>
                                                <div class="categories">
                                                    <span>Branding,</span>
                                                    <span>Logo</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-portfolio-item mb-30">
                                        <div class="portfolio-item-img">
                                            <img src="img/portfolio/portfolio4.jpg" alt="portfolio photo"
                                                class="img-fluid" />
                                            <div class="portfolio-info">
                                                <h5>
                                                    <a href="portfolio-single.html"
                                                        class="text-decoration-none text-white">User Interface Design
                                                    </a>
                                                </h5>
                                                <div class="categories">
                                                    <span>Design</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-portfolio-item mb-30">
                                        <div class="portfolio-item-img">
                                            <img src="img/portfolio/portfolio5.jpg" alt="portfolio photo"
                                                class="img-fluid" />
                                            <div class="portfolio-info">
                                                <h5>
                                                    <a href="portfolio-single.html"
                                                        class="text-decoration-none text-white">Information Architencure
                                                    </a>
                                                </h5>
                                                <div class="categories">
                                                    <span>Branding,</span>
                                                    <span>Logo</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-portfolio-item mb-30">
                                        <div class="portfolio-item-img">
                                            <img src="img/portfolio/portfolio6.jpg" alt="portfolio photo"
                                                class="img-fluid" />
                                            <div class="portfolio-info">
                                                <h5>
                                                    <a href="portfolio-single.html"
                                                        class="text-decoration-none text-white">Branding & Corporate
                                                        Identity
                                                    </a>
                                                </h5>
                                                <div class="categories">
                                                    <span>Branding,</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Branding -->
                        <div class="tab-pane fade" id="pills-branding" role="tabpanel"
                            aria-labelledby="pills-branding-tab">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="single-portfolio-item mb-30">
                                        <div class="portfolio-item-img">
                                            <img src="img/portfolio/portfolio2.jpg" alt="portfolio photo"
                                                class="img-fluid" />
                                            <div class="portfolio-info">
                                                <h5>
                                                    <a href="portfolio-single.html"
                                                        class="text-decoration-none text-white">Leafery Branding
                                                    </a>
                                                </h5>
                                                <div class="categories">
                                                    <span>Branding,</span>
                                                    <span>Logo</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-portfolio-item mb-30">
                                        <div class="portfolio-item-img">
                                            <img src="img/portfolio/portfolio3.jpg" alt="portfolio photo"
                                                class="img-fluid" />
                                            <div class="portfolio-info">
                                                <h5>
                                                    <a href="portfolio-single.html"
                                                        class="text-decoration-none text-white">Information Architencure
                                                    </a>
                                                </h5>
                                                <div class="categories">
                                                    <span>Branding,</span>
                                                    <span>Logo</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-portfolio-item mb-30">
                                        <div class="portfolio-item-img">
                                            <img src="img/portfolio/portfolio4.jpg" alt="portfolio photo"
                                                class="img-fluid" />
                                            <div class="portfolio-info">
                                                <h5>
                                                    <a href="portfolio-single.html"
                                                        class="text-decoration-none text-white">User Interface Design
                                                    </a>
                                                </h5>
                                                <div class="categories">
                                                    <span>Design</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Design -->
                        <div class="tab-pane fade" id="pills-design" role="tabpanel" aria-labelledby="pills-design-tab">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="single-portfolio-item mb-30">
                                        <div class="portfolio-item-img">
                                            <img src="img/portfolio/portfolio1.jpg" alt="portfolio photo"
                                                class="img-fluid" />
                                            <div class="portfolio-info">
                                                <h5>
                                                    <a href="portfolio-single.html"
                                                        class="text-decoration-none text-white">Website Design
                                                        Project</a>
                                                </h5>
                                                <div class="categories">
                                                    <span>Design,</span>
                                                    <span>Web</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-portfolio-item mb-30">
                                        <div class="portfolio-item-img">
                                            <img src="img/portfolio/portfolio5.jpg" alt="portfolio photo"
                                                class="img-fluid" />
                                            <div class="portfolio-info">
                                                <h5>
                                                    <a href="portfolio-single.html"
                                                        class="text-decoration-none text-white">Information Architencure
                                                    </a>
                                                </h5>
                                                <div class="categories">
                                                    <span>Branding,</span>
                                                    <span>Logo</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-portfolio-item mb-30">
                                        <div class="portfolio-item-img">
                                            <img src="img/portfolio/portfolio6.jpg" alt="portfolio photo"
                                                class="img-fluid" />
                                            <div class="portfolio-info">
                                                <h5>
                                                    <a href="portfolio-single.html"
                                                        class="text-decoration-none text-white">Branding & Corporate
                                                        Identity
                                                    </a>
                                                </h5>
                                                <div class="categories">
                                                    <span>Branding,</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Logo -->
                        <div class="tab-pane fade" id="pills-logo" role="tabpanel" aria-labelledby="pills-logo-tab">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="single-portfolio-item mb-30">
                                        <div class="portfolio-item-img">
                                            <img src="img/portfolio/portfolio1.jpg" alt="portfolio photo"
                                                class="img-fluid" />
                                            <div class="portfolio-info">
                                                <h5>
                                                    <a href="portfolio-single.html"
                                                        class="text-decoration-none text-white">Website Design
                                                        Project</a>
                                                </h5>
                                                <div class="categories">
                                                    <span>Design,</span>
                                                    <span>Web</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-portfolio-item mb-30">
                                        <div class="portfolio-item-img">
                                            <img src="img/portfolio/portfolio2.jpg" alt="portfolio photo"
                                                class="img-fluid" />
                                            <div class="portfolio-info">
                                                <h5>
                                                    <a href="portfolio-single.html"
                                                        class="text-decoration-none text-white">Leafery Branding
                                                    </a>
                                                </h5>
                                                <div class="categories">
                                                    <span>Branding,</span>
                                                    <span>Logo</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-portfolio-item mb-30">
                                        <div class="portfolio-item-img">
                                            <img src="img/portfolio/portfolio3.jpg" alt="portfolio photo"
                                                class="img-fluid" />
                                            <div class="portfolio-info">
                                                <h5>
                                                    <a href="portfolio-single.html"
                                                        class="text-decoration-none text-white">Information Architencure
                                                    </a>
                                                </h5>
                                                <div class="categories">
                                                    <span>Branding,</span>
                                                    <span>Logo</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Web -->
                        <div class="tab-pane fade" id="pills-web" role="tabpanel" aria-labelledby="pills-web-tab">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="single-portfolio-item mb-30">
                                        <div class="portfolio-item-img">
                                            <img src="img/portfolio/portfolio1.jpg" alt="portfolio photo"
                                                class="img-fluid" />
                                            <div class="portfolio-info">
                                                <h5>
                                                    <a href="portfolio-single.html"
                                                        class="text-decoration-none text-white">Website Design
                                                        Project</a>
                                                </h5>
                                                <div class="categories">
                                                    <span>Design,</span>
                                                    <span>Web</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-portfolio-item mb-30">
                                        <div class="portfolio-item-img">
                                            <img src="img/portfolio/portfolio5.jpg" alt="portfolio photo"
                                                class="img-fluid" />
                                            <div class="portfolio-info">
                                                <h5>
                                                    <a href="portfolio-single.html"
                                                        class="text-decoration-none text-white">Information Architencure
                                                    </a>
                                                </h5>
                                                <div class="categories">
                                                    <span>Branding,</span>
                                                    <span>Logo</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-portfolio-item mb-30">
                                        <div class="portfolio-item-img">
                                            <img src="img/portfolio/portfolio2.jpg" alt="portfolio photo"
                                                class="img-fluid" />
                                            <div class="portfolio-info">
                                                <h5>
                                                    <a href="portfolio-single.html"
                                                        class="text-decoration-none text-white">Leafery Branding
                                                    </a>
                                                </h5>
                                                <div class="categories">
                                                    <span>Branding,</span>
                                                    <span>Logo</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- portfolio end -->

        <!-- app two customer review start -->
        <section class="brand-logo ptb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-10">
                        <div class="section-heading text-center">
                            <h2>Over 500+ Companies Trusted Us</h2>
                            <p>Over 500+ Companies Trusted Us</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <ul class="brand-logo-grid list-unstyled">
                        <li>
                            <img src="img/brand-logo/1-2.png" alt="brand logo" />
                        </li>
                        <li>
                            <img src="img/brand-logo/2-1.png" alt="brand logo" />
                        </li>
                        <li>
                            <img src="img/brand-logo/3-1.png" alt="brand logo" />
                        </li>
                        <li>
                            <img src="img/brand-logo/4-1.png" alt="brand logo" />
                        </li>
                        <li>
                            <img src="img/brand-logo/5-1.png" alt="brand logo" />
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- app two customer review end -->

        <!--Testimonial  start -->
        <section class="testimonial-section bg-light ptb-120">
            <div class="container">
                <div class="row justify-content-center align-content-center">
                    <div class="col-md-10 col-lg-6">
                        <div class="section-heading text-center" data-aos="fade-up">
                            <h4 class="h5">Testimonial</h4>
                            <h2>What’s Clients Say</h2>
                            <p>
                                Credibly grow premier ideas rather than bricks-and-clicks strategic
                                theme areas distributed for stand-alone web-readiness.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="position-relative w-100" data-aos="fade-up" data-aos-delay="50">
                            <div class="swiper testimonialThreeSwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="p-4 bg-white rounded-custom position-relative shadow-sm">
                                            <p>
                                                Pellentesque nec nam aliquam sem. Ultricies lacus sed turpis
                                                tincidunt id aliquet risus. Consequat nisl vel pretium lectus
                                                quam id.
                                            </p>

                                            <div class="author d-flex">
                                                <div class="author-img me-3">
                                                    <img src="img/testimonial/author1.jpg" alt="author photo"
                                                        class="rounded-circle" width="60" height="60" />
                                                </div>
                                                <div class="author-info">
                                                    <h6 class="m-0">Alex Loverty</h6>
                                                    <span>Product Designer</span>
                                                    <ul class="review-rate mb-0 list-unstyled list-inline">
                                                        <li class="list-inline-item">
                                                            <i class="fas fa-star text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fas fa-star text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fas fa-star text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fas fa-star text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fas fa-star text-warning"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="p-4 bg-white rounded-custom position-relative shadow-sm">
                                            <p>
                                                Pellentesque nec nam aliquam sem. Ultricies lacus sed turpis
                                                tincidunt id aliquet risus. Consequat nisl vel pretium lectus
                                                quam id.
                                            </p>

                                            <div class="author d-flex">
                                                <div class="author-img me-3">
                                                    <img src="img/testimonial/author3.jpg" alt="author photo"
                                                        class="rounded-circle" width="60" height="60" />
                                                </div>
                                                <div class="author-info">
                                                    <h6 class="m-0">Aminul Islam</h6>
                                                    <span>Product Designer</span>
                                                    <ul class="review-rate mb-0 list-unstyled list-inline">
                                                        <li class="list-inline-item">
                                                            <i class="fas fa-star text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fas fa-star text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fas fa-star text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fas fa-star text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fas fa-star text-warning"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="p-4 bg-white rounded-custom position-relative shadow-sm">
                                            <p>
                                                Pellentesque nec nam aliquam sem. Ultricies lacus sed turpis
                                                tincidunt id aliquet risus. Consequat nisl vel pretium lectus
                                                quam id.
                                            </p>

                                            <div class="author d-flex">
                                                <div class="author-img me-3">
                                                    <img src="img/testimonial/author2.jpg" alt="author photo"
                                                        class="rounded-circle" width="60" height="60" />
                                                </div>
                                                <div class="author-info">
                                                    <h6 class="m-0">Neaj Morshed</h6>
                                                    <span>FrontEnd Developer</span>
                                                    <ul class="review-rate mb-0 list-unstyled list-inline">
                                                        <li class="list-inline-item">
                                                            <i class="fas fa-star text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fas fa-star text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fas fa-star text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fas fa-star text-warning"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fas fa-star text-warning"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span class="swiper-button-next"></span>
                            <span class="swiper-button-prev"></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial end -->

        <!--Testimonial  price -->
        <!-- Price Two Start-->
        <section class="price-two ptb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-10">
                        <div class="section-heading text-center">
                            <h2>
                                Get our any Service <br />
                                With Suitable Pricing
                            </h2>
                            <p>
                                Credibly grow premier ideas rather than bricks-and-clicks strategic
                                theme areas distributed for stand-alone web-readiness.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div
                            class="position-relative single-pricing-wrap rounded-custom bg-white custom-shadow p-5 mb-4 mb-lg-0">
                            <div class="pricing-header mb-32">
                                <h3 class="package-name text-primary d-block">Stater</h3>
                                <h4 class="display-6 fw-semi-bold">$29<span>/month</span></h4>
                            </div>
                            <div class="pricing-info mb-4">
                                <ul class="pricing-feature-list list-unstyled">
                                    <li>
                                        <i class="far fa-check-circle text-success me-2"></i>Create
                                        Unique Websites
                                    </li>
                                    <li>
                                        <i class="far fa-check-circle text-success me-2"></i>
                                        Automate Your Busy Work
                                    </li>
                                    <li>
                                        <i class="far fa-times-circle text-muted me-2"></i>
                                        Optimize All Your Efforts
                                    </li>
                                    <li>
                                        <i class="far fa-times-circle text-muted me-2"></i>
                                        Centralized Teams
                                    </li>
                                    <li>
                                        <i class="far fa-times-circle text-muted me-2"></i>
                                        Shareable Team Libraries
                                    </li>
                                </ul>
                            </div>
                            <a href="request-demo.html" class="btn btn-outline-primary mt-2">Get Started Now</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div
                            class="position-relative single-pricing-wrap rounded-custom bg-gradient text-white p-5 mb-4 mb-lg-0">
                            <div class="pricing-header mb-32">
                                <h3 class="package-name text-warning d-block">Advanced</h3>
                                <h4 class="display-6 fw-semi-bold">$49<span>/month</span></h4>
                            </div>
                            <div class="pricing-info mb-4">
                                <ul class="pricing-feature-list list-unstyled">
                                    <li>
                                        <i class="far fa-check-circle text-success me-2"></i>Create
                                        Unique Websites
                                    </li>
                                    <li>
                                        <i class="far fa-check-circle text-success me-2"></i>
                                        Automate Your Busy Work
                                    </li>
                                    <li>
                                        <i class="far fa-check-circle text-success me-2"></i>
                                        Optimize All Your Efforts
                                    </li>
                                    <li>
                                        <i class="far fa-times-circle text-muted me-2"></i>
                                        Centralized Teams
                                    </li>
                                    <li>
                                        <i class="far fa-times-circle text-muted me-2"></i>
                                        Shareable Team Libraries
                                    </li>
                                </ul>
                            </div>
                            <a href="request-demo.html" class="btn btn-primary mt-2">Get Started Now</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div
                            class="position-relative single-pricing-wrap rounded-custom bg-white custom-shadow p-5 mb-4 mb-lg-0">
                            <div class="pricing-header mb-32">
                                <h3 class="package-name text-primary d-block">Premium</h3>
                                <h4 class="display-6 fw-semi-bold">$69<span>/month</span></h4>
                            </div>
                            <div class="pricing-info mb-4">
                                <ul class="pricing-feature-list list-unstyled">
                                    <li>
                                        <i class="far fa-check-circle text-success me-2"></i>
                                        Create Unique Websites
                                    </li>
                                    <li>
                                        <i class="far fa-check-circle text-success me-2"></i>
                                        Automate Your Busy Work
                                    </li>
                                    <li>
                                        <i class="far fa-check-circle text-success me-2"></i>
                                        Optimize All Your Efforts
                                    </li>
                                    <li>
                                        <i class="far fa-check-circle text-success me-2"></i> Video
                                        Centralized Teams
                                    </li>
                                    <li>
                                        <i class="far fa-check-circle text-success me-2"></i> 40
                                        Shareable Team Libraries
                                    </li>
                                </ul>
                            </div>
                            <a href="request-demo.html" class="btn btn-outline-primary mt-2">Get Started Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Price Two End -->
        <!-- Testimonial end -->

        <!--cat subscribe start-->
        <section class="cta-subscribe bg-dark text-white ptb-120 position-relative overflow-hidden">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="subscribe-info-wrap text-center position-relative z-2">
                            <div class="section-heading" data-aos="fade-up">
                                <h4 class="h5 text-warning">Let's Try! Get Free Support</h4>
                                <h2>Start Your 14-Day Free Trial</h2>
                                <p>We can help you to create your dream website for better business revenue.</p>
                            </div>
                            <div class="form-block-banner mw-60 m-auto mt-5" data-aos="fade-up" data-aos-delay="50">
                                <a href="contact-us.html" class="btn btn-primary">Contact with Us</a>
                                <a href="http://www.youtube.com/watch?v=hAP2QF--2Dg"
                                    class="text-decoration-none popup-youtube d-inline-flex align-items-center watch-now-btn ms-lg-3 ms-md-3 mt-3 mt-lg-0">
                                    <i class="fas fa-play"></i> Watch Demo </a>
                            </div>
                            <ul class="nav justify-content-center subscribe-feature-list mt-4" data-aos="fade-up"
                                data-aos-delay="100">
                                <li class="nav-item">
                                    <span><i class="far fa-check-circle text-primary me-2"></i>Free 14-day trial</span>
                                </li>
                                <li class="nav-item">
                                    <span><i class="far fa-check-circle text-primary me-2"></i>No credit card
                                        required</span>
                                </li>
                                <li class="nav-item">
                                    <span><i class="far fa-check-circle text-primary me-2"></i>Support 24/7</span>
                                </li>
                                <li class="nav-item">
                                    <span><i class="far fa-check-circle text-primary me-2"></i>Cancel anytime</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light left-5"></div>
                <div class="bg-circle rounded-circle circle-shape-1 position-absolute bg-warning right-5"></div>
            </div>
        </section>
        <!--cat subscribe end-->

        <!--blog section start-->
        <section class="home-blog-section ptb-120 ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="section-heading text-center">
                            <h4 class="text-primary h5">Blog</h4>
                            <h2>Our Latest News and Update</h2>
                            <p>Assertively maximize cost effective methods of iterate team driven manufactured products
                                through equity invested via customized benefits. </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-article rounded-custom mb-4 mb-lg-0">
                            <a href="blog-single.html" class="article-img">
                                <img src="img/blog/blog-1.jpg" alt="article" class="img-fluid">
                            </a>
                            <div class="article-content p-4">
                                <div class="article-category mb-4 d-block">
                                    <a href="javascript:;"
                                        class="d-inline-block text-dark badge bg-warning-soft">Design</a>
                                </div>
                                <a href="blog-single.html">
                                    <h2 class="h5 article-title limit-2-line-text">Do you really understand the concept
                                        of product value?</h2>
                                </a>
                                <p class="limit-2-line-text">Society is fragmenting into two parallel realities. In one
                                    reality, you have infinite upside and opportunity. In the other reality, you’ll
                                    continue to see the gap between your standard of living and those at the top grow
                                    more and more.</p>

                                <a href="javascript:;">
                                    <div class="d-flex align-items-center pt-4">
                                        <div class="avatar">
                                            <img src="img/testimonial/6.jpg" alt="avatar" width="40"
                                                class="img-fluid rounded-circle me-3">
                                        </div>
                                        <div class="avatar-info">
                                            <h6 class="mb-0 avatar-name">Jane Martin</h6>
                                            <span class="small fw-medium text-muted">April 24, 2021</span>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-article rounded-custom mb-4 mb-lg-0">
                            <a href="blog-single.html" class="article-img">
                                <img src="img/blog/blog-2.jpg" alt="article" class="img-fluid">
                            </a>
                            <div class="article-content p-4">
                                <div class="article-category mb-4 d-block">
                                    <a href="javascript:;"
                                        class="d-inline-block text-dark badge bg-primary-soft">Customer</a>
                                </div>
                                <a href="blog-single.html">
                                    <h2 class="h5 article-title limit-2-line-text">Why communities help you build better
                                        products for your business</h2>
                                </a>
                                <p class="limit-2-line-text">Society is fragmenting into two parallel realities. In one
                                    reality, you have infinite upside and opportunity. In the other reality, you’ll
                                    continue to see the gap between your standard of living and those at the top grow
                                    more and more.</p>

                                <a href="javascript:;">
                                    <div class="d-flex align-items-center pt-4">
                                        <div class="avatar">
                                            <img src="img/testimonial/1.jpg" alt="avatar" width="40"
                                                class="img-fluid rounded-circle me-3">
                                        </div>
                                        <div class="avatar-info">
                                            <h6 class="mb-0 avatar-name">Veronica P. Byrd</h6>
                                            <span class="small fw-medium text-muted">April 24, 2021</span>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-article rounded-custom mb-4 mb-lg-0 mb-md-0">
                            <a href="blog-single.html" class="article-img">
                                <img src="img/blog/blog-3.jpg" alt="article" class="img-fluid">
                            </a>
                            <div class="article-content p-4">
                                <div class="article-category mb-4 d-block">
                                    <a href="javascript:;"
                                        class="d-inline-block text-dark badge bg-danger-soft">Development</a>
                                </div>
                                <a href="blog-single.html">
                                    <h2 class="h5 article-title limit-2-line-text">Why communities help you build better
                                        products</h2>
                                </a>
                                <p class="limit-2-line-text">Society is fragmenting into two parallel realities. In one
                                    reality, you have infinite upside and opportunity. In the other reality, you’ll
                                    continue to see the gap between your standard of living and those at the top grow
                                    more and more.</p>

                                <a href="javascript:;">
                                    <div class="d-flex align-items-center pt-4">
                                        <div class="avatar">
                                            <img src="img/testimonial/3.jpg" alt="avatar" width="40"
                                                class="img-fluid rounded-circle me-3">
                                        </div>
                                        <div class="avatar-info">
                                            <h6 class="mb-0 avatar-name">Martin Gilbert</h6>
                                            <span class="small fw-medium text-muted">April 24, 2021</span>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="text-center mt-5">
                        <a href="blog.html" class="btn btn-primary">View All Article</a>
                    </div>
                </div>
            </div>
        </section>
        <!--blog section end-->

        @endsection
