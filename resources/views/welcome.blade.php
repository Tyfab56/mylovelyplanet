<!-- resources/views/welcome.blade.php -->

<!DOCTYPE html>
<html lang="en">

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
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#features">Features</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#screenshots">Screenshots</a></li>
                    <li><a href="#pricing">Pricing</a></li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown">Pages <span class="caret"></span></a>
                        <ul class="dropdown-menu arrow">
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="faq.html">Faq</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>

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