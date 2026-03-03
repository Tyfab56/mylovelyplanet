@extends('layout')

@section('content')
<section class="bg-custom-dark py-20">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 text-center">
                <div class="d-flex flex-column align-items-center px-md-2">
                    <img class="w500 mb-4" src="{{ asset('web/images/logosquare.png') }}" alt="My Lovely Planet Logo">
                    <h1 class="text-white fw-bold f-48 mt-3 pb-2 animated fadeInDown wow" data-wow-delay=".1s">
                        {{ __('home.hero_title') }}
                    </h1>
                    <p class="text-white f-18 mb-5 mt-4 animated fadeInDown wow opacity-75" data-wow-delay=".2s">
                        {{ __('home.hero_subtitle') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="relative py-28 bg-cover bg-no-repeat" style="background-image:url({{ asset('web/images/blog-bg-1.png') }})">
    <div class="container">
        <div class="max-w-2xl mx-auto text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-extrabold text-white drop-shadow">{{ __('home.section_title') }}</h2>
            <p class="text-lg md:text-xl font-semibold text-white/85 mt-5 bg-black/30 inline-block px-4 py-2 rounded-full">{{ __('home.section_subtitle') }}</p>
        </div>

        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-8 mt-14">
            
            <div class="p-6 rounded-lg bg-card card-brand">
                <span class="text-yellow-500 font-bold text-xs uppercase tracking-widest">{{ __('home.msm_tag') }}</span>
                <h2 class="text-2xl font-bold mt-2 text-[#1A2B3C]">{{ __('home.msm_title') }}</h2>
                <div class="my-4 overflow-hidden rounded-lg">
                    <img src="{{ asset('web/images/bg-msm.jpg') }}" class="hover:scale-105 transition-transform duration-500" alt="My Secret Map">
                </div>
                <p class="text-gray-600 mt-2 leading-relaxed">{{ __('home.msm_desc') }}</p>
                <div class="mt-6">
                    <a href="https://www.mysecretmap.com" target="_blank" class="btn-accent-brand py-3 px-6 rounded-full inline-flex items-center gap-2 font-medium transition-all">
                        {{ __('home.btn_visit') }}
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg>
                    </a>
                </div>
            </div>

            <div class="p-6 rounded-lg bg-card card-brand">
                <span class="text-yellow-500 font-bold text-xs uppercase tracking-widest">{{ __('home.ag_tag') }}</span>
                <h2 class="text-2xl font-bold mt-2 text-[#1A2B3C]">{{ __('home.ag_title') }}</h2>
                <div class="my-4 overflow-hidden rounded-lg">
                    <img src="{{ asset('web/images/bg-amazing.jpg') }}" class="hover:scale-105 transition-transform duration-500" alt="Amazing Guide App">
                </div>
                <p class="text-gray-600 mt-2 leading-relaxed">{{ __('home.ag_desc') }}</p>
                <div class="mt-6">
                    <a href="#" class="btn-accent-brand py-3 px-6 rounded-full inline-flex items-center gap-2 font-medium transition-all">
                        {{ __('home.btn_discover') }}
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg>
                    </a>
                </div>
            </div>

            <div class="p-6 rounded-lg bg-card card-brand">
                <span class="text-yellow-500 font-bold text-xs uppercase tracking-widest">{{ __('home.gmf_tag') }}</span>
                <h2 class="text-2xl font-bold mt-2 text-[#1A2B3C]">{{ __('home.gmf_title') }}</h2>
                <div class="my-4 overflow-hidden rounded-lg grayscale hover:grayscale-0 transition-all duration-500">
                    <img src="{{ asset('web/images/bg-gmf.jpg') }}" class="hover:scale-105 transition-transform duration-500" alt="Get My Face">
                </div>
                <p class="text-gray-600 mt-2 leading-relaxed">{{ __('home.gmf_desc') }}</p>
                <div class="mt-6">
                    <span class="py-2 px-6 rounded-full inline-flex items-center gap-2 font-medium text-gray-400 bg-gray-100 italic">
                        {{ __('home.btn_soon') }}
                    </span>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection