<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Lovely Planet</title>


    <!-- Light-box -->
    <link rel="stylesheet" href="{{ asset('web/css/mklb.css') }}" type="text/css" />

    <!-- Animate -->
    <link href="{{ asset('web/css/animate.css') }}" rel="stylesheet" />

    <!-- Icon-font -->
    <link rel="stylesheet" type="text/css" href="{{ asset('web/css/ionicons.min.css') }}">

    <!-- Basic link -->
    <link rel="stylesheet" href="{{ asset('web/css/bootstrap.min.css') }}" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('web/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('web/css/tailwind.css') }}" />
</head>

<body>

    <!-- Include the template's HTML content here -->
    <!-- Example of including a logo and navigation -->
    <div class="row">
        <div class="col-md-12">
            <div class="top-container">
                <!-- Logo -->
                <a href="#" class="logo" title="Home"><img src="{{ asset('web/img/logo.png') }}" alt=""></a>
            </div>
        </div>
    </div>

    <!-- Navigation -->

    @yield('content')
    <!-- Include JavaScript Files -->

    <!-- animated js -->
    <script src="{{ asset('web/js/wow.min.js') }}"></script>
    <!-- Light-box -->
    <script src="{{ asset('web/js/mklb.js') }}"></script>
    <!-- Counter -->
    <script src="{{ asset('web/js/counter.init.js') }}"></script>
    <script src="{{ asset('web/js/app.js') }}"></script>
</body>

</html>