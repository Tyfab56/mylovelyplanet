@extends('layout')
@section('content')
<section class="bg-custom-dark">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 text-center">
                <div class="d-flex flex-column align-items-center px-md-2 text-center">
                    <img class="w500" src="{{ asset('web/images/logosquare.png') }}">
                    <h2 class="text-white fw-bold f-36 mt-3 pb-2 animated fadeInDown wow" data-wow-delay=".1s">
                        Explorez le monde avec My Lovely Planet
                    </h2>
                    <p class="text-white f-16 mb-5 mt-4 animated fadeInDown wow" data-wow-delay=".2s">
                        Nous concevons des outils pour explorer la planète : cartes interactives, audioguides, exposition en Réalité Augmentée, prises de vues 360°, outils d'assistance aux photographes
                    </p>
                </div>
            </div>
        </div>
</section>
<section class="relative py-28 bg-cover bg-no-repeat" style="background-image:url({{ asset('web/images/blog-bg-1.png') }})">
    <div class="container">
        <div class="max-w-md  mx-auto text-center">
            <h2 class="text-3xl font-bold">Découvrez nos sites</h2>
            <p class="text-base font-medium text-gray-500 mt-4">Cliquez sur les liens pour ouvrir dans une nouvelle page</p>
        </div>

        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6 mt-14">
            <div class="p-6 rounded-lg bg-card">

                <h2 class="text-xl font-bold">Site Internet : My Secret Map</h2>
                <div class="flex items-center gap-3 mt-3 mb-3">

                    <div>
                        <h5 class="text-gray-500">Chaque année de nouvelles destinations</h5>
                        <h5 class="text-gray-500">Islande, Comores, Réunion,...</h5>
                    </div>
                </div>
                <img src="/web/images/bg-msm.jpg" class="rounded-lg" alt="">
                <p class="text-base font-semibold text-gray-500 mt-2">Un outil pour découvrir les plus beaux sites et activités d'une selection de destinations</p>
                <div class="inline-block mt-6">
                    <a href="https://www.mysecretmap.com" target="_blank" class="py-2 px-6 rounded-full flex items-center gap-2 font-medium text-white bg-blue-500/90 hover:bg-blue-500 transition-all duration-500">
                        Voir le site
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                        </span>
                    </a>
                </div>
            </div>


        </div>
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6 mt-14">
            <div class="p-6 rounded-lg bg-card">

                <h2 class="text-xl font-bold">Site Internet : My Secret Map</h2>
                <div class="flex items-center gap-3 mt-3 mb-3">

                    <div>
                        <h5 class="text-gray-500">Chaque année de nouvelles destinations</h5>
                        <h5 class="text-gray-500">Islande, Comores, Réunion,...</h5>
                    </div>
                </div>
                <img src="/web/images/bg-msm.jpg" class="rounded-lg" alt="">
                <p class="text-base font-semibold text-gray-500 mt-2">Un outil pour découvrir les plus beaux sites et activités d'une selection de destinations</p>
                <div class="inline-block mt-6">
                    <a href="https://www.mysecretmap.com" target="_blank" class="py-2 px-6 rounded-full flex items-center gap-2 font-medium text-white bg-blue-500/90 hover:bg-blue-500 transition-all duration-500">
                        Voir le site
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                        </span>
                    </a>
                </div>
            </div>


        </div>
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6 mt-14">
            <div class="p-6 rounded-lg bg-card">

                <h2 class="text-xl font-bold">Site Internet : My Secret Map</h2>
                <div class="flex items-center gap-3 mt-3 mb-3">

                    <div>
                        <h5 class="text-gray-500">Chaque année de nouvelles destinations</h5>
                        <h5 class="text-gray-500">Islande, Comores, Réunion,...</h5>
                    </div>
                </div>
                <img src="/web/images/bg-msm.jpg" class="rounded-lg" alt="">
                <p class="text-base font-semibold text-gray-500 mt-2">Un outil pour découvrir les plus beaux sites et activités d'une selection de destinations</p>
                <div class="inline-block mt-6">
                    <a href="https://www.mysecretmap.com" target="_blank" class="py-2 px-6 rounded-full flex items-center gap-2 font-medium text-white bg-blue-500/90 hover:bg-blue-500 transition-all duration-500">
                        Voir le site
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                        </span>
                    </a>
                </div>
            </div>


        </div>
    </div><!-- end container -->
</section>


@endsection