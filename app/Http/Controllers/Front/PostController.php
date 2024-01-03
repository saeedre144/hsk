<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function items()
    {
        $products = $products= Post::latest()->paginate(9);
        return view('front.products.glasses.netshow',compact('products'));
    }

    public function singleitem(Post $post)
    {

         return view('front.products.glasses.show' , compact('post'));
    }
}
