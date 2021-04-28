<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
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

    public function remove(Cart $post)
    {
        Cart::where(['id' => $post->id])->delete();

        return back();
    }

    
    public function addquantity (Cart $post) {
        $add = Cart::find($post->id);
        $add->increment('quantity');
        //$add->total_price = $post->price * $post->quantity;
        //$add->save();

        return back();
    }

    public function removequantity (Cart $post) {
        //if (Cart::where(['id' => $post->id])->find($post->quantity) > 1) {
        $add = Cart::find($post->id);
        $add->decrement('quantity');
        $add->total_price = $post->price * $post->quantity;
        $add->save();
        

        return back();
    }
}
