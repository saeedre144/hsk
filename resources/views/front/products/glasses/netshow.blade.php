

@extends('front.layout.master')
@section('style')

@endsection
@section('content')


    <br>



    <!-- Page Content-->
    <div class="container">
        <!-- Heading Row-->
        <div class="row align-items-center my-5">
            <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="{{asset('imgs/articles/2.jpg')}}" alt="..." /></div>
            <div class="col-lg-5">
                <h1 class="font-weight-light">HiSky Glass Company</h1>
                <p>For more information ..</p>
                <a class="btn btn-primary" href="contact">Contact Us</a>
            </div>
        </div>
        <!-- Call to Action-->
        <div class="card text-white bg-orange-400 my-5 py-4 text-center">
            <div class="card-body"><p class="text-white m-0">This call to action card is a great place to showcase some important information or display a clever tagline!</p></div>
        </div>
        <!-- Content Row-->
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <img src="{{$product->image }} " class="card-img-top rounded hover:scale-110 transition duration-500 cursor-pointer" alt="{{ $product->title }}">

                            <h2 class="card-title pt-4">Product Title : {{ $product->title }}</h2>
{{--                            <p class="card-text">{!! $product->description !!}  </p>--}}
                        </div>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href="/products/glasses/{{ $product->slug }}">More Info</a></div>
                    </div>
                </div>
            @endforeach
            <div style="text-align: center">
                {{ $products->links() }}
            </div>
        </div>

    </div>




@endsection
