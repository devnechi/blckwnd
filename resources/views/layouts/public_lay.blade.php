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

            @yield('content')
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
