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