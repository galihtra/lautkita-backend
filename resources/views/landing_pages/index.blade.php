@extends('landing_pages.layouts.main')

@section('title', 'Wadah Konservasi Kelautan')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('header')
<header class="foi-header landing-header"
style="background-image: url(../img/bg_1@2x.svg), url(../img/bg_2@2x.svg);">
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light foi-navbar">
        <a class="navbar-brand" href="index.html">
            <img src="img/logo-LautKita.svg" alt="FOI">
        </a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
            data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item {{ request()->is('landingpage') ? 'active' : '' }}">
                    <a class="nav-link text-primary" href="{{ route('landingpage') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="pagesMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                    <div class="dropdown-menu" aria-labelledby="pagesMenu">
                        <a class="dropdown-item" href="blog.html">Blog</a>
                        <a class="dropdown-item" href="login.html">Login</a>
                        <a class="dropdown-item" href="register.html">Register</a>
                    </div>
                </li>
            </ul>
            
            <ul class="navbar-nav mt-2 mt-lg-0">
                <li class="nav-item mr-2 mb-3 mb-lg-0">
                    <a class="btn btn-secondary" href="{{ route('register') }}">Sign up</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-secondary" href="{{ route('login') }}">Login</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="header-content">
        <div class="row">
            <div class="col-md-6">
                <h1>Great app that makes your life awesome</h1>
                <p class="text-dark">He has led a remarkable campaign, defying the traditional mainstream
                    parties courtesy of his En Marche! movement.</p>
                <button class="btn btn-primary mb-4">Get Started</button>
                <div class="my-2">
                    <p class="header-app-download-title">GET OUR MOBILE APP</p>
                </div>
                <div>
                    <button class="btn btn-app-download mr-2"><img src="img/ios.svg" alt="App store"></button>
                    <button class="btn btn-app-download"><img src="img/android.svg" alt="play store"></button>
                </div>
            </div>
            <div class="col-md-6">
                <img src="img/app1_3d.svg" alt="app" width="430px" " class="img-fluid">
            </div>
        </div>
    </div>
</div>
</header>
@endsection

@section('main')
    <section class="py-5 mb-5">
        <div class="container">
            <h2 class="section-title">Application Features</h2>
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h5>Secure Data</h5>
                    <p class="text-dark">No matter what kind of home you have to share, you can increase your earnings.
                    </p>
                    <p class="mb-5"><a href="#!" class="text-primary mb-5">Find out More</a></p>
                    <h5>Fully functional</h5>
                    <p class="text-dark">No matter what kind of home you have to share, you can increase your earnings.
                    </p>
                    <p class="mb-5"><a href="#!" class="text-primary mb-5">Find out More</a></p>
                </div>
                <div class="col-lg-4 mb-3 mb-lg-0">
                    <h5>Live Chat</h5>
                    <p class="text-dark">No matter what kind of home you have to share, you can increase your earnings.
                    </p>
                    <p class="mb-5"><a href="#!" class="text-primary mb-5">Find out More</a></p>
                    <h5>Powerful dashboard</h5>
                    <p class="text-dark">No matter what kind of home you have to share, you can increase your earnings.
                    </p>
                    <p class="mb-5"><a href="#!" class="text-primary mb-5">Find out More</a></p>
                </div>
                <div class="col-lg-4">
                    <h6 class="text-gray font-os font-weight-semibold">Trusted by the world's best</h6>
                    <div id="landingClientCarousel" class="carousel slide landing-client-carousel" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <div class="d-flex flex-wrap justify-content-center">
                                    <div class="clients-logo">
                                        <img src="img/clients/slack.svg" alt="Slack" class="img-fluid">
                                    </div>
                                    <div class="clients-logo">
                                        <img src="img/clients/spotify.svg" alt="Spotify" class="img-fluid">
                                    </div>
                                    <div class="clients-logo">
                                        <img src="img/clients/paypal.svg" alt="Paypal" class="img-fluid">
                                    </div>
                                    <div class="clients-logo">
                                        <img src="img/clients/amazon.svg" alt="Amazon" class="img-fluid">
                                    </div>
                                    <div class="clients-logo">
                                        <img src="img/clients/google.svg" alt="Google" class="img-fluid">
                                    </div>
                                    <div class="clients-logo">
                                        <img src="img/clients/samsung.svg" alt="Samsung" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="d-flex flex-wrap justify-content-center">
                                    <div class="clients-logo">
                                        <img src="img/clients/slack.svg" alt="Slack" class="img-fluid">
                                    </div>
                                    <div class="clients-logo">
                                        <img src="img/clients/spotify.svg" alt="Spotify" class="img-fluid">
                                    </div>
                                    <div class="clients-logo">
                                        <img src="img/clients/paypal.svg" alt="Paypal" class="img-fluid">
                                    </div>
                                    <div class="clients-logo">
                                        <img src="img/clients/amazon.svg" alt="Amazon" class="img-fluid">
                                    </div>
                                    <div class="clients-logo">
                                        <img src="img/clients/google.svg" alt="Google" class="img-fluid">
                                    </div>
                                    <div class="clients-logo">
                                        <img src="img/clients/samsung.svg" alt="Samsung" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="d-flex flex-wrap justify-content-center">
                                    <div class="clients-logo">
                                        <img src="img/clients/slack.svg" alt="Slack" class="img-fluid">
                                    </div>
                                    <div class="clients-logo">
                                        <img src="img/clients/spotify.svg" alt="Spotify" class="img-fluid">
                                    </div>
                                    <div class="clients-logo">
                                        <img src="img/clients/paypal.svg" alt="Paypal" class="img-fluid">
                                    </div>
                                    <div class="clients-logo">
                                        <img src="img/clients/amazon.svg" alt="Amazon" class="img-fluid">
                                    </div>
                                    <div class="clients-logo">
                                        <img src="img/clients/google.svg" alt="Google" class="img-fluid">
                                    </div>
                                    <div class="clients-logo">
                                        <img src="img/clients/samsung.svg" alt="Samsung" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ol class="carousel-indicators">
                            <li data-target="#landingClientCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#landingClientCarousel" data-slide-to="1"></li>
                            <li data-target="#landingClientCarousel" data-slide-to="2"></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-5 mb-md-0">
                    <img src="img/app2_3d.svg" alt="special offers" class="img-fluid" width="492px">
                </div>
                <div class="col-md-6">
                    <h2 class="section-title">Get special offers on the things you love</h2>
                    <p class="mb-5">He has led a remarkable campaign, defying the traditional mainstream parties
                        courtesy of his En Marche! movement. For many, however, the campaign has become less about
                        backing Macron and instead about voting against Le Pen, the National Front candidate.</p>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="media landing-feature">
                                <span class="landing-feature-icon"></span>
                                <div class="media-body">
                                    <h5>Essentials</h5>
                                    <p>All the basics for businesses that are just getting started.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="media landing-feature">
                                <span class="landing-feature-icon"></span>
                                <div class="media-body">
                                    <h5>Premium</h5>
                                    <p>All the basics for businesses that are just getting started.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="media landing-feature">
                                <span class="landing-feature-icon"></span>
                                <div class="media-body">
                                    <h5>Standard</h5>
                                    <p>All the basics for businesses that are just getting started.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 mb-5">
        <div class="container">
            <h2>Choose the plan that’s right for yor business</h2>
            <p class="text-muted mb-5">Thank you for your very professional and prompt response. I wished I had found
                you before </p>
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card pricing-card border-warning">
                        <div class="card-body">
                            <h3 class="mb-1">Starter</h3>
                            <h3 class="mb-1 text-warning">Free</h3>
                            <p class="payment-period">Per month</p>
                            <p class="mb-4">Thank you for your very professional and prompt response.</p>
                            <button class="btn btn-outline-warning btn-rounded">Get Started</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card pricing-card border-primary active">
                        <div class="card-body">
                            <h3>Popular</h3>
                            <h3 class="text-primary">$23.00</h3>
                            <p class="payment-period">Per month</p>
                            <p class="mb-4">Thank you for your very professional and prompt response.</p>
                            <button class="btn btn-primary btn-rounded">Get Started</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card pricing-card border-success">
                        <div class="card-body">
                            <h3>Enterprise</h3>
                            <h3 class="text-success">$40.00</h3>
                            <p class="payment-period">Per month</p>
                            <p class="mb-4">Thank you for your very professional and prompt response.</p>
                            <button class="btn btn-outline-success btn-rounded">Get Started</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 mb-5">
        <div class="container">
            <h2>Satisfied Users</h2>
            <p class="text-muted mb-5">Thank you for your very professional and prompt response. I wished I had found
                you before </p>
            <div class="row">
                <div class="col-md-4 foi-review mb-5 mb-md-0">
                    <div class="foi-rating">
                        <span class="fas fa-star checked"></span>
                        <span class="fas fa-star checked"></span>
                        <span class="fas fa-star checked"></span>
                        <span class="fas fa-star checked"></span>
                        <span class="fas fa-star checked"></span>
                    </div>
                    <h5 class="foi-review-heading">Great support available</h5>
                    <p class="foi-review-content">Thank you for your very professional and prompt response. I wished I
                        had found you before I spent money on a competitors theme.</p>
                    <div class="media foi-review-user">
                        <img src="img/avatar/avatar_11.jpg" alt="user" class="avatar">
                        <div class="media-body">
                            <h6 class="mb-0">Amarachi Nkechi</h6>
                            <p>UX Designer</p>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 foi-review mb-5 mb-md-0">
                    <div class="foi-rating">
                        <span class="fas fa-star checked"></span>
                        <span class="fas fa-star checked"></span>
                        <span class="fas fa-star checked"></span>
                        <span class="fas fa-star checked"></span>
                        <span class="fas fa-star checked"></span>
                    </div>
                    <h5 class="foi-review-heading">Great support available</h5>
                    <p class="foi-review-content">Thank you for your very professional and prompt response. I wished I
                        had found you before I spent money on a competitors theme.</p>
                    <div class="media foi-review-user">
                        <img src="img/avatar/avatar_12.jpg" alt="user" class="avatar">
                        <div class="media-body">
                            <h6 class="mb-0">Margje Jutten</h6>
                            <p>Developer</p>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 foi-review mb-5 mb-md-0">
                    <div class="foi-rating">
                        <span class="fas fa-star checked"></span>
                        <span class="fas fa-star checked"></span>
                        <span class="fas fa-star checked"></span>
                        <span class="fas fa-star checked"></span>
                        <span class="fas fa-star checked"></span>
                    </div>
                    <h5 class="foi-review-heading">Great support available</h5>
                    <p class="foi-review-content">Thank you for your very professional and prompt response. I wished I
                        had found you before I spent money on a competitors theme.</p>
                    <div class="media foi-review-user">
                        <img src="img/avatar/avatar_13.jpg" alt="user" class="avatar">
                        <div class="media-body">
                            <h6 class="mb-0">Monica Böttger</h6>
                            <p>UX Designer</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="py-5 mb-5">
        <div class="container">
            <h2>FAQ</h2>
            <p class="section-subtitle">Frequently Asked Questions</p>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card mb-3 landing-faq-card">
                        <div class="card-header bg-white" id="faqOneTitle">
                            <a href="#faqOneCollapse" class="d-flex align-items-center" data-toggle="collapse">
                                <h6 class="mb-0">What is Foi app?</h6> <i class="far fa-plus-square ml-auto"></i>
                            </a>
                        </div>
                        <div id="faqOneCollapse" class="collapse" aria-labelledby="faqOneTitle">
                            <div class="card-body">
                                <p class="mb-0 text-gray">Lorem Ipsum has been the industry's standard dummy text ever
                                    since the 1500s, when an unknown printer took a galley of type and scrambled it to
                                    make a type specimen book.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3 landing-faq-card">
                        <div class="card-header bg-white" id="faqTwoTitle">
                            <a href="#faqTwoCollapse" class="d-flex align-items-center" data-toggle="collapse">
                                <h6 class="mb-0">Why should I use Foi app?</h6> <i
                                    class="far fa-plus-square ml-auto"></i>
                            </a>
                        </div>
                        <div id="faqTwoCollapse" class="collapse" aria-labelledby="faqTwoTitle">
                            <div class="card-body">
                                <p class="mb-0 text-gray">Lorem Ipsum has been the industry's standard dummy text ever
                                    since the 1500s, when an unknown printer took a galley of type and scrambled it to
                                    make a type specimen book.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3 landing-faq-card">
                        <div class="card-header bg-white" id="faqThreeTitle">
                            <a href="#faqThreeCollapse" class="d-flex align-items-center" data-toggle="collapse">
                                <h6 class="mb-0">How can I use Foi app?</h6> <i class="far fa-plus-square ml-auto"></i>
                            </a>
                        </div>
                        <div id="faqThreeCollapse" class="collapse" aria-labelledby="faqThreeTitle">
                            <div class="card-body">
                                <p class="mb-0 text-gray">Lorem Ipsum has been the industry's standard dummy text ever
                                    since the 1500s, when an unknown printer took a galley of type and scrambled it to
                                    make a type specimen book.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card mb-3 landing-faq-card">
                        <div class="card-header bg-white" id="faqFourTitle">
                            <a href="#faqFourCollapse" class="d-flex align-items-center" data-toggle="collapse">
                                <h6 class="mb-0">Who will see my updates?</h6> <i
                                    class="far fa-plus-square ml-auto"></i>
                            </a>
                        </div>
                        <div id="faqFourCollapse" class="collapse" aria-labelledby="faqFourTitle">
                            <div class="card-body">
                                <p class="mb-0 text-gray">Lorem Ipsum has been the industry's standard dummy text ever
                                    since the 1500s, when an unknown printer took a galley of type and scrambled it to
                                    make a type specimen book.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3 landing-faq-card">
                        <div class="card-header bg-white" id="faqFiveTitle">
                            <a href="#faqFiveCollapse" class="d-flex align-items-center" data-toggle="collapse">
                                <h6 class="mb-0">Can people see my connections?</h6> <i
                                    class="far fa-plus-square ml-auto"></i>
                            </a>
                        </div>
                        <div id="faqFiveCollapse" class="collapse" aria-labelledby="faqFiveTitle">
                            <div class="card-body">
                                <p class="mb-0 text-gray">Lorem Ipsum has been the industry's standard dummy text ever
                                    since the 1500s, when an unknown printer took a galley of type and scrambled it to
                                    make a type specimen book.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3 landing-faq-card">
                        <div class="card-header bg-white" id="faqSixTitle">
                            <a href="#faqSixCollapse" class="d-flex align-items-center" data-toggle="collapse">
                                <h6 class="mb-0">Being a user, what all rights I have?</h6> <i
                                    class="far fa-plus-square ml-auto"></i>
                            </a>
                        </div>
                        <div id="faqSixCollapse" class="collapse" aria-labelledby="faqSixTitle">
                            <div class="card-body">
                                <p class="mb-0 text-gray">Lorem Ipsum has been the industry's standard dummy text ever
                                    since the 1500s, when an unknown printer took a galley of type and scrambled it to
                                    make a type specimen book.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
