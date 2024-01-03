@extends('admin.layout.master')

@section('script')


@endsection



@section('content')

    <div class="container" > <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">list of products</h2>
        <br>
        <hr>
        <br>
        <div class="container">
            <h2><span class="text-start">All products</span>
                <span class="text-center"> <a class="btn btn-outline-success" href="/admin/posts/create"> (+ ADD +) </a></span></h2>
            <table class="table">
                <thead>
                <tr>
                    <th>id</th>
                    <th>title</th>
                    <th>category</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td><a href="{{route('posts.edit',$product)}}">{{ $product->title }}</a></td>
                        <td>{{ $product->category }}</td>
                        <td>
                            <form action="{{route('posts.destroy',$product)}}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger">delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $products->links() }}

        </div>
    </div>

    <br>
    <br>






@endsection