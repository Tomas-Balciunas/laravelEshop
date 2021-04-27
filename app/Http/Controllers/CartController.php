<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Cart::all();
        return view('shop.pages.cart', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addToCart(Request $request, Post $post)
    {
        Cart::create([
            'user_id' => Auth::id(),
            'product_id' => $post->id,
            'product_name' => $post->title,
            'price' => $post->price,
        ]);

        return back();
    }

    public function remove(Cart $post)
    {
        Cart::where(['id' => $post->id])->delete();

        return back();
    }
}
