<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Lovely Planet</title>

    <style>
        .top-container {
            background: #1A2B3C;
        }
        .lang-switch a {
            color: #fff;
        }
        .lang-switch a.active {
            color: #FFC107;
            font-weight: 700;
        }

        .btn-dark-brand {
            background: #1A2B3C;
            color: #FFC107;
            border: 1px solid #FFC107;
        }

        .btn-dark-brand:hover {
            background: #142030;
            color: #FFC107;
        }

        .btn-accent-brand {
            background: #FFC107;
            color: #1A2B3C;
            font-weight: 700;
        }

        .btn-accent-brand:hover {
            background: #e6ad05;
            color: #0f1824;
        }

        .card-brand {
            border: 1px solid #1A2B3C;
            transition: transform 200ms ease, box-shadow 200ms ease;
            box-shadow: 0 12px 30px -18px rgba(0, 0, 0, 0.4);
        }

        .card-brand:hover {
            transform: translateY(-4px);
            box-shadow: 0 18px 40px -16px rgba(0, 0, 0, 0.55);
        }
    </style>


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
            <div class="top-container d-flex justify-content-between align-items-center px-3 py-2">
                <!-- Logo -->
                <a href="/{{ app()->getLocale() }}/" class="logo" title="Home"><img src="{{ asset('web/img/logo.png') }}" alt=""></a>

                <div class="d-flex align-items-center gap-2 lang-switch">
                    <a href="/en/" class="text-decoration-none {{ app()->getLocale() === 'en' ? 'active' : 'opacity-75' }}">EN</a>
                    <span class="text-white-50">|</span>
                    <a href="/fr/" class="text-decoration-none {{ app()->getLocale() === 'fr' ? 'active' : 'opacity-75' }}">FR</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation -->

    @yield('content')

    @include('partials.footer')

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