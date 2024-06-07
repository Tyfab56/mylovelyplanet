@extends('layout')
@section('content')
<section class="bg-custom-dark">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 text-center">
                <div class="d-flex flex-column align-items-center px-md-2 text-center">
                    <img class="w500" src="{{ asset('lugada/images/logosquare.png') }}">
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
<section class="relative py-28 bg-cover bg-no-repeat" style="background-image:{{ asset('lugada/images/blog-bg-1.png') }}">
    <div class="container">
        <div class="max-w-md  mx-auto text-center">
            <h2 class="text-3xl font-bold">Blog Section 2</h2>
            <p class="text-base font-medium text-gray-500 mt-4">Lorem Ipsum is simply dummy text of the printing and
                typesetting industry.</p>
        </div>

        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6 mt-14">
            <div class="p-6 rounded-lg bg-white">
                <img src="assets/images/blog-4.jpg" class="rounded-lg" alt="">
                <h2 class="text-xl font-bold mt-5">A Leading Global Agency In 15 Years.</h2>
                <div class="flex items-center gap-3 mt-4">
                    <div>
                        <img src="assets/images/user/img-1.jpg" class="h-10 w-10 rounded-full" alt="">
                    </div>
                    <div>
                        <h4 class="text-gray-800">Jhon catla</h4>
                        <h5 class="text-gray-500">15-12-2023</h5>
                    </div>
                </div>
                <p class="text-base font-semibold text-gray-500 mt-5">Lorem ipsum dolor sit amet consectetur Eius iusto debitis doloremque nulla reiciendis illum.</p>
                <div class="inline-block mt-6">
                    <a href="#" class="py-2 px-6 rounded-full flex items-center gap-2 font-medium text-white bg-blue-500/90 hover:bg-blue-500 transition-all duration-500">
                        Read more
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                        </span>
                    </a>
                </div>
            </div>

            <div class="p-6 rounded-lg bg-white">
                <img src="assets/images/blog-5.jpg" class="rounded-lg" alt="">
                <h2 class="text-xl font-bold mt-5">A Leading Global Agency In 15 Years.</h2>
                <div class="flex items-center gap-3 mt-4">
                    <div>
                        <img src="assets/images/user/img-2.jpg" class="h-10 w-10 rounded-full" alt="">
                    </div>
                    <div>
                        <h4 class="text-gray-800">Credon catla</h4>
                        <h5 class="text-gray-500">15-12-2023</h5>
                    </div>
                </div>
                <p class="text-base font-semibold text-gray-500 mt-5">Lorem ipsum dolor sit amet consectetur Eius iusto debitis doloremque nulla reiciendis illum.</p>
                <div class="inline-block mt-6">
                    <a href="#" class="py-2 px-6 rounded-full flex items-center gap-2 font-medium text-white bg-blue-500/90 hover:bg-blue-500 transition-all duration-500">
                        Read more
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                        </span>
                    </a>
                </div>
            </div>

            <div class="p-6 rounded-lg bg-white">
                <img src="assets/images/blog-6.jpg" class="rounded-lg" alt="">
                <h2 class="text-xl font-bold mt-5">Startup Leading Global Agency In 5 Years.</h2>
                <div class="flex items-center gap-3 mt-4">
                    <div>
                        <img src="assets/images/user/img-3.jpg" class="h-10 w-10 rounded-full" alt="">
                    </div>
                    <div>
                        <h4 class="text-gray-800">Jhon catla</h4>
                        <h5 class="text-gray-500">15-9-2023</h5>
                    </div>
                </div>
                <p class="text-base font-semibold text-gray-500 mt-5">Lorem ipsum dolor sit amet consectetur Eius iusto debitis doloremque nulla reiciendis illum.</p>
                <div class="inline-block mt-6">
                    <a href="#" class="py-2 px-6 rounded-full flex items-center gap-2 font-medium text-white bg-blue-500/90 hover:bg-blue-500 transition-all duration-500">
                        Read more
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

<section class="py-card">
    <div class="container">
        <div class="max-w-md  mx-auto text-center">
            <h2 class="text-3xl font-bold">Blog Section 6</h2>
            <p class="text-base font-medium text-gray-500 mt-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div><!-- end max-w -->

        <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-6 mt-14">
            <div class="shadow bg-white rounded-md">
                <div class="relative">
                    <div class="absolute top-0 start-0 p-2">
                        <span class="inline-flex items-center justify-center gap-2 bg-white/20 backdrop-blur-xl text-[13px] font-medium rounded-full text-white py-1 px-2"><span class="w-1.5 h-1.5 inline-block bg-white rounded-full"></span> 12 Aug 2022</span>
                    </div>
                    <img src="assets/images/blog-17.jpg" class="rounded-md" alt="">
                    <div class="absolute inset-x-0 top-auto bottom-0 p-2">
                        <div class="bg-white/50 backdrop-blur-xl p-4 rounded-md">
                            <div class="text-white text-center">
                                <h4 class="text-2xl font-semibold">Sales buildings</h4>
                                <p class="text-base font-medium mt-3">Lorenm ipsum dolor sit amet consectetur. Vitae <a href="#" class="underline">Read more</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="shadow bg-white rounded-md">
                <div class="relative">
                    <div class="absolute top-0 start-0 p-2">
                        <span class="inline-flex items-center justify-center gap-2 bg-white/20 backdrop-blur-xl text-[13px] font-medium rounded-full text-white py-1 px-2"><span class="w-1.5 h-1.5 inline-block bg-white rounded-full"></span> 15 Aug 2022</span>
                    </div>
                    <img src="assets/images/blog-18.jpg" class="rounded-md" alt="">
                    <div class="absolute inset-x-0 top-auto bottom-0 p-2">
                        <div class="bg-white/50 backdrop-blur-xl p-4 rounded-md">
                            <div class="text-white text-center">
                                <h4 class="text-2xl font-semibold">Read buildings</h4>
                                <p class="text-base font-medium mt-3">Lorenm ipsum dolor sit amet consectetur. Vitae <a href="#" class="underline">Read more</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="shadow bg-white rounded-md">
                <div class="relative">
                    <div class="absolute top-0 start-0 p-2">
                        <span class="inline-flex items-center justify-center gap-2 bg-white/20 backdrop-blur-xl text-[13px] font-medium rounded-full text-white py-1 px-2"><span class="w-1.5 h-1.5 inline-block bg-white rounded-full"></span> 22 Aug 2022</span>
                    </div>
                    <img src="assets/images/blog-19.jpg" class="rounded-md" alt="">
                    <div class="absolute inset-x-0 top-auto bottom-0 p-2">
                        <div class="bg-white/50 backdrop-blur-xl p-4 rounded-md">
                            <div class="text-white text-center">
                                <h4 class="text-2xl font-semibold">Buy buildings</h4>
                                <p class="text-base font-medium mt-3">Lorenm ipsum dolor sit amet consectetur. Vitae <a href="#" class="underline">Read more</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection