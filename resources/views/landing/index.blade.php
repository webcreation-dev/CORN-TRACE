@extends('layouts.landing')

@section('content')
<style>
    .bg-hero {
        background-image: url(http://localhost/CORN_TRACE/public/assets/media/landing/banner3.png);
        background-size: cover;
        /* Remplit le fond en redimensionnant l'image pour couvrir complètement le conteneur */
        background-repeat: no-repeat;
        /* Désactive la répétition de l'image */
        background-position: center center;
        height: 675px;
    }
</style>
<!-- Hero -->
<div id="one-hero" class="bg-body-extra-light bg-hero">
    <div class="content content-full">
        <div class="row g-0 justify-content-center text-center">
            <div class="col-md-10 pt-7 pb-5">
                <div class="d-inline-flex align-items-center space-x-1 fs-sm badge bg-body text-dark mb-7 p-2">
                    <svg id='Ear_Of_Corn_24' width='24' height='24' viewBox='0 0 24 24'
                        xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
                        <rect width='24' height='24' stroke='none' fill='#000000' opacity='0' />
                        <g transform="matrix(0.42 0 0 0.42 12 12)">
                            <g style="">
                                <g transform="matrix(1 0 0 1 -1.45 -10.69)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7Osoa_1" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(-0.58 0.82 -0.63 -0.45 37.31 11.75)" cx="8.437"
                                        cy="18.718" r="7.758" fx="8.437" fy="18.718">
                                        <stop offset="0%" style="stop-color:rgb(155,204,0);stop-opacity: 1" />
                                        <stop offset="23.5%" style="stop-color:rgb(152,201,1);stop-opacity: 1" />
                                        <stop offset="44.1%" style="stop-color:rgb(143,190,2);stop-opacity: 1" />
                                        <stop offset="63.4%" style="stop-color:rgb(128,172,5);stop-opacity: 1" />
                                        <stop offset="82%" style="stop-color:rgb(106,147,10);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(79,115,15);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7Osoa_1); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-22.55, -13.31)"
                                        d="M 23.904 6.427 C 23.904 6.427 24.259 13.008 19.773 17.766 C 15.286999999999999 22.523999999999997 20.746 18.842 20.746 18.842 L 26.695 16.601 C 26.694 16.6 28.638 10.712 23.904 6.427 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 11 1.17)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7Osob_2" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(-0.86 0.51 0.39 0.67 30.47 0.24)" cx="10.531"
                                        cy="18.911" r="7.758" fx="10.531" fy="18.911">
                                        <stop offset="0%" style="stop-color:rgb(155,204,0);stop-opacity: 1" />
                                        <stop offset="23.5%" style="stop-color:rgb(152,201,1);stop-opacity: 1" />
                                        <stop offset="44.1%" style="stop-color:rgb(143,190,2);stop-opacity: 1" />
                                        <stop offset="63.4%" style="stop-color:rgb(128,172,5);stop-opacity: 1" />
                                        <stop offset="82%" style="stop-color:rgb(106,147,10);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(79,115,15);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7Osob_2); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-35, -25.17)"
                                        d="M 41.706 23.209 C 41.706 23.209 35.116 23.243 30.630000000000003 28.000999999999998 C 26.144000000000005 32.759 29.499000000000002 27.092999999999996 29.499000000000002 27.092999999999996 L 31.385 21.022 C 31.385 21.023 37.149 18.736 41.706 23.209 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 3.12 -3.61)">
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(204,90,17); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-27.12, -20.39)"
                                        d="M 40.03 6.744 C 35.164 2.9109999999999996 11.641000000000002 25.480999999999998 13.826 31.817 C 14.054 32.477 14.404 33.015 14.853 33.443 C 14.855 33.443999999999996 14.856 33.446 14.858 33.446999999999996 C 14.860000000000001 33.44799999999999 14.861 33.449999999999996 14.862 33.452 C 15.316 33.873999999999995 15.874 34.193 16.546 34.381 C 22.999 36.188 44.144 11.375 40.03 6.744 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 10.51 -16.23)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7Osoc_3" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 26.18 -8.04)" cx="16.553"
                                        cy="7.163" r="1.657" fx="16.553" fy="7.163">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7Osoc_3); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-34.51, -7.77)"
                                        d="M 34.037 8.798 L 33.51 8.301 C 33.079 7.8950000000000005 33.059 7.2170000000000005 33.464999999999996 6.7860000000000005 L 33.464999999999996 6.7860000000000005 C 33.870999999999995 6.355 34.549 6.335000000000001 34.98 6.7410000000000005 L 35.506 7.237 C 35.937 7.643 35.957 8.321 35.551 8.752 L 35.551 8.752 C 35.146 9.183 34.468 9.203 34.037 8.798 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 12.62 -17.18)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7Osod_4" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 26.5 -8.39)" cx="17.439"
                                        cy="5.02" r="1.657" fx="17.439" fy="5.02">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7Osod_4); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-36.62, -6.82)"
                                        d="M 36.152 7.846 L 35.625 7.35 C 35.194 6.944 35.174 6.266 35.58 5.835 L 35.58 5.835 C 35.986 5.404 36.664 5.384 37.095 5.79 L 37.621 6.286 C 38.052 6.691999999999999 38.072 7.369999999999999 37.666000000000004 7.800999999999999 L 37.666000000000004 7.800999999999999 C 37.261 8.232 36.582 8.252 36.152 7.846 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 12.41 -15.91)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7Osoe_5" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 26.34 -8.21)" cx="18.151"
                                        cy="6.092" r="1.657" fx="18.151" fy="6.092">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7Osoe_5); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-36.41, -8.09)"
                                        d="M 35.935 9.115 L 35.408 8.619 C 34.977000000000004 8.213 34.957 7.535 35.363 7.104 L 35.363 7.104 C 35.769 6.673 36.447 6.6530000000000005 36.878 7.059 L 37.405 7.555 C 37.836 7.960999999999999 37.856 8.639 37.45 9.07 L 37.45 9.07 C 37.044 9.501 36.366 9.521 35.935 9.115 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 14.2 -17.17)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7Osof_6" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 26.67 -8.56)" cx="18.595"
                                        cy="3.949" r="1.657" fx="18.595" fy="3.949">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7Osof_6); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-38.2, -6.83)"
                                        d="M 37.728 7.859 L 37.201 7.3629999999999995 C 36.77 6.957 36.75 6.279 37.156 5.848 L 37.156 5.848 C 37.562 5.417 38.24 5.397 38.671 5.803 L 39.198 6.3 C 39.629 6.7059999999999995 39.649 7.384 39.243 7.8149999999999995 L 39.243 7.8149999999999995 C 38.836 8.245 38.158 8.265 37.728 7.859 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 6.8 -13.84)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7Osog_7" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 25.52 -7.34)" cx="15.491"
                                        cy="11.449" r="1.657" fx="15.491" fy="11.449">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7Osog_7); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-30.8, -10.16)"
                                        d="M 30.324 11.188 L 29.797 10.692 C 29.366 10.286 29.346 9.608 29.752 9.177 L 29.752 9.177 C 30.157999999999998 8.746 30.836 8.725999999999999 31.267 9.132 L 31.793 9.628 C 32.224 10.034 32.244 10.712 31.838 11.143 L 31.838 11.143 C 31.433 11.574 30.755 11.594 30.324 11.188 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 8.64 -15.05)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7Osoh_8" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 25.85 -7.69)" cx="16.006"
                                        cy="9.306" r="1.657" fx="16.006" fy="9.306">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7Osoh_8); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-32.64, -8.95)"
                                        d="M 32.169 9.982 L 31.642999999999997 9.485999999999999 C 31.211999999999996 9.079999999999998 31.191999999999997 8.402 31.597999999999995 7.970999999999999 L 31.597999999999995 7.970999999999999 C 32.004 7.539999999999999 32.681999999999995 7.52 33.11299999999999 7.925999999999999 L 33.638999999999996 8.421999999999999 C 34.06999999999999 8.828 34.089999999999996 9.505999999999998 33.684 9.937 L 33.684 9.937 C 33.278 10.368 32.6 10.388 32.169 9.982 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 5.06 -12.54)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7Osoi_9" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 25.19 -7)" cx="15.12" cy="13.592"
                                        r="1.657" fx="15.12" fy="13.592">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7Osoi_9); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-29.06, -11.46)"
                                        d="M 28.584 12.492 L 28.058 11.996 C 27.627 11.59 27.607 10.912 28.012999999999998 10.481 L 28.012999999999998 10.481 C 28.418999999999997 10.05 29.096999999999998 10.03 29.528 10.436 L 30.055 10.932 C 30.486 11.338000000000001 30.506 12.016 30.1 12.447000000000001 L 30.1 12.447000000000001 C 29.693 12.878 29.015 12.898 28.584 12.492 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 15.7 -11.34)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7Osoj_10" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(-0.73 -0.69 -0.53 0.57 57.12 21.13)" cx="18.14"
                                        cy="7.163" r="1.657" fx="18.14" fy="7.163">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7Osoj_10); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-39.7, -12.66)"
                                        d="M 38.697 13.19 L 39.224000000000004 13.686 C 39.655 14.092 40.333000000000006 14.072 40.739000000000004 13.641 L 40.739000000000004 13.641 C 41.145 13.21 41.12500000000001 12.532 40.694 12.126 L 40.167 11.629999999999999 C 39.736000000000004 11.223999999999998 39.058 11.244 38.652 11.674999999999999 L 38.652 11.674999999999999 C 38.246 12.106 38.266 12.784 38.697 13.19 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 16.52 -13.51)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7Osok_11" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(-0.73 -0.69 -0.53 0.57 57.45 20.79)" cx="19.026"
                                        cy="5.02" r="1.657" fx="19.026" fy="5.02">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7Osok_11); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-40.52, -10.49)"
                                        d="M 39.522 11.023 L 40.048 11.519 C 40.479 11.925 41.157000000000004 11.905 41.563 11.474 L 41.563 11.474 C 41.969 11.043000000000001 41.949000000000005 10.365 41.518 9.959 L 40.992 9.463 C 40.561 9.056999999999999 39.882999999999996 9.077 39.477 9.508 L 39.477 9.508 C 39.071 9.939 39.091 10.617 39.522 11.023 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 15.26 -13.22)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7Osol_12" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(-0.73 -0.69 -0.53 0.57 57.28 20.96)" cx="19.746"
                                        cy="6.092" r="1.657" fx="19.746" fy="6.092">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7Osol_12); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-39.26, -10.78)"
                                        d="M 38.263 11.309 L 38.79 11.805 C 39.221 12.211 39.899 12.190999999999999 40.305 11.76 L 40.305 11.76 C 40.711 11.329 40.691 10.651 40.26 10.245 L 39.733 9.75 C 39.302 9.344 38.623999999999995 9.364 38.217999999999996 9.795 L 38.217999999999996 9.795 C 37.813 10.225 37.833 10.903 38.263 11.309 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 16.41 -15.08)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7Osom_13" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(-0.73 -0.69 -0.53 0.57 57.61 20.61)" cx="20.182"
                                        cy="3.949" r="1.657" fx="20.182" fy="3.949">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7Osom_13); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-40.41, -8.92)"
                                        d="M 39.416 9.451 L 39.943 9.947000000000001 C 40.373999999999995 10.353000000000002 41.052 10.333 41.458 9.902000000000001 L 41.458 9.902000000000001 C 41.864 9.471000000000002 41.844 8.793000000000001 41.413 8.387 L 40.885999999999996 7.891 C 40.455 7.485 39.776999999999994 7.505 39.370999999999995 7.936 L 39.370999999999995 7.936 C 38.965 8.367 38.985 9.045 39.416 9.451 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 13.53 -7.5)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7Oson_14" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(-0.73 -0.69 -0.53 0.57 56.47 21.83)" cx="17.078"
                                        cy="11.449" r="1.657" fx="17.078" fy="11.449">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7Oson_14); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-37.53, -16.5)"
                                        d="M 36.529 17.037 L 37.05500000000001 17.532999999999998 C 37.486000000000004 17.938999999999997 38.16400000000001 17.918999999999997 38.57000000000001 17.487999999999996 L 38.57000000000001 17.487999999999996 C 38.976000000000006 17.056999999999995 38.95600000000001 16.378999999999998 38.525000000000006 15.972999999999995 L 37.999 15.476999999999995 C 37.568000000000005 15.070999999999994 36.89 15.090999999999996 36.484 15.521999999999995 L 36.484 15.521999999999995 C 36.079 15.953 36.099 16.631 36.529 17.037 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 14.62 -9.41)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7Osoo_15" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(-0.73 -0.69 -0.53 0.57 56.79 21.48)" cx="17.593"
                                        cy="9.306" r="1.657" fx="17.593" fy="9.306">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7Osoo_15); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-38.62, -14.59)"
                                        d="M 37.625 15.125 L 38.152 15.621 C 38.583 16.027 39.261 16.007 39.667 15.576 L 39.667 15.576 C 40.073 15.145000000000001 40.053000000000004 14.467 39.622 14.061 L 39.095 13.565 C 38.664 13.158999999999999 37.986 13.179 37.58 13.61 L 37.58 13.61 C 37.174 14.041 37.194 14.719 37.625 15.125 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 12.33 -5.68)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7Osop_16" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(-0.73 -0.69 -0.53 0.57 56.14 22.18)" cx="16.707"
                                        cy="13.592" r="1.657" fx="16.707" fy="13.592">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7Osop_16); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-36.33, -18.32)"
                                        d="M 35.33 18.851 L 35.857 19.346999999999998 C 36.288 19.752999999999997 36.966 19.732999999999997 37.372 19.301999999999996 L 37.372 19.301999999999996 C 37.778 18.870999999999995 37.758 18.192999999999998 37.327 17.786999999999995 L 36.8 17.292 C 36.369 16.886000000000003 35.690999999999995 16.906000000000002 35.285 17.337000000000003 L 35.285 17.337000000000003 C 34.879 17.767 34.899 18.445 35.33 18.851 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 14.56 -15.36)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7Osoq_17" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 26.5 -8.39)" cx="20.095"
                                        cy="5.02" r="1.657" fx="20.095" fy="5.02">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7Osoq_17); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-38.56, -8.64)"
                                        d="M 38.085 9.668 L 37.558 9.171999999999999 C 37.127 8.765999999999998 37.107 8.088 37.513 7.656999999999999 L 37.513 7.656999999999999 C 37.919 7.225999999999999 38.597 7.2059999999999995 39.028 7.611999999999999 L 39.555 8.107999999999999 C 39.986 8.514 40.006 9.191999999999998 39.6 9.623 L 39.6 9.623 C 39.193 10.054 38.515 10.074 38.085 9.668 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 16.03 -16.92)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7Osor_18" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 26.83 -8.73)" cx="20.095"
                                        cy="2.877" r="1.657" fx="20.095" fy="2.877">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7Osor_18); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-40.03, -7.08)"
                                        d="M 39.554 8.109 L 39.027 7.6129999999999995 C 38.596000000000004 7.207 38.576 6.529 38.982 6.098 L 38.982 6.098 C 39.388 5.667 40.066 5.647 40.497 6.053 L 41.024 6.5489999999999995 C 41.455 6.954999999999999 41.475 7.632999999999999 41.069 8.064 L 41.069 8.064 C 40.663 8.495 39.985 8.515 39.554 8.109 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 10.42 -14.84)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7Osos_19" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 26.01 -7.86)" cx="17.439"
                                        cy="8.235" r="1.657" fx="17.439" fy="8.235">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7Osos_19); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-34.42, -9.16)"
                                        d="M 33.947 10.185 L 33.42 9.689 C 32.989000000000004 9.283 32.969 8.605 33.375 8.174 L 33.375 8.174 C 33.781 7.742999999999999 34.459 7.723 34.89 8.129 L 35.416000000000004 8.625 C 35.847 9.031 35.867000000000004 9.709 35.461000000000006 10.14 L 35.461000000000006 10.14 C 35.056 10.571 34.378 10.591 33.947 10.185 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 8.95 -13.28)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7Osot_20" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 25.68 -7.52)" cx="17.439"
                                        cy="10.378" r="1.657" fx="17.439" fy="10.378">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7Osot_20); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-32.95, -10.72)"
                                        d="M 32.477 11.745 L 31.950999999999997 11.248999999999999 C 31.519999999999996 10.842999999999998 31.499999999999996 10.165 31.905999999999995 9.733999999999998 L 31.905999999999995 9.733999999999998 C 32.312 9.302999999999999 32.989999999999995 9.282999999999998 33.42099999999999 9.688999999999998 L 33.946999999999996 10.184999999999999 C 34.37799999999999 10.591 34.397999999999996 11.268999999999998 33.992 11.7 L 33.992 11.7 C 33.586 12.13 32.908 12.15 32.477 11.745 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 7.48 -11.72)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7Osou_21" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 25.36 -7.17)" cx="17.439"
                                        cy="12.521" r="1.657" fx="17.439" fy="12.521">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7Osou_21); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-31.48, -12.28)"
                                        d="M 31.007 13.304 L 30.481 12.808 C 30.05 12.402 30.03 11.724 30.436 11.293 L 30.436 11.293 C 30.842 10.862 31.52 10.841999999999999 31.951 11.248 L 32.477000000000004 11.744 C 32.908 12.15 32.928000000000004 12.828 32.522000000000006 13.259 L 32.522000000000006 13.259 C 32.116 13.69 31.438 13.71 31.007 13.304 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 6.01 -10.17)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7Osov_22" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 25.03 -6.82)" cx="17.439"
                                        cy="14.663" r="1.657" fx="17.439" fy="14.663">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7Osov_22); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-30.01, -13.83)"
                                        d="M 29.537 14.863 L 29.011 14.366999999999999 C 28.58 13.960999999999999 28.56 13.283 28.965999999999998 12.851999999999999 L 28.965999999999998 12.851999999999999 C 29.371999999999996 12.421 30.049999999999997 12.400999999999998 30.480999999999998 12.806999999999999 L 31.006999999999998 13.302999999999999 C 31.438 13.709 31.458 14.386999999999999 31.052 14.818 L 31.052 14.818 C 30.646 15.249 29.968 15.269 29.537 14.863 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 4.54 -8.61)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7Osow_23" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 24.7 -6.47)" cx="17.439"
                                        cy="16.806" r="1.657" fx="17.439" fy="16.806">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7Osow_23); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-28.54, -15.39)"
                                        d="M 28.067 16.422 L 27.541 15.926 C 27.11 15.52 27.09 14.842 27.496 14.411 L 27.496 14.411 C 27.901999999999997 13.98 28.58 13.959999999999999 29.011 14.366 L 29.538 14.862 C 29.969 15.268 29.989 15.946 29.583000000000002 16.377 L 29.583000000000002 16.377 C 29.176 16.808 28.498 16.828 28.067 16.422 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 3.07 -7.05)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7Osox_24" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 24.37 -6.13)" cx="17.439"
                                        cy="18.949" r="1.657" fx="17.439" fy="18.949">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7Osox_24); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-27.07, -16.95)"
                                        d="M 26.597 17.982 L 26.07 17.486 C 25.639 17.080000000000002 25.619 16.402 26.025 15.971 L 26.025 15.971 C 26.430999999999997 15.540000000000001 27.108999999999998 15.52 27.54 15.926 L 28.067 16.422 C 28.498 16.828 28.518 17.506 28.112000000000002 17.937 L 28.112000000000002 17.937 C 27.706 18.368 27.028 18.388 26.597 17.982 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 1.6 -5.49)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7Osoy_25" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 24.05 -5.78)" cx="17.439"
                                        cy="21.092" r="1.657" fx="17.439" fy="21.092">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7Osoy_25); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-25.6, -18.51)"
                                        d="M 25.127 19.541 L 24.601 19.045 C 24.169999999999998 18.639000000000003 24.15 17.961000000000002 24.555999999999997 17.53 L 24.555999999999997 17.53 C 24.961999999999996 17.099 25.639999999999997 17.079 26.070999999999998 17.485 L 26.598 17.980999999999998 C 27.029 18.386999999999997 27.049 19.064999999999998 26.643 19.496 L 26.643 19.496 C 26.236 19.927 25.558 19.947 25.127 19.541 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 0.13 -3.93)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7Osoz_26" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 23.72 -5.43)" cx="17.439"
                                        cy="23.235" r="1.657" fx="17.439" fy="23.235">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7Osoz_26); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-24.13, -20.07)"
                                        d="M 23.658 21.1 L 23.132 20.604000000000003 C 22.701 20.198000000000004 22.681 19.520000000000003 23.087 19.089000000000002 L 23.087 19.089000000000002 C 23.493 18.658 24.171 18.638 24.602 19.044 L 25.128 19.54 C 25.559 19.945999999999998 25.579 20.624 25.173000000000002 21.055 L 25.173000000000002 21.055 C 24.766 21.486 24.088 21.506 23.658 21.1 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 -1.34 -2.37)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7OsoA_27" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 23.39 -5.08)" cx="17.439"
                                        cy="25.378" r="1.657" fx="17.439" fy="25.378">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7OsoA_27); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-22.66, -21.63)"
                                        d="M 22.188 22.659 L 21.662 22.163 C 21.230999999999998 21.757 21.211 21.079 21.616999999999997 20.648 L 21.616999999999997 20.648 C 22.022999999999996 20.217 22.700999999999997 20.197 23.131999999999998 20.602999999999998 L 23.657999999999998 21.098999999999997 C 24.089 21.504999999999995 24.108999999999998 22.182999999999996 23.703 22.613999999999997 L 23.703 22.613999999999997 C 23.296 23.045 22.618 23.065 22.188 22.659 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 -2.81 -0.81)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7OsoB_28" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 23.06 -4.73)" cx="17.439"
                                        cy="27.521" r="1.657" fx="17.439" fy="27.521">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7OsoB_28); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-21.19, -23.19)"
                                        d="M 20.718 24.219 L 20.192 23.723000000000003 C 19.761 23.317000000000004 19.741 22.639000000000003 20.147 22.208000000000002 L 20.147 22.208000000000002 C 20.552999999999997 21.777 21.230999999999998 21.757 21.662 22.163 L 22.188 22.659 C 22.619 23.064999999999998 22.639 23.743 22.233 24.174 L 22.233 24.174 C 21.826 24.605 21.148 24.625 20.718 24.219 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 -4.28 0.75)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7OsoC_29" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 22.73 -4.39)" cx="17.439"
                                        cy="29.664" r="1.657" fx="17.439" fy="29.664">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7OsoC_29); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-19.72, -24.75)"
                                        d="M 19.248 25.778 L 18.721 25.282 C 18.29 24.876 18.27 24.198 18.676 23.767 L 18.676 23.767 C 19.081999999999997 23.336 19.759999999999998 23.316 20.191 23.721999999999998 L 20.717 24.217999999999996 C 21.148 24.623999999999995 21.168 25.301999999999996 20.762 25.732999999999997 L 20.762 25.732999999999997 C 20.357 26.164 19.678 26.184 19.248 25.778 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 -5.75 2.31)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7OsoD_30" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 22.41 -4.04)" cx="17.439"
                                        cy="31.807" r="1.657" fx="17.439" fy="31.807">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7OsoD_30); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-18.25, -26.31)"
                                        d="M 17.778 27.337 L 17.250999999999998 26.841 C 16.819999999999997 26.435000000000002 16.799999999999997 25.757 17.205999999999996 25.326 L 17.205999999999996 25.326 C 17.611999999999995 24.895 18.289999999999996 24.875 18.720999999999997 25.281 L 19.247999999999998 25.776999999999997 C 19.679 26.182999999999996 19.698999999999998 26.860999999999997 19.293 27.291999999999998 L 19.293 27.291999999999998 C 18.887 27.723 18.208 27.743 17.778 27.337 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 -7.22 3.87)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7OsoE_31" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 22.08 -3.69)" cx="17.439"
                                        cy="33.95" r="1.657" fx="17.439" fy="33.95">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7OsoE_31); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-16.78, -27.87)"
                                        d="M 16.308 28.896 L 15.781 28.4 C 15.350000000000001 27.994 15.33 27.316 15.736 26.884999999999998 L 15.736 26.884999999999998 C 16.142 26.453999999999997 16.82 26.433999999999997 17.251 26.839999999999996 L 17.777 27.335999999999995 C 18.208000000000002 27.741999999999994 18.228 28.419999999999995 17.822000000000003 28.850999999999996 L 17.822000000000003 28.850999999999996 C 17.417 29.282 16.739 29.302 16.308 28.896 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 -8.69 5.43)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7OsoF_32" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 21.75 -3.34)" cx="17.439"
                                        cy="36.092" r="1.657" fx="17.439" fy="36.092">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7OsoF_32); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-15.31, -29.43)"
                                        d="M 14.838 30.456 L 14.312 29.96 C 13.881 29.554000000000002 13.860999999999999 28.876 14.267 28.445 L 14.267 28.445 C 14.673 28.014 15.350999999999999 27.994 15.782 28.4 L 16.308 28.895999999999997 C 16.739 29.301999999999996 16.759 29.979999999999997 16.353 30.410999999999998 L 16.353 30.410999999999998 C 15.947 30.842 15.269 30.862 14.838 30.456 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 -10.16 6.99)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7OsoG_33" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 21.42 -3)" cx="17.439"
                                        cy="38.235" r="1.657" fx="17.439" fy="38.235">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7OsoG_33); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-13.84, -30.99)"
                                        d="M 13.368 32.015 L 12.842 31.519000000000002 C 12.411000000000001 31.113000000000003 12.391 30.435000000000002 12.797 30.004 L 12.797 30.004 C 13.203000000000001 29.573 13.881 29.553 14.312000000000001 29.959 L 14.838000000000001 30.455 C 15.269 30.860999999999997 15.289000000000001 31.538999999999998 14.883000000000001 31.97 L 14.883000000000001 31.97 C 14.477 32.401 13.799 32.421 13.368 32.015 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 3.33 -11.22)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7OsoH_34" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 24.86 -6.65)" cx="14.771"
                                        cy="15.735" r="1.657" fx="14.771" fy="15.735">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7OsoH_34); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-27.33, -12.78)"
                                        d="M 26.861 13.813 L 26.334 13.317 C 25.903 12.911 25.883 12.233 26.288999999999998 11.802 L 26.288999999999998 11.802 C 26.694999999999997 11.371 27.372999999999998 11.350999999999999 27.804 11.757 L 28.331 12.253 C 28.762 12.659 28.782 13.337 28.376 13.768 L 28.376 13.768 C 27.97 14.198 27.291 14.218 26.861 13.813 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 1.86 -9.66)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7OsoI_35" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 24.54 -6.3)" cx="14.771"
                                        cy="17.878" r="1.657" fx="14.771" fy="17.878">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7OsoI_35); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-25.86, -14.34)"
                                        d="M 25.391 15.372 L 24.865 14.876 C 24.433999999999997 14.469999999999999 24.413999999999998 13.792 24.819999999999997 13.360999999999999 L 24.819999999999997 13.360999999999999 C 25.225999999999996 12.93 25.903999999999996 12.909999999999998 26.334999999999997 13.315999999999999 L 26.862 13.812 C 27.293 14.218 27.313 14.895999999999999 26.907 15.327 L 26.907 15.327 C 26.5 15.758 25.822 15.778 25.391 15.372 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 0.39 -8.1)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7OsoJ_36" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 24.21 -5.95)" cx="14.771"
                                        cy="20.021" r="1.657" fx="14.771" fy="20.021">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7OsoJ_36); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-24.39, -15.9)"
                                        d="M 23.921 16.931 L 23.395 16.435000000000002 C 22.964 16.029000000000003 22.944 15.351000000000003 23.349999999999998 14.920000000000002 L 23.349999999999998 14.920000000000002 C 23.755999999999997 14.489000000000003 24.433999999999997 14.469000000000001 24.865 14.875000000000002 L 25.391 15.371000000000002 C 25.822 15.777000000000003 25.842 16.455000000000002 25.436 16.886000000000003 L 25.436 16.886000000000003 C 25.03 17.317 24.352 17.337 23.921 16.931 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 -1.08 -6.54)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7OsoK_37" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 23.88 -5.6)" cx="14.771"
                                        cy="22.164" r="1.657" fx="14.771" fy="22.164">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7OsoK_37); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-22.92, -17.46)"
                                        d="M 22.451 18.49 L 21.925 17.994 C 21.494 17.588 21.474 16.91 21.88 16.479 L 21.88 16.479 C 22.285999999999998 16.048 22.964 16.028 23.395 16.433999999999997 L 23.921 16.929999999999996 C 24.352 17.335999999999995 24.372 18.013999999999996 23.966 18.444999999999997 L 23.966 18.444999999999997 C 23.56 18.876 22.882 18.896 22.451 18.49 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 -2.55 -4.98)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7OsoL_38" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 23.55 -5.26)" cx="14.771"
                                        cy="24.306" r="1.657" fx="14.771" fy="24.306">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7OsoL_38); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-21.45, -19.02)"
                                        d="M 20.981 20.05 L 20.455000000000002 19.554000000000002 C 20.024 19.148000000000003 20.004 18.470000000000002 20.41 18.039 L 20.41 18.039 C 20.816 17.608 21.494 17.588 21.925 17.994 L 22.451 18.49 C 22.882 18.895999999999997 22.902 19.573999999999998 22.496000000000002 20.005 L 22.496000000000002 20.005 C 22.09 20.436 21.412 20.456 20.981 20.05 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 -4.02 -3.42)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7OsoM_39" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 23.23 -4.91)" cx="14.771"
                                        cy="26.449" r="1.657" fx="14.771" fy="26.449">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7OsoM_39); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-19.98, -20.58)"
                                        d="M 19.511 21.609 L 18.983999999999998 21.113000000000003 C 18.552999999999997 20.707000000000004 18.532999999999998 20.029000000000003 18.938999999999997 19.598000000000003 L 18.938999999999997 19.598000000000003 C 19.344999999999995 19.167 20.022999999999996 19.147000000000002 20.453999999999997 19.553 L 20.980999999999998 20.049 C 21.412 20.455 21.432 21.133 21.026 21.564 L 21.026 21.564 C 20.62 21.995 19.942 22.015 19.511 21.609 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 -5.49 -1.86)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7OsoN_40" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 22.9 -4.56)" cx="14.771"
                                        cy="28.592" r="1.657" fx="14.771" fy="28.592">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7OsoN_40); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-18.51, -22.14)"
                                        d="M 18.041 23.168 L 17.514 22.672 C 17.083 22.266000000000002 17.063 21.588 17.468999999999998 21.157 L 17.468999999999998 21.157 C 17.874999999999996 20.726 18.552999999999997 20.706 18.983999999999998 21.112 L 19.509999999999998 21.607999999999997 C 19.941 22.013999999999996 19.961 22.691999999999997 19.555 23.122999999999998 L 19.555 23.122999999999998 C 19.15 23.554 18.472 23.574 18.041 23.168 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 -6.96 -0.3)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7OsoO_41" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 22.57 -4.21)" cx="14.771"
                                        cy="30.735" r="1.657" fx="14.771" fy="30.735">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7OsoO_41); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-17.04, -23.7)"
                                        d="M 16.571 24.727 L 16.044 24.231 C 15.613000000000001 23.825000000000003 15.593 23.147000000000002 15.999 22.716 L 15.999 22.716 C 16.405 22.285 17.083000000000002 22.265 17.514 22.671 L 18.04 23.166999999999998 C 18.471 23.572999999999997 18.491 24.250999999999998 18.085 24.682 L 18.085 24.682 C 17.68 25.113 17.002 25.133 16.571 24.727 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 -8.43 1.26)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7OsoP_42" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 22.24 -3.87)" cx="14.771"
                                        cy="32.878" r="1.657" fx="14.771" fy="32.878">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7OsoP_42); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-15.57, -25.26)"
                                        d="M 15.102 26.287 L 14.576 25.791 C 14.145000000000001 25.385 14.125 24.707 14.531 24.276 L 14.531 24.276 C 14.937000000000001 23.845 15.615 23.825 16.046 24.230999999999998 L 16.572 24.726999999999997 C 17.003 25.132999999999996 17.023 25.810999999999996 16.617 26.241999999999997 L 16.617 26.241999999999997 C 16.21 26.673 15.532 26.693 15.102 26.287 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 -9.9 2.82)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7OsoQ_43" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 21.91 -3.52)" cx="14.771"
                                        cy="35.021" r="1.657" fx="14.771" fy="35.021">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7OsoQ_43); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-14.1, -26.82)"
                                        d="M 13.632 27.846 L 13.106 27.35 C 12.675 26.944000000000003 12.655 26.266000000000002 13.061 25.835 L 13.061 25.835 C 13.467 25.404 14.145 25.384 14.576 25.79 L 15.102 26.285999999999998 C 15.533 26.691999999999997 15.553 27.369999999999997 15.147 27.801 L 15.147 27.801 C 14.74 28.232 14.062 28.252 13.632 27.846 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 -11.37 4.38)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7OsoR_44" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 21.59 -3.17)" cx="14.771"
                                        cy="37.164" r="1.657" fx="14.771" fy="37.164">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7OsoR_44); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-12.63, -28.38)"
                                        d="M 12.162 29.405 L 11.636000000000001 28.909000000000002 C 11.205000000000002 28.503000000000004 11.185 27.825000000000003 11.591000000000001 27.394000000000002 L 11.591000000000001 27.394000000000002 C 11.997000000000002 26.963 12.675 26.943 13.106000000000002 27.349 L 13.632000000000001 27.845 C 14.063 28.250999999999998 14.083000000000002 28.929 13.677000000000001 29.36 L 13.677000000000001 29.36 C 13.27 29.791 12.592 29.811 12.162 29.405 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 11.09 -3.9)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7OsoS_45" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 24.86 -6.65)" cx="25.434"
                                        cy="15.735" r="1.657" fx="25.434" fy="15.735">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7OsoS_45); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-35.09, -20.1)"
                                        d="M 34.62 21.127 L 34.092999999999996 20.631 C 33.662 20.225 33.641999999999996 19.547 34.047999999999995 19.116 L 34.047999999999995 19.116 C 34.45399999999999 18.685 35.132 18.665 35.562999999999995 19.070999999999998 L 36.089999999999996 19.566999999999997 C 36.520999999999994 19.972999999999995 36.541 20.650999999999996 36.135 21.081999999999997 L 36.135 21.081999999999997 C 35.729 21.513 35.051 21.533 34.62 21.127 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 9.62 -2.34)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7OsoT_46" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 24.54 -6.3)" cx="25.434"
                                        cy="17.878" r="1.657" fx="25.434" fy="17.878">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7OsoT_46); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-33.62, -21.66)"
                                        d="M 33.15 22.686 L 32.623 22.19 C 32.192 21.784000000000002 32.172 21.106 32.577999999999996 20.675 L 32.577999999999996 20.675 C 32.983999999999995 20.244 33.662 20.224 34.092999999999996 20.63 L 34.62 21.125999999999998 C 35.050999999999995 21.531999999999996 35.071 22.209999999999997 34.665 22.641 L 34.665 22.641 C 34.259 23.072 33.581 23.092 33.15 22.686 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 8.15 -0.78)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7OsoU_47" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 24.21 -5.95)" cx="25.434"
                                        cy="20.021" r="1.657" fx="25.434" fy="20.021">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7OsoU_47); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-32.15, -23.22)"
                                        d="M 31.68 24.246 L 31.154 23.75 C 30.723 23.344 30.703 22.666 31.108999999999998 22.235 L 31.108999999999998 22.235 C 31.514999999999997 21.804 32.193 21.784 32.623999999999995 22.189999999999998 L 33.150999999999996 22.685999999999996 C 33.581999999999994 23.091999999999995 33.602 23.769999999999996 33.196 24.200999999999997 L 33.196 24.200999999999997 C 32.789 24.632 32.111 24.652 31.68 24.246 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 6.68 0.78)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7OsoV_48" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 23.88 -5.6)" cx="25.434"
                                        cy="22.164" r="1.657" fx="25.434" fy="22.164">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7OsoV_48); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-30.68, -24.78)"
                                        d="M 30.21 25.805 L 29.684 25.309 C 29.253 24.903000000000002 29.233 24.225 29.639 23.794 L 29.639 23.794 C 30.044999999999998 23.363 30.723 23.343 31.154 23.749 L 31.68 24.244999999999997 C 32.111 24.650999999999996 32.131 25.328999999999997 31.725 25.759999999999998 L 31.725 25.759999999999998 C 31.319 26.191 30.641 26.211 30.21 25.805 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 5.21 2.34)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7OsoW_49" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 23.55 -5.26)" cx="25.434"
                                        cy="24.306" r="1.657" fx="25.434" fy="24.306">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7OsoW_49); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-29.21, -26.34)"
                                        d="M 28.74 27.364 L 28.212999999999997 26.868000000000002 C 27.781999999999996 26.462000000000003 27.761999999999997 25.784000000000002 28.167999999999996 25.353 L 28.167999999999996 25.353 C 28.573999999999995 24.922 29.251999999999995 24.902 29.682999999999996 25.308 L 30.209999999999997 25.804 C 30.641 26.209999999999997 30.660999999999998 26.887999999999998 30.255 27.319 L 30.255 27.319 C 29.849 27.75 29.171 27.77 28.74 27.364 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 3.74 3.89)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7OsoX_50" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 23.23 -4.91)" cx="25.434"
                                        cy="26.449" r="1.657" fx="25.434" fy="26.449">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7OsoX_50); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-27.74, -27.89)"
                                        d="M 27.271 28.923 L 26.745 28.427 C 26.314 28.021 26.294 27.343 26.7 26.912 L 26.7 26.912 C 27.105999999999998 26.480999999999998 27.784 26.461 28.215 26.866999999999997 L 28.742 27.362999999999996 C 29.173000000000002 27.768999999999995 29.193 28.446999999999996 28.787000000000003 28.877999999999997 L 28.787000000000003 28.877999999999997 C 28.379 29.309 27.701 29.329 27.271 28.923 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 2.27 5.45)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7OsoY_51" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 22.9 -4.56)" cx="25.434"
                                        cy="28.592" r="1.657" fx="25.434" fy="28.592">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7OsoY_51); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-26.27, -29.45)"
                                        d="M 25.801 30.483 L 25.275 29.987000000000002 C 24.843999999999998 29.581000000000003 24.823999999999998 28.903000000000002 25.229999999999997 28.472 L 25.229999999999997 28.472 C 25.635999999999996 28.041 26.313999999999997 28.021 26.744999999999997 28.427 L 27.270999999999997 28.923 C 27.701999999999998 29.328999999999997 27.721999999999998 30.006999999999998 27.316 30.438 L 27.316 30.438 C 26.909 30.869 26.231 30.889 25.801 30.483 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 0.8 7.01)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7OsoZ_52" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 22.57 -4.21)" cx="25.434"
                                        cy="30.735" r="1.657" fx="25.434" fy="30.735">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7OsoZ_52); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-24.8, -31.01)"
                                        d="M 24.331 32.042 L 23.805 31.546000000000003 C 23.374 31.140000000000004 23.354 30.462000000000003 23.759999999999998 30.031000000000002 L 23.759999999999998 30.031000000000002 C 24.165999999999997 29.6 24.843999999999998 29.580000000000002 25.275 29.986 L 25.801 30.482 C 26.232 30.887999999999998 26.252 31.566 25.846 31.997 L 25.846 31.997 C 25.439 32.428 24.761 32.448 24.331 32.042 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 -0.67 8.57)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7Osoaa_53" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 22.24 -3.87)" cx="25.434"
                                        cy="32.878" r="1.657" fx="25.434" fy="32.878">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7Osoaa_53); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-23.33, -32.57)"
                                        d="M 22.861 33.601 L 22.335 33.105 C 21.904 32.699 21.884 32.020999999999994 22.29 31.589999999999996 L 22.29 31.589999999999996 C 22.695999999999998 31.158999999999995 23.374 31.138999999999996 23.805 31.544999999999995 L 24.331 32.041 C 24.762 32.446999999999996 24.782 33.125 24.376 33.556 L 24.376 33.556 C 23.969 33.987 23.291 34.007 22.861 33.601 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 -2.14 10.13)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7Osoab_54" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 21.91 -3.52)" cx="25.434"
                                        cy="35.021" r="1.657" fx="25.434" fy="35.021">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7Osoab_54); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-21.86, -34.13)"
                                        d="M 21.391 35.161 L 20.863999999999997 34.665 C 20.432999999999996 34.259 20.412999999999997 33.580999999999996 20.818999999999996 33.15 L 20.818999999999996 33.15 C 21.224999999999994 32.719 21.902999999999995 32.699 22.333999999999996 33.105 L 22.859999999999996 33.601 C 23.290999999999997 34.007 23.310999999999996 34.685 22.904999999999998 35.116 L 22.904999999999998 35.116 C 22.5 35.546 21.821 35.566 21.391 35.161 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 -3.61 11.69)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7Osoac_55" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 21.59 -3.17)" cx="25.434"
                                        cy="37.164" r="1.657" fx="25.434" fy="37.164">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7Osoac_55); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-20.39, -35.69)"
                                        d="M 19.921 36.72 L 19.394 36.224 C 18.962999999999997 35.818 18.942999999999998 35.13999999999999 19.348999999999997 34.708999999999996 L 19.348999999999997 34.708999999999996 C 19.754999999999995 34.278 20.432999999999996 34.257999999999996 20.863999999999997 34.663999999999994 L 21.389999999999997 35.16 C 21.820999999999998 35.565999999999995 21.840999999999998 36.244 21.435 36.675 L 21.435 36.675 C 21.03 37.106 20.351 37.126 19.921 36.72 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 14.29 -11.19)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7Osoad_56" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 26.01 -7.86)" cx="22.763"
                                        cy="8.235" r="1.657" fx="22.763" fy="8.235">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7Osoad_56); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-38.29, -12.81)"
                                        d="M 37.821 13.837 L 37.294999999999995 13.341 C 36.864 12.934999999999999 36.843999999999994 12.257 37.24999999999999 11.825999999999999 L 37.24999999999999 11.825999999999999 C 37.65599999999999 11.395 38.333999999999996 11.374999999999998 38.76499999999999 11.780999999999999 L 39.291999999999994 12.277 C 39.72299999999999 12.683 39.742999999999995 13.360999999999999 39.336999999999996 13.792 L 39.336999999999996 13.792 C 38.929 14.223 38.251 14.243 37.821 13.837 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 12.82 -9.63)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7Osoae_57" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 25.68 -7.52)" cx="22.763"
                                        cy="10.378" r="1.657" fx="22.763" fy="10.378">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7Osoae_57); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-36.82, -14.37)"
                                        d="M 36.351 15.396 L 35.824 14.9 C 35.393 14.494 35.373 13.816 35.778999999999996 13.385 L 35.778999999999996 13.385 C 36.184999999999995 12.954 36.863 12.934 37.294 13.34 L 37.82 13.836 C 38.251 14.242 38.271 14.92 37.865 15.351 L 37.865 15.351 C 37.459 15.782 36.781 15.802 36.351 15.396 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 11.35 -8.07)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7Osoaf_58" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 25.36 -7.17)" cx="22.763"
                                        cy="12.521" r="1.657" fx="22.763" fy="12.521">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7Osoaf_58); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-35.35, -15.93)"
                                        d="M 34.881 16.956 L 34.355 16.46 C 33.924 16.054000000000002 33.903999999999996 15.376000000000001 34.309999999999995 14.945 L 34.309999999999995 14.945 C 34.715999999999994 14.514000000000001 35.394 14.494 35.824999999999996 14.9 L 36.351 15.396 C 36.782 15.802000000000001 36.802 16.48 36.396 16.911 L 36.396 16.911 C 35.99 17.341 35.311 17.361 34.881 16.956 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 9.88 -6.51)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7Osoag_59" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 25.03 -6.82)" cx="22.763"
                                        cy="14.663" r="1.657" fx="22.763" fy="14.663">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7Osoag_59); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-33.88, -17.49)"
                                        d="M 33.411 18.515 L 32.885 18.019000000000002 C 32.454 17.613000000000003 32.434 16.935000000000002 32.839999999999996 16.504 L 32.839999999999996 16.504 C 33.245999999999995 16.073 33.924 16.053 34.355 16.459 L 34.881 16.955 C 35.312 17.360999999999997 35.332 18.038999999999998 34.926 18.47 L 34.926 18.47 C 34.52 18.901 33.842 18.921 33.411 18.515 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 8.41 -4.95)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7Osoah_60" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 24.7 -6.47)" cx="22.763"
                                        cy="16.806" r="1.657" fx="22.763" fy="16.806">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7Osoah_60); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-32.41, -19.05)"
                                        d="M 31.941 20.074 L 31.415 19.578000000000003 C 30.983999999999998 19.172000000000004 30.964 18.494000000000003 31.369999999999997 18.063000000000002 L 31.369999999999997 18.063000000000002 C 31.775999999999996 17.632 32.454 17.612000000000002 32.885 18.018 L 33.411 18.514 C 33.842 18.919999999999998 33.862 19.598 33.456 20.029 L 33.456 20.029 C 33.05 20.46 32.372 20.48 31.941 20.074 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 6.94 -3.39)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7Osoai_61" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 24.37 -6.13)" cx="22.763"
                                        cy="18.949" r="1.657" fx="22.763" fy="18.949">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7Osoai_61); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-30.94, -20.61)"
                                        d="M 30.471 21.633 L 29.945 21.137 C 29.514 20.731 29.494 20.053 29.9 19.622 L 29.9 19.622 C 30.305999999999997 19.191 30.983999999999998 19.171 31.415 19.576999999999998 L 31.941 20.072999999999997 C 32.372 20.478999999999996 32.391999999999996 21.156999999999996 31.986 21.587999999999997 L 31.986 21.587999999999997 C 31.58 22.019 30.902 22.039 30.471 21.633 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 5.47 -1.83)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7Osoaj_62" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 24.05 -5.78)" cx="22.763"
                                        cy="21.092" r="1.657" fx="22.763" fy="21.092">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7Osoaj_62); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-29.47, -22.17)"
                                        d="M 29.001 23.193 L 28.475 22.697000000000003 C 28.044 22.291000000000004 28.024 21.613000000000003 28.43 21.182000000000002 L 28.43 21.182000000000002 C 28.836 20.751 29.514 20.731 29.945 21.137 L 30.471 21.633 C 30.902 22.038999999999998 30.922 22.717 30.516000000000002 23.148 L 30.516000000000002 23.148 C 30.11 23.579 29.432 23.599 29.001 23.193 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 4 -0.28)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7Osoak_63" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 23.72 -5.43)" cx="22.763"
                                        cy="23.235" r="1.657" fx="22.763" fy="23.235">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7Osoak_63); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-28, -23.72)"
                                        d="M 27.531 24.752 L 27.003999999999998 24.256 C 26.572999999999997 23.85 26.552999999999997 23.172 26.958999999999996 22.741 L 26.958999999999996 22.741 C 27.364999999999995 22.31 28.042999999999996 22.29 28.473999999999997 22.695999999999998 L 28.999999999999996 23.191999999999997 C 29.430999999999997 23.597999999999995 29.450999999999997 24.275999999999996 29.044999999999998 24.706999999999997 L 29.044999999999998 24.706999999999997 C 28.64 25.138 27.962 25.158 27.531 24.752 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 2.53 1.28)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7Osoal_64" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 23.39 -5.08)" cx="22.763"
                                        cy="25.378" r="1.657" fx="22.763" fy="25.378">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7Osoal_64); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-26.53, -25.28)"
                                        d="M 26.061 26.311 L 25.535 25.815 C 25.104 25.409000000000002 25.084 24.731 25.49 24.3 L 25.49 24.3 C 25.895999999999997 23.869 26.573999999999998 23.849 27.005 24.255 L 27.532 24.750999999999998 C 27.963 25.156999999999996 27.983 25.834999999999997 27.577 26.266 L 27.577 26.266 C 27.17 26.697 26.492 26.717 26.061 26.311 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 1.06 2.84)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7Osoam_65" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 23.06 -4.73)" cx="22.763"
                                        cy="27.521" r="1.657" fx="22.763" fy="27.521">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7Osoam_65); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-25.06, -26.84)"
                                        d="M 24.591 27.87 L 24.065 27.374000000000002 C 23.634 26.968000000000004 23.614 26.290000000000003 24.02 25.859 L 24.02 25.859 C 24.426 25.428 25.104 25.408 25.535 25.814 L 26.062 26.31 C 26.493000000000002 26.715999999999998 26.513 27.394 26.107000000000003 27.825 L 26.107000000000003 27.825 C 25.7 28.256 25.022 28.276 24.591 27.87 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 -0.41 4.4)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7Osoan_66" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 22.73 -4.39)" cx="22.763"
                                        cy="29.664" r="1.657" fx="22.763" fy="29.664">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7Osoan_66); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-23.59, -28.4)"
                                        d="M 23.122 29.43 L 22.596 28.934 C 22.165 28.528000000000002 22.145 27.85 22.551 27.419 L 22.551 27.419 C 22.956999999999997 26.988 23.634999999999998 26.968 24.066 27.374 L 24.592 27.869999999999997 C 25.023 28.275999999999996 25.043 28.953999999999997 24.637 29.384999999999998 L 24.637 29.384999999999998 C 24.23 29.816 23.552 29.836 23.122 29.43 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 -1.88 5.96)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7Osoao_67" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 22.41 -4.04)" cx="22.763"
                                        cy="31.807" r="1.657" fx="22.763" fy="31.807">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7Osoao_67); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-22.12, -29.96)"
                                        d="M 21.652 30.989 L 21.126 30.493000000000002 C 20.695 30.087000000000003 20.675 29.409000000000002 21.081 28.978 L 21.081 28.978 C 21.487 28.547 22.165 28.527 22.596 28.933 L 23.122 29.429 C 23.553 29.834999999999997 23.573 30.512999999999998 23.167 30.944 L 23.167 30.944 C 22.76 31.375 22.082 31.395 21.652 30.989 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 -3.35 7.52)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7Osoap_68" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 22.08 -3.69)" cx="22.763"
                                        cy="33.95" r="1.657" fx="22.763" fy="33.95">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7Osoap_68); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-20.65, -31.52)"
                                        d="M 20.182 32.548 L 19.654999999999998 32.052 C 19.223999999999997 31.646 19.203999999999997 30.968 19.609999999999996 30.537 L 19.609999999999996 30.537 C 20.015999999999995 30.105999999999998 20.693999999999996 30.086 21.124999999999996 30.491999999999997 L 21.650999999999996 30.987999999999996 C 22.081999999999997 31.393999999999995 22.101999999999997 32.071999999999996 21.695999999999998 32.50299999999999 L 21.695999999999998 32.50299999999999 C 21.29 32.934 20.612 32.954 20.182 32.548 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 -4.82 9.08)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7Osoaq_69" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 21.75 -3.34)" cx="22.763"
                                        cy="36.092" r="1.657" fx="22.763" fy="36.092">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7Osoaq_69); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-19.18, -33.08)"
                                        d="M 18.712 34.108 L 18.185 33.611999999999995 C 17.753999999999998 33.205999999999996 17.733999999999998 32.52799999999999 18.139999999999997 32.096999999999994 L 18.139999999999997 32.096999999999994 C 18.545999999999996 31.665999999999993 19.223999999999997 31.645999999999994 19.654999999999998 32.05199999999999 L 20.180999999999997 32.547999999999995 C 20.612 32.95399999999999 20.631999999999998 33.632 20.226 34.062999999999995 L 20.226 34.062999999999995 C 19.82 34.493 19.142 34.513 18.712 34.108 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 -6.29 10.64)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7Osoar_70" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 21.42 -3)" cx="22.763"
                                        cy="38.235" r="1.657" fx="22.763" fy="38.235">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7Osoar_70); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-17.71, -34.64)"
                                        d="M 17.242 35.667 L 16.716 35.171 C 16.285 34.765 16.265 34.086999999999996 16.671 33.656 L 16.671 33.656 C 17.076999999999998 33.225 17.755 33.205 18.186 33.611 L 18.713 34.107 C 19.144000000000002 34.513 19.164 35.191 18.758000000000003 35.622 L 18.758000000000003 35.622 C 18.351 36.053 17.672 36.073 17.242 35.667 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 13.09 -13.8)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7Osoas_71" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 26.18 -8.04)" cx="20.095"
                                        cy="7.163" r="1.657" fx="20.095" fy="7.163">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7Osoas_71); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-37.09, -10.2)"
                                        d="M 36.615 11.227 L 36.088 10.731 C 35.657000000000004 10.325 35.637 9.647 36.043 9.216 L 36.043 9.216 C 36.449 8.785 37.127 8.764999999999999 37.558 9.171 L 38.085 9.667 C 38.516 10.073 38.536 10.751 38.13 11.182 L 38.13 11.182 C 37.723 11.613 37.045 11.633 36.615 11.227 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 11.62 -12.24)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7Osoat_72" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 25.85 -7.69)" cx="20.095"
                                        cy="9.306" r="1.657" fx="20.095" fy="9.306">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7Osoat_72); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-35.62, -11.76)"
                                        d="M 35.145 12.787 L 34.618 12.291 C 34.187000000000005 11.885 34.167 11.207 34.573 10.776 L 34.573 10.776 C 34.979 10.345 35.657000000000004 10.325 36.088 10.731 L 36.615 11.227 C 37.046 11.633000000000001 37.066 12.311 36.660000000000004 12.742 L 36.660000000000004 12.742 C 36.253 13.173 35.575 13.193 35.145 12.787 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 10.15 -10.68)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7Osoau_73" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 25.52 -7.34)" cx="20.095"
                                        cy="11.449" r="1.657" fx="20.095" fy="11.449">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7Osoau_73); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-34.15, -13.32)"
                                        d="M 33.675 14.346 L 33.148999999999994 13.85 C 32.717999999999996 13.443999999999999 32.69799999999999 12.766 33.10399999999999 12.334999999999999 L 33.10399999999999 12.334999999999999 C 33.50999999999999 11.904 34.187999999999995 11.883999999999999 34.61899999999999 12.29 L 35.145999999999994 12.786 C 35.57699999999999 13.192 35.596999999999994 13.87 35.190999999999995 14.301 L 35.190999999999995 14.301 C 34.783 14.732 34.105 14.752 33.675 14.346 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 8.68 -9.12)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7Osoav_74" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 25.19 -7)" cx="20.095"
                                        cy="13.592" r="1.657" fx="20.095" fy="13.592">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7Osoav_74); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-32.68, -14.88)"
                                        d="M 32.205 15.905 L 31.679 15.408999999999999 C 31.247999999999998 15.002999999999998 31.227999999999998 14.325 31.633999999999997 13.893999999999998 L 31.633999999999997 13.893999999999998 C 32.04 13.463 32.717999999999996 13.442999999999998 33.148999999999994 13.848999999999998 L 33.675 14.344999999999999 C 34.105999999999995 14.751 34.126 15.428999999999998 33.72 15.86 L 33.72 15.86 C 33.314 16.291 32.635 16.311 32.205 15.905 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 7.21 -7.56)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7Osoaw_75" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 24.86 -6.65)" cx="20.095"
                                        cy="15.735" r="1.657" fx="20.095" fy="15.735">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7Osoaw_75); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-31.21, -16.44)"
                                        d="M 30.735 17.465 L 30.208 16.969 C 29.776999999999997 16.563000000000002 29.756999999999998 15.885000000000002 30.162999999999997 15.454 L 30.162999999999997 15.454 C 30.568999999999996 15.023000000000001 31.246999999999996 15.003 31.677999999999997 15.409 L 32.204 15.905000000000001 C 32.635 16.311 32.655 16.989 32.249 17.42 L 32.249 17.42 C 31.844 17.85 31.166 17.87 30.735 17.465 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 5.74 -6)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7Osoax_76" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 24.54 -6.3)" cx="20.095"
                                        cy="17.878" r="1.657" fx="20.095" fy="17.878">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7Osoax_76); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-29.74, -18)"
                                        d="M 29.265 19.024 L 28.739 18.528000000000002 C 28.308 18.122000000000003 28.288 17.444000000000003 28.694 17.013 L 28.694 17.013 C 29.099999999999998 16.582 29.778 16.562 30.209 16.968 L 30.736 17.464 C 31.167 17.869999999999997 31.187 18.548 30.781000000000002 18.979 L 30.781000000000002 18.979 C 30.374 19.41 29.696 19.43 29.265 19.024 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 4.27 -4.45)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7Osoay_77" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 24.21 -5.95)" cx="20.095"
                                        cy="20.021" r="1.657" fx="20.095" fy="20.021">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7Osoay_77); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-28.27, -19.55)"
                                        d="M 27.795 20.583 L 27.269000000000002 20.087 C 26.838 19.681 26.818 19.003 27.224 18.572 L 27.224 18.572 C 27.63 18.141 28.308 18.121 28.739 18.526999999999997 L 29.265 19.022999999999996 C 29.696 19.428999999999995 29.716 20.106999999999996 29.310000000000002 20.537999999999997 L 29.310000000000002 20.537999999999997 C 28.904 20.969 28.226 20.989 27.795 20.583 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 2.8 -2.89)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7Osoaz_78" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 23.88 -5.6)" cx="20.095"
                                        cy="22.164" r="1.657" fx="20.095" fy="22.164">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7Osoaz_78); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-26.8, -21.11)"
                                        d="M 26.325 22.142 L 25.799 21.646 C 25.368 21.240000000000002 25.348 20.562 25.753999999999998 20.131 L 25.753999999999998 20.131 C 26.159999999999997 19.7 26.837999999999997 19.68 27.269 20.086 L 27.794999999999998 20.581999999999997 C 28.226 20.987999999999996 28.246 21.665999999999997 27.84 22.096999999999998 L 27.84 22.096999999999998 C 27.434 22.528 26.756 22.548 26.325 22.142 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 1.33 -1.33)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7OsoaA_79" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 23.55 -5.26)" cx="20.095"
                                        cy="24.306" r="1.657" fx="20.095" fy="24.306">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7OsoaA_79); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-25.33, -22.67)"
                                        d="M 24.855 23.702 L 24.329 23.206000000000003 C 23.898 22.800000000000004 23.878 22.122000000000003 24.284 21.691000000000003 L 24.284 21.691000000000003 C 24.689999999999998 21.26 25.368 21.240000000000002 25.799 21.646 L 26.325 22.142 C 26.756 22.548 26.776 23.226 26.37 23.657 L 26.37 23.657 C 25.964 24.088 25.286 24.108 24.855 23.702 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 -0.14 0.23)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7OsoaB_80" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 23.23 -4.91)" cx="20.095"
                                        cy="26.449" r="1.657" fx="20.095" fy="26.449">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7OsoaB_80); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-23.86, -24.23)"
                                        d="M 23.385 25.261 L 22.859 24.765 C 22.428 24.359 22.408 23.681 22.814 23.25 L 22.814 23.25 C 23.22 22.819 23.898 22.799 24.329 23.205 L 24.855 23.700999999999997 C 25.286 24.106999999999996 25.306 24.784999999999997 24.900000000000002 25.215999999999998 L 24.900000000000002 25.215999999999998 C 24.494 25.647 23.816 25.667 23.385 25.261 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 -1.61 1.79)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7OsoaC_81" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 22.9 -4.56)" cx="20.095"
                                        cy="28.592" r="1.657" fx="20.095" fy="28.592">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7OsoaC_81); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-22.39, -25.79)"
                                        d="M 21.915 26.82 L 21.389 26.324 C 20.958 25.918000000000003 20.938 25.240000000000002 21.343999999999998 24.809 L 21.343999999999998 24.809 C 21.749999999999996 24.378 22.427999999999997 24.358 22.858999999999998 24.764 L 23.386 25.259999999999998 C 23.817 25.665999999999997 23.837 26.343999999999998 23.431 26.775 L 23.431 26.775 C 23.024 27.206 22.346 27.226 21.915 26.82 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 -3.08 3.35)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7OsoaD_82" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 22.57 -4.21)" cx="20.095"
                                        cy="30.735" r="1.657" fx="20.095" fy="30.735">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7OsoaD_82); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-20.92, -27.35)"
                                        d="M 20.446 28.379 L 19.92 27.883000000000003 C 19.489 27.477000000000004 19.469 26.799000000000003 19.875 26.368000000000002 L 19.875 26.368000000000002 C 20.281 25.937 20.959 25.917 21.39 26.323 L 21.917 26.819 C 22.348000000000003 27.224999999999998 22.368000000000002 27.903 21.962000000000003 28.334 L 21.962000000000003 28.334 C 21.554 28.765 20.876 28.785 20.446 28.379 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 -4.55 4.91)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7OsoaE_83" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 22.24 -3.87)" cx="20.095"
                                        cy="32.878" r="1.657" fx="20.095" fy="32.878">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7OsoaE_83); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-19.45, -28.91)"
                                        d="M 18.976 29.939 L 18.45 29.443 C 18.019 29.037000000000003 17.999 28.359 18.404999999999998 27.928 L 18.404999999999998 27.928 C 18.810999999999996 27.497 19.488999999999997 27.477 19.919999999999998 27.883 L 20.445999999999998 28.378999999999998 C 20.877 28.784999999999997 20.897 29.462999999999997 20.491 29.894 L 20.491 29.894 C 20.084 30.325 19.406 30.345 18.976 29.939 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 3.79 -3.9)">
                                    <linearGradient id="SVGID_scHmrIaJ6JpFgG1La7OsoaF_84" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(1 0 0 1 0 0)" x1="13.612" y1="5.788" x2="33.639"
                                        y2="25.647">
                                        <stop offset="61.5%" style="stop-color:rgb(255,170,110);stop-opacity: 0" />
                                        <stop offset="64.5%" style="stop-color:rgb(247,152,94);stop-opacity: 0.055" />
                                        <stop offset="71.8%" style="stop-color:rgb(232,115,60);stop-opacity: 0.187" />
                                        <stop offset="79%" style="stop-color:rgb(220,86,34);stop-opacity: 0.319" />
                                        <stop offset="86.2%" style="stop-color:rgb(211,65,15);stop-opacity: 0.45" />
                                        <stop offset="93.2%" style="stop-color:rgb(206,52,4);stop-opacity: 0.577" />
                                        <stop offset="100%" style="stop-color:rgb(204,48,0);stop-opacity: 0.7" />
                                    </linearGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7OsoaF_84); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-27.79, -20.1)"
                                        d="M 41.576 10.015 L 41.457 9.902000000000001 L 41.512 9.844000000000001 C 41.888 9.446000000000002 41.869 8.818000000000001 41.471000000000004 8.442000000000002 L 41.07 8.064000000000002 L 41.125 8.006000000000002 C 41.501 7.608000000000002 41.482 6.980000000000002 41.084 6.604000000000002 L 40.44 5.999 C 40.041999999999994 5.622999999999999 39.413999999999994 5.6419999999999995 39.038 6.04 L 38.928 6.156 C 38.881 6.2059999999999995 38.858 6.268 38.823 6.324 C 32.151 5.841 11.786000000000001 25.901000000000003 13.826 31.816000000000003 C 14.054 32.476 14.404 33.014 14.853 33.442 C 14.855 33.443 14.856 33.445 14.858 33.446 C 14.860000000000001 33.446999999999996 14.861 33.449 14.862 33.451 C 15.316 33.873 15.874 34.192 16.546 34.38 C 19.067 35.086000000000006 23.83 31.723000000000003 28.454 27.094 L 28.799 27.419 C 29.197 27.795 29.825 27.776 30.201 27.378 L 30.311 27.262 C 30.687 26.864 30.668 26.236 30.27 25.86 C 30.668 26.236 31.296 26.217 31.672 25.819 L 31.782 25.703 C 32.158 25.305 32.139 24.677 31.741 24.301 C 32.139 24.677 32.767 24.657999999999998 33.143 24.259999999999998 L 33.253 24.144 C 33.629 23.746 33.61 23.118 33.212 22.741999999999997 C 33.61000000000001 23.118 34.23800000000001 23.098999999999997 34.614000000000004 22.700999999999997 L 34.724000000000004 22.584999999999997 C 35.1 22.186999999999998 35.081 21.558999999999997 34.68300000000001 21.182999999999996 C 35.08100000000001 21.558999999999997 35.70900000000001 21.539999999999996 36.08500000000001 21.141999999999996 L 36.19500000000001 21.025999999999996 C 36.571000000000005 20.627999999999997 36.55200000000001 19.999999999999996 36.15400000000001 19.623999999999995 L 35.92000000000001 19.403999999999996 C 36.31800000000001 19.778999999999996 36.94600000000001 19.760999999999996 37.32100000000001 19.362999999999996 L 37.43100000000001 19.246999999999996 C 37.80700000000001 18.848999999999997 37.78800000000001 18.220999999999997 37.390000000000015 17.844999999999995 L 37.12000000000001 17.589999999999996 C 37.518000000000015 17.965999999999998 38.146000000000015 17.946999999999996 38.52200000000001 17.548999999999996 L 38.63200000000001 17.432999999999996 C 39.00800000000001 17.034999999999997 38.98900000000001 16.406999999999996 38.591000000000015 16.030999999999995 L 38.216000000000015 15.677999999999995 C 38.61400000000002 16.053999999999995 39.24200000000002 16.034999999999997 39.618000000000016 15.636999999999995 L 39.728000000000016 15.520999999999995 C 40.10400000000001 15.122999999999996 40.085000000000015 14.494999999999996 39.68700000000002 14.118999999999996 L 39.34300000000002 13.794999999999996 L 39.353000000000016 13.783999999999997 C 39.75200000000002 14.105999999999996 40.33300000000001 14.081999999999997 40.69000000000002 13.702999999999998 L 40.80000000000002 13.586999999999998 C 41.176000000000016 13.188999999999998 41.15700000000002 12.560999999999998 40.75900000000002 12.184999999999999 L 40.31200000000002 11.764 L 40.350000000000016 11.724 C 40.73200000000001 11.919 41.20600000000002 11.864 41.51600000000001 11.536 L 41.62600000000001 11.42 C 41.993 11.018 41.975 10.39 41.576 10.015 z M 35.43 18.945 L 35.506 19.016000000000002 C 35.48 18.991000000000003 35.446 18.983 35.418 18.961000000000002 C 35.422 18.956 35.426 18.951 35.43 18.945 z M 36.671 17.171 L 36.741 17.237 C 36.717 17.214 36.686 17.206 36.66 17.186999999999998 C 36.664 17.181 36.668 17.176 36.671 17.171 z M 37.865 15.352 L 37.941 15.423 C 37.914 15.398 37.88 15.389 37.851 15.367 L 37.865 15.352 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 -6.02 6.47)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7OsoaG_85" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 21.91 -3.52)" cx="20.095"
                                        cy="35.021" r="1.657" fx="20.095" fy="35.021">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7OsoaG_85); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-17.98, -30.47)"
                                        d="M 17.506 31.498 L 16.98 31.002000000000002 C 16.549 30.596000000000004 16.529 29.918000000000003 16.935 29.487000000000002 L 16.935 29.487000000000002 C 17.340999999999998 29.056 18.019 29.036 18.45 29.442 L 18.976 29.938 C 19.407 30.343999999999998 19.427 31.022 19.021 31.453 L 19.021 31.453 C 18.614 31.884 17.936 31.904 17.506 31.498 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 -7.49 8.03)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7OsoaH_86" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 21.59 -3.17)" cx="20.095"
                                        cy="37.164" r="1.657" fx="20.095" fy="37.164">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7OsoaH_86); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-16.51, -32.03)"
                                        d="M 16.036 33.057 L 15.509000000000002 32.561 C 15.078000000000003 32.155 15.058000000000002 31.477 15.464000000000002 31.046 L 15.464000000000002 31.046 C 15.870000000000003 30.615 16.548000000000002 30.595 16.979000000000003 31.000999999999998 L 17.505000000000003 31.496999999999996 C 17.936000000000003 31.902999999999995 17.956000000000003 32.580999999999996 17.550000000000004 33.01199999999999 L 17.550000000000004 33.01199999999999 C 17.144 33.443 16.466 33.463 16.036 33.057 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 -8.96 9.59)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7OsoaI_87" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.73 0.69 -0.53 0.57 21.26 -2.82)" cx="20.095"
                                        cy="39.307" r="1.657" fx="20.095" fy="39.307">
                                        <stop offset="0.6%" style="stop-color:rgb(239,235,157);stop-opacity: 1" />
                                        <stop offset="34.599999999999994%"
                                            style="stop-color:rgb(239,227,42);stop-opacity: 1" />
                                        <stop offset="56.3%" style="stop-color:rgb(238,206,43);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(235,152,45);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7OsoaI_87); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-15.04, -33.59)"
                                        d="M 14.566 34.617 L 14.040000000000001 34.120999999999995 C 13.609000000000002 33.714999999999996 13.589 33.03699999999999 13.995000000000001 32.605999999999995 L 13.995000000000001 32.605999999999995 C 14.401000000000002 32.175 15.079 32.154999999999994 15.510000000000002 32.56099999999999 L 16.037000000000003 33.056999999999995 C 16.468000000000004 33.462999999999994 16.488000000000003 34.141 16.082000000000004 34.571999999999996 L 16.082000000000004 34.571999999999996 C 15.675 35.002 14.996 35.022 14.566 34.617 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 -14 14.93)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7OsoaJ_88" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.57 0.56 -1.15 1.19 45.2 -68.74)" cx="14.584"
                                        cy="49.106" r="4.516" fx="14.584" fy="49.106">
                                        <stop offset="0%" style="stop-color:rgb(155,204,0);stop-opacity: 1" />
                                        <stop offset="23.5%" style="stop-color:rgb(152,201,1);stop-opacity: 1" />
                                        <stop offset="44.1%" style="stop-color:rgb(143,190,2);stop-opacity: 1" />
                                        <stop offset="63.4%" style="stop-color:rgb(128,172,5);stop-opacity: 1" />
                                        <stop offset="82%" style="stop-color:rgb(106,147,10);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(79,115,15);stop-opacity: 1" />
                                    </radialGradient>
                                    <polygon
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7OsoaJ_88); fill-rule: nonzero; opacity: 1;"
                                        points="0.09,2.95 -2.95,0.09 -0.09,-2.95 2.95,-0.09 " />
                                </g>
                                <g transform="matrix(1 0 0 1 0.37 9.39)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7OsoaK_89" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(0.77 -0.64 -0.43 -0.51 8.67 58.89)" cx="22.09"
                                        cy="37.334" r="22.185" fx="22.09" fy="37.334">
                                        <stop offset="0%" style="stop-color:rgb(155,204,0);stop-opacity: 1" />
                                        <stop offset="18%" style="stop-color:rgb(148,196,1);stop-opacity: 1" />
                                        <stop offset="45.4%" style="stop-color:rgb(130,175,5);stop-opacity: 1" />
                                        <stop offset="78.8%" style="stop-color:rgb(101,141,11);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(79,115,15);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7OsoaK_89); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-24.37, -33.39)"
                                        d="M 38.298 29.012 C 38.298 29.012 29.952 17.768 10.451 38.454 C 10.437000000000001 38.451 12.922 41.244 17.203 40.77 C 22.708 40.161 25.176 33.541000000000004 30.461 30.458000000000006 C 34.424 28.147 38.298 29.012 38.298 29.012 z"
                                        stroke-linecap="round" />
                                </g>
                                <g transform="matrix(1 0 0 1 -8.98 0.29)">
                                    <radialGradient id="SVGID_scHmrIaJ6JpFgG1La7OsoaL_90" gradientUnits="userSpaceOnUse"
                                        gradientTransform="matrix(-0.58 0.82 -0.49 -0.35 31.85 29.88)" cx="9.14"
                                        cy="37.44" r="19.945" fx="9.14" fy="37.44">
                                        <stop offset="0%" style="stop-color:rgb(155,204,0);stop-opacity: 1" />
                                        <stop offset="23.5%" style="stop-color:rgb(152,201,1);stop-opacity: 1" />
                                        <stop offset="44.1%" style="stop-color:rgb(143,190,2);stop-opacity: 1" />
                                        <stop offset="63.4%" style="stop-color:rgb(128,172,5);stop-opacity: 1" />
                                        <stop offset="82%" style="stop-color:rgb(106,147,10);stop-opacity: 1" />
                                        <stop offset="100%" style="stop-color:rgb(79,115,15);stop-opacity: 1" />
                                    </radialGradient>
                                    <path
                                        style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_scHmrIaJ6JpFgG1La7OsoaL_90); fill-rule: nonzero; opacity: 1;"
                                        transform=" translate(-15.02, -24.29)"
                                        d="M 18.236 10.099 C 18.236 10.099 28.225 19.389 16.937 33.906 C 14.481000000000002 37.065 11.938000000000002 38.676 10.452000000000002 38.452999999999996 C 10.456000000000001 38.467 7.521000000000002 36.150999999999996 7.742000000000002 31.849999999999994 C 8.025000000000002 26.318999999999996 14.488000000000003 23.464999999999996 17.254 18.006999999999994 C 19.327 13.916 18.236 10.099 18.236 10.099 z"
                                        stroke-linecap="round" />
                                </g>
                            </g>
                        </g>
                    </svg>
                    <span class="btn-light">DE LA FOURCHE A LA FOURCHETTE</span>
                </div>
                <h1 class="h1 fw-black text-white mb-7">
                    SYSTEME DE TRACABILITE DU MAÏS BLANC
                </h1>
                <p class="fs-5 fw-medium text-white text-muted mb-7 mx-xl-8">
                    {{-- One super flexible UI framework for amazing developers and web agencies. Now based on
                    <span class="text-body-color fw-bold">Bootstrap 5</span>, with
                    <span class="text-body-color fw-bold">no jQuery</span> in core and an amazing brand new
                    <span class="text-body-color fw-bold">dark mode</span>. --}}

                    Plongez au cœur de la <span class="text-body-color fw-bold" style="color: #F9AC36 !important;">Traçabilité Agricole</span> : Suivez
                    chaque étape de votre production de maïs,
                    pour une <span class="text-body-color fw-bold" style="color: #F9AC36 !important;">prévention efficace de l'iinfection à
                        l'aflatoxine</span>.
                </p>
                <a class="btn py-2 px-3 m-1" style="background-color: #F9AC36;" data-toggle="click-ripple" href="#"
                    target="_blank">
                    <i class="fa fa-fw fa-desktop opacity-50 me-1"></i> Comment ca marche ?
                </a>
                <a class="btn btn-light py-2 px-3 m-1" data-toggle="click-ripple" href="#">
                    <i class="fa fa-fw fa-arrow-down opacity-50 me-1"></i> En savoir plus
                </a>
            </div>
        </div>
        {{-- <div class="px-lg-8 pull-b text-center">
            <img class="img-fluid" src="{{asset('assets/media/various/hero-promo.png')}}" alt="Hero Promo">
        </div> --}}
    </div>
</div>
<!-- END Hero -->

<!-- Hero After -->
<div id="one-hero-after" class="bg-body-light">
    <div class="content">
        <div class="row py-5">
            <div class="col-6 col-md-3">
                <div class="item item-rounded my-4 text-amethyst bg-amethyst-lighter">
                    <i class="fab fa-fw fa-2x fa-bootstrap"></i>
                </div>
                <h4 class="mb-2">Bootstrap 5</h4>
                <p class="text-muted">
                    The latest and greatest framework version under the hood.
                </p>
            </div>
            <div class="col-6 col-md-3">
                <div class="item item-rounded my-4 text-flat bg-flat-lighter">
                    <i class="fab fa-fw fa-2x fa-js"></i>
                </div>
                <h4 class="mb-2">ECMAScript 6</h4>
                <p class="text-muted">
                    Pure JavaScript code powers the custom JS functionality.
                </p>
            </div>
            <div class="col-6 col-md-3">
                <div class="item item-rounded my-4 text-smooth bg-smooth-lighter">
                    <i class="fab fa-fw fa-2x fa-sass"></i>
                </div>
                <h4 class="mb-2">Sass</h4>
                <p class="text-muted">
                    Modular and extendable styles for total control over your designs.
                </p>
            </div>
            <div class="col-6 col-md-3">
                <div class="item item-rounded my-4 text-city bg-city-lighter">
                    <i class="fab fa-fw fa-2x fa-laravel"></i>
                </div>
                <h4 class="mb-2">Laravel 10</h4>
                <p class="text-muted">
                    Power your apps with the latest Laravel using the included kit.
                </p>
            </div>
        </div>
    </div>
</div>
<!-- END Hero After -->

<!-- Vue Edition -->
<div id="one-vue-edition" class="bg-body-extra-light">
    <div class="content content-full">
        <div class="row py-5">
            <div class="order-md-1 col-md-5 d-flex align-items-center justify-content-center py-5">
                <svg class="w-50" viewBox="0 0 261.76 226.69" xmlns="http://www.w3.org/2000/svg">
                    <g transform="matrix(1.3333 0 0 -1.3333 -76.311 313.34)">
                        <g transform="translate(178.06 235.01)">
                            <path d="m0 0-22.669-39.264-22.669 39.264h-75.491l98.16-170.02 98.16 170.02z"
                                fill="#41b883" />
                        </g>
                        <g transform="translate(178.06 235.01)">
                            <path d="m0 0-22.669-39.264-22.669 39.264h-36.227l58.896-102.01 58.896 102.01z"
                                fill="#34495e" />
                        </g>
                    </g>
                </svg>
            </div>
            <div class="order-md-0 col-md-7 d-flex align-items-center">
                <div>
                    <h2 class="h1 fw-black mb-2">
                        OneUI <span class="fw-medium">Vue Edition</span>
                    </h2>
                    <p class="fs-lg fw-medium text-muted mb-4">
                        A separately sold pure Vue.js 3 version of OneUI, built with Vite, Vue Router and Pinia, is now
                        included in the package for free!
                    </p>
                    <a class="btn btn-primary m-1" data-toggle="click-ripple" href="#">
                        Check it out
                        <i class="fa fa-fw fa-arrow-right fs-base opacity-50 ms-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Vue Edition -->

<!-- Versions -->
<div id="one-versions" class="bg-body-light">
    <div class="content content-full">
        <div class="py-5">
            <div class="row mb-5">
                <div class="col-md-6">
                    <h2 class="h1 fw-black mb-2">
                        OneUI <span class="fw-medium">Versions</span>
                    </h2>
                    <p class="fs-lg fw-medium text-muted mb-0">
                        Inside the package you will find an HTML version, a PHP version and a Laravel Starter Kit.
                    </p>
                </div>
                <div class="col-md-6 d-none d-md-flex align-items-md-center justify-content-md-end">
                    <p class="h1 fw-bold text-body-bg-dark mb-0">
                        Solid Foundation.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-xl-4 py-3">
                    <!-- HTML Version -->
                    <div class="py-4">
                        <i class="fab fa-4x fa-html5 text-city"></i>
                    </div>
                    <h4 class="mb-2">HTML Version</h4>
                    <p class="text-muted">
                        The abstract HTML version. This version can be used with any server side language/framework you
                        prefer or currently working with.
                    </p>
                    <!-- END HTML Version -->
                </div>
                <div class="col-sm-6 col-xl-4 py-3">
                    <!-- PHP Version -->
                    <div class="py-4">
                        <i class="fab fa-4x fa-php text-amethyst"></i>
                    </div>
                    <h4 class="mb-2">PHP Version</h4>
                    <p class="text-muted">
                        The abstract PHP version. This version can come really handy as a starting point if you would
                        like to build a custom PHP application.
                    </p>
                    <!-- END PHP Version -->
                </div>
                <div class="col-sm-6 col-xl-4 py-3">
                    <!-- Laravel Starter Kit -->
                    <div class="py-4">
                        <i class="fab fa-4x fa-laravel text-city"></i>
                    </div>
                    <h4 class="mb-2">Laravel 10 Starter Kit</h4>
                    <p class="text-muted">
                        It features a clean Laravel installation with all OneUI assets ready to work with Laravel Vite
                        and a few example pages to get you started.
                    </p>
                    <!-- END Laravel Starter Kit -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Versions -->

<!-- Features -->
<div id="one-features" class="bg-body-extra-light">
    <div class="content content-full">
        <div class="py-5">
            <div class="row mb-5">
                <div class="col-md-6">
                    <h2 class="h1 fw-black mb-2">
                        OneUI <span class="fw-medium">Features</span>
                    </h2>
                    <p class="fs-lg fw-medium text-muted mb-0">
                        Build user friendly and modern dashboards using the latest tech. Now is the time with a best
                        selling UI framework.
                    </p>
                </div>
                <div class="col-md-6 d-none d-md-flex align-items-md-center justify-content-md-end">
                    <p class="h1 fw-bold text-body-bg-dark mb-0">
                        Carefully Crafted.
                    </p>
                </div>
            </div>
            <div class="row items-push">
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <!-- Bootstrap 5 -->
                    <div class="item item-rounded bg-amethyst-lighter my-4">
                        <i class="fa fa-2x fa-fire text-amethyst"></i>
                    </div>
                    <h4 class="mb-2">Bootstrap 5</h4>
                    <p class="text-muted">
                        The latest Bootstrap version now powers OneUI framework. Amazing new features and utilities are
                        ready for you to use.
                    </p>
                    <!-- END Bootstrap 5 -->
                </div>
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <!-- Sass -->
                    <div class="item item-rounded bg-smooth-lighter my-4">
                        <i class="fab fa-2x fa-sass text-smooth"></i>
                    </div>
                    <h4 class="mb-2">Sass</h4>
                    <p class="text-muted">
                        OneUI was built with Sass, overriding and extending Bootstrap in an intelligent way to ensure a
                        perfect and modular workflow.
                    </p>
                    <!-- END Sass -->
                </div>
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <!-- ES6 -->
                    <div class="item item-rounded bg-flat-lighter my-4">
                        <span class="fw-bold text-flat">ES6</span>
                    </div>
                    <h4 class="mb-2">ECMAScript 6</h4>
                    <p class="text-muted">
                        OneUI was built with ES6, the new major JavaScript release which enables us writing cleaner and
                        better code. No jQuery in core.
                    </p>
                    <!-- END ES6 -->
                </div>
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <!-- Font Awesome 6 -->
                    <div class="item item-rounded bg-warning-light my-4">
                        <i class="fab fa-2x fa-font-awesome text-warning"></i>
                    </div>
                    <h4 class="mb-2">Font Awesome 6</h4>
                    <p class="text-muted">
                        OneUI comes packed with one of the most popular icon sets, bringing you over 2000 freshly made
                        icons for your projects.
                    </p>
                    <!-- END Font Awesome 6 -->
                </div>
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <!-- Gulp -->
                    <div class="item item-rounded bg-city-lighter my-4">
                        <i class="fab fa-2x fa-gulp text-city"></i>
                    </div>
                    <h4 class="mb-2">Gulp 4</h4>
                    <p class="text-muted">
                        We created smart development tasks to help you focus on your projects. Just install the npm
                        dependencies and use them out of the box.
                    </p>
                    <!-- END Gulp -->
                </div>
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <!-- webpack -->
                    <div class="item item-rounded bg-default-lighter my-4">
                        <i class="fa fa-2x fa-boxes text-default"></i>
                    </div>
                    <h4 class="mb-2">webpack + Babel</h4>
                    <p class="text-muted">
                        Babel makes your JavaScript code compatible with older browsers and webpack bundles your
                        JavaScript files together.
                    </p>
                    <!-- END webpack -->
                </div>
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <!-- Browsersync -->
                    <div class="item item-rounded bg-modern-lighter my-4">
                        <i class="fab fa-2x fa-chrome text-modern"></i>
                    </div>
                    <h4 class="mb-2">Browsersync</h4>
                    <p class="text-muted">
                        It will serve and sync your project across different browsers and also refresh them each time
                        your save your files.
                    </p>
                    <!-- END Browsersync -->
                </div>
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <!-- Autoprefixer -->
                    <div class="item item-rounded bg-smooth-lighter my-4">
                        <i class="fab fa-2x fa-autoprefixer text-smooth"></i>
                    </div>
                    <h4 class="mb-2">Autoprefixer</h4>
                    <p class="text-muted">
                        Peace of mind when working with Sass. Use the latest CSS syntax and Autoprefixer will auto add
                        any required prefixes for older browsers.
                    </p>
                    <!-- END Autoprefixer -->
                </div>
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <!-- Modular Approach -->
                    <div class="item item-rounded bg-success-light my-4">
                        <i class="fa fa-2x fa-truck-loading text-success"></i>
                    </div>
                    <h4 class="mb-2">Modular Approach</h4>
                    <p class="text-muted">
                        You can add your JavaScript or Sass overrides/customizations without altering the original
                        files, making the update process an easy one.
                    </p>
                    <!-- END Modular Approach -->
                </div>
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <!-- Improved Design -->
                    <div class="item item-rounded bg-info-light my-4">
                        <i class="fa fa-2x fa-brush text-info"></i>
                    </div>
                    <h4 class="mb-2">Improved Design</h4>
                    <p class="text-muted">
                        Small touches and improvements were introduced throughout the template. From colors to layout
                        and from custom elements to plugins.
                    </p>
                    <!-- END Improved Design -->
                </div>
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <!-- New Features -->
                    <div class="item item-rounded bg-body my-4">
                        <i class="fa fa-2x fa-moon text-dark"></i>
                    </div>
                    <h4 class="mb-2">Dark Mode</h4>
                    <p class="text-muted">
                        It is finally here and looks amazing! Carefully integrated and made to work with all color
                        themes and included pages. You will love it!
                    </p>
                    <!-- END New Features -->
                </div>
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <!-- New Features -->
                    <div class="item item-rounded bg-warning-light my-4">
                        <i class="fa fa-2x fa-star text-warning"></i>
                    </div>
                    <h4 class="mb-2">Free Update</h4>
                    <p class="text-muted">
                        We love our customers, so we are giving the 5.x version away as a free update to all existing
                        ones! Thank you all for your support!
                    </p>
                    <!-- END New Features -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Features -->

<!-- Reviews -->
<div id="one-reviews" class="bg-body-light">
    <div class="content content-full">
        <div class="py-5">
            <div class="row mb-5">
                <div class="col-md-6">
                    <h2 class="h1 fw-black mb-2">
                        Real Customer <span class="fw-medium">Reviews</span>
                    </h2>
                    <p class="fs-lg fw-medium text-muted mb-0">
                        Check out what web developers and people in tech have written about OneUI.
                    </p>
                </div>
                <div class="col-md-6 d-none d-md-flex align-items-md-center justify-content-md-end">
                    <p class="h1 fw-bold text-body-bg-dark mb-0">
                        Truly Loved.
                    </p>
                </div>
            </div>
            <div class="row items-push">
                <div class="col-md-4">
                    <div class="d-inline-block px-2 py-1 rounded-3 bg-primary-lighter text-primary mb-2">
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                    </div>
                    <p class="text-muted mb-2">
                        A combination of flexibility and ease of use. The design is beautiful, but I really value the
                        ease in which I was able to integrate this into my development workflow and platform.
                    </p>
                    <p class="fs-sm fw-medium">
                        For Other by <span class="fw-semibold">appeality</span>
                    </p>
                </div>
                <div class="col-md-4">
                    <div class="d-inline-block px-2 py-1 rounded-3 bg-primary-lighter text-primary mb-2">
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                    </div>
                    <p class="text-muted mb-2">
                        While reading the docs i can feel that you literally gave your heart to create this project. It
                        is a high quality piece of work, thanks for sharing it!
                    </p>
                    <p class="fs-sm fw-medium">
                        For Code Quality by <span class="fw-semibold">msagi</span>
                    </p>
                </div>
                <div class="col-md-4">
                    <div class="d-inline-block px-2 py-1 rounded-3 bg-primary-lighter text-primary mb-2">
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                    </div>
                    <p class="text-muted mb-2">
                        This is my first purchase on Themeforest and I am delighted. Everything from the design to the
                        code is beautifully crafted and the customer support is great also. Congratulations pixelcave.
                    </p>
                    <p class="fs-sm fw-medium">
                        For Customizability by <span class="fw-semibold">CaravelaThemes</span>
                    </p>
                </div>
            </div>
            <div class="row items-push">
                <div class="col-md-4">
                    <div class="d-inline-block px-2 py-1 rounded-3 bg-primary-lighter text-primary mb-2">
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                    </div>
                    <p class="text-muted mb-2">
                        One of the most well thought-through and comprehensive Themeforest templates available.
                        Consistently excellent design and broad feature base. Highly Recommended!
                    </p>
                    <p class="fs-sm fw-medium">
                        For Feature Availability by <span class="fw-semibold">stephenhird</span>
                    </p>
                </div>
                <div class="col-md-4">
                    <div class="d-inline-block px-2 py-1 rounded-3 bg-primary-lighter text-primary mb-2">
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                    </div>
                    <p class="text-muted mb-2">
                        One of the best paid for downloads I have ever made. Has so many features which have all been
                        designed and put together absolutely brilliantly.
                    </p>
                    <p class="fs-sm fw-medium">
                        For Design Quality by <span class="fw-semibold">weblid</span>
                    </p>
                </div>
                <div class="col-md-4">
                    <div class="d-inline-block px-2 py-1 rounded-3 bg-primary-lighter text-primary mb-2">
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                    </div>
                    <p class="text-muted mb-2">
                        This is hands down the best template I have ever come across. It has absolutely everything you
                        need right there laid out and easy to find. I couldn't recommend this template enough!
                    </p>
                    <p class="fs-sm fw-medium">
                        For Feature Availability by <span class="fw-semibold">dhowa021</span>
                    </p>
                </div>
            </div>
            <div class="row items-push">
                <div class="col-md-4">
                    <div class="d-inline-block px-2 py-1 rounded-3 bg-primary-lighter text-primary mb-2">
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                    </div>
                    <p class="text-muted mb-2">
                        After using this Admin template for 6 months...we are still delighted. This template has
                        everything. It has obviously been designed with much care and detail. Very intuitive, Easy to
                        use. And we're still finding functionality that we hadn't discovered before. Well done to the
                        developer and thanks for putting your heart-and-soul into this template.
                    </p>
                    <p class="fs-sm fw-medium">
                        For Other by <span class="fw-semibold">conorhannah</span>
                    </p>
                </div>
                <div class="col-md-4">
                    <div class="d-inline-block px-2 py-1 rounded-3 bg-primary-lighter text-primary mb-2">
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                    </div>
                    <p class="text-muted mb-2">
                        This is the best UI I have ever came across, this UI theme is absolutely perfect in Every Way :)
                        Really happy with the purchase.
                    </p>
                    <p class="fs-sm fw-medium">
                        For Other by <span class="fw-semibold">spmtumblr</span>
                    </p>
                </div>
                <div class="col-md-4">
                    <div class="d-inline-block px-2 py-1 rounded-3 bg-primary-lighter text-primary mb-2">
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                    </div>
                    <p class="text-muted mb-2">
                        I have spent two days researching admin themes. There are a couple of really good ones out
                        there, but this one came out at the very top for me. Looks great, on both desktop and mobile,
                        the feature set is amazing, the documentation looks very good. I haven't started implementing
                        yet, but this deserves five stars already.
                    </p>
                    <p class="fs-sm fw-medium">
                        For Design Quality by <span class="fw-semibold">dvartok</span>
                    </p>
                </div>
            </div>
            <div class="row items-push">
                <div class="col-md-4">
                    <div class="d-inline-block px-2 py-1 rounded-3 bg-primary-lighter text-primary mb-2">
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                    </div>
                    <p class="text-muted mb-2">
                        This is one of the best all-around packages I've purchased from ThemeForest. Not only is the
                        Documentation is excellent and well-written, but the code itself is intelligently built and a
                        pleasure to work with. Thanks for doing such great work.
                    </p>
                    <p class="fs-sm fw-medium">
                        For Other by <span class="fw-semibold">rshaffaf</span>
                    </p>
                </div>
                <div class="col-md-4">
                    <div class="d-inline-block px-2 py-1 rounded-3 bg-primary-lighter text-primary mb-2">
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                    </div>
                    <p class="text-muted mb-2">
                        The best admin template ever, no doubt of it!!
                    </p>
                    <p class="fs-sm fw-medium">
                        For Other by <span class="fw-semibold">kaladrian</span>
                    </p>
                </div>
                <div class="col-md-4">
                    <div class="d-inline-block px-2 py-1 rounded-3 bg-primary-lighter text-primary mb-2">
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                    </div>
                    <p class="text-muted mb-2">
                        Easily the best admin template you can find.
                    </p>
                    <p class="fs-sm fw-medium">
                        For Code Quality by <span class="fw-semibold">nozebra_dk</span>
                    </p>
                </div>
            </div>
            <div class="row items-push">
                <div class="col-md-4">
                    <div class="d-inline-block px-2 py-1 rounded-3 bg-primary-lighter text-primary mb-2">
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                    </div>
                    <p class="text-muted mb-2">
                        Everything's perfect! Good design! Best performance I've ever use! And the best thing, fastest
                        support I've seen! 5 star satisfaction!
                    </p>
                    <p class="fs-sm fw-medium">
                        For Customer Support by <span class="fw-semibold">arkheacol04</span>
                    </p>
                </div>
                <div class="col-md-4">
                    <div class="d-inline-block px-2 py-1 rounded-3 bg-primary-lighter text-primary mb-2">
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                    </div>
                    <p class="text-muted mb-2">
                        This is an amazing, multi purpose, and very well designed and structured template. I rarely
                        write a review but this template deserves the support. It is distinguished.
                    </p>
                    <p class="fs-sm fw-medium">
                        For Design Quality by <span class="fw-semibold">maa83</span>
                    </p>
                </div>
                <div class="col-md-4">
                    <div class="d-inline-block px-2 py-1 rounded-3 bg-primary-lighter text-primary mb-2">
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                    </div>
                    <p class="text-muted mb-2">
                        Long story short: I really enjoy using the templates made by pixelcave. The code is very
                        flexible and well structured, the documentation is very good - everything you need.
                    </p>
                    <p class="fs-sm fw-medium">
                        For Code Quality by <span class="fw-semibold">Master_rg</span>
                    </p>
                </div>
            </div>
            <div class="row items-push">
                <div class="col-md-4">
                    <div class="d-inline-block px-2 py-1 rounded-3 bg-primary-lighter text-primary mb-2">
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                    </div>
                    <p class="text-muted mb-2">
                        It's awesome, not only the design is marvelous, the code and documentation helps easy
                        customization.
                    </p>
                    <p class="fs-sm fw-medium">
                        For Design Quality by <span class="fw-semibold">alperaydyn2</span>
                    </p>
                </div>
                <div class="col-md-4">
                    <div class="d-inline-block px-2 py-1 rounded-3 bg-primary-lighter text-primary mb-2">
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                    </div>
                    <p class="text-muted mb-2">
                        Awesome !!! Thanks for a so great template !!
                    </p>
                    <p class="fs-sm fw-medium">
                        For Feature Availability by <span class="fw-semibold">Markuitos</span>
                    </p>
                </div>
                <div class="col-md-4">
                    <div class="d-inline-block px-2 py-1 rounded-3 bg-primary-lighter text-primary mb-2">
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                    </div>
                    <p class="text-muted mb-2">
                        Awesome code, works really well, well documented!
                    </p>
                    <p class="fs-sm fw-medium">
                        For Flexibility by <span class="fw-semibold">corverdevelopment</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Reviews -->

<!-- Call To Action -->
<div id="one-call-to-action" class="bg-body-extra-light">
    <div class="content content-full">
        <div class="py-5 py-md-8 text-center">
            <h2 class="h1 fw-black mb-2">
                Crafted with <i class="fa fa-fw fa-heart text-city"></i> by <a class="link-fx" href="#">pixelcave</a>
            </h2>
            <p class="fs-lg fw-medium text-muted mb-4">
                Passionate web design and development with over 16,000 customers worldwide.
            </p>
            <a class="btn btn-success py-2 px-3 m-1" data-toggle="click-ripple" href="#">
                <i class="fa fa-fw fa-shopping-cart opacity-50 me-1"></i> Purchase
            </a>
            <a class="btn btn-primary py-2 px-3 m-1" data-toggle="click-ripple" href="#" target="_blank">
                <i class="fa fa-fw fa-desktop opacity-50 me-1"></i> Live Preview
            </a>
        </div>
    </div>
</div>
<!-- END Call To Action -->
@endsection
