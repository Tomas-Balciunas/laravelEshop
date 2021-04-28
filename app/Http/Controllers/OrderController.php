<?php

namespace App\Http\Controllers;

use App\Order;
use App\Cart;
use App\Orderlist;
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

    public function order() {
        return view('shop.pages.order');
    }

    public function vieworder(Order $order) {
        $orders = Orderlist::where(['order_id' => $order->id])->get();

        return view('shop.pages.view-order', compact('orders'));
    }

    public function placeOrder(Request $request) {
        $add = Cart::where(['user_id' => Auth::user()->id])->get();
        foreach($add as $item) {
            $item->total_price = $item->price * $item->quantity;
        $item->save();
        }

        $cart = Cart::where(['user_id' => Auth::user()->id])->get();
        $price = Cart::where(['user_id' => Auth::user()->id])->sum('total_price');
        $id = Order::create([
            'name' => request('name'),
            'lastname' => request('lastname'),
            'user_id' => Auth::id(),
            'address' => request('address'),
            'contact' => request('contact'),
            'price' => $price
        ]);
        
        foreach($cart as $item) {
            Orderlist::create([
                'order_id' => $id->id,
                'product_id' => $item->product_id,
                'user_id' => Auth::id(),
                'product_name' => $item->product_name,
                'price' => $item->price,
                'quantity' => $item->quantity,
                'total_price' => $item->total_price
        ]);
        }

        Cart::where(['user_id' => Auth::user()->id])->delete();

        return redirect('/admin');
    }
}
