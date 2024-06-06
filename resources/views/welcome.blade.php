@extends('layout')
@section('content')
<section class="hero bg-custom-dark">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 text-center">
                <div class="px-md-2">
                    <img class="" src="{{ asset('lugada/images/logosquare.png') }}">
                    <h2 class="text-white fw-bold f-36 mt-3 pb-2 animated fadeInDown wow" data-wow-delay=".1s">Explorez le monde avec My Lovely Planet</h2>
                    <p class="text-white f-16 mb-5 mt-4 animated fadeInDown wow" data-wow-delay=".2s">Nous concevons des outils d'exploration pour explolrer la planète : Cartes interactives, Audioguides, Exposition en Réalitée augmentée, Vues 360°, outils d'assistance aux photographes </p>


                </div>
            </div>
        </div>
</section>
<section class="py-28">
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