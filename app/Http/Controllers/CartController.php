<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['addToCart']);
    }

    public function index()
    {
        $posts = Cart::where(['user_id' => Auth::id()])->get();
        return view('shop.pages.cart', compact('posts'));
    }

    public function addToCart(Request $request, Post $post)
    {
        Cart::create([
            'user_id' => Auth::id(),
            'product_id' => $post->id,
            'product_name' => $post->title,
            'price' => $post->price,
            'quantity' => 1,
            'total_price' => $post->price
        ]);

        return back();
    }

    public function remove(Cart $post) {
        Cart::where(['id' => $post->id])->delete();
        return back();
    }

    public function addquantity (Cart $post) {
        $add = Cart::find($post->id);
        $quantity = Post::where(['id' => $add->product_id])->pluck('quantity');
        if ($add->quantity < $quantity[0]) {
            $add->increment('quantity');
        }

        return back();
    }

    public function removequantity (Cart $post) {
        $add = Cart::find($post->id);
        if ($add->quantity > 1) {
            $add->decrement('quantity');
        }

        return back();
    }
}
