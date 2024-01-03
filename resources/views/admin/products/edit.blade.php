@extends('admin.layout.master')

@section('script')
    <script>
        document.addEventListener("DOMContentLoaded", function() {

            document.getElementById('button-image').addEventListener('click', (event) => {
                event.preventDefault();

                window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
            });
        });

        // set file link
        function fmSetLink($url) {
            document.getElementById('image_label').value = $url;
        }
    </script>


    {{--    <script src="//cdn.ckeditor.com/4.11.2/full/ckeditor.js"></script>--}}

    <script>

        CKEDITOR.replace( 'description', {filebrowserImageBrowseUrl: '/file-manager/ckeditor'});
    </script>

@endsection



@section('content')

    <div class="container" > <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">EDIT Page : <span class="text-2xl border-l-blue-600 border-4 border-b-emerald-300 "> {{$post->title}} </span></h2>
        <br>
        <hr>
        <br>
        {{--        {{ route('product.store') }}--}}
        <form class="" action="{{ route('posts.update',[$post->slug]) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            @include('partial.form-errors')
            <div class="form-group">
                <select name="category" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    <option selected>Select Product Category :</option>

                    {{--                    @foreach($categories as $category)--}}

                    {{--                        <option   value="{{ $category->id }}"> {{ $category->title }} </option>--}}
                    {{--                    @endforeach--}}
                </select>
            </div>
            <hr class="text-info">
            <div class="form-group">
                <div class="col-sm-12 form-floating">
                    <input type="text" class="form-control " name="title" id="floatingInput" placeholder="enter title..." value="{{$post->title}}" >
                    <label for="floatingInput" class="control-label">title</label>
                </div>
            </div>
            <br>
            {{--            <div class="form-group">--}}
            {{--                <div class="col-sm-12 form-floating">--}}
            {{--                    <input type="text" class="form-control" name="slug" id="floatingInput" placeholder="enter slug..." >--}}
            {{--                    <label for="floatingInput" class="control-label">slug</label>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            <br>

            <hr>
            <div class="form-group">
                <div class="col-sm-12">
                    <label for="description" class="control-label font-bold text-2xl">Description</label>
                    {{--                    <textarea rows="" class="form-control" name="description" id="description" placeholder="enter description.....">{{ old('description') }}</textarea>--}}
                    <textarea name="description" id="description">
                      {{$post->description}}
                    </textarea>
                </div>
            </div>
            <hr>

            <div class="form-group col-sm-12 flex">
                <label for="image" class="control-label font-bold text-2xl">image of product:</label>
                <div class="h-10 w-10 p-2 mb-2 rounded-full content-center"><img src="{{$post->image}}" alt=""></div>
                <div class="input-group">
                    <input type="text" id="image_label" class="block w-full rounded-md border-0 m-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" name="image"
                           aria-label="Image" aria-describedby="button-image" value="{{$post->image}}">
                    <div class="input-group-append">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" type="button" id="button-image">Select</button>
                    </div>
                </div>
            </div>
            <br>
            <hr>

            <br>
            <h4 class="text-center p-4 text-4xl sm:text-purple-600">SEO</h4>
            <hr>
            <br>
            <div class="form-group">
                <div class="col-sm-12">
                    <label for="meta_description" class="control-label">meta_description</label>
                    <textarea rows="8" class="form-control" name="meta_description" id="nutrition" placeholder="enter meta_description..">{{ $post->meta_description }}</textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-10">
                    <label for="meta_keywords" class="control-label">meta_keywords</label>
                    <textarea rows="3" class="form-control" name="meta_keywords" id="meta_keywords" placeholder="enter meta_keywords..">{{ $post->meta_keywords }}</textarea>
                </div>
            </div>
            <br>
            <br>
            <div class="form-group">
                <div class="col-sm-12 text-center">
                    <button type="submit" class="flex w-full justify-center rounded-md bg-blue-400 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">EDIT
            </div>
        </form>
    </div>

    <br>
    <br>






@endsection