
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>HSK TRADE</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="https://demos.creative-tim.com/soft-ui-design-system/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="https://demos.creative-tim.com/soft-ui-design-system/assets/css/nucleo-svg.css" rel="stylesheet" />
    @vite('resources/css/app.css')
    {{--    <link rel="stylesheet" href="./assets/css/theme.css">--}}
    {{--    <link rel="stylesheet" href="./assets/css/loopple/loopple.css">--}}
</head>

<body>

{{--upper nav --}}



<div class="navbar bg-gradient-dark py-1">
    <div class="container">
        <div class="d-flex w-lg-50 w-100 text-lg-start text-center justify-content-lg-start justify-content-center mb-lg-0 mb-2">
            <a href="javascript:;">
                <i class="fa fa-facebook-square text-sm text-white" aria-hidden="true"></i>
            </a>
            <a href="javascript:;">
                <i class="fa fa-twitter text-sm text-white ms-3" aria-hidden="true"></i>
            </a>
            <a href="javascript:;">
                <i class="fa fa-instagram text-sm text-white ms-3" aria-hidden="true"></i>
            </a>
        </div>
        <div class="d-flex align-items-center ms-lg-auto w-lg-50 w-100">



            <i class="fa fa-phone text-sm text-white ms-auto" aria-hidden="true"></i>
            <span class="text-sm text-white ms-2">+1 3232 4343</span>

            <i class="fa fa-envelope text-sm text-white ms-4" aria-hidden="true"></i>
            <span class="text-sm text-white ms-2 me-lg-0 me-auto">info@hsktrade.com</span>
        </div>
    </div>
</div>

{{--Main nav--}}

<nav class="bg-gray-100 ">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->

                <button  onclick="myFunction()"  class="inline-flex items-center justify-center  rounded-md p-2  focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" >
                    <span class="sr-only">Open main menu</span>


                    <!--
                      Icon when menu is closed.

                      Menu open: "hidden", Menu closed: "block"
                    -->
                    <svg id="menu-button-close" class="block h-6 " fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>


                    <!--
                      Icon when menu is open.

                      Menu open: "block", Menu closed: "hidden"
                    -->
                    <svg id="menu-button-open" class="hidden h-6 " fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>


                </button>
            </div>
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex flex-shrink-0 items-center">
                    <a href="{{ route('home') }}">
                        <img class="block h-14 mx-2 w-auto lg:hidden" src="{{asset('imgs/logo.png')}}" alt="Hsktrade.com">
                        <img class="hidden h-10 w-auto lg:block" src="{{asset('imgs/logo.png')}}" alt="Hsktrade.com">
                    </a>
                </div>
                <div class="hidden sm:ml-6 sm:block ">
                    <div class="flex space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="{{route('product.glass')}}" class=" text-gray-800 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2  font-medium " aria-current="page">Products</a>

                        <a href="{{ route('contact') }}" class="text-gray-800 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2  font-medium  {{ Route::is('contact') ? 'bg-gray-200 underline' : '' }}"  >Contact Us</a>

                        <a href="{{ route('about') }}" class="text-gray-800 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2  font-medium {{ Route::is('about') ? 'bg-gray-200 underline' : '' }}">About Us</a>

                        <a href="{{ route('home') }}" class="text-gray-800 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2  font-medium {{ Route::is('home') ? 'bg-gray-200 underline' : '' }}">Home Page</a>
                    </div>
                </div>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">


                <!-- Language dropdown -->
                <div class=" ">


                    <div class="mr-1">
                        <a href="#" class="-m-2 flex items-center p-2">
                            <span class="fi fi-tr"></span>
                            <span class="ml-3 block text-base font-medium text-gray-900">Turkish</span>
                            <span class="sr-only">, change currency</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pt-2 pb-3">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="#" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium" aria-current="page">Products</a>

            <a href="#" class="text-gray-800  block rounded-md px-3 py-2 text-base font-medium">Contact us</a>

            <a href="#" class="text-gray-800  block rounded-md px-3 py-2 text-base font-medium">About Us</a>

            <a href="#" class="text-gray-800  block rounded-md px-3 py-2 text-base font-medium">Home Page</a>
        </div>
    </div>
</nav>




@yield('content')



<section class="mt-6 py-5 bg-gradient-dark position-relative" style="background-image:url('imgs/articles/2.jpg'); background-size: cover; background-position: center center;">
    <span class="mask bg-gradient-dark opacity-8"></span>
    <div class="container position-relative z-index-2">
        <div class="row">
            <div class="col-md-7 mx-auto text-center">
                <h3 class="text-white mb-3" spellcheck="false">
                    About Our Shop</h3>
                <p class="text-white">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to</p>
            </div>
        </div>
    </div>
</section>


<footer class="footer py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 mb-5 mb-lg-0">
                <h6 class="text-uppercase mb-2">Soft</h6>
                <p class="mb-4 pb-2">
                    The next generation of design systems.
                </p>
                <a href="javascript:;" class="text-secondary me-xl-4 me-3">
                    <span class="text-lg fab fa-facebook" aria-hidden="true"></span>
                </a>
                <a href="javascript:;" class="text-secondary me-xl-4 me-3">
                    <span class="text-lg fab fa-twitter" aria-hidden="true"></span>
                </a>
                <a href="javascript:;" class="text-secondary me-xl-4 me-3">
                    <span class="text-lg fab fa-instagram" aria-hidden="true"></span>
                </a>
                <a href="javascript:;" class="text-secondary me-xl-4 me-3">
                    <span class="text-lg fab fa-pinterest" aria-hidden="true"></span>
                </a>
                <a href="javascript:;" class="text-secondary me-xl-4 me-3">
                    <span class="text-lg fab fa-github" aria-hidden="true"></span>
                </a>
            </div>
            <div class="col-md-2 col-6 ms-lg-auto mb-md-0 mb-4">
                <h6 class="text-sm">Company</h6>
                <ul class="flex-column ms-n3 nav">
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="javascript:void(0);">
                            About Us
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="javascript:;">
                            Careers
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="javascript:;">
                            Press
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="javascript:;">
                            Blog
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-md-2 col-6 mb-md-0 mb-4">
                <h6 class="text-sm">Pages</h6>
                <ul class="flex-column ms-n3 nav">
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="javascript:;">
                            Login
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="javascript:;">
                            Register
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="javascript:;">
                            Add list
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="javascript:;">
                            Contact
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-md-2 col-6 mb-md-0 mb-4">
                <h6 class="text-sm">Legal</h6>
                <ul class="flex-column ms-n3 nav">
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="javascript:;">
                            Terms
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="javascript:;">
                            About Us
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="javascript:;">
                            Team
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="javascript:;">
                            Privacy
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-md-2 col-6 mb-md-0 mb-4">
                <h6 class="text-sm">Resources</h6>
                <ul class="flex-column ms-n3 nav">
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="javascript:;">
                            Blog
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="javascript:;">
                            Service
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="javascript:;">
                            Product
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="javascript:;">
                            Pricing
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <hr class="horizontal dark mt-lg-5 mt-4 mb-sm-4 mb-1">
        <div class="row">
            <div class="col-8 mx-lg-auto text-lg-center">
                <p class="text-sm text-secondary">
                    Copyright © 2023 Saeed .
                </p>
            </div>
        </div>
    </div>
</footer>
{{--<div class="loopple-badge">Made with<a href="https://www.loopple.com"><img src="https://www.loopple.com/img/loopple-logo.png" class="loopple-ml-1" style="width:55px"></a></div>--}}
<script src="https://loopple.s3.eu-west-3.amazonaws.com/soft-ui-design-system/js/core/bootstrap.min.js" type="text/javascript"></script>
{{--@vite('resources/js/app.js')--}}
<script src="https://demos.creative-tim.com/soft-ui-design-system/assets/js/soft-design-system.min.js?v=1.0.5" type="text/javascript"></script>
<script src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/js/plugins/countup.min.js" type="text/javascript"></script>
<script src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/js/plugins/flatpickr.min.js"></script>
<script>

    function myFunction() {
        var x = document.getElementById("mobile-menu");
        if (x.style.display === "block") {
            x.style.display = "none";
            document.getElementById("menu-button-open").style.display = "none";
            document.getElementById("menu-button-close").style.display = "block";

        } else {
            x.style.display = "block";
            document.getElementById("menu-button-close").style.display = "none";
            document.getElementById("menu-button-open").style.display = "block";
        }
    }

    if (document.getElementById("state1")) {
        const countUp = new CountUp("state1", document.getElementById("state1").getAttribute("countTo"));
        if (!countUp.error) {
            countUp.start();
        } else {
            console.error(countUp.error);
        }
    }
    if (document.getElementById("state2")) {
        const countUp1 = new CountUp("state2", document.getElementById("state2").getAttribute("countTo"));
        if (!countUp1.error) {
            countUp1.start();
        } else {
            console.error(countUp1.error);
        }
    }
    if (document.getElementById("state3")) {
        const countUp2 = new CountUp("state3", document.getElementById("state3").getAttribute("countTo"));
        if (!countUp2.error) {
            countUp2.start();
        } else {
            console.error(countUp2.error);
        };
    }

    if (document.querySelector('.datepicker-1')) {
        flatpickr('.datepicker-1', {
        }); // flatpickr
    }

    if (document.querySelector('.datepicker-2')) {
        flatpickr('.datepicker-2', {
        }); // flatpickr
    }
</script>
</body>
