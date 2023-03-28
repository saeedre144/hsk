@extends('front.layout.master')
@section('content')



<header class="">
    <div class="page-header min-vh-75">
        <span class="mask bg-gradient-info opacity-4 bg-info"></span>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 my-auto text-white text-xl-left">
                    <h1 class="text-dark display-2
                            font-weight-bolder mb-4">Find your own happiness</h1>
                    <p class="text-dark mb-0">Get 50% Off for your first purchase</p>
                    <p class="text-dark font-weight-bolder text-lg">HISKY TRADE</p>
                    <button  class="btn bg-gradient-primary mt-3 hover:bg-gray-700 ">Show Products</button>
                </div>
                <div class="col-lg-6">
                    <div class="positio-absolute rounded-circle end-4 top-0 mt-n4 shadow-lg d-xl-block d-none hover:scale-105 transition duration-700 ease-in-out" style="background-image: url('imgs/ex2.jpg');width: 600px;height: 600px; background-position: center;background-size: cover;">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row bg-white shadow mt-n5 border-radius-lg pb-4 p-3 mx-sm-0 mx-1 position-relative z-index-2">
            <div class="col-lg-3 col-sm-6 mt-2 mb-lg-0 mb-2">
                <div class="d-flex align-items-center">
                    <i class="fa fa-bus fa-2x text-dark" aria-hidden="true"></i>
                    <div class="ms-3">
                        <h6 class="mb-0">Free Shipping</h6>
                        <p class="text-sm mb-0">On order bigger than $50</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mt-2 mb-lg-0 mb-2">
                <div class="d-flex align-items-center">
                    <i class="fa fa-suitcase fa-2x text-dark" aria-hidden="true"></i>
                    <div class="ms-3">
                        <h6 class="mb-0">15 Days Return</h6>
                        <p class="text-sm mb-0">Moneyback guarantee</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mt-2 mb-lg-0 mb-2">
                <div class="d-flex align-items-center">
                    <i class="fa fa-coins fa-2x text-dark" aria-hidden="true"></i>
                    <div class="ms-3">
                        <h6 class="mb-0">Secure Checkout</h6>
                        <p class="text-sm mb-0">Secured by Stripe</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mt-2 mb-lg-0 mb-2">
                <div class="d-flex align-items-center">
                    <i class="fa fa-gift fa-2x text-dark" aria-hidden="true"></i>
                    <div class="ms-3">
                        <h6 class="mb-0">Make Money</h6>
                        <p class="text-sm mb-0">Use our affiliate program</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="pt-6 pb-4">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h3 class="mb-5 font-semibold ">Products</h3>
            </div>
            <div class="col-lg-3 mb-lg-0 mb-4">
                <div class="card">
                    <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
                        <a href="javascript:;" class="d-block">
                            <img src="imgs/singles/1.jpg" class="img-fluid border-radius-lg shadow hover:scale-110">
                        </a>
                    </div>

                    <div class="card-body pt-3">
                        <div class="d-flex align-items-center">
                            <div>
                                <span class="text-sm">Bottle</span>
                                <h4 class="card-description font-weight-bolder text-dark mb-4">
                                    Rose
                                </h4>
                            </div>
                            <div class="ms-auto">
                                <a href="javascript:;" class="btn btn-link text-dark p-0">
                                    <i class="fa fa-star text-lg" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <h5 class="mb-0 font-weight-bolder">$25.40</h5>
                            <h5 class="mb-0 opacity-4 text-sm ms-2"><strike>$29.00</strike></h5>
                        </div>
                        <a href="javascript:;" class="btn btn-outline-dark mb-0">information</a>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-lg-0 mb-4">
                <div class="card">
                    <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
                        <a href="javascript:;" class="d-block">
                            <img src="imgs/singles/2.jpg" class="img-fluid border-radius-lg shadow hover:scale-110">
                        </a>
                    </div>

                    <div class="card-body pt-3">
                        <div class="d-flex align-items-center">
                            <div>
                                <span class="text-sm">Bottle</span>
                                <h4 class="card-description font-weight-bolder text-dark mb-4">
                                    Cactus</h4>
                            </div>
                            <div class="ms-auto">
                                <a href="javascript:;" class="btn btn-link text-dark p-0">
                                    <i class="fa fa-star text-lg" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <h5 class="mb-0 font-weight-bolder">$19.00</h5>
                            <h5 class="mb-0 opacity-4 text-sm ms-2"><strike>$29.00</strike></h5>
                        </div>
                        <a href="javascript:;" class="btn btn-outline-dark mb-0">information</a>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-lg-0 mb-4">
                <div class="card">
                    <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
                        <a href="javascript:;" class="d-block">
                            <img src="imgs/singles/3.jpg" class="img-fluid border-radius-lg shadow hover:scale-110">
                        </a>
                    </div>

                    <div class="card-body pt-3">
                        <div class="d-flex align-items-center">
                            <div>
                                <span class="text-sm">Bottle</span>
                                <h4 class="card-description font-weight-bolder text-dark mb-4">
                                    Tulip</h4>
                            </div>
                            <div class="ms-auto">
                                <a href="javascript:;" class="btn btn-link text-dark p-0">
                                    <i class="fa fa-star text-lg" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <h5 class="mb-0 font-weight-bolder">$9.90</h5>
                            <h5 class="mb-0 opacity-4 text-sm ms-2"><strike>$15.00</strike></h5>
                        </div>
                        <a href="javascript:;" class="btn btn-outline-dark mb-0">information</a>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-lg-0 mb-4">
                <div class="card">
                    <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
                        <a href="javascript:;" class="d-block">
                            <img src="imgs/singles/4.jpg" class="img-fluid border-radius-lg shadow hover:scale-110">
                        </a>
                    </div>

                    <div class="card-body pt-3">
                        <div class="d-flex align-items-center">
                            <div>
                                <span class="text-sm">Bottle</span>
                                <h4 class="card-description font-weight-bolder text-dark mb-4">
                                    Lily</h4>
                            </div>
                            <div class="ms-auto">
                                <a href="javascript:;" class="btn btn-link text-dark p-0">
                                    <i class="fa fa-star text-lg" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <h5 class="mb-0 font-weight-bolder">$39.20</h5>
                            <h5 class="mb-0 opacity-4 text-sm ms-2"><strike>$59.00</strike></h5>
                        </div>
                        <a href="javascript:;" class="btn btn-outline-dark mb-0">information</a>

                    </div>
                </div>
            </div>
            <div class="col-12 mt-5 text-center">
                <a href="javascript" class="btn bg-gradient-dark">View All</a>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-gradient-dark">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-3 col-md-6">
                <div class="info">
                    <h3 class="mt-2 text-white">$600M + </h3>
                    <p class="text-white">Transactional values</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="info">
                    <h3 class="mt-2 text-white">3.000 + </h3>
                    <p class="text-white">Products available</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="info">
                    <h3 class="mt-2 text-white">8 + </h3>
                    <p class="text-white">Years of experience</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="info">
                    <h3 class="mt-2 text-white">99% </h3>
                    <p class="text-white">Happy Clients</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-4 text-center">
                <h3 spellcheck="false">Shop by Category</h3>
            </div>
            <div class="col-lg-3 col-sm-6 mb-4">
                <div class="card h-100 mb-4 min-height-250 card-background align-items-start">
                    <div class="full-background" style="background-image: url('imgs/singles/1.jpg')"></div>
                    <div class="card-body w-100 z-index-3 text-center d-flex flex-column align-items-center justify-content-center">
                        <h4 class="text-white font-weight-bolder">Garden</h4>
                        <a href="javascript:;" class="btn btn-outline-white mb-0">View all</a>
                    </div>
                    <span class="mask bg-gradient-dark border-radius-xl z-index-2 opacity-7"></span>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-4">
                <div class="card h-100 mb-4 min-height-250 card-background align-items-start">
                    <div class="full-background" style="background-image: url('imgs/singles/2.jpg')"></div>
                    <div class="card-body w-100 z-index-3 text-center d-flex flex-column align-items-center justify-content-center">
                        <h4 class="text-white font-weight-bolder">House</h4>
                        <a href="javascript:;" class="btn btn-outline-white mb-0">View all</a>
                    </div>
                    <span class="mask bg-gradient-dark border-radius-xl z-index-2 opacity-7"></span>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-4">
                <div class="card h-100 mb-4 min-height-250 card-background align-items-start">
                    <div class="full-background" style="background-image: url('imgs/singles/3.jpg')"></div>
                    <div class="card-body w-100 z-index-3 text-center d-flex flex-column align-items-center justify-content-center">
                        <h4 class="text-white font-weight-bolder">Party</h4>
                        <a href="javascript:;" class="btn btn-outline-white mb-0">View all</a>
                    </div>
                    <span class="mask bg-gradient-dark border-radius-xl z-index-2 opacity-7"></span>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-4">
                <div class="card h-100 mb-4 min-height-250 card-background align-items-start">
                    <div class="full-background" style="background-image: url('imgs/singles/4.jpg')"></div>
                    <div class="card-body w-100 z-index-3 text-center d-flex flex-column align-items-center justify-content-center">
                        <h4 class="text-white font-weight-bolder">50% OFF</h4>
                        <a href="javascript:;" class="btn btn-outline-white mb-0">View all</a>
                    </div>
                    <span class="mask bg-gradient-dark border-radius-xl z-index-2 opacity-7"></span>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="position-relative overflow-hidden py-5">
    <div class="row">
        <div class="col-lg-5">
            <div class="bg-gradient-dark border-radius-lg d-flex align-items-center h-100 px-5 py-lg-0 py-5 mx-3">
                <div>
                    <div class="icon icon-shape rounded-circle bg-white shadow text-center mb-4">
                        <i class="fas opacity-10 fa-quote-right text-dark" aria-hidden="true"></i>
                    </div>
                    <h2 class="text-white"> What our Clients Are Saying</h2>
                </div>
            </div>
        </div>
        <div class="col-lg-7">
            <div>
                <div id="carouselExampleIndicators" class="carousel slide pt-7 pb-11" data-bs-ride="carousel">
                    <ol class="carousel-indicators pb-7">
                        <a href="javascript:;">
                            <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/team-4.jpg" alt="..." class="avatar avatar-sm avatar-scale-up shadow border-radius-lg border-0" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"> <span class="text-light mx-2">|</span>
                        </a>

                        <a href="javascript:;">
                            <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/team-3.jpg" alt="..." class="avatar avatar-sm avatar-scale-up shadow border-radius-lg border-0" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"> <span class="text-light mx-2">|</span>
                        </a>

                        <a href="javascript:;">
                            <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/team-2.jpg" alt="..." class="avatar avatar-sm avatar-scale-up shadow border-radius-lg border-0 active" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-current="true">
                        </a>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-7 mx-auto text-center">
                                        <img class="w-50 mb-4 avatar avatar-xl" src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/team-4.jpg" alt="">
                                        <p class="lead">"We’re not always in the position that we want to be at. We’re constantly growing. We’re constantly making mistakes. We’re constantly trying to express ourselves and actualize our dreams." </p>
                                        <div class="author justify-content-center">
                                            <div class="name ps-2">
                                                <span>John Down</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-7 mx-auto text-center">
                                        <img class="w-50 mb-4 avatar avatar-xl" src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/team-3.jpg" alt="">
                                        <p class="lead">"We’re not always in the position that we want to be at. We’re constantly growing. We’re constantly making mistakes. We’re constantly trying to express ourselves and actualize our dreams."</p>
                                        <div class="author justify-content-center">
                                            <div class="name ps-2">
                                                <span>Marcell Glock</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item active">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-7 mx-auto text-center">
                                        <img class="w-50 mb-4 avatar avatar-xl" src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/team-2.jpg" alt="">
                                        <p class="lead">"We’re not always in the position that we want to be at. We’re constantly growing. We’re constantly making mistakes. We’re constantly trying to express ourselves and actualize our dreams." </p>
                                        <div class="author justify-content-center">
                                            <div class="name ps-2">
                                                <span>Mathew Goat</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="pb-3">
    <div class="row">
        <div class="col-6 text-center mx-auto mt-5 mb-0">
            <h2>Read our Articles</h2>
            <p>See what people from all around the world are saying about our website.
            </p>
        </div>
    </div>
</section>
<section class="pb-6 bg-gray-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-lg-0 mb-4">
                <div class="card">
                    <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
                        <a href="javascript:;" class="d-block">
                            <img src="imgs/articles/1.jpg" class="img-fluid border-radius-lg">
                        </a>
                    </div>

                    <div class="card-body pt-3">
                        <span class="text-gradient text-warning text-uppercase text-xs font-weight-bold my-2">Flowers</span>
                        <a href="javascript:;" class="card-title h5 d-block text-darker">Why we love tulips</a>
                        <p class="card-description mb-4">
                            Use border utilities to quickly style the border and border-radius of an element. Great for images, buttons.
                        </p>
                        <div class="author align-items-center">
                            <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/team-2.jpg" alt="..." class="avatar shadow">
                            <div class="name ps-3">
                                <span>Mathew Glock</span>
                                <div class="stats">
                                    <small>Posted on 28 February</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-lg-0 mb-4">
                <div class="card">
                    <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
                        <a href="javascript:;" class="d-block">
                            <img src="imgs/articles/2.jpg" class="img-fluid border-radius-lg">
                        </a>
                    </div>

                    <div class="card-body pt-3">
                        <span class="text-gradient text-info text-uppercase text-xs font-weight-bold my-2">decor</span>
                        <a href="javascript:;" class="text-darker card-title h5 d-block">Redecorate your house with green plants</a>
                        <p class="card-description mb-4">
                            Use border utilities to quickly style the border and border-radius of an element. Great for images, buttons.
                        </p>
                        <div class="author align-items-center">
                            <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/ivana-square.jpg" alt="..." class="avatar shadow">
                            <div class="name ps-3">
                                <span>Chriss Smahos</span>
                                <div class="stats">
                                    <small>Posted 2 min ago</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-lg-0 mb-4">
                <div class="card">
                    <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
                        <a href="javascript:;" class="d-block">
                            <img src="imgs/articles/3.jpg" class="img-fluid border-radius-lg ">
                        </a>
                    </div>

                    <div class="card-body pt-3">
                        <span class="text-gradient text-warning text-uppercase text-xs font-weight-bold my-2">Hub</span>
                        <a href="javascript:;" class="text-darker card-title h5 d-block">Flowers for work environment</a>
                        <p class="card-description mb-4">
                            Use border utilities to quickly style the border and border-radius of an element. Great for images, buttons.
                        </p>
                        <div class="author align-items-center">
                            <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/marie.jpg" alt="..." class="avatar shadow">
                            <div class="name ps-3">
                                <span>Elijah Miller</span>
                                <div class="stats">
                                    <small>Posted now</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
