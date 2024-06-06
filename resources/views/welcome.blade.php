@extends('layout')
@section('content')
<section class="hero bg-custom-dark">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 text-center">
                <div class="px-md-2">
                    <img src="{{ asset('lugada/images/logosquare.png') }}">
                    <h2 class="text-white fw-bold f-36 mt-3 pb-2 animated fadeInDown wow" data-wow-delay=".1s">Explorez le monde avec My Lovely Planet</h2>
                    <p class="text-white f-16 mb-5 mt-4 animated fadeInDown wow" data-wow-delay=".2s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed feugiat arcu ut orci porta, eget porttitor felis suscipit. Sed a nisl ullamcorper, tempus augue at, rutrum lacus. Duis et turpis eros.</p>
                    <a href="javascript:void(0);" class="btn btn-primary rounded-pill animated fadeInDown wow" data-wow-delay=".4s">Learn more</a>

                    <div class="watch-video">
                        <a href="" class="btn video-btn text-white popup-video animated fadeInDown wow" data-wow-delay=".6s" data-bs-toggle="modal" data-bs-target="#watchvideomodal"><i class="ion-play me-2"></i>Watch Video</a>

                        <div class="modal fade bd-example-modal-lg" id="watchvideomodal" data-keyboard="false" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog modal-lg">
                                <div class="modal-content video-modal">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    <video id="VisaChipCardVideo" class="w-100" controls>
                                        <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4" />
                                        <!--Browser does not support <video> tag -->
                                    </video>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection