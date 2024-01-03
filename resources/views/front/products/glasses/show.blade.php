@extends('front.layout.master')
@section('style')

@endsection

@section('script')


@endsection



@section('content')

    <div class="container" > <h2 class="mt-2 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900"> product page : {{$post->title}}</h2>
        <br>
        <hr>
        <br>
        <div class="container">

          <p class="text-purple-600">
              {!! $post->description !!}
          </p>

        </div>
    </div>

    <br>
    <br>






@endsection