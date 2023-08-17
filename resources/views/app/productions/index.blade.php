@extends('layouts.dashboard')

@section('content')
<style>
    .image {
        background-image: url("{{asset('assets/logo/banner-1.jpg')}}");
        height: auto;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .image-1 {
        background-image: url("{{asset('assets/logo/banner-2.jpg')}}");
        height: auto;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .banner {
        background-image: url("{{asset('assets/logo/banner-hero.jpg')}}");
        height: auto;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
<div class="banner" style="border-radius: 5px;">
    {{-- <div class="bg-primary-dark-op"> --}}
        <div class="content content-full text-center pt-7 pb-5">
            <h1 class="h2 text-white mb-2">
                Liste des Productions de maïs
            </h1>
            <h2 class="h4 fw-normal text-white">
                Suivi détaillé des récoltes de maïs dans la chaîne de valeur ajoutée.
            </h2>
            <a class="btn btn-primary px-4 py-2" href="#">Subscribe from $9/month</a>
        </div>
    {{-- </div> --}}

</div>
{{-- <div class="bg-image" style="background-image: url('assets/media/photos/photo3@2x.jpg');">
    <div class="bg-primary-dark-op">
      <div class="content content-full text-center py-6">
        <h1 class="h2 text-white mb-2">Welcome to our Digital Store!</h1>
        <h2 class="h4 fw-normal text-white-75 mb-0">Feel free to explore over 50.000 products.</h2>
      </div>
    </div>
  </div> --}}
<div class="content content-boxed">
    <div class="row items-push py-4">
        <!-- Course -->
        <div class="col-md-6 col-lg-4 col-xl-3">
            <a class="block block-rounded block-link-pop h-100 mb-0" href="#">
                <div class="block-content block-content-full text-center image">
                    <div class="item item-2x item-circle bg-white-10 py-3 my-3 mx-auto">
                        <svg id='qrcode_24' width='40' height='40' style="background-color: white;" viewBox='0 0 24 24'
                            xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
                            <rect width='24' height='24' stroke='none' fill='#000000' opacity='0' />
                            <g transform="matrix(1 0 0 1 12 12)">
                                <g style="">
                                    <g transform="matrix(1 0 0 1 0 0)">
                                        <path
                                            style="stroke: none; stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            transform=" translate(-12, -12)" d="M 0 0 L 24 0 L 24 24 L 0 24 z"
                                            stroke-linecap="round" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 -5 -5)">
                                        <rect
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x="-3" y="-3" rx="1" ry="1" width="6" height="6" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 -5 5.01)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="0" y1="-0.005000000000000782" x2="0" y2="0.005000000000000782" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 5 -5)">
                                        <rect
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x="-3" y="-3" rx="1" ry="1" width="6" height="6" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 -5 -5)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="0" y1="-0.004999999999999893" x2="0" y2="0.004999999999999893" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 -5 5)">
                                        <rect
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x="-3" y="-3" rx="1" ry="1" width="6" height="6" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 5 -5)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="0" y1="-0.004999999999999893" x2="0" y2="0.004999999999999893" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 3.5 2)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="-1.5" y1="0" x2="1.5" y2="0" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 8 2)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="0" y1="-0.004999999999999893" x2="0" y2="0.004999999999999893" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 2 3.5)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="0" y1="-1.5" x2="0" y2="1.5" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 3.5 8)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="-1.5" y1="0" x2="1.5" y2="0" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 6.5 5)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="-1.5" y1="0" x2="1.5" y2="0" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 8 6.5)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="0" y1="-1.5" x2="0" y2="1.5" />
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="fs-sm text-white">
                        Maïs Blanc &bull; 3 jours
                    </div>
                </div>
                <div class="block-content block-content-full">
                    <h4 class="h5 mb-1">
                        Maïs Blanc | Bohicon | #BOH-001
                    </h4>
                    <div class="fs-sm text-muted">November 5, 2021</div>
                </div>
            </a>
        </div>
        <!-- END Course -->

        <!-- Course -->
        <div class="col-md-6 col-lg-4 col-xl-3">
            <a class="block block-rounded block-link-pop h-100 mb-0" href="#">
                <div class="block-content block-content-full text-center image-1">
                    <div class="item item-2x item-circle bg-white-10 py-3 my-3 mx-auto">
                        <svg id='qrcode_24' width='40' height='40' style="background-color: white;" viewBox='0 0 24 24'
                            xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
                            <rect width='24' height='24' stroke='none' fill='#000000' opacity='0' />
                            <g transform="matrix(1 0 0 1 12 12)">
                                <g style="">
                                    <g transform="matrix(1 0 0 1 0 0)">
                                        <path
                                            style="stroke: none; stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            transform=" translate(-12, -12)" d="M 0 0 L 24 0 L 24 24 L 0 24 z"
                                            stroke-linecap="round" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 -5 -5)">
                                        <rect
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x="-3" y="-3" rx="1" ry="1" width="6" height="6" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 -5 5.01)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="0" y1="-0.005000000000000782" x2="0" y2="0.005000000000000782" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 5 -5)">
                                        <rect
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x="-3" y="-3" rx="1" ry="1" width="6" height="6" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 -5 -5)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="0" y1="-0.004999999999999893" x2="0" y2="0.004999999999999893" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 -5 5)">
                                        <rect
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x="-3" y="-3" rx="1" ry="1" width="6" height="6" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 5 -5)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="0" y1="-0.004999999999999893" x2="0" y2="0.004999999999999893" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 3.5 2)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="-1.5" y1="0" x2="1.5" y2="0" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 8 2)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="0" y1="-0.004999999999999893" x2="0" y2="0.004999999999999893" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 2 3.5)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="0" y1="-1.5" x2="0" y2="1.5" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 3.5 8)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="-1.5" y1="0" x2="1.5" y2="0" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 6.5 5)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="-1.5" y1="0" x2="1.5" y2="0" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 8 6.5)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="0" y1="-1.5" x2="0" y2="1.5" />
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="fs-sm text-white">
                        Maïs Jaune &bull; 15 jours
                    </div>
                </div>
                <div class="block-content block-content-full">
                    <h4 class="h5 mb-1">
                        Be a pro with CSS3 in only two weeks
                    </h4>
                    <div class="fs-sm text-muted">November 1, 2021</div>
                </div>
            </a>
        </div>
        <!-- END Course -->

        <!-- Course -->
        <div class="col-md-6 col-lg-4 col-xl-3">
            <a class="block block-rounded block-link-pop h-100 mb-0" href="#">
                <div class="block-content block-content-full text-center image">
                    <div class="item item-2x item-circle bg-white-10 py-3 my-3 mx-auto">
                        <svg id='qrcode_24' width='40' height='40' style="background-color: white;" viewBox='0 0 24 24'
                            xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
                            <rect width='24' height='24' stroke='none' fill='#000000' opacity='0' />
                            <g transform="matrix(1 0 0 1 12 12)">
                                <g style="">
                                    <g transform="matrix(1 0 0 1 0 0)">
                                        <path
                                            style="stroke: none; stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            transform=" translate(-12, -12)" d="M 0 0 L 24 0 L 24 24 L 0 24 z"
                                            stroke-linecap="round" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 -5 -5)">
                                        <rect
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x="-3" y="-3" rx="1" ry="1" width="6" height="6" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 -5 5.01)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="0" y1="-0.005000000000000782" x2="0" y2="0.005000000000000782" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 5 -5)">
                                        <rect
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x="-3" y="-3" rx="1" ry="1" width="6" height="6" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 -5 -5)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="0" y1="-0.004999999999999893" x2="0" y2="0.004999999999999893" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 -5 5)">
                                        <rect
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x="-3" y="-3" rx="1" ry="1" width="6" height="6" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 5 -5)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="0" y1="-0.004999999999999893" x2="0" y2="0.004999999999999893" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 3.5 2)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="-1.5" y1="0" x2="1.5" y2="0" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 8 2)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="0" y1="-0.004999999999999893" x2="0" y2="0.004999999999999893" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 2 3.5)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="0" y1="-1.5" x2="0" y2="1.5" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 3.5 8)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="-1.5" y1="0" x2="1.5" y2="0" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 6.5 5)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="-1.5" y1="0" x2="1.5" y2="0" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 8 6.5)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="0" y1="-1.5" x2="0" y2="1.5" />
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="fs-sm text-white">
                        Maïs Blanc &bull; 1 semaine
                    </div>
                </div>
                <div class="block-content block-content-full">
                    <h4 class="h5 mb-1">
                        Using SVG is easier than ever
                    </h4>
                    <div class="fs-sm text-muted">October 27, 2021</div>
                </div>
            </a>
        </div>
        <!-- END Course -->

        <!-- Course -->
        <div class="col-md-6 col-lg-4 col-xl-3">
            <a class="block block-rounded block-link-pop h-100 mb-0" href="#">
                <div class="block-content block-content-full text-center image-1">
                    <div class="item item-2x item-circle bg-white-10 py-3 my-3 mx-auto">
                        <svg id='qrcode_24' width='40' height='40' style="background-color: white;" viewBox='0 0 24 24'
                            xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
                            <rect width='24' height='24' stroke='none' fill='#000000' opacity='0' />
                            <g transform="matrix(1 0 0 1 12 12)">
                                <g style="">
                                    <g transform="matrix(1 0 0 1 0 0)">
                                        <path
                                            style="stroke: none; stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            transform=" translate(-12, -12)" d="M 0 0 L 24 0 L 24 24 L 0 24 z"
                                            stroke-linecap="round" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 -5 -5)">
                                        <rect
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x="-3" y="-3" rx="1" ry="1" width="6" height="6" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 -5 5.01)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="0" y1="-0.005000000000000782" x2="0" y2="0.005000000000000782" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 5 -5)">
                                        <rect
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x="-3" y="-3" rx="1" ry="1" width="6" height="6" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 -5 -5)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="0" y1="-0.004999999999999893" x2="0" y2="0.004999999999999893" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 -5 5)">
                                        <rect
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x="-3" y="-3" rx="1" ry="1" width="6" height="6" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 5 -5)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="0" y1="-0.004999999999999893" x2="0" y2="0.004999999999999893" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 3.5 2)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="-1.5" y1="0" x2="1.5" y2="0" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 8 2)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="0" y1="-0.004999999999999893" x2="0" y2="0.004999999999999893" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 2 3.5)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="0" y1="-1.5" x2="0" y2="1.5" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 3.5 8)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="-1.5" y1="0" x2="1.5" y2="0" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 6.5 5)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="-1.5" y1="0" x2="1.5" y2="0" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 8 6.5)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="0" y1="-1.5" x2="0" y2="1.5" />
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="fs-sm text-white">
                        Maïs Jaune &bull; 1 mois
                    </div>
                </div>
                <div class="block-content block-content-full">
                    <h4 class="h5 mb-1">
                        Build a modern web application from scratch
                    </h4>
                    <div class="fs-sm text-muted">October 25, 2021</div>
                </div>
            </a>
        </div>
        <!-- END Course -->

        <!-- Course -->
        <div class="col-md-6 col-lg-4 col-xl-3">
            <a class="block block-rounded block-link-pop h-100 mb-0" href="#">
                <div class="block-content block-content-full text-center image-1">
                    <div class="item item-2x item-circle bg-white-10 py-3 my-3 mx-auto">
                        <svg id='qrcode_24' width='40' height='40' style="background-color: white;" viewBox='0 0 24 24'
                            xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
                            <rect width='24' height='24' stroke='none' fill='#000000' opacity='0' />
                            <g transform="matrix(1 0 0 1 12 12)">
                                <g style="">
                                    <g transform="matrix(1 0 0 1 0 0)">
                                        <path
                                            style="stroke: none; stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            transform=" translate(-12, -12)" d="M 0 0 L 24 0 L 24 24 L 0 24 z"
                                            stroke-linecap="round" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 -5 -5)">
                                        <rect
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x="-3" y="-3" rx="1" ry="1" width="6" height="6" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 -5 5.01)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="0" y1="-0.005000000000000782" x2="0" y2="0.005000000000000782" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 5 -5)">
                                        <rect
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x="-3" y="-3" rx="1" ry="1" width="6" height="6" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 -5 -5)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="0" y1="-0.004999999999999893" x2="0" y2="0.004999999999999893" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 -5 5)">
                                        <rect
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x="-3" y="-3" rx="1" ry="1" width="6" height="6" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 5 -5)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="0" y1="-0.004999999999999893" x2="0" y2="0.004999999999999893" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 3.5 2)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="-1.5" y1="0" x2="1.5" y2="0" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 8 2)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="0" y1="-0.004999999999999893" x2="0" y2="0.004999999999999893" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 2 3.5)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="0" y1="-1.5" x2="0" y2="1.5" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 3.5 8)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="-1.5" y1="0" x2="1.5" y2="0" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 6.5 5)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="-1.5" y1="0" x2="1.5" y2="0" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 8 6.5)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="0" y1="-1.5" x2="0" y2="1.5" />
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="fs-sm text-white">
                        Maïs Blanc &bull; 3 semaines
                    </div>
                </div>
                <div class="block-content block-content-full">
                    <h4 class="h5 mb-1">
                        UI Design in Photoshop: Tips &amp; Tricks
                    </h4>
                    <div class="fs-sm text-muted">October 10, 2021</div>
                </div>
            </a>
        </div>
        <!-- END Course -->

        <!-- Course -->
        <div class="col-md-6 col-lg-4 col-xl-3">
            <a class="block block-rounded block-link-pop h-100 mb-0" href="#">
                <div class="block-content block-content-full text-center image">
                    <div class="item item-2x item-circle bg-white-10 py-3 my-3 mx-auto">
                        <svg id='qrcode_24' width='40' height='40' style="background-color: white;" viewBox='0 0 24 24'
                            xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
                            <rect width='24' height='24' stroke='none' fill='#000000' opacity='0' />
                            <g transform="matrix(1 0 0 1 12 12)">
                                <g style="">
                                    <g transform="matrix(1 0 0 1 0 0)">
                                        <path
                                            style="stroke: none; stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            transform=" translate(-12, -12)" d="M 0 0 L 24 0 L 24 24 L 0 24 z"
                                            stroke-linecap="round" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 -5 -5)">
                                        <rect
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x="-3" y="-3" rx="1" ry="1" width="6" height="6" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 -5 5.01)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="0" y1="-0.005000000000000782" x2="0" y2="0.005000000000000782" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 5 -5)">
                                        <rect
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x="-3" y="-3" rx="1" ry="1" width="6" height="6" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 -5 -5)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="0" y1="-0.004999999999999893" x2="0" y2="0.004999999999999893" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 -5 5)">
                                        <rect
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x="-3" y="-3" rx="1" ry="1" width="6" height="6" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 5 -5)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="0" y1="-0.004999999999999893" x2="0" y2="0.004999999999999893" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 3.5 2)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="-1.5" y1="0" x2="1.5" y2="0" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 8 2)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="0" y1="-0.004999999999999893" x2="0" y2="0.004999999999999893" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 2 3.5)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="0" y1="-1.5" x2="0" y2="1.5" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 3.5 8)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="-1.5" y1="0" x2="1.5" y2="0" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 6.5 5)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="-1.5" y1="0" x2="1.5" y2="0" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 8 6.5)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="0" y1="-1.5" x2="0" y2="1.5" />
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="fs-sm text-white">
                        Maïs Rouge &bull; 6 mois
                    </div>
                </div>
                <div class="block-content block-content-full">
                    <h4 class="h5 mb-1">
                        Marketing 101: All the basics
                    </h4>
                    <div class="fs-sm text-muted">October 1, 2021</div>
                </div>
            </a>
        </div>
        <!-- END Course -->

        <!-- Course -->
        <div class="col-md-6 col-lg-4 col-xl-3">
            <a class="block block-rounded block-link-pop h-100 mb-0" href="#">
                <div class="block-content block-content-full text-center image-1">
                    <div class="item item-2x item-circle bg-white-10 py-3 my-3 mx-auto">
                        <svg id='qrcode_24' width='40' height='40' style="background-color: white;" viewBox='0 0 24 24'
                            xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
                            <rect width='24' height='24' stroke='none' fill='#000000' opacity='0' />
                            <g transform="matrix(1 0 0 1 12 12)">
                                <g style="">
                                    <g transform="matrix(1 0 0 1 0 0)">
                                        <path
                                            style="stroke: none; stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            transform=" translate(-12, -12)" d="M 0 0 L 24 0 L 24 24 L 0 24 z"
                                            stroke-linecap="round" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 -5 -5)">
                                        <rect
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x="-3" y="-3" rx="1" ry="1" width="6" height="6" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 -5 5.01)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="0" y1="-0.005000000000000782" x2="0" y2="0.005000000000000782" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 5 -5)">
                                        <rect
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x="-3" y="-3" rx="1" ry="1" width="6" height="6" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 -5 -5)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="0" y1="-0.004999999999999893" x2="0" y2="0.004999999999999893" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 -5 5)">
                                        <rect
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x="-3" y="-3" rx="1" ry="1" width="6" height="6" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 5 -5)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="0" y1="-0.004999999999999893" x2="0" y2="0.004999999999999893" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 3.5 2)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="-1.5" y1="0" x2="1.5" y2="0" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 8 2)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="0" y1="-0.004999999999999893" x2="0" y2="0.004999999999999893" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 2 3.5)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="0" y1="-1.5" x2="0" y2="1.5" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 3.5 8)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="-1.5" y1="0" x2="1.5" y2="0" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 6.5 5)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="-1.5" y1="0" x2="1.5" y2="0" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 8 6.5)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="0" y1="-1.5" x2="0" y2="1.5" />
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="fs-sm text-white">
                        Maïs Jaune &bull; 8 semaines
                    </div>
                </div>
                <div class="block-content block-content-full">
                    <h4 class="h5 mb-1">
                        How to make your page convert in 5 steps
                    </h4>
                    <div class="fs-sm text-muted">September 19, 2021</div>
                </div>
            </a>
        </div>
        <!-- END Course -->

        <!-- Course -->
        <div class="col-md-6 col-lg-4 col-xl-3">
            <a class="block block-rounded block-link-pop h-100 mb-0" href="#">
                <div class="block-content block-content-full text-center image">
                    <div class="item item-2x item-circle bg-white-10 py-3 my-3 mx-auto">
                        <svg id='qrcode_24' width='40' height='40' style="background-color: white;" viewBox='0 0 24 24'
                            xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
                            <rect width='24' height='24' stroke='none' fill='#000000' opacity='0' />
                            <g transform="matrix(1 0 0 1 12 12)">
                                <g style="">
                                    <g transform="matrix(1 0 0 1 0 0)">
                                        <path
                                            style="stroke: none; stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            transform=" translate(-12, -12)" d="M 0 0 L 24 0 L 24 24 L 0 24 z"
                                            stroke-linecap="round" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 -5 -5)">
                                        <rect
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x="-3" y="-3" rx="1" ry="1" width="6" height="6" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 -5 5.01)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="0" y1="-0.005000000000000782" x2="0" y2="0.005000000000000782" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 5 -5)">
                                        <rect
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x="-3" y="-3" rx="1" ry="1" width="6" height="6" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 -5 -5)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="0" y1="-0.004999999999999893" x2="0" y2="0.004999999999999893" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 -5 5)">
                                        <rect
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x="-3" y="-3" rx="1" ry="1" width="6" height="6" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 5 -5)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="0" y1="-0.004999999999999893" x2="0" y2="0.004999999999999893" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 3.5 2)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="-1.5" y1="0" x2="1.5" y2="0" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 8 2)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="0" y1="-0.004999999999999893" x2="0" y2="0.004999999999999893" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 2 3.5)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="0" y1="-1.5" x2="0" y2="1.5" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 3.5 8)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="-1.5" y1="0" x2="1.5" y2="0" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 6.5 5)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="-1.5" y1="0" x2="1.5" y2="0" />
                                    </g>
                                    <g transform="matrix(1 0 0 1 8 6.5)">
                                        <line
                                            style="stroke: rgb(33,33,33); stroke-width: 2; stroke-dasharray: none; stroke-linecap: round; stroke-dashoffset: 0; stroke-linejoin: round; stroke-miterlimit: 4; fill: none; fill-rule: nonzero; opacity: 1;"
                                            x1="0" y1="-1.5" x2="0" y2="1.5" />
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="fs-sm text-white">
                        Maïs Blanc &bull; 8 mois
                    </div>
                </div>
                <div class="block-content block-content-full">
                    <h4 class="h5 mb-1">
                        How to provide rock star support
                    </h4>
                    <div class="fs-sm text-muted">September 15, 2021</div>
                </div>
            </a>
        </div>
        <!-- END Course -->

    </div>
</div>

</div>
@endsection
