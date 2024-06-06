<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Lovely Planet</title>


    <!-- Light-box -->
    <link rel="stylesheet" href="{{ asset('lugada/css/mklb.css') }}" type="text/css" />

    <!-- Animate -->
    <link href="{{ asset('lugada/css/animate.css') }}" rel="stylesheet" />

    <!-- Icon-font -->
    <link rel="stylesheet" type="text/css" href="{{ asset('lugada/css/ionicons.min.css') }}">

    <!-- Basic link -->
    <link rel="stylesheet" href="{{ asset('lugada/css/bootstrap.min.css') }}" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('lugada/css/style.css') }}" />
</head>

<body>

    <!-- Include the template's HTML content here -->
    <!-- Example of including a logo and navigation -->
    <div class="row">
        <div class="col-md-12">
            <div class="top-container">
                <!-- Logo -->
                <a href="#" class="logo" title="Home"><img src="{{ asset('lugada/img/logo.png') }}" alt=""></a>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <div class="navbar navbar-custom" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <i class="ion-navicon"></i>
                </button>
                <a class="navbar-brand logo" href="index.html">
                    <i class="ion-social-buffer"></i>
                    <span>Lugada</span>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ms-auto navbar-center" id="mySidenav">
                    <li class="nav-item">
                        <a href="#features" class="nav-link">Features</a>
                    </li>
                    <li class="nav-item">
                        <a href="#services" class="nav-link">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="#screenshots" class="nav-link">Screenshots</a>
                    </li>
                    <li class="nav-item">
                        <a href="#pricing" class="nav-link">Pricing</a>
                    </li>
                    <li class="dropdown nav-item">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pages <i class="ion-chevron-down-outline"></i>
                        </a>
                        <ul class="dropdown-menu arrow dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="about.html">About Us</a></li>
                            <li><a class="dropdown-item" href="contact.html">Contact</a></li>
                            <li><a class="dropdown-item" href="faq.html">FAQ</a></li>
                            <li><a class="dropdown-item" href="blog.html">Blog</a></li>
                            <li><a class="dropdown-item" href="blog-post.html">Blog-Post</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    @yield('content')
    <!-- Include JavaScript Files -->

    <!-- animated js -->
    <script src="{{ asset('lugada/js/wow.min.js') }}"></script>
    <!-- Light-box -->
    <script src="{{ asset('lugada/js/mklb.js') }}"></script>
    <!-- Counter -->
    <script src="{{ asset('lugada/js/counter.init.js') }}"></script>
    <script src="{{ asset('lugada/js/app.js') }}"></script>
</body>

</html>