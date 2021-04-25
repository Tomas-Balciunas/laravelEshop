<?php

namespace App\Http\Controllers;

use App\Order;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['order']);
    }

    public function index()
    {
        //
    }

    public function order(Post $post) {
        return view('shop.pages.order', compact('post'));
    }

    public function placeOrder(Request $request, Post $post) {
        Order::create([
            'name' => request('name'),
            'lastname' => request('lastname'),
            'user_id' => Auth::id(),
            'address' => request('address'),
            'contact' => request('contact'),
            'price' => $post->price,
            'product_id' => $post->id,
            'product_name' => $post->title
        ]);

        return redirect('/');
    }
}
