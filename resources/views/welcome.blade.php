<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!--required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--twitter og-->
    <meta name="twitter:site" content="@themetags">
    <meta name="twitter:creator" content="@themetags">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="blckwnd - Creative SAAS Technology & IT Solutions Bootstrap 5 HTML Template">
    <meta name="twitter:description"
        content="blckwnd creative Saas, software technology, Saas agency & business Bootstrap 5 Html template. It is best and famous software company and Saas website template.">
    <meta name="twitter:image" content="#">

    <!--facebook og-->
    <meta property="og:url" content="#">
    <meta name="twitter:title" content="blckwnd - Creative SAAS Technology & IT Solutions Bootstrap 5 HTML Template">
    <meta property="og:description"
        content="blckwnd creative Saas, software technology, Saas agency & business Bootstrap 5 Html template. It is best and famous software company and Saas website template.">
    <meta property="og:image" content="#">
    <meta property="og:image:secure_url" content="#">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!--meta-->
    <meta name="description"
        content="blckwnd creative Saas, software technology, Saas agency & business Bootstrap 5 Html template. It is best and famous software company and Saas website template.">
    <meta name="author" content="ThemeTags">

    <!--favicon icon-->
    <link rel="icon" href="assets/img/favicon.png" type="image/png" sizes="16x16">

    <!--title-->
    <title>blckwnd - Small Businesses Around You</title>

    <!--google fonts-->
    <!--<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">-->

    <!--build:css-->
    <link rel="stylesheet" href="css/main.css">
    <!-- endbuild -->

    <!--custom css start-->
    <link rel="stylesheet" href="css/custom.css">
    <!--custom css end-->

</head>

<body>

    <!--preloader start-->
    <div id="preloader">
        <div class="preloader-wrap">
            <img src="img/favicon.png" alt="logo" class="img-fluid preloader-icon" />
            <div class="loading-bar"></div>
        </div>
    </div>
    <!--preloader end-->
    <!--main content wrapper start-->
    <div class="main-wrapper">
        <!--header section start-->
        <!--header start-->
        <header class="main-header position-absolute w-100">
            <nav class="navbar navbar-expand-xl navbar-light sticky-header">
                <div class="container d-flex align-items-center justify-content-lg-between position-relative">
                    <a href="index.html" class="navbar-brand d-flex align-items-center mb-md-0 text-decoration-none">
                        <img src="img/logo-white.png" alt="logo" class="img-fluid logo-white" />
                        <img src="img/logo-color.png" alt="logo" class="img-fluid logo-color" />
                    </a>

                    <a class="navbar-toggler position-absolute right-0 border-0" href="#offcanvasWithBackdrop"
                        role="button">
                        <span class="far fa-bars" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBackdrop"
                            aria-controls="offcanvasWithBackdrop"></span>
                    </a>
                    <div class="clearfix"></div>
                    <div class="collapse navbar-collapse justify-content-center">
                        <ul class="nav col-12 col-md-auto justify-content-center main-menu">

                            <li><a href="{{ url('/') }}" class="nav-link">Home</a></li>
                            <li><a href="{{ url('mapping') }}" class="nav-link">Mapping</a></li>
                             <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{ route('about') }}" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    About
                                </a>
                                <div class="dropdown-menu border-0 rounded-custom shadow py-0 bg-white">
                                    <div class="dropdown-grid rounded-custom width-full">
                                        <div class="dropdown-grid-item">
                                            <h6 class="drop-heading">About the Company</h6>
                                            <a href="{{ route('about') }}" class="dropdown-link">
                                                <span class="demo-list bg-primary rounded text-white fw-bold">1</span>
                                                <div class="dropdown-info">
                                                    <div class="drop-title">Our Story</div>
                                                    <p>It's for <strong>SaaS Software</strong> Company</p>
                                                </div>
                                            </a>
                                            <a href="{{ route('about') }}" class="dropdown-link">
                                                <span class="demo-list bg-primary rounded text-white fw-bold">2</span>
                                                <div class="dropdown-info">
                                                    <div class="drop-title">Meet The Team</div>
                                                    <p>Modern <strong>Saas agency</strong></p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="dropdown-grid-item radius-right-side bg-light">
                                            <h6 class="drop-heading">Ideation</h6>
                                            <a href="{{ route('about') }}l" class="dropdown-link">
                                                <span class="demo-list bg-primary rounded text-white fw-bold">8</span>
                                                <div class="dropdown-info">
                                                    <div class="drop-title">Inspiration</div>
                                                    <p>Software & <strong>Data Analysis</strong>&lrm;</p>
                                                </div>
                                            </a>
                                            <a href="{{ route('about') }}" class="dropdown-link">
                                                <span class="demo-list bg-primary rounded text-white fw-bold">9</span>
                                                <div class="dropdown-info">
                                                    <div class="drop-title">The Goal</div>
                                                    <p>IT solutions and <strong>SaaS Application</strong></p>
                                                </div>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="pricing.html" class="nav-link">Contact Us</a></li>
                            <li><a href="pricing.html" class="nav-link">News</a></li>
                        </ul>
                    </div>

                    <div class="action-btns text-end me-5 me-lg-0 d-none d-md-block d-lg-block">
                        <a href="login.html" class="btn btn-link text-decoration-none me-2">Sign In</a>
                        <a href="request-demo.html" class="btn btn-primary">Download App</a>
                    </div>
                </div>
            </nav>
            <!--offcanvas menu start-->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasWithBackdrop">
                <div class="offcanvas-header d-flex align-items-center mt-4">
                    <a href="index.html" class="d-flex align-items-center mb-md-0 text-decoration-none">
                        <img src="img/logo-color.png" alt="logo" class="img-fluid ps-2" />
                    </a>
                    <button type="button" class="close-btn text-danger" data-bs-dismiss="offcanvas" aria-label="Close">
                        <i class="far fa-close"></i>
                    </button>
                </div>
                <div class="offcanvas-body">
                    <ul class="nav col-12 col-md-auto justify-content-center main-menu">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Home
                            </a>
                            <div class="dropdown-menu border-0 rounded-custom shadow py-0 bg-white">
                                <div class="dropdown-grid rounded-custom width-half">
                                    <div class="dropdown-grid-item">
                                        <h6 class="drop-heading">Different Home</h6>
                                        <a href="index.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">1</span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Saas Company 1</div>
                                                <p>It's for <strong>SaaS Software</strong> Company</p>
                                            </div>
                                        </a>
                                        <a href="index-2.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">2</span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Saas Company 2</div>
                                                <p>Modern <strong>Saas agency</strong></p>
                                            </div>
                                        </a>
                                        <a href="index-3.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">3</span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Desktop App</div>
                                                <p><strong>Web Software</strong> Company</p>
                                            </div>
                                        </a>
                                        <a href="index-4.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">4</span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">App Landing</div>
                                                <p>App and <strong>Software</strong> Landing</p>
                                            </div>
                                        </a>
                                        <a href="index-5.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">5</span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Software Application</div>
                                                <p>
                                                    IT solutions and <strong>SaaS Application</strong>
                                                </p>
                                            </div>
                                        </a>

                                        <a href="index-6.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">6</span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Startup Agency</div>
                                                <p>Different type of <strong>Agency</strong>&lrm;</p>
                                            </div>
                                        </a>
                                        <a href="index-7.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">7</span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Data Analysis</div>
                                                <p>Software & <strong>Data Analysis</strong>&lrm;</p>
                                            </div>
                                        </a>
                                        <a href="index-8.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">8</span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">App Landing Two</div>
                                                <p>Software & <strong>App Landing Two</strong>&lrm;</p>
                                            </div>
                                        </a>
                                        <a href="index-9.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">9</span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">IT Solution</div>
                                                <p>
                                                    IT solutions and <strong>SaaS Application</strong>
                                                </p>
                                            </div>
                                        </a>
                                        <a href="index-10.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">10</span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Cyber Security</div>
                                                <p>Cyber Security <strong>Landing Page</strong></p>
                                            </div>
                                        </a>
                                        <a href="index-11.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">
                                                11
                                            </span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Crypto Currency</div>
                                                <p><strong>Crypto Currency</strong> landing page</p>
                                            </div>
                                        </a>
                                        <a href="index-12.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">
                                                12
                                            </span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Game Solutions</div>
                                                <p><strong>Game Server</strong> landing page</p>
                                            </div>
                                        </a>
                                        <a href="index-13.html" class="dropdown-link">
                                            <span class="demo-list bg-primary rounded text-white fw-bold">
                                                13
                                            </span>
                                            <div class="dropdown-info">
                                                <div class="drop-title">Payment Gateway</div>
                                                <p><strong>Payment Gateway</strong> landing page</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a href="services.html" class="nav-link">Services</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">Resources</a>
                            <div class="dropdown-menu border-0 rounded-custom shadow py-0 bg-white">
                                <div class="dropdown-grid rounded-custom width-full-3">
                                    <div class="dropdown-grid-item">
                                        <h6 class="drop-heading">Reusable Section</h6>
                                        <a href="header.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-bars"></i></span>
                                            <div class="drop-title">Navigations</div>
                                        </a>
                                        <a href="hero-sections.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-browser"></i></span>
                                            <div class="drop-title">Hero Sections</div>
                                        </a>
                                        <a href="testimonials.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-address-card"></i></span>
                                            <div class="drop-title">Testimonials</div>
                                        </a>
                                        <a href="call-to-action.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-bolt"></i></span>
                                            <div class="drop-title">Call to Action</div>
                                        </a>
                                        <a href="tab-style.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-eject"></i></span>
                                            <div class="drop-title">Tab Style</div>
                                        </a>
                                        <a href="services-style.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-code-branch"></i></span>
                                            <div class="drop-title">Services Style</div>
                                        </a>
                                        <a href="work-process.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-hourglass-start"></i></span>
                                            <div class="drop-title">Work Process</div>
                                        </a>
                                    </div>
                                    <div class="dropdown-grid-item">
                                        <h6 class="drop-heading">Reusable Section</h6>
                                        <a href="pricing-style.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-usd-square"></i></span>
                                            <div class="drop-title">Pricing Style</div>
                                        </a>
                                        <a href="accordions.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-th-list"></i></span>
                                            <div class="drop-title">Accordions</div>
                                        </a>
                                        <a href="features.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-chart-network"></i></span>
                                            <div class="drop-title">Features</div>
                                        </a>
                                        <a href="footers.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-closed-captioning"></i></span>
                                            <div class="drop-title">Footers</div>
                                        </a>

                                        <a href="team.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-user"></i></span>
                                            <div class="drop-title">Our Team</div>
                                        </a>
                                        <a href="integration-style.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-paper-plane"></i></span>
                                            <div class="drop-title">Integration Style</div>
                                        </a>
                                        <a href="blog-style.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-th-large"></i></span>
                                            <div class="drop-title">Blog Style</div>
                                        </a>
                                    </div>
                                    <div class="dropdown-grid-item last-item bg-light radius-right-side">
                                        <a href="#"><img src="img/feature-img3.jpg" alt="add"
                                                class="img-fluid rounded-custom" /></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a href="pricing.html" class="nav-link">Pricing</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">Company</a>
                            <div class="dropdown-menu border-0 rounded-custom shadow py-0 bg-white">
                                <div class="dropdown-grid rounded-custom width-full">
                                    <div class="dropdown-grid-item">
                                        <h6 class="drop-heading">Useful Links</h6>
                                        <a href="about-us.html" class="dropdown-link px-0">
                                            <span class="me-2"><i class="far fa-fingerprint"></i></span>
                                            <div class="drop-title">About Us</div>
                                        </a>
                                        <a href="contact-us.html" class="dropdown-link px-0">
                                            <span class="me-2"><i class="far fa-address-book"></i></span>
                                            <div class="drop-title">Contact Us</div>
                                        </a>
                                        <a href="services.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-code-branch"></i></span>
                                            <div class="drop-title">Services</div>
                                        </a>
                                        <a href="service-single.html" class="dropdown-link px-0">
                                            <span class="me-2"><i class="far fa-server"></i></span>
                                            <div class="drop-title">Services Single</div>
                                        </a>
                                        <a href="blog.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-th-large"></i></span>
                                            <div class="drop-title">Our Latest News</div>
                                        </a>
                                        <a href="blog-single.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-bars"></i></span>
                                            <div class="drop-title">News Details</div>
                                        </a>
                                        <a href="career.html" class="dropdown-link px-0">
                                            <span class="me-2"><i class="far fa-graduation-cap"></i></span>
                                            <div class="drop-title">Career</div>
                                        </a>
                                        <a href="career-single.html" class="dropdown-link px-0">
                                            <span class="me-2"><i class="far fa-user-graduate"></i></span>
                                            <div class="drop-title">Career Single</div>
                                        </a>
                                        <a href="integrations.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-rocket-launch"></i></span>
                                            <div class="drop-title">Integrations</div>
                                        </a>
                                        <a href="integration-single.html" class="dropdown-link px-0">
                                            <span class="me-2"><i class="far fa-paper-plane"></i></span>
                                            <div class="drop-title">Integration Single</div>
                                        </a>
                                    </div>
                                    <div class="dropdown-grid-item radius-right-side bg-light">
                                        <h6 class="drop-heading">Utility Pages</h6>
                                        <a href="style-guide.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-code-branch"></i></span>
                                            <div class="drop-title">Style Guide</div>
                                        </a>
                                        <a href="support.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-life-ring"></i></span>
                                            <div class="drop-title">Help Center</div>
                                        </a>
                                        <a href="support-single.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-headset"></i></span>
                                            <div class="drop-title">Help Details</div>
                                        </a>
                                        <a href="request-demo.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-laptop-code"></i></span>
                                            <div class="drop-title">Request for Demo</div>
                                        </a>
                                        <a href="login.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-sign-in"></i></span>
                                            <div class="drop-title">User Login</div>
                                        </a>
                                        <a href="register.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-user-plus"></i></span>
                                            <div class="drop-title">User SignUp</div>
                                        </a>
                                        <a href="password-reset.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-trash-undo"></i></span>
                                            <div class="drop-title">Recovery Account</div>
                                        </a>
                                        <a href="404.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-exclamation-triangle"></i></span>
                                            <div class="drop-title">404 Page</div>
                                        </a>
                                        <a href="coming-soon.html" class="dropdown-link">
                                            <span class="me-2"><i class="far fa-clock"></i></span>
                                            <div class="drop-title">Coming Soon</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="action-btns mt-4 ps-3">
                        <a href="login.html" class="btn btn-outline-primary me-2">Sign In</a>
                        <a href="request-demo.html" class="btn btn-primary">Get Started</a>
                    </div>
                </div>
            </div>
            <!--offcanvas menu end-->
        </header>
        <!--header end-->
        <!--header section end-->

        <!--hero section start-->
        <section class="hero-it-solution hero-nine-bg ptb-120"
            style="background: url('img/hero-9-img.png')no-repeat center center">
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

        <!--footer section start-->
        <!--footer section start-->
        <footer class="footer-section">
            <!--footer top start-->
            <!--for light footer add .footer-light class and for dark footer add .bg-dark .text-white class-->
            <div class="footer-top  bg-gradient text-white ptb-120"
                style="background: url('assets/img/page-header-bg.svg')no-repeat bottom right">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-md-8 col-lg-4 mb-md-4 mb-lg-0">
                            <div class="footer-single-col">
                                <div class="footer-single-col mb-4">
                                    <img src="img/logo-white.png" alt="logo" class="img-fluid logo-white">
                                    <img src="img/logo-color.png" alt="logo" class="img-fluid logo-color">
                                </div>
                                <p>Our latest news, articles, and resources, we will sent to
                                    your inbox weekly.</p>

                                <form class="newsletter-form position-relative d-block d-lg-flex d-md-flex">
                                    <input type="text" class="input-newsletter form-control me-2"
                                        placeholder="Enter your email" name="email" required="" autocomplete="off">
                                    <input type="submit" value="Subscribe" data-wait="Please wait..."
                                        class="btn btn-primary mt-3 mt-lg-0 mt-md-0">
                                </form>
                                <div class="ratting-wrap mt-4">
                                    <h6 class="mb-0">10/10 Overall rating</h6>
                                    <ul class="list-unstyled rating-list list-inline mb-0">
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-7 mt-4 mt-md-0 mt-lg-0">
                            <div class="row">
                                <div class="col-md-4 col-lg-4 mt-4 mt-md-0 mt-lg-0">
                                    <div class="footer-single-col">
                                        <h3>Primary Pages</h3>
                                        <ul class="list-unstyled footer-nav-list mb-lg-0">
                                            <li><a href="index.html" class="text-decoration-none">Home</a></li>
                                            <li><a href="about-us.html" class="text-decoration-none">About Us</a></li>
                                            <li><a href="services.html" class="text-decoration-none">Services</a></li>
                                            <li><a href="career.html" class="text-decoration-none">Career</a></li>
                                            <li><a href="integrations.html"
                                                    class="text-decoration-none">Integrations</a>
                                            </li>
                                            <li><a href="integration-single.html"
                                                    class="text-decoration-none">Integration Single</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 mt-4 mt-md-0 mt-lg-0">
                                    <div class="footer-single-col">
                                        <h3>Pages</h3>
                                        <ul class="list-unstyled footer-nav-list mb-lg-0">
                                            <li><a href="pricing.html" class="text-decoration-none">Pricing</a></li>
                                            <li><a href="blog.html" class="text-decoration-none">Blog</a></li>
                                            <li><a href="blog-single.html" class="text-decoration-none">Blog Details</a>
                                            </li>
                                            <li><a href="contact-us.html" class="text-decoration-none">Contact</a></li>
                                            <li><a href="career-single.html" class="text-decoration-none">Career
                                                    Single</a>
                                            </li>
                                            <li><a href="service-single.html" class="text-decoration-none">Services
                                                    Single</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 mt-4 mt-md-0 mt-lg-0">
                                    <div class="footer-single-col">
                                        <h3>Template</h3>
                                        <ul class="list-unstyled footer-nav-list mb-lg-0">
                                            <li><a href="contact-us.html" class="text-decoration-none">Contact</a></li>
                                            <li><a href="support.html" class="text-decoration-none">Support</a></li>
                                            <li><a href="support-single.html" class="text-decoration-none">Support
                                                    Single</a></li>
                                            <li><a href="team.html" class="text-decoration-none">Our Team</a></li>
                                            <li><a href="client-review.html" class="text-decoration-none">Customer
                                                    Review</a></li>
                                            <li><a href="career-single.html" class="text-decoration-none">Career
                                                    Single</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--footer top end-->

            <!--footer bottom start-->
            <div class="footer-bottom  bg-gradient text-white py-4">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-md-7 col-lg-7">
                            <div class="copyright-text">
                                <p class="mb-lg-0 mb-md-0">&copy; 2022 Blckwnd Rights Reserved. Developed By <a
                                        href="https://futurebasics.co.tz/" class="text-decoration-none">ThemeTags</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="footer-single-col text-start text-lg-end text-md-end">
                                <ul class="list-unstyled list-inline footer-social-list mb-0">
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-github"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--footer bottom end-->
        </footer>
        <!--footer section end-->
        <!--footer section end-->
    </div>


    <!--build:js-->
    <script src="js/vendors/jquery-3.6.0.min.js"></script>
    <script src="js/vendors/bootstrap.bundle.min.js"></script>
    <script src="js/vendors/swiper-bundle.min.js"></script>
    <script src="js/vendors/jquery.magnific-popup.min.js"></script>
    <script src="js/vendors/parallax.min.js"></script>
    <script src="js/vendors/aos.js"></script>
    <script src="js/app.js"></script>
    <!--endbuild-->
</body>

</html>
