<?php

namespace App\Http\Controllers;
use App\Post;
use App\Category;
use App\Order;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class BlogController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index() {
        $posts = Post::all();
        return view('shop.pages.home', compact('posts'));
    }

    public function show(Post $post) {
        return view('shop.pages.show-product', compact('post'));
    }

    public function addProduct() {
        $items = Category::pluck('category', 'id');
        $orders = Order::where(['user_id' => Auth::user()->id])->get();
        $userposts = Post::where(['user_id' => Auth::user()->id])->get();
        return view('shop.pages.admin', compact('userposts', 'items', 'orders'));
    }


    public function store(Request $request) {
        $validateData = $request->validate([
            'title' => 'required|unique:posts|max:255',
            'content' => 'required',
            'img' => 'mimes:jpeg, jpg, png|required|max:10000',
            'quantity' => 'required',
            'price' => 'required'
        ]);
        $path = $request->file('img')->store('public/images');
        $filename = str_replace('public/', "", $path);
        Post::create([
            'title' => request('title'),
            'content' => request('content'),
            'path' => $filename,
            'user_id' => Auth::id(),
            'quantity' => request('quantity'),
            'price' => request('price'),
            'category_id' => request('categoryselect')
        ]);
        return redirect('/admin');
    }

    public function delete(Post $post) {
        if(Gate::allows('delete', $post)) {
            $post->delete();
        }

        return redirect('/admin');
    }

    public function update(Post $post) {
        if(Gate::allows('update', $post)) {
            $items = Category::pluck('category', 'id');
            return view ('shop.pages.update', compact('post', 'items'));
        }
    }

    public function storeUpdate(Request $request, Post $post) {
        if ($request->file()) {
            File::delete(storage_path('app/public'.$post->path));
            $path = $request->file('img')->store('public/images');
            $filename = str_replace('public/', "", $path);
            Post::where('id', $post->id)->update(['path' => $filename]);
        }

        Post::where('id', $post->id)->update($request->only(['title', 'content', 'quantity', 'price', 'category_id']));
        return redirect('/admin');
    }
}
